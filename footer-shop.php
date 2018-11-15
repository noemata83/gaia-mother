<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>
</div>


	</div><!-- #content -->

<footer id="colophon" class="site-footer footer">
  <div class="footer__logobox">
    <h3><a href="https://gaiausa.com/"><img src="<?php echo get_theme_file_uri('assets/img/gaia_footer_logo.png')?>" class="footer__logo" alt="Gaia Enterprises"/></a></h3>
  </div>
  <div class="footer__corporate">
    <p class="footer__tagline">Where Consciousness Meets Innovation.</p>
    <p class="footer__address">Gaia Enterprises, Inc.<br>PO Box 220<br/>Southampton, PA 18966<br/>(800)783-7841</p>
  </div>
  <div class="footer__address-mobile">
    <p>Gaia Enterprises, Inc.<br>PO Box 220<br/>Southampton, PA 18966<br/>(800)783-7841</p>
  </div>
  <div class="footer__spacer">&nbsp;</div>
  <div class="footer__menu-left">
    <ul class="footer__menu">
      <li><a href="/">Home</a></li>
      <li><a href="/news-events/">News & Events</a></li>
      <li><a href="/locator/">Store Locator</a></li>
      <span class="footer__menu-mobile">
        <li><a href="/contact/">Contact Us</a></li>
					<li><a href="mailto:info@gaiausa.com" style="font-size: 1.5rem;">info@gaiausa.com</a></li>
        <li><a href="/about/">About Us</a></li>
      </span>
    </ul>
  </div>
  <div class="footer__menu-right">
    <ul class="footer__menu">
      <li><a href="/contact/">Contact Us</a></li>
      <li><a href="mailto:info@gaiausa.com" style="font-size: 1.5rem;">info@gaiausa.com</a></li>
      <li><a href="/about/">About Us</a></li>
    </ul>
  </div>
  <div class="footer__copyright">
    &copy;  <?php echo date('Y'); ?> Gaia Enterprises, Inc.<br class="footer__mobile-break"/> All Rights Reserved. <br class="footer__mobile-break"/><a href="/terms-of-use/">Terms of Use</a> - <a href="/privacy/">Privacy Policy</a>
  </div>
  <div class="footer__social">
    <div class="footer__socialIcon">
      <i class="fab fa-facebook-f"></i>
    </div>
    <div class="footer__socialIcon">
      <i class="fab fa-twitter"></i>
    </div>
    <div class="footer__socialIcon">
      <i class="fab fa-instagram"></i>
    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php
wp_footer(); ?>

</body>
</html>
