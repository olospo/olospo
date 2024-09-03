<?php

// Theme Setup
function theme_setup() {
		// Menus
		register_nav_menus( array(
				'main'   => 'Main Menu',
				'footer' => 'Footer Menu'
		) );

		// RSS Feed
		add_theme_support( 'automatic-feed-links' );

		// Thumbnails
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'thumb', 150, 150, true ); // Normal thumbnail size
		add_image_size( 'large-thumb', 300, 300, true ); // Large thumbnail size
		add_image_size( 'featured-img', 920, 500, true ); // Featured Image size 
		add_image_size( 'background-img', 1400, 740, true ); // Featured Image size 
}
add_action( 'after_setup_theme', 'theme_setup' );

// Enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'theme_enqueue_assets' );
function theme_enqueue_assets() {
		// Styles
		wp_enqueue_style( 'main', get_stylesheet_directory_uri().'/css/main.css', [], wp_get_theme()->get('Version'));
		
		// Scripts
		wp_deregister_script( 'jquery' ); // Deregister to put jQuery into footer
		wp_register_script( 'jquery', get_stylesheet_directory_uri().'/js/jquery.min.js', [], null, true);
		wp_enqueue_script( 'jquery' ); // Re-register jQuery
		
		wp_enqueue_script( 'applications', get_stylesheet_directory_uri().'/js/application.min.js', ['jquery'], wp_get_theme()->get('Version'), true);
		wp_enqueue_script( 'theme-functions', get_stylesheet_directory_uri().'/js/wordpress.js', ['jquery'], wp_get_theme()->get('Version'), true);
		wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/0ab207164e.js', 'jquery', NULL , true ); 
}

