<?php /* Template Name: Home */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="intro">
  <div class="container">
    <div class="twelve columns">
      <h2>Designing and building websites that <span class="stand_out">stand out</span> from the crowd.</h2>
      <p>WordPress design, development and optimisation.</p>
    </div>
  </div>
</section>


<section class="services">
  <div class="arrow-down blue"></div>
  <div class="container">
    <div class="heading twelve columns">
      <h2>Services</h2>
      <p>The ways I can help your business.</p>
    </div>
  </div>
  <div class="container">
    <div class="service three columns">
      <a href="<?php echo get_site_url(); ?>/web-design">
        <div class="content">
          <img src="<?php bloginfo('template_directory'); ?>/img/design.svg" alt="Design Icon"">
          <h3>Web design</h3>
          <p>Crafting beautiful, user-friendly websites designed to seamlessly fit your brand, improve user engagement, and transition visitors into loyal customers.</p>
        </div>
      </a>
    </div>
    
    <div class="service three columns">
      <a href="<?php echo get_site_url(); ?>/wordpress-development">
        <div class="content">
          <img src="<?php bloginfo('template_directory'); ?>/img/development.svg" alt="Development Icon">
          <h3>WordPress development</h3>
          <p>Custom built, robust and reliable WordPress sites tailored precisely to your business needs and vision.</p>
        </div>
      </a>
    </div>
    
    <div class="service three columns"> 
      <a href="<?php echo get_site_url(); ?>/wordpress-audit">
        <div class="content">
          <img src="<?php bloginfo('template_directory'); ?>/img/audit.svg" alt="Audit Icon">
          <h3>WordPress audit</h3>
          <p>Providing in-depth audits to uncover potential issues, and enhance your WordPress site's user experience, accessibility and performance.</p>
        </div>
      </a>
    </div>
    
    <div class="service three columns"> 
      <a href="<?php echo get_site_url(); ?>/wordpress-optimisation">
        <div class="content">
          <img src="<?php bloginfo('template_directory'); ?>/img/optimisation.svg" alt="Optimisation Icon">
          <h3>WordPress optimisation</h3>
          <p>Speeding up your WordPress site to boost user experience, improve load times, and boosting your SEO ranking for more visibility.</p>
        </div>
      </a>
    </div>
  </div>
</section>


<section class="clients">
  <div class="arrow-down white"></div>
  <div class="container">
    <div class="heading twelve columns">
      <h2>Clients</h2>
      <p>Some of the clients I've had the privilege to work with over the past 10 years.</p>
    </div>
  </div>
  <div class="container">
    <div class="twelve columns">
      <ul>
        <li>Vodafone</li>
        <li>Aardman Animations</li>
        <li>Simpleweb</li>
        <li>Konica Minolta</li>
        <li>Diageo</li>
        <li>Adaptive Lab</li>
        <li>Oxford University</li>
        <li>A Productions</li>
        <li>The Group of Seven</li>
        <li>NHS</li>
        <li>SUEZ</li>
        <li>Minervation</li>
      </ul>
    </div>
  </div>
</section>

<?php get_template_part( 'inc/cta_contact' ); ?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>