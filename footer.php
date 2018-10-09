<<?php
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
			<h3><img src="" class="footer__logo" alt="Gaia Enterprises"/></h3>
		</div>
		<div class="footer__corporate">
			<p class="footer__tagline">Where Consciousness Meets Innovation.</p>
			<p class="footer__address">Gaia Enterprises, Inc.<br>PO Box 220<br/>Southampton, PA 18966<br/>(800)783-7841</p>
		</div>
		<div class="footer__spacer">&nbsp;</div>
		<div class="footer__menu-left">
			<ul class="footer__menu">
				<li><a href="/">Home</a></li>
				<li><a href="/news-events/">Blog</a></li>
				<li><a href="/press/">Press Kit</a></li>
				<li><a href="/locator/">Store Locator</a></li>
			</ul>
		</div>
		<div class="footer__menu-right">
			<ul class="footer__menu">
				<li><a href="/contact/">Contact Us</a></li>
				<li><a href="mailto:info@gaiausa.com">info@gaiausa.com</a></li>
				<li><a href="/about/">About Us</a></li>
			</ul>
		</div>
		<div class="footer__copyright">
			&copy; Gaia Enterprises, Inc. All Rights Reserved. - Terms of Use - Privacy Policy
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
<?php if ( $_SERVER["SERVER_ADDR"] == '127.0.0.1' ) { ?>
	<script id="__bs_script__">//<![CDATA[
    	document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.7'><\/script>".replace("HOST", location.hostname));
	//]]></script>
<?php }
 wp_footer(); ?>

</body>
</html>
