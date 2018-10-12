<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */
defined( 'ABSPATH' ) || exit;
global $product;
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );
if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>
  <div class="gaia_product__header">
	<div class="gaia_product__header-meta"> 
    SKU: <strong><?php echo get_post_meta( $post->ID, '_sku', true ); ?></strong>
    <?php echo $product->get_categories( ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) . ' ', '</span>'); ?>
  </div>
  <h1 class="woocommerce-products-header__title"><?php
		the_title(); ?></h1>
	</div>
  <hr class="blog__divider" />
    <?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>
</div>
</div>
</div>
  <div class="blog__sidebar">
	<?php
  global $product;
$currency = get_woocommerce_currency_symbol();
$price = get_post_meta( get_the_ID(), '_regular_price', true);
$sale = get_post_meta( get_the_ID(), '_sale_price', true);
?>
 
<?php if($sale) : ?>
<p class="product-price-tickr"><del><?php echo $currency; echo $price; ?></del> <?php echo $currency; echo $sale; ?></p>    
<?php elseif($price) : ?>
<p class="product-price-tickr"><?php echo $currency; echo $price; ?></p>    
<?php endif; ?>
  <hr class="blog__divider" />
  <?php the_excerpt(); ?>
  <ul>
		<li><strong><?php echo $product->is_in_stock() ? 'In Stock' : 'Out of Stock' ?></strong></li>
		
  </ul>
</aside><!-- #secondary -->
	</div>
	<div class="gaia_product__description product">
			<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action( 'woocommerce_single_product_summary' );
				do_action( 'woocommerce_after_single_product_summary' );	

			?>
	</div>
	<div class="gaia-product__related">

	</div>

	<?php
	do_action( 'woocommerce_after_single_product' ); ?>
