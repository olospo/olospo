<?php /* Footer */ ?>
<footer class="main">
  <div class="container">
    <div class="eight columns">
      <div class="logo">
        <img src="<?php bloginfo('template_directory'); ?>/img/logomark.svg" alt="Olospo Logo" loading="lazy"/>
      </div>
      <div class="logo_wrap">
      <h5>Olospo</h5>
      <p>Freelance WordPress developer based in Bristol</p>
            
      <p class="copyright"><strong>Copyright &copy; Olospo 2011-<?php echo date("Y"); ?></strong></p>
      <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container'=> false, 'menu_class'=> false ) ); ?>
      </div>
    </div>
    <div class="four columns">
      <div id="wcb" class="carbonbadge wcb-d"></div>
      <script src="https://unpkg.com/website-carbon-badges@1.1.3/b.min.js" defer></script>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>