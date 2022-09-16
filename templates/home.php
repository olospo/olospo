<?php /* Template Name: Home */
get_header();

while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/hero' ); ?>

<section class="home_intro" id="intro">
  <div class="container">
    <div class="ten columns offset-by-one">
      <h2>Designing and building websites that <span class="stand_out">stand out</span> from the crowd.</h2>
      <p>Agency quality websites <em>without</em> the agency price tag.
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>