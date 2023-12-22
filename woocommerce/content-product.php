<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<li <?php wc_product_class('', $product); ?>>

	<?php
	echo '<div class="absolute left-3 top-3 text-gray-500 w-40 h-[37px] product-sticker">';
	if (get_post_meta(get_the_ID(), '_stock_status', true) == 'onbackorder') {
		echo '<p class="md:w-40 w-28 text-white pl-2">Предзаказ</p>';
	} else {
		echo '<p class="md:w-40 w-28 text-white pl-2">В наличии</p>';
	}
	echo '<img class="absolute top-0 left-0 md:w-40 w-28"
			src="' . get_template_directory_uri() . '/src/img/order/sticker_2.png" height="40" width="160" />';
	echo '</div>';
	?>

	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action('woocommerce_before_shop_loop_item');

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action('woocommerce_before_shop_loop_item_title');

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action('woocommerce_shop_loop_item_title');

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action('woocommerce_after_shop_loop_item_title');

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action('woocommerce_after_shop_loop_item');
	?>
</li>