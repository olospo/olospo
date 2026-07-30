<?php /* Footer */ ?>
<footer class="main">
  <div class="container">
    <div class="six columns">
      <div class="logo">
        <img src="<?php bloginfo('template_directory'); ?>/img/logomark.svg" alt="Olospo Logo" loading="lazy"/>
      </div>
      <div class="logo_wrap">
      <h5>Olospo</h5>
      <p>Freelance WordPress developer based in Oxford</p>
      <p class="contact-info"><a href="mailto:tom@olospo.co.uk">tom@olospo.co.uk</a></p>
      </div>
    </div>
    <div class="six columns">
      <div class="services-footer">
        <h5>Services</h5>
        <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container'=> false, 'menu_class'=> false ) ); ?>
      </div>
    </div>
  </div>
</footer>

<footer class="sub-footer">
  <div class="container">
    <p class="copyright"><strong>Copyright &copy; Olospo 2011-<?php echo date("Y"); ?></strong></p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>