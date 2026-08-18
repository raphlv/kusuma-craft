<?php
define('WP_USE_THEMES', false);
global $wp, $wp_query, $wp_the_query, $wp_rewrite, $wp_did_header;
require_once __DIR__ . '/wp-load.php';

echo "=== DEBUGGING SHOP PAGE AND POSTS ===\n\n";

$shop_page_id = get_option('woocommerce_shop_page_id');
echo "WooCommerce Shop Page ID: " . $shop_page_id . "\n";

if ($shop_page_id) {
    $shop_page = get_post($shop_page_id);
    if ($shop_page) {
        echo "Shop Page Title: " . $shop_page->post_title . "\n";
        echo "Shop Page Slug: " . $shop_page->post_name . "\n";
        echo "Shop Page Status: " . $shop_page->post_status . "\n";
        echo "Shop Page Template: " . get_post_meta($shop_page_id, '_wp_page_template', true) . "\n";
        echo "Shop Page Content:\n" . $shop_page->post_content . "\n";
    } else {
        echo "Shop Page post object not found in database.\n";
    }
} else {
    echo "No Shop Page ID set in WooCommerce options.\n";
}

echo "\n--- CHECKING ALL PAGES ---\n";
$pages = get_posts(array('post_type' => 'page', 'post_status' => 'any', 'posts_per_page' => -1));
foreach ($pages as $p) {
    echo "ID: {$p->ID} | Title: {$p->post_title} | Slug: {$p->post_name} | Status: {$p->post_status}\n";
    if (stripos($p->post_content, 'horizon') !== false) {
        echo "   >>> FOUND 'horizon' in content:\n" . $p->post_content . "\n";
    }
}

echo "\n--- CHECKING ACTIVE THEME TEMPLATES ---\n";
echo "Active Theme: " . get_stylesheet() . "\n";
echo "Template Directory: " . get_template_directory() . "\n";
?>
