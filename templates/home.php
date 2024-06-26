<?php /* Template Name: Home */
get_header();
while ( have_posts() ) : the_post(); ?>
<section class="intro">
  <div class="container">
    <div class="ten columns">
      <h1>Designing and building websites that <span class="stand_out">stand out</span> from the crowd.</h1>
    </div>
  </div>
</section>
<section class="services">
  <div class="container">
    <div class="heading twelve columns">
      <h2>Services</h2>
      <p>The ways I can help your business.</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="service six columns">
        <!-- <a href="<?php echo get_site_url(); ?>/web-design"> -->
          <div class="content">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg>
            <h3>Web design</h3>
            <p>Crafting beautiful, user-friendly websites designed to seamlessly fit your brand, improve user engagement, and convert visitors into loyal customers.</p>
          </div>
        <!-- </a> -->
      </div>
      
      <div class="service six columns">
        <!-- <a href="<?php echo get_site_url(); ?>/wordpress-development"> -->
          <div class="content">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><path d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z"/></svg>
            <h3>WordPress development</h3>
            <p>Custom built, robust and reliable WordPress sites tailored precisely to your business needs and vision.</p>

          </div>
        <!-- </a> -->
      </div>
    </div>
    
    <div class="row">
      <div class="service six columns"> 
        <a href="<?php echo get_site_url(); ?>/wordpress-support-maintenance">
          <div class="content">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
            <h3>WordPress support & maintenance</h3>
            <p>Providing on-going support, site monitoring and updates to help keep your website running smoothly. </p>

          </div>
        </a>
      </div>
      <div class="service six columns"> 
        <!-- <a href="<?php echo get_site_url(); ?>/wordpress-optimisation"> -->
          <div class="content">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"/></svg>
            <h3>WordPress audit & optimisation</h3>
            <p>Speeding up your WordPress site to boost user experience, improve load times, and boosting your SEO ranking for more visibility.</p>
          </div>
        <!-- </a> -->
      </div>
    </div>
  </div>
</section>
<section class="work">
  <div class="container">
    <div class="heading twelve columns">
      <h2>Featured work</h2>
      <p>Who I've been working with.</p>
    </div>
    <div class="row">
      <div class="client_image six columns">
        <div class="content">
          <img src="<?php bloginfo('template_directory'); ?>/img/aspire.jpg" />
        </div>
      </div>
      <div class="client_content six columns">
        <div class="content">
          <h3>Aspire Intermediary Services</h3>
          <p>Website: <a href="https://aspireintermediaryservices.co.uk">aspireintermediaryservices.co.uk</a></p>
          <ul>
            <li>WordPress development</li>
            <li><a href="<?php echo get_site_url(); ?>/wordpress-support-maintenance">WordPress support & maintenance</a></li>
          </ul>
          <p>Working closely with Aspire Intermediary Services, I developed a custom built WordPress site to meet their business needs. Continuing this partnership, I not only offer ongoing support and maintenance but also work closely with them to introduce new features, ensuring their website not only functions seamlessly but also continuously evolves to meet changing needs.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part( 'inc/cta_contact' ); ?>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>