// Disable Emoji Loading
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Disable WP Embed
function my_deregister_scripts() {
		wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

// Resources Post Type
function custom_post_type() {
	$labels = array(
		'name'                => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Case Studies', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Case Studies', 'text_domain' ),
		'all_items'           => __( 'All Case Studies', 'text_domain' ),
		'view_item'           => __( 'View Case Study', 'text_domain' ),
		'add_new_item'        => __( 'Add New Case Study', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Case Study', 'text_domain' ),
		'update_item'         => __( 'Update Case Study', 'text_domain' ),
		'search_items'        => __( 'Search Case Studies', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Case Studies', 'text_domain' ),
		'description'         => __( 'Client Case Studies', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom fields', 'excerpt' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 26,
		'menu_icon'           => 'dashicons-editor-alignleft',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'case-studies', $args );
}

// Ensure the custom post type registration runs during the appropriate action
add_action( 'init', 'custom_post_type' );

function breadcrumbs() {

		/* === OPTIONS === */
		$text['home']     = __('Home', 'text-domain'); // Text for the 'Home' link
		$text['category'] = __('%s', 'text-domain'); // Text for a category page
		$text['search']   = __('Search Results for "%s"', 'text-domain'); // Text for a search results page
		$text['tag']      = __('Posts Tagged "%s"', 'text-domain'); // Text for a tag page
		$text['author']   = __('Articles Posted by %s', 'text-domain'); // Text for an author page
		$text['404']      = __('Error 404', 'text-domain'); // Text for the 404 page

		$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
		$showOnHome  = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
		$delimiter   = '<span class="delimiter">|</span>'; // Delimiter between crumbs
		$before      = '<span class="current">'; // Tag before the current crumb
		$after       = '</span>'; // Tag after the current crumb
		/* === END OF OPTIONS === */

		global $post;
		$homeLink = home_url('/');
		$linkBefore = '<span typeof="v:Breadcrumb">';
		$linkAfter = '</span>';
		$linkAttr = ' rel="v:url" property="v:title"';
		$link = $linkBefore . '<a' . $linkAttr . ' href="%1$s">%2$s</a>' . $linkAfter;

		if (is_home() || is_front_page()) {
				if ($showOnHome == 1) echo '<a href="' . esc_url($homeLink) . '">' . esc_html($text['home']) . '</a>';
		} else {
				echo '<div id="crumbs" xmlns:v="http://rdf.data-vocabulary.org/#">' . sprintf($link, esc_url($homeLink), esc_html($text['home'])) . $delimiter;

				if (is_category()) {
						$thisCat = get_category(get_query_var('cat'), false);
						if ($thisCat->parent != 0) {
								echo sprintf($link, esc_url('/news/news'), esc_html__('Library', 'text-domain')) . $delimiter;
								$cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
								$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
								$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
								echo $cats;
						}
						echo sprintf($link, esc_url($homeLink . 'who-we-are/news'), esc_html__('News', 'text-domain')) . $delimiter;
						echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;

				} elseif (is_search()) {
						echo $before . sprintf($text['search'], get_search_query()) . $after;

				} elseif (is_day()) {
						echo sprintf($link, esc_url(get_year_link(get_the_time('Y'))), get_the_time('Y')) . $delimiter;
						echo sprintf($link, esc_url(get_month_link(get_the_time('Y'), get_the_time('m'))), get_the_time('F')) . $delimiter;
						echo $before . get_the_time('d') . $after;

				} elseif (is_month()) {
						echo sprintf($link, esc_url(get_year_link(get_the_time('Y'))), get_the_time('Y')) . $delimiter;
						echo $before . get_the_time('F') . $after;

				} elseif (is_year()) {
						echo $before . get_the_time('Y') . $after;

				} elseif (is_single() && !is_attachment()) {
						if (get_post_type() != 'post') {
								$post_type = get_post_type_object(get_post_type());
								$slug = $post_type->rewrite;
								printf($link, esc_url($homeLink . '/' . $slug['slug'] . '/'), $post_type->labels->singular_name);
								if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;
						} else {
								echo sprintf($link, esc_url($homeLink . 'who-we-are/news'), esc_html__('News', 'text-domain')) . $delimiter;
								$cat = get_the_category(); 
								$cat = $cat[0];
								$cats = get_category_parents($cat, TRUE, $delimiter);
								if ($showCurrent == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
								$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
								$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
								echo $cats;
								if ($showCurrent == 1) echo $before . get_the_title() . $after;
						}

				} elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
						$post_type = get_post_type_object(get_post_type());
						if ($post_type) {
								echo $before . $post_type->labels->singular_name . $after;
						}

				} elseif (is_attachment()) {
						$parent = get_post($post->post_parent);
						$cat = get_the_category($parent->ID); 
						$cat = $cat[0];
						$cats = get_category_parents($cat, TRUE, $delimiter);
						$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
						$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
						echo $cats;
						printf($link, esc_url(get_permalink($parent)), esc_html($parent->post_title));
						if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;

				} elseif (is_page() && !$post->post_parent) {
						if ($showCurrent == 1) echo $before . get_the_title() . $after;

				} elseif (is_page() && $post->post_parent) {
						$parent_id  = $post->post_parent;
						$breadcrumbs = array();
						while ($parent_id) {
								$page = get_page($parent_id);
								$breadcrumbs[] = sprintf($link, esc_url(get_permalink($page->ID)), esc_html(get_the_title($page->ID)));
								$parent_id  = $page->post_parent;
						}
						$breadcrumbs = array_reverse($breadcrumbs);
						for ($i = 0; $i < count($breadcrumbs); $i++) {
								echo $breadcrumbs[$i];
								if ($i != count($breadcrumbs)-1) echo $delimiter;
						}
						if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;

				} elseif (is_tag()) {
						echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;

				} elseif (is_author()) {
						global $author;
						$userdata = get_userdata($author);
						echo $before . sprintf($text['author'], esc_html($userdata->display_name)) . $after;

				} elseif (is_404()) {
						echo $before . esc_html($text['404']) . $after;
				}

				if (get_query_var('paged')) {
						if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo ' (';
						echo esc_html__('Page', 'text-domain') . ' ' . get_query_var('paged');
						if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo ')';
				}

				echo '</div>';
		}
}