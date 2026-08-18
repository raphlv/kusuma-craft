<?php
$urls = array(
    'Homepage' => 'http://localhost/kusuma-craft/',
    'Shop' => 'http://localhost/kusuma-craft/shop/',
    'Color Archive' => 'http://localhost/kusuma-craft/color-archive/',
    'Process' => 'http://localhost/kusuma-craft/process/',
    'Journal' => 'http://localhost/kusuma-craft/journal/',
    'PISN 2026 Article' => 'http://localhost/kusuma-craft/pisn-2026/',
    'Workshops' => 'http://localhost/kusuma-craft/workshops/',
    'Custom & Collaboration' => 'http://localhost/kusuma-craft/custom/',
    'About Us' => 'http://localhost/kusuma-craft/about/',
    'Care Guide' => 'http://localhost/kusuma-craft/care-guide/',
    'FAQ' => 'http://localhost/kusuma-craft/faq/',
    'Shipping & Returns' => 'http://localhost/kusuma-craft/shipping-returns/'
);

echo "=== VERIFYING ALL KUSUMA CRAFT URLS ===\n\n";

foreach ($urls as $name => $url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    echo sprintf("%-25s : Code %d - %s\n", $name, $httpCode, ($httpCode === 200 ? 'OK' : 'ERROR'));
}
