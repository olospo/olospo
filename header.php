<?php /* Header */  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="ahrefs-site-verification" content="e5f3fe043d390d69c7e3822ea4aee50f41ff6e6b2af37f3b850620c744ff0aba">
<?php $post_id = get_the_ID(); if (has_post_thumbnail( $post_id ) ): 
$image = get_the_post_thumbnail_url( $post_id, 'full' ); ?>
<meta name="twitter:image" content="<?php echo $image; ?>" />
<meta name="twitter:image:alt" content="<?php the_title(); ?>" />
<?php else : ?>
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/img/twitter_meta.png' ; ?>" />
<meta name="twitter:image:alt" content="A Productions Studio" />
<?php endif; ?>
<meta name="twitter:title" content="<?php the_title(); ?>" />
<meta name="twitter:site" content="@olospo" />
<?php wp_head(); ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png"/>
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/img/favicon-32x32.png"/>
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/img/favicon-16x16.png"/>
<?php if( get_field('social_metadata', 'options') ): the_field('social_metadata', 'options'); endif; // Social Metadata ?>
<?php if( get_field('google_analytics', 'options') ): the_field('google_analytics', 'options'); endif; // Google Analytics Code ?>
<meta name="google-site-verification" content="add-content-here" />
</head>
<body <?php body_class(); ?>>
<header>
  <div class="container">
    <div class="logo two columns">  
      <p class="site-title">
      <a href="<?php echo get_site_url(); ?>" aria-label="logo">
        <img src="<?php bloginfo('template_directory'); ?>/img/olospo.png" alt="Olospo">
      </a>
      </p>
    </div>
    <nav class="primary ten columns">
      <?php wp_nav_menu( array( 'theme_location' => 'main', 'container'=> false, 'menu_class'=> false ) ); ?>
    </nav>
    <a class="menu-toggle mobile_menu">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </a>
  </div>
</header>
<nav class="mobile">
  <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
</nav>