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
      <!-- <p>The ways I can help your business.</p> -->
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="service four columns">
        <div class="content">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z"/></svg>
          <h3>WordPress development</h3>
          <p>Custom built, beautiful and reliable WordPress sites tailored precisely to your business needs.</p>
          <!-- <p><a href="<?php echo get_site_url(); ?>/services/wordpress-development">Find out more</a></p> -->
        </div>
      </div>

      <div class="service four columns"> 
        <div class="content">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M61.7 169.4l101.5 278C92.2 413 43.3 340.2 43.3 256c0-30.9 6.6-60.1 18.4-86.6zm337.9 75.9c0-26.3-9.4-44.5-17.5-58.7-10.8-17.5-20.9-32.4-20.9-49.9 0-19.6 14.8-37.8 35.7-37.8 .9 0 1.8 .1 2.8 .2-37.9-34.7-88.3-55.9-143.7-55.9-74.3 0-139.7 38.1-177.8 95.9 5 .2 9.7 .3 13.7 .3 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l77.5 230.4L249.8 247l-33.1-90.8c-11.5-.7-22.3-2-22.3-2-11.5-.7-10.1-18.2 1.3-17.5 0 0 35.1 2.7 56 2.7 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l76.9 228.7 21.2-70.9c9-29.4 16-50.5 16-68.7zm-139.9 29.3l-63.8 185.5c19.1 5.6 39.2 8.7 60.1 8.7 24.8 0 48.5-4.3 70.6-12.1-.6-.9-1.1-1.9-1.5-2.9l-65.4-179.2zm183-120.7c.9 6.8 1.4 14 1.4 21.9 0 21.6-4 45.8-16.2 76.2l-65 187.9C426.2 403 468.7 334.5 468.7 256c0-37-9.4-71.8-26-102.1zM504 256c0 136.8-111.3 248-248 248C119.2 504 8 392.7 8 256 8 119.2 119.2 8 256 8c136.7 0 248 111.2 248 248zm-11.4 0c0-130.5-106.2-236.6-236.6-236.6C125.5 19.4 19.4 125.5 19.4 256S125.6 492.6 256 492.6c130.5 0 236.6-106.1 236.6-236.6z"/></svg>
          <h3>WordPress maintenance</h3>
          <p>Providing on-going support, site monitoring and updates to help keep your website running smoothly. </p>
          <p><a href="<?php echo get_site_url(); ?>/services/wordpress-support-maintenance">Find out more</a></p>
        </div>

      </div>
      <div class="service four columns">
        <div class="content">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"/></svg>
          <h3>WordPress optimisation</h3>
          <p>Speeding up your WordPress site to boost user experience, improve load times, and boosting your SEO ranking.</p>
          <!-- <p><a href="<?php echo get_site_url(); ?>/services/wordpress-optimisation">Find out more</a></p> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="work">
  <div class="container">
    <div class="heading twelve columns">
      <h2>Featured work</h2>
    </div>
    <div class="row">
      <div class="four columns">
        <div class="client_content">
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/suez-2.png" /></a>
          <div class="content">
            <h3>SUEZ UK</h3>
            <p>Designing and developing a scalable theme for use across the SUEZ UK websites.</p>
            
          </div>
        </div>
      </div>
      <div class="four columns">
        <div class="client_content">
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/aspire-2.png" /></a>
          <div class="content">
            <h3>Aspire Intermediary Services</h3>
            <p>Developed a custom built WordPress site to showcase the skills and expertise of Aspire. </p>
           
          </div>
        </div>
      </div>
      <div class="four columns">
        <div class="client_content">
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/aprod-2.png" /></a>
          <div class="content">
            <h3>A Productions</h3>
            <p>Designing and developing a modern, dynamic website that highlights their 35 years of TV and film work.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>