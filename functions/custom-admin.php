<?php
// Custom Colour Scheme
// https://wpadmincolors.com 
//
function wpacg_openup_admin_color_scheme() {
  //Get the theme directory
  $theme_dir = get_stylesheet_directory_uri();

  //OPENUP
  wp_admin_css_color( 'openup', __( 'OPENUP' ),
    $theme_dir . '/login/open.css',
    array( '#fae078', '#000000', '#69b89f' , '#6ab8a0')
  );
}
add_action('admin_init', 'wpacg_openup_admin_color_scheme');