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
      <p class="copyright"><strong>Copyright &copy; Olospo <?php echo date("Y"); ?></strong></p>
      <?php // wp_nav_menu( array( 'theme_location' => 'footer', 'container'=> false, 'menu_class'=> false ) ); ?>
      </div>
    </div>

    <aside class="ecologi four columns">
      <a href="https://ecologi.com/olospo" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/ecologi.svg" alt="Ecologi" loading="lazy"/></a>
      <p class="ecologi"><a href="https://ecologi.com/olospo" target="_blank">580 trees and 45 projects funded</a></p>
    </aside>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>