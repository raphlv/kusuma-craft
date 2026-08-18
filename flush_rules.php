<?php
define('WP_USE_THEMES', false);
global $wp, $wp_query, $wp_the_query, $wp_rewrite, $wp_did_header;
require_once __DIR__ . '/wp-load.php';

echo "=== FLUSHING WORDPRESS REWRITE RULES ===\n\n";

flush_rewrite_rules(true);

echo "Done flushing rewrite rules!\n";
?>
