<?php /* Template Name: About */
get_header();

while ( have_posts() ) : the_post(); ?>

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

<section class="testimonials">
  <div class="arrow-down blue"></div>
  <div class="container">
    <div class="heading twelve columns">
      <h2>Testimonials</h2>
      <p>Some nice things clients have said about working with me. </p>
    </div>
  </div>
  <div class="container">
    <div class="twelve columns">
      <div class="row">
        <article class="six columns">
          <p>We worked with Tom to improve our existing WordPress website. After being told by other companies that the website needed replacing, Tom took on the challenge to help us update it, improving the performance and fixing elements that had broken or never worked well. Tom was pro-active, professional and kept us informed at all times. Tom was transparent about what was and wasn’t possible due to the age of the site and we have seen an immediate improvement in our website speed and performance. Working with Tom was very easy, and we will continue working with him on future projects.</p>
          <strong>Extreme Design</strong>
        </article>
      
        <article class="six columns">
          <p>Developers need to be good communicators (most aren't). They need to be good planners and good timekeepers (most aren't). They need to listen and turn the project's creative vision into something that works in the real world. Tom has all of these qualities in spades and I wouldn't hesitate to recommend him for any website project.</p>
          <strong>Andre Tomlin - Minervation</strong>
        </article>
      </div>
      
      <div class="row">
        <article class="six columns">
          <p>Creating websites can be stressful, working with Tom is exciting and enjoyable throughout. The sites he builds are super fast, professional and pixel-perfect. Already, after two significant and successfully client-pleasing sites, Tom is my go-to Developer. I look forward to our next project.</p>
          <strong>Chris Marsh - Think Marsh</strong>
        </article>
        
        <!-- <article class="six columns">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <strong>Meg Baldwin - The Group of Seven</strong>
        </article> -->
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'inc/cta_contact' ); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>