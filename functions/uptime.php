<?php
// Enqueue the necessary styles and scripts
function load_uptime_widget_assets() {
    wp_enqueue_style('uptime-widget-styles', get_template_directory_uri() . '/css/uptime-widget.css');
    wp_enqueue_script('uptime-widget-script', get_template_directory_uri() . '/js/uptime-widget.js', array('jquery'), null, true);

    // Localize the script with the AJAX URL
    wp_localize_script('uptime-widget-script', 'uptimeWidgetAjax', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('admin_enqueue_scripts', 'load_uptime_widget_assets');

// Add the dashboard widget with a placeholder
add_action('wp_dashboard_setup', function() {
    wp_add_dashboard_widget('uptimerobot_single_site_widget', 'Site Status', function() {
        echo '<div id="uptime-robot-widget-content" class="uptime-widget">';
        echo '<table class="uptime-table">
            <tr><th>Last 24 Hours</th><th>Last 30 Days</th><th>Last 90 Days</th></tr>
            <tr><td class="loading"></td><td class="loading"></td><td class="loading"></td></tr></table>';
        
        echo '<div class="uptime-content">';
        echo '<p class="uptime"><strong>Website status:</strong> <span class="loading"></span></p>';
        
        echo '<p><a href="https://status.olospo.co.uk/" target="_blank" class="button">View More Details</a> </p>';
        
        echo '</div>';
        echo '<p class="credit">Website built and monitored by <a href="https://olospo.co.uk" target="_blank">Tom Brooks</a></p>';
        echo '</div>';
    });
});

// Define the AJAX handler function
function get_uptime_robot_data() {
    // Your UptimeRobot API key and monitor ID
    $api_key = 'm796806460-fc28a3dff6233bf9013a3c0e';
    $monitor_id = '796806460';
    $url = 'https://api.uptimerobot.com/v2/getMonitors';

    $args = array(
        'body' => json_encode(array(
            'api_key' => $api_key,
            'monitors' => $monitor_id,
            'response_times' => 1,
            'custom_uptime_ratios' => '1-30-90',
            'response_times_limit' => 1,
            'logs' => 1, // Fetch logs
            'logs_limit' => 2 // Limit to the last logs
        )),
        'headers' => array(
            'Content-Type' => 'application/json'
        ),
        'timeout' => 15
    );

    $response = wp_remote_post($url, $args);

    if (is_wp_error($response)) {
        echo '<p>Could not retrieve data from UptimeRobot: ' . $response->get_error_message() . '</p>';
        wp_die();
    }

    $data = json_decode(wp_remote_retrieve_body($response), true);

    if (isset($data['stat']) && $data['stat'] === 'ok' && !empty($data['monitors'])) {
        $monitor = $data['monitors'][0];
        $status = $monitor['status'] == 2 ? 'online' : 'offline';
        $uptime_ratios = explode('-', $monitor['custom_uptime_ratio']);
        $interval = intval($monitor['interval']) / 60; // Convert to minutes
        $timeout = intval($monitor['timeout']);

        ob_start();
        ?>
        <div class="uptime-widget">
            
            <table class="uptime-table">
                <tr><th>Last 24 Hours</th><th>Last 30 Days</th><th>Last 90 Days</th></tr>
                <tr>
                    <td class="<?php echo get_uptime_class($uptime_ratios[0]); ?>"><?php echo esc_html(number_format($uptime_ratios[0], 2)); ?>%</td>
                    <td class="<?php echo get_uptime_class($uptime_ratios[1]); ?>"><?php echo esc_html(number_format($uptime_ratios[1], 2)); ?>%</td>
                    <td class="<?php echo get_uptime_class($uptime_ratios[2]); ?>"><?php echo esc_html(number_format($uptime_ratios[2], 2)); ?>%</td>
                </tr>
            </table>
            <div class="uptime-content">
            <p class="uptime <?php echo $status; ?>"><strong>Website status:</strong><br /> <span><?php echo $status; ?></span> <span class="dot"></span></p>
            <p><strong>Check Interval:</strong><br /> <span class="interval"><?php echo $interval; ?> minutes</span></p>
            
            <?php
            // Display latest response time
            if (isset($monitor['response_times']) && is_array($monitor['response_times']) && !empty($monitor['response_times'])) {
                $latest_response_time = $monitor['response_times'][0]; // Latest entry is the first one in the array
                $latest_time = date('d/m/y H:i', $latest_response_time['datetime']); // Format as DD/MM/YY HH:MM
                $latest_value = $latest_response_time['value'];
                $response_time_class = get_response_time_class($latest_value); // Get the appropriate class based on the response time
            
                echo '<p><strong>Server Response Time:</strong><br /> <span class="' . esc_attr($response_time_class) . '">' . esc_html($latest_value) . ' ms</span> <small>(' . esc_html($latest_time) . ')</small></p>';
            } else {
                echo '<p><strong>Server Response Time:</strong><br /> <span class="response-red"Not available<span></p>';
            }
            ?>
            
            <?php
            // Display recent uptime and downtime events
            if (isset($monitor['logs']) && is_array($monitor['logs'])) {
                $events_found = false;
            
                foreach ($monitor['logs'] as $log) {
                    // Check for both downtime (type 1) and uptime (type 2) events
                    if ($log['type'] == 1 || $log['type'] == 2) {
                        $events_found = true;
                        break;
                    }
                }
            
                if ($events_found): ?>
                    <p><strong>Recent Events:</strong></p>
                    <ul class="events">
                        <?php foreach ($monitor['logs'] as $log): ?>
                            <?php
                            // Check if the event is either downtime (type 1) or uptime (type 2)
                            if ($log['type'] == 1 || $log['type'] == 2) {
                                $event_time = date('d/m/y - g:i a', $log['datetime']);
                                $duration = format_duration($log['duration']);
                                $event_type = ($log['type'] == 1) ? 'Down' : 'Online for';
                                $status = ($log['type'] == 1) ? 'Offline' : 'Online';
                                $class = ($log['type'] == 1) ? 'offline' : 'online';
                                // Reason is only applicable for downtime
                                $reason = ($log['type'] == 1 && isset($log['reason']['detail'])) ? $log['reason']['detail'] : null;
                                ?>
                                <li class="<?php echo $class; ?>">
                                    <strong>Time:</strong> <?php echo $event_time; ?> <br>
                                    <strong>Status:</strong> <?php echo $status; ?> <br>
                                    <strong><?php echo $event_type; ?>:</strong> <?php echo $duration; ?>
                                    <?php if ($log['type'] == 1 && $reason): ?> <br>
                                    <strong>Reason:</strong> <?php echo esc_html($reason); ?>
                                    <?php endif; ?>
                                </li>
                            <?php } ?>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p><strong>No recent events logged.</strong></p>
                <?php endif;
            } else {
                echo '<p><strong>Could not retrieve log data or no logs are available.</strong></p>';
            }
            ?>
            <p><a href="https://status.olospo.co.uk/<?php echo esc_attr($monitor['id']); ?>" target="_blank" class="button">View More Details</a></p>
            </div>
            <p class="credit">Website built and monitored by <a href="https://olospo.co.uk" target="_blank">Tom Brooks</a></p>
        </div>
        <?php
        echo ob_get_clean();
    } else {
        echo '<p>Could not retrieve monitor data. Please check your API key and monitor ID.</p>';
    }

    wp_die(); // Required to terminate immediately and return a proper response
}
add_action('wp_ajax_get_uptime_robot_data', 'get_uptime_robot_data');

// Utility function for CSS class based on uptime percentage
function get_uptime_class($uptime) {
    if ($uptime == 100) {
        return 'uptime-green-bright'; // Bright green
    } elseif ($uptime >= 90) {
        return 'uptime-green-light'; // Less bright green
    } elseif ($uptime >= 50) {
        return 'uptime-orange'; // Orange
    } else {
        return 'uptime-red'; // Red
    }
}

// Utility function for CSS class based on response time
function get_response_time_class($response_time) {
    if ($response_time < 600) {
        return 'response-green-bright'; // Bright green for times below 600ms
    } elseif ($response_time < 800) {
        return 'response-green-light'; // Lighter green for times between 600ms and 800ms
    } elseif ($response_time < 1200) {
        return 'response-orange'; // Orange for times between 800ms and 1000ms
    } else {
        return 'response-red'; // Dark red for times above 1500ms
    }
}

// Utility function to format duration from seconds to a more readable format
function format_duration($seconds) {
    $hours = floor($seconds / 3600);
    $minutes = floor(($seconds % 3600) / 60);
    $seconds = $seconds % 60;

    $formatted_duration = '';
    if ($hours > 0) {
        $formatted_duration .= $hours . ' hour' . ($hours > 1 ? 's ' : ' ');
    }
    if ($minutes > 0) {
        $formatted_duration .= $minutes . ' minute' . ($minutes > 1 ? 's ' : ' ');
    }
    if ($seconds > 0 || empty($formatted_duration)) {
        $formatted_duration .= $seconds . ' second' . ($seconds > 1 ? 's' : '');
    }

    return trim($formatted_duration);
}