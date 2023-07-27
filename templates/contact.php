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
        <ul class="availability">
          <li class="booked">July - Fully Booked</li>
          <li class="booked">August - Fully Booked</li>
          <li class="available">September - Available</li>
          <li class="available">October - Available</li>
          <li class="available">November - Available</li>
          <li class="limited">December - Limited</li>
        </ul>
        <p class="note">Note: My working week is currently Monday - Thursday.</p>
      </div>
      <div class="content">
        <h2>Contact</h2>
        <ul class="contact">
          <li class="email">tom@olospo.co.uk</li>
        </ul>
        
      </div>
    </aside>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>