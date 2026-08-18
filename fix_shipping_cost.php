<?php
define('WP_USE_THEMES', false);
require_once __DIR__ . '/wp-load.php';

if (class_exists('WC_Shipping_Zones')) {
    $zones = WC_Shipping_Zones::get_zones();
    foreach ($zones as $z) {
        $zone = new WC_Shipping_Zone($z['id']);
        $methods = $zone->get_shipping_methods();
        foreach ($methods as $instance_id => $method) {
            if ($method->id === 'flat_rate') {
                update_option('woocommerce_flat_rate_' . $instance_id . '_settings', array(
                    'title' => 'Kurir Regular (JNE / J&T / SiCepat)',
                    'cost' => '20000',
                    'tax_status' => 'none'
                ));
                echo "Updated Flat Rate Shipping Instance #$instance_id to Rp20.000\n";
            }
        }
    }

    // Zone 0 fallback
    $zone_0 = new WC_Shipping_Zone(0);
    $z0_methods = $zone_0->get_shipping_methods();
    foreach ($z0_methods as $instance_id => $method) {
        if ($method->id === 'flat_rate') {
            update_option('woocommerce_flat_rate_' . $instance_id . '_settings', array(
                'title' => 'Kurir Regular (JNE / J&T / SiCepat)',
                'cost' => '20000',
                'tax_status' => 'none'
            ));
            echo "Updated Zone 0 Flat Rate Shipping Instance #$instance_id to Rp20.000\n";
        }
    }
}
