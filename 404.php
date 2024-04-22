<?php /* 404 Page */
get_header(); ?>

<section class="intro">
  <div class="container">
    <div class="ten columns">
      <h1>Page Not Found</h1>
      <p>It seems we can't find what you're looking for.<br /> Please try the navigation menu above or go to the <a href="<?php echo get_site_url(); ?>">homepage</a>.</p>
    </div>
  </div>
</section>

<?php get_template_part( 'inc/cta_contact' ); ?>

<?php get_footer(); ?>