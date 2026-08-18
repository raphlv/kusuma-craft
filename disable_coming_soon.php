<?php
define('WP_USE_THEMES', false);
global $wp, $wp_query, $wp_the_query, $wp_rewrite, $wp_did_header;
require_once __DIR__ . '/wp-load.php';

echo "=== DISABLING WOOCOMMERCE COMING SOON MODE ===\n\n";

$coming_soon = get_option('woocommerce_coming_soon');
echo "Current woocommerce_coming_soon value: " . var_export($coming_soon, true) . "\n";

update_option('woocommerce_coming_soon', 'no');
update_option('woocommerce_store_pages_only', 'no');

$new_coming_soon = get_option('woocommerce_coming_soon');
echo "New woocommerce_coming_soon value: " . var_export($new_coming_soon, true) . "\n";

echo "\nDone!\n";
?>
