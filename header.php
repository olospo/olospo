<?php /* Header */  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="ahrefs-site-verification" content="e5f3fe043d390d69c7e3822ea4aee50f41ff6e6b2af37f3b850620c744ff0aba">
<?php wp_head(); ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/img/apple-icon.png.png"/>
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/img/favicon-32x32.png"/>
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/img/favicon-16x16.png"/>
<meta name="google-site-verification" content="add-content-here" />
</head>
<body <?php body_class(); ?>>
<header>
  <div class="container">
    <div class="logo four columns">  
      <p class="site-title">
      <a href="<?php echo get_site_url(); ?>" aria-label="logo">
        <img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="Olospo" height="34px" width="190px">
      </a>
      </p>
    </div>
    <nav class="primary eight columns">
      <?php wp_nav_menu( array( 'theme_location' => 'main', 'container'=> false, 'menu_class'=> false ) ); ?>
    </nav>
    <button class="menu-toggle mobile_menu" aria-label="Mobile Menu Toggle">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</header>
<nav class="mobile">
  <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
</nav>