<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gaia-mother
 */

if ( ! is_active_sidebar( 'product' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
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
	<?php dynamic_sidebar( 'product' ); ?>
</aside><!-- #secondary -->
