<?php
define('WP_USE_THEMES', false);
require_once __DIR__ . '/wp-load.php';

$_SERVER['REQUEST_URI'] = '/checkout/';
wp();
global $wp_query;

echo "=== CHECKING /checkout/ QUERY ===\n";
echo "Page Template: " . get_page_template() . "\n";
echo "Singular Template: " . get_singular_template() . "\n";
echo "Index Template: " . get_index_template() . "\n";
