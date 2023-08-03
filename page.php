<?php /* Page */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="intro single">
  <div class="container">
    <div class="twelve columns">
      <h1><?php the_title(); ?></h1>
      <?php if( get_field('sub-title') ): ?>
      <p><?php the_field('sub-title'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="page">
  <div class="arrow-down blue"></div>
  <div class="container flex">
    <div class="content twelve columns">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_template_part( 'inc/cta_contact' ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>