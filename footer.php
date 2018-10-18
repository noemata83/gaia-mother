<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gaia-mother
 */

?>

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
				<li><a style="cursor:pointer;" data-fancybox="" data-type="iframe" data-src="https://hosted.where2getit.com/gaiaenterprises">Store Locator</a></li>
				<span class="footer__menu-mobile">
					<li><a href="/contact/">Contact Us</a></li>
					<li><a href="mailto:<?php echo get_option('site_email')?>"><?php echo get_option('site_email') ?></a></li>
					<li><a href="/about/">About Us</a></li>
				</span>
			</ul>
		</div>
		<div class="footer__menu-right">
			<ul class="footer__menu">
				<li><a href="/contact/">Contact Us</a></li>
				<li><a href="mailto:<?php echo get_option('site_email')?>"><?php echo get_option('site_email') ?></a></li>
				<li><a href="/about/">About Us</a></li>
			</ul>
		</div>
		<div class="footer__copyright">
			&copy;  <?php echo date('Y'); ?> Gaia Enterprises, Inc.<br class="footer__mobile-break"/> All Rights Reserved. <br class="footer__mobile-break"/><a href="/terms-of-use/">Terms of Use</a> - <a href="/privacy/">Privacy Policy</a>
		</div>
		<div class="footer__social">
			<div class="footer__socialIcon">
				<a href="https://www.facebook.com/gaiaenterprisesinc/"><i class="fab fa-facebook-f"></i></a>
			</div>
			<div class="footer__socialIcon">
				<a href="https://twitter.com/gaiasafe"><i class="fab fa-twitter"></i></a>
			</div>
			<div class="footer__socialIcon">
				<a href="https://www.instagram.com/gaiasafe/"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php
 wp_footer(); ?>

</body>
</html>
