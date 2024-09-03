<?php

function numeric_posts_nav() {
    if (is_singular()) {
        return;
    }
    
    global $wp_query;

    // Stop execution if there's only 1 page
    if ($wp_query->max_num_pages <= 1) {
        return;
    }

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max   = intval($wp_query->max_num_pages);

    // Initialize links array
    $links = [];

    // Add current page to the array
    if ($paged >= 1) {
        $links[] = $paged;
    }

    // Add the pages around the current page to the array
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="pagination"><ul>' . "\n";

    // Previous Post Link
    if (get_previous_posts_link()) {
        printf('<li class="prev">%s</li>' . "\n", get_previous_posts_link(esc_html__('< Previous Page', 'text-domain')));
    }

    // Link to first page, plus ellipses if necessary
    if (!in_array(1, $links)) {
        $class = $paged == 1 ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links)) {
            echo '<li>…</li>';
        }
    }

    // Link to current page, plus 2 pages in either direction if necessary
    sort($links);
    foreach ($links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    // Link to last page, plus ellipses if necessary
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links)) {
            echo '<li>…</li>' . "\n";
        }

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    // Next Post Link
    if (get_next_posts_link()) {
        printf('<li class="next">%s</li>' . "\n", get_next_posts_link(esc_html__('Next Page >', 'text-domain')));
    }

    echo '</ul></div>' . "\n";
}

// Fix the pagination issue with custom posts
function remove_page_from_query_string($query_string) {
    if (isset($query_string['name']) && $query_string['name'] == 'page' && isset($query_string['page'])) {
        unset($query_string['name']);
        
        // 'page' in the query_string looks like '/2', so split it out
        list($delim, $page_index) = explode('/', $query_string['page']);
        $query_string['paged'] = $page_index;
    }

    return $query_string;
}
