<?php /* Template Name: Contact */
get_header();

while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/hero' ); ?>

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

<section class="page contact">
  <div class="arrow-down blue"></div>
  <div class="container">
    <div class="two-thirds column">
      <?php the_content(); ?>
    </div>
    <aside class="one-third column">
      <div class="content">
        <h2>Availability</h2>
        <p>I'm currently booked up until September, but i'm taking on new work.</p>
      </div>
    </aside>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>