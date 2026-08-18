<?php
define('WP_USE_THEMES', true);
require_once __DIR__ . '/wp-load.php';

// Add product ID 19 (Scarf) to cart
if (class_exists('WooCommerce')) {
    WC()->frontend_includes();
    if (null === WC()->session) {
        WC()->session = new WC_Session_Handler();
        WC()->session->init();
    }
    if (null === WC()->customer) {
        WC()->customer = new WC_Customer(get_current_user_id(), true);
    }
    if (null === WC()->cart) {
        WC()->cart = new WC_Cart();
    }

    WC()->cart->empty_cart();
    $product_id = 19; // Scarf
    $added = WC()->cart->add_to_cart($product_id, 1);
    
    // Set customer location to Indonesia
    WC()->customer->set_billing_country('ID');
    WC()->customer->set_shipping_country('ID');
    WC()->customer->set_billing_state('YO');
    WC()->customer->set_shipping_state('YO');
    WC()->customer->set_billing_postcode('55213');
    WC()->customer->set_shipping_postcode('55213');

    WC()->cart->calculate_totals();

    echo "=== CART SUMMARY WITH INDONESIAN RUPIAH (Rp) ===\n";
    echo "Cart Items Count: " . WC()->cart->get_cart_contents_count() . "\n";
    echo "Subtotal: " . WC()->cart->get_cart_subtotal() . "\n";
    echo "Shipping Total: " . wc_price(WC()->cart->get_shipping_total()) . "\n";
    echo "Cart Total: " . WC()->cart->get_total() . "\n\n";

    echo "=== AVAILABLE PAYMENT GATEWAYS ===\n";
    $gateways = WC()->payment_gateways()->get_available_payment_gateways();
    foreach ($gateways as $id => $gateway) {
        echo "- {$gateway->title} (ID: $id) [{$gateway->enabled}]\n";
    }

    echo "\n=== AVAILABLE SHIPPING METHODS ===\n";
    $packages = WC()->shipping()->get_packages();
    foreach ($packages as $i => $package) {
        if (isset($package['rates'])) {
            foreach ($package['rates'] as $rate_id => $rate) {
                echo "- {$rate->label}: " . wc_price($rate->cost) . "\n";
            }
        }
    }
}
