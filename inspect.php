<?php
define('WP_USE_THEMES', false);
require_once __DIR__ . '/wp-load.php';

echo "Permalink Structure: " . get_option('permalink_structure') . "\n";
echo "Show On Front: " . get_option('show_on_front') . "\n";
echo "Page On Front: " . get_option('page_on_front') . "\n";
echo "Page For Posts: " . get_option('page_for_posts') . "\n";

echo "\n--- PAGE TEMPLATES ASSIGNED ---\n";
$pages = get_posts(array('post_type' => 'page', 'posts_per_page' => -1, 'post_status' => 'any'));
foreach($pages as $p) {
    $tmpl = get_post_meta($p->ID, '_wp_page_template', true);
    echo "ID: {$p->ID} | Title: {$p->post_title} | Slug: {$p->post_name} | Template: " . ($tmpl ? $tmpl : 'default') . "\n";
}
