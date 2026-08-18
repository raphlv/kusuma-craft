<?php
define('WP_USE_THEMES', false);
global $wp, $wp_query, $wp_the_query, $wp_rewrite, $wp_did_header;
require_once __DIR__ . '/wp-load.php';

echo "=== CONFIGURING CLEAN PERMALINKS (POST NAME) ===\n\n";

$current_structure = get_option('permalink_structure');
echo "Current Permalink Structure: " . var_export($current_structure, true) . "\n";

// Set to Post Name structure
update_option('permalink_structure', '/%postname%/');
$wp_rewrite->set_permalink_structure('/%postname%/');

// Flush rewrite rules
flush_rewrite_rules(true);

$new_structure = get_option('permalink_structure');
echo "New Permalink Structure: " . var_export($new_structure, true) . "\n";

echo "\nDone!\n";
?>
