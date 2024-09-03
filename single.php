<?php /* Single Post */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="work">
  <div class="container">
    <div class="heading twelve columns">
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="content twelve columns">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>