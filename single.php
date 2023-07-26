<?php /* Single Post */
get_header();

while ( have_posts() ) : the_post(); ?>
<section class="hero news single">
  <div class="container">
    <div class="eight columns offset-by-two">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
</section>

<section class="post">
  <div class="container flex">
    <div class="content ten columns offset-by-one">
      <?php if (have_rows('project_content')) { // Flexible Content ?>
      <div class="flexible_content twelve columns">        
        <?php while (have_rows('project_content')) { the_row(); ?>
          <?php if( get_row_layout() == '2x_square_image' ): ?>
            <?php get_template_part( 'inc/flexible/square_image'); // 2x Square Images ?>
          <?php elseif( get_row_layout() == '4x_square_image' ): ?>
            <?php get_template_part( 'inc/flexible/four_images'); // 4x Square Images ?>
          <?php elseif( get_row_layout() == '16:9_video' ): ?>
            <?php get_template_part( 'inc/flexible/16-9_video'); // Video (embed) ?>
          <?php elseif( get_row_layout() == 'video_upload' ): ?>
            <?php get_template_part( 'inc/flexible/video_upload'); // Video (upload ?>
          <?php elseif( get_row_layout() == '16:9_image' ): ?>
            <?php get_template_part( 'inc/flexible/16-9_image'); // 16:9 Image ?>
          <?php elseif( get_row_layout() == 'testimonial' ): ?>
            <?php get_template_part( 'inc/flexible/testimonial'); // Testimonial ?>
          <?php elseif( get_row_layout() == 'content_block' ): ?>
            <?php get_template_part( 'inc/flexible/content_block'); // Content Block ?>
          <?php elseif( get_row_layout() == 'stat_block' ): ?>
            <?php get_template_part( 'inc/flexible/stat_block'); // Stat Block ?>
          <?php endif; ?>
        <?php } ?>
      </div>
      <?php } else { ?>
        <?php the_content(); ?>
      <?php } ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>