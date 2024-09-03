<?php /* Archive */
get_header(); ?>

<section class="work">
  <div class="container">
    <div class="heading twelve columns">
      <h2>Case Studies</h2>
    </div>
    <div class="row">
      <?php if ( have_posts() ) : while (have_posts()) : the_post();  ?>
        <div class="one-third column">
          <div class="client_content">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <div class="content">
              <h3><?php the_title(); ?></h3>
              <p>Designing and developing a scalable theme for use across the SUEZ UK websites.</p>
              <p><a href="<?php the_permalink(); ?>">Read the case study</a></p>
            </div>
          </div>
        </div>
      <?php endwhile; else : ?>
      <!-- No posts found -->
      <?php endif; wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php get_template_part( 'inc/cta_contact' ); ?>

<?php get_footer(); ?>