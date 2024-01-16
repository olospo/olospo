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
              <th>January</th>
              <td class="booked">Booked</td>
            </tr>
            <tr>
              <th>February</th>
              <td class="limited">Limited</td>
            </tr>
            <tr>
              <th>March</th>
              <td class="available">Available</td>
            </tr>
            <tr>
              <th>April</th>
              <td class="available">Available</td>
            </tr>
            <tr>
              <th>May</th>
              <td class="available">Available</td>
            </tr>
            <tr>
              <th>June</th>
              <td class="available">Available</td>
            </tr>
          </tbody>
        </table>
        <p class="note">Note: My working week is Monday - Thursday.</p>
        <p class="note">Email: <script type="text/javascript">
            var user = 'tom';
            var domain = 'olospo.co.uk';
            document.write('<a href="mailto:' + user + '@' + domain + '">' + user + '@' + domain + '</a>');
        </script></p>
      </div>
    </aside>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>