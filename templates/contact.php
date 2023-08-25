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
        <table class="availability">
          <tbody>
            <tr>
              <th>August</th>
              <td class="booked">Fully Booked</td>
            </tr>
            <tr>
              <th>September</th>
              <td class="limited">Limited</td>
            </tr>
            <tr>
              <th>October</th>
              <td class="available">Available</td>
            </tr>
            <tr>
              <th>November</th>
              <td class="available">Available</td>
            </tr>
            <tr>
              <th>December</th>
              <td class="limited">Limited</td>
            </tr>
            <tr>
              <th>January</th>
              <td class="available">Available</td>
            </tr>
          </tbody>
        </table>
        <p class="note">Note: My working week is Monday - Thursday.</p>
      </div>
    </aside>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>