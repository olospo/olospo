<?php /* Template Name: Contact */
get_header();

while ( have_posts() ) : the_post(); ?>

<!-- <section class="intro single">
  <div class="container">
    <div class="twelve columns">
      <h1><?php the_title(); ?></h1>
      <?php if( get_field('sub-title') ): ?>
      <p></p>
      <?php endif; ?>
    </div>
  </div>
</section> -->

<section class="page contact">
  <div class="container">
    <div class="form twelve columns">
      <div class="heading">
        <h2>Get in touch</h2>
        <p>It's great to hear about new projects. Why not tell me about yours?</p>
      </div>
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>