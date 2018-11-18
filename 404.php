<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gaia-mother
 */

get_header();
?>
<div id="content" class="site-content">
    <main id="main">
      <div class="masthead" style="background-image: url('<?php echo get_theme_file_uri('assets/img/shop_header.jpg')?>');">
				<div class="masthead__copy">
            <p>
						<?php echo get_option('page_header_text');?>
					</p>
				</div>
			</div>
			<div class="blog__content">
	<div class="blog__post-column type-page page">
					<header class="page-header">
						<h1 style="font-size: 8rem; font-weight: bold;">404</h1>
					</header><!-- .page-header -->
		</div>
		<div class="blog__sidebar">&nbsp;</div>
		<div class="blog__post-column type-page page">
			<hr class="blog__divider" />
					<div class="page-content">
						<section>
							<h2>Page Not Found</h2>
							<p>The page you are trying to access does not exist on this server.</p>
							Possible reasons:
							<ul style="list-style-position: inside;">
								<li>The page may have been moved or deleted</li>
								<li>You may have used an outdated or broken link</li>
								<li>You may have not typed the address (URL) correctly</li>
							</ul>
						</section>
					</div><!-- .page-content -->
		</div>
		<div class="blog__sidebar">
			<hr class="blog__divider" />
			<img src="<?php echo get_theme_file_uri('/assets/img/404_icon.svg')?>" alt="A slip-up has occurred"/>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
