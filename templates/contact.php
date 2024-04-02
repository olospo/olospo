<?php /* Template Name: Contact */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="intro single">
  <div class="container">
    <div class="twelve columns">
      <h1><?php the_title(); ?></h1>
      <?php if( get_field('sub-title') ): ?>
      <p><?php echo get_field('sub-title'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="page contact">

  <div class="container">
    <div class="two-thirds column">
      <h3>Get in touch</h3>
      <?php the_content(); ?>
    </div>
    <aside class="one-third column">
      <div class="content">
        <h3>Contact Details</h3>
        <p>Note: My working week is Monday - Thursday.</p>
        <ul class="contact">
          <li class="email"><script type="text/javascript">
                var user = 'tom';
                var domain = 'olospo.co.uk';
                document.write('<a href="mailto:' + user + '@' + domain + '">' + user + '@' + domain + '</a>');
            </script></li>
          <li class="linkedin"><a href="https://www.linkedin.com/in/tom-olospo/" target="_blank">LinkedIn</a></li>
        </ul>
        
      </div>
    </aside>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>