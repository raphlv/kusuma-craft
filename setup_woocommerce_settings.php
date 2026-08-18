<?php
define('WP_USE_THEMES', false);
require_once __DIR__ . '/wp-load.php';

echo "=== CONFIGURING WOOCOMMERCE SETTINGS FOR INDONESIA ===\n\n";

// 1. Currency & Formatting
update_option('woocommerce_currency', 'IDR');
update_option('woocommerce_currency_pos', 'left'); // Displays "Rp385.000"
update_option('woocommerce_price_num_decimals', 0);
update_option('woocommerce_price_decimal_sep', ',');
update_option('woocommerce_price_thousand_sep', '.');
update_option('woocommerce_default_country', 'ID:YO'); // Indonesia - DI Yogyakarta

echo "1. Currency updated to IDR (Rp), 0 decimals, dot thousand separator.\n";

// 2. Checkout & Account Settings
update_option('woocommerce_enable_guest_checkout', 'yes');
update_option('woocommerce_enable_checkout_login_reminder', 'yes');
update_option('woocommerce_enable_signup_and_login_from_checkout', 'yes');
update_option('woocommerce_enable_coupons', 'yes');

echo "2. Enabled Guest Checkout, Login Reminders, and Coupon capability.\n";

// 3. Payment Gateways Setup
$bacs_settings = array(
    'enabled' => 'yes',
    'title' => 'Transfer Bank Direct (BCA / Mandiri / QRIS)',
    'description' => 'Lakukan pembayaran langsung ke rekening bank kami. Pesanan Anda akan diproses setelah pembayaran terkonfirmasi.',
    'instructions' => "Silakan transfer total pembayaran ke rekening berikut:\n\nBank BCA: 123-456-7890 a.n. Kusuma Craft\nBank Mandiri: 987-654-3210 a.n. Kusuma Craft\n\nKirimkan bukti transfer via WhatsApp ke 0812-3456-7890 dengan mencantumkan Nomor Pesanan Anda.",
    'accounts' => array(
        array(
            'account_name' => 'Kusuma Craft Lab',
            'account_number' => '1234567890',
            'bank_name' => 'Bank Central Asia (BCA)',
            'sort_code' => '',
            'iban' => '',
            'bic' => ''
        ),
        array(
            'account_name' => 'Kusuma Craft Lab',
            'account_number' => '9876543210',
            'bank_name' => 'Bank Mandiri',
            'sort_code' => '',
            'iban' => '',
            'bic' => ''
        )
    )
);

update_option('woocommerce_bacs_settings', $bacs_settings);

$cod_settings = array(
    'enabled' => 'yes',
    'title' => 'Bayar di Tempat (COD) / Pickup Studio',
    'description' => 'Bayar secara tunai saat barang diterima atau saat pengambilan mandiri di Kusuma Craft Studio Yogyakarta.',
    'instructions' => 'Harap siapkan uang pas saat barang diterima atau saat pengambilan di studio.'
);
update_option('woocommerce_cod_settings', $cod_settings);

echo "3. Payment Gateways (Transfer Bank Direct & COD/Pickup) configured and enabled.\n";

// 4. Shipping Methods & Shipping Zone Setup
if (class_exists('WC_Shipping_Zones')) {
    $zones = WC_Shipping_Zones::get_zones();
    $indonesia_zone = null;
    
    foreach ($zones as $z) {
        if ($z['zone_name'] === 'Indonesia') {
            $indonesia_zone = new WC_Shipping_Zone($z['id']);
            break;
        }
    }
    
    if (!$indonesia_zone) {
        $indonesia_zone = new WC_Shipping_Zone();
        $indonesia_zone->set_zone_name('Indonesia');
        $indonesia_zone->add_location('ID', 'country');
        $indonesia_zone->save();
        echo "Created Shipping Zone: Indonesia.\n";
    }
    
    // Add Flat Rate Shipping
    $methods = $indonesia_zone->get_shipping_methods();
    $has_flat_rate = false;
    $has_free_shipping = false;
    
    foreach ($methods as $m) {
        if ($m->id === 'flat_rate') $has_flat_rate = true;
        if ($m->id === 'free_shipping') $has_free_shipping = true;
    }
    
    if (!$has_flat_rate) {
        $instance_id = $indonesia_zone->add_shipping_method('flat_rate');
        $flat_rate = new WC_Shipping_Flat_Rate($instance_id);
        $flat_rate->update_option('title', 'Kurir Regular (JNE / J&T / SiCepat)');
        $flat_rate->update_option('cost', '20000');
        echo "Added Flat Rate Shipping: Rp20.000.\n";
    }
    
    if (!$has_free_shipping) {
        $instance_id = $indonesia_zone->add_shipping_method('free_shipping');
        $free_shipping = new WC_Shipping_Free_Shipping($instance_id);
        $free_shipping->update_option('title', 'Gratis Ongkir (Minimal Belanja Rp500.000)');
        $free_shipping->update_option('requires', 'min_amount');
        $free_shipping->update_option('min_amount', '500000');
        echo "Added Free Shipping for orders >= Rp500.000.\n";
    }

    // Also configure Rest of the World (Zone 0) fallback flat rate
    $zone_0 = new WC_Shipping_Zone(0);
    $z0_methods = $zone_0->get_shipping_methods();
    if (empty($z0_methods)) {
        $instance_id = $zone_0->add_shipping_method('flat_rate');
        $flat_rate_z0 = new WC_Shipping_Flat_Rate($instance_id);
        $flat_rate_z0->update_option('title', 'Standar Kurir Pengiriman');
        $flat_rate_z0->update_option('cost', '20000');
    }
}

echo "4. Shipping options & calculation rules set up successfully.\n";

// 5. Verify Products Price Formatting in DB
$products = get_posts(array('post_type' => 'product', 'posts_per_page' => -1));
foreach ($products as $p) {
    $wc_p = wc_get_product($p->ID);
    if ($wc_p) {
        echo "Product #{$p->ID} ({$p->post_title}): Price = " . wc_price($wc_p->get_price()) . "\n";
    }
}

echo "\n=== WOOCOMMERCE INDONESIA CONFIGURATION COMPLETED ===\n";
