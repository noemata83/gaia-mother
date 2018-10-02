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

	<footer id="colophon" class="site-footer">
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
