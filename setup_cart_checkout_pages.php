<?php
define('WP_USE_THEMES', false);
require_once __DIR__ . '/wp-load.php';

echo "=== FIXING CART & CHECKOUT PAGE SHORTCODES ===\n\n";

$cart_page_id = get_option('woocommerce_cart_page_id');
$checkout_page_id = get_option('woocommerce_checkout_page_id');
$myaccount_page_id = get_option('woocommerce_myaccount_page_id');

echo "Cart Page ID: $cart_page_id\n";
echo "Checkout Page ID: $checkout_page_id\n";
echo "My Account Page ID: $myaccount_page_id\n\n";

if ($cart_page_id) {
    wp_update_post(array(
        'ID' => $cart_page_id,
        'post_status' => 'publish',
        'post_content' => '<!-- wp:shortcode -->[woocommerce_cart]<!-- /wp:shortcode -->'
    ));
    echo "Updated Cart page shortcode.\n";
}

if ($checkout_page_id) {
    wp_update_post(array(
        'ID' => $checkout_page_id,
        'post_status' => 'publish',
        'post_content' => '<!-- wp:shortcode -->[woocommerce_checkout]<!-- /wp:shortcode -->'
    ));
    echo "Updated Checkout page shortcode.\n";
}

if ($myaccount_page_id) {
    wp_update_post(array(
        'ID' => $myaccount_page_id,
        'post_status' => 'publish',
        'post_content' => '<!-- wp:shortcode -->[woocommerce_my_account]<!-- /wp:shortcode -->'
    ));
    echo "Updated My Account page shortcode.\n";
}

flush_rewrite_rules();
echo "Flushed rewrite rules.\n";
