<?php
define('WP_USE_THEMES', false);
require_once __DIR__ . '/wp-load.php';
require_once ABSPATH . 'wp-admin/includes/taxonomy.php';
require_once ABSPATH . 'wp-admin/includes/nav-menu.php';
require_once ABSPATH . 'wp-admin/includes/post.php';

echo "=== STARTING KUSUMA CRAFT DATA COMPLETION ===\n\n";

// 1. Ensure Taxonomies for Color Archive exist and populate terms
$taxonomies = array(
    'dye_source' => array(
        'Kitchen Waste' => 'kitchen-waste',
        'Fruit Skin Waste' => 'fruit-skin-waste',
        'Local Spices' => 'local-spices',
        'Organic Leaves' => 'organic-leaves',
        'Natural Bark' => 'natural-bark'
    ),
    'fabric_type' => array(
        'Organic Linen' => 'organic-linen',
        'Organic Cotton' => 'organic-cotton',
        'Mulberry Silk' => 'mulberry-silk',
        'Raw Silk' => 'raw-silk'
    ),
    'color_family' => array(
        'Warm Tan' => 'warm-tan',
        'Deep Plum' => 'deep-plum',
        'Golden Ochre' => 'golden-ochre',
        'Warm Brown' => 'warm-brown',
        'Dusty Pink' => 'dusty-pink',
        'Terracotta Red' => 'terracotta-red'
    )
);

foreach ($taxonomies as $tax => $terms) {
    if (!taxonomy_exists($tax)) {
        register_taxonomy($tax, 'color_archive', array('hierarchical' => true, 'show_in_rest' => true));
    }
    foreach ($terms as $name => $slug) {
        if (!term_exists($name, $tax)) {
            wp_insert_term($name, $tax, array('slug' => $slug));
            echo "Inserted term '$name' into '$tax'\n";
        }
    }
}

// 2. Populate Color Archive Swatches Metadata & Terms
$swatch_data = array(
    'bawang-merah' => array(
        'source' => 'Kulit Bawang Merah',
        'origin' => 'Limbah Dapur Rumah Tangga',
        'extraction' => 'Simmering & Steeping (3 Jam)',
        'fabric' => 'Organic Linen',
        'mordant' => 'Tawas (Alum)',
        'result' => 'Warm Tan / Honey Gold',
        'dye_term' => 'Kitchen Waste',
        'fabric_term' => 'Organic Linen',
        'color_term' => 'Warm Tan'
    ),
    'kulit-manggis' => array(
        'source' => 'Kulit Buah Manggis',
        'origin' => 'Pasar & Pedagang Buah',
        'extraction' => 'Perebusan Terkontrol (4 Jam)',
        'fabric' => 'Organic Cotton',
        'mordant' => 'Tunjung (Iron)',
        'result' => 'Deep Grayish Plum / Dark Violet',
        'dye_term' => 'Fruit Skin Waste',
        'fabric_term' => 'Organic Cotton',
        'color_term' => 'Deep Plum'
    ),
    'kunyit' => array(
        'source' => 'Rimpang Kunyit Segar',
        'origin' => 'Sisa Dapur & Pasar Tradisional',
        'extraction' => 'Ekstraksi Dingin & Sangrai',
        'fabric' => 'Mulberry Silk',
        'mordant' => 'Cuka Kayu & Tawas',
        'result' => 'Vibrant Golden Ochre',
        'dye_term' => 'Local Spices',
        'fabric_term' => 'Mulberry Silk',
        'color_term' => 'Golden Ochre'
    ),
    'ampas-teh' => array(
        'source' => 'Ampas Teh Hitam',
        'origin' => 'Dapur Domestik & Kafe',
        'extraction' => 'Perebusan 4 Jam (Decoction)',
        'fabric' => 'Organic Linen',
        'mordant' => 'Tawas (Alum)',
        'result' => 'Rich Warm Brown',
        'dye_term' => 'Kitchen Waste',
        'fabric_term' => 'Organic Linen',
        'color_term' => 'Warm Brown'
    ),
    'biji-alpukat' => array(
        'source' => 'Biji Alpukat Konsumsi',
        'origin' => 'Rumah Tangga & Warung Jus',
        'extraction' => 'Maserasi & Fermentasi Ringan',
        'fabric' => 'Organic Cotton',
        'mordant' => 'Tawas (Alum)',
        'result' => 'Subtle Dusty Pink',
        'dye_term' => 'Fruit Skin Waste',
        'fabric_term' => 'Organic Cotton',
        'color_term' => 'Dusty Pink'
    ),
    'kayu-secang' => array(
        'source' => 'Serutan Kayu Secang',
        'origin' => 'Pengepul Rempah Lokal',
        'extraction' => 'Infusi Panas dengan Kapur',
        'fabric' => 'Raw Silk',
        'mordant' => 'Kapur & Tawas',
        'result' => 'Deep Terracotta Red',
        'dye_term' => 'Local Spices',
        'fabric_term' => 'Raw Silk',
        'color_term' => 'Terracotta Red'
    )
);

foreach ($swatch_data as $slug => $meta) {
    $post = get_page_by_path($slug, OBJECT, 'color_archive');
    if ($post) {
        update_post_meta($post->ID, '_kusuma_swatch_source', $meta['source']);
        update_post_meta($post->ID, '_kusuma_swatch_origin', $meta['origin']);
        update_post_meta($post->ID, '_kusuma_swatch_extraction', $meta['extraction']);
        update_post_meta($post->ID, '_kusuma_swatch_fabric', $meta['fabric']);
        update_post_meta($post->ID, '_kusuma_swatch_mordant', $meta['mordant']);
        update_post_meta($post->ID, '_kusuma_swatch_result', $meta['result']);

        wp_set_object_terms($post->ID, $meta['dye_term'], 'dye_source');
        wp_set_object_terms($post->ID, $meta['fabric_term'], 'fabric_type');
        wp_set_object_terms($post->ID, $meta['color_term'], 'color_family');

        echo "Updated metadata and terms for Color Archive: {$post->post_title}\n";
    }
}

// 3. Create or Publish Pages (Care Guide, FAQ, Shipping & Returns, Privacy Policy)
$pages_to_create = array(
    'care-guide' => array(
        'title' => 'Care Guide - Panduan Perawatan Kain Alami',
        'template' => 'page-care-guide.php',
        'content' => 'Panduan lengkap merawat produk tekstil pewarna alami Kusuma Craft.'
    ),
    'faq' => array(
        'title' => 'FAQ - Pertanyaan Yang Sering Diajukan',
        'template' => 'page-faq.php',
        'content' => 'Jawaban atas pertanyaan seputar produk, pewarnaan alami, pengiriman, dan workshop Kusuma.'
    ),
    'shipping-returns' => array(
        'title' => 'Kebijakan Pengiriman & Pengembalian',
        'template' => 'default',
        'content' => '<h2>Kebijakan Pengiriman</h2><p>Semua pesanan Kusuma Craft dikemas dengan kemasan ramah lingkungan bebas plastik. Pengiriman dilakukan dalam 1-3 hari kerja setelah pembayaran terkonfirmasi.</p><h2>Kebijakan Pengembalian & Garansi Karya</h2><p>Karena setiap produk kami diwarnai dan dibuat secara manual (*handmade slow craft*), variasi warna halus dan tekstur unik adalah karakter asli karya, bukan cacat produksi. Namun, jika Anda menerima produk dengan kerusakan jahitan atau kesalahan pengiriman item, kami menyediakan penggantian produk dalam 7 hari setelah barang diterima.</p>'
    ),
    'privacy-policy' => array(
        'title' => 'Kebijakan Privasi',
        'template' => 'default',
        'content' => '<p>Kusuma Craft menghargai privasi informasi pribadi Anda. Informasi yang kami kumpulkan saat pemesanan atau pendaftaran newsletter hanya digunakan untuk proses pengiriman, layanan pelanggan, dan pembaruan informasi laboratorium warna kami.</p>'
    )
);

foreach ($pages_to_create as $slug => $data) {
    $existing = get_page_by_path($slug, OBJECT, 'page');
    if ($existing) {
        wp_update_post(array(
            'ID' => $existing->ID,
            'post_status' => 'publish',
            'post_title' => $data['title'],
            'post_content' => $data['content']
        ));
        if ($data['template'] !== 'default') {
            update_post_meta($existing->ID, '_wp_page_template', $data['template']);
        }
        echo "Updated page: {$data['title']}\n";
    } else {
        $new_id = wp_insert_post(array(
            'post_title' => $data['title'],
            'post_name' => $slug,
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_content' => $data['content']
        ));
        if ($data['template'] !== 'default') {
            update_post_meta($new_id, '_wp_page_template', $data['template']);
        }
        echo "Created page: {$data['title']}\n";
    }
}

// 4. Update Journal Posts & Ensure Categories
$cat_research = wp_create_category('Research Notes');
$cat_color = wp_create_category('Color Notes');
$cat_workshop = wp_create_category('Workshop Stories');

$pisn_post = get_page_by_path('pisn-2026', OBJECT, 'post');
if ($pisn_post) {
    wp_update_post(array(
        'ID' => $pisn_post->ID,
        'post_title' => 'Dari Limbah Dapur ke Warna Tekstil: Catatan Riset PISN 2026',
        'post_category' => array($cat_research),
        'post_content' => '<h2>Inovasi Pewarna Tekstil Berbasis Limbah Organik Domestik</h2>
<p><em>Untuk Pengembangan Praktik Seni Tekstil dan Kriya Berkelanjutan</em></p>
<p>Di Kusuma, warna tidak pernah dilihat sekadar sebagai aspek estetika visual di permukaan kain. Warna adalah jejak material, memori proses, dan wujud dialog antara tangan pengrajin dengan sisa-sisa alam di sekitarnya.</p>
<p>Melalui Program <strong>PISN 2026</strong>, Kusuma melakukan eksplorasi mendalam terhadap potensi ekstraksi pigmen warna alami dari limbah organik domestik. Kulit buah manggis, kulit bawang merah dapur, biji alpukat, ampas teh, hingga rimpang lokal dieksplorasi kembali menggunakan teknik ekstraksi ramah lingkungan tanpa bahan kimia berbahaya.</p>
<h3>Eksplorasi Material & Siklus Ekstraksi</h3>
<p>Proses eksperimen riset ini melalui siklus berkesinambungan: <strong>Collect &rarr; Extract &rarr; Dye &rarr; Dry &rarr; Document &rarr; Craft</strong>. Setiap tahap dicatat ketat dalam laboratorium kriya kami untuk mengukur tingkat ketahanan luntur warna (colorfastness), kecocokan pada serat alam (linen, sutra, katun organik), serta potensi pengembangan produk kriya bernilai tinggi.</p>
<blockquote>"Program PISN 2026 membuktikan bahwa bahan buangan dapur tangga dapat kembali ke dalam siklus kehidupan sebagai objek kriya yang bernyawa dan beretika."</blockquote>
<h3>Kontribusi Terhadap Katalog & Keberlanjutan</h3>
<p>Hasil dari riset PISN 2026 ini secara langsung memperkaya basis data <em>Color Archive</em> Kusuma dan diaplikasikan ke dalam koleksi kain artisan, wearable scarves, hingga kit edukasi DIY untuk masyarakat urban.</p>'
    ));
    echo "Updated PISN 2026 article content.\n";
}

$onion_post = get_page_by_path('onion-skin', OBJECT, 'post');
if ($onion_post) {
    wp_update_post(array(
        'ID' => $onion_post->ID,
        'post_category' => array($cat_color),
        'post_content' => '<p>Kulit luar bawang merah yang sering kali berakhir di tempat sampah dapur ternyata menyimpan keajaiban pigmen warna tan hangat hingga keemasan (*warm honey gold*). Eksperimen perebusan lambat menghasilkan larutan ekstraksi yang sangat responsif terhadap serat linen organik.</p><p>Dalam artikel ini, kami mendokumentasikan langkah demi langkah ekstraksi kulit bawang merah serta saran pencucian agar warna alami tetap terjaga keindahannya sepanjang waktu.</p>'
    ));
}

$urban_post = get_page_by_path('urban-workshop', OBJECT, 'post');
if ($urban_post) {
    wp_update_post(array(
        'ID' => $urban_post->ID,
        'post_category' => array($cat_workshop),
        'post_content' => '<p>Menghadirkan kesadaran <em>slow living</em> di tengah hiruk-pikuk kehidupan perkotaan adalah misi utama dari kelas workshop Kusuma. Melalui sesi interaktif pencelupan pewarna alami dari limbah dapur, para peserta diajak untuk melambatkan tempo, berinteraksi langsung dengan serat alam, dan membuat produk kriya personal mereka sendiri.</p>'
    ));
}

// 5. Update WooCommerce Products Details & Meta
$scarf = get_page_by_path('kusuma-natural-scarf-terracotta', OBJECT, 'product');
if ($scarf) {
    update_post_meta($scarf->ID, '_regular_price', '385000');
    update_post_meta($scarf->ID, '_price', '385000');
    update_post_meta($scarf->ID, '_stock_status', 'instock');
    update_post_meta($scarf->ID, '_stock', '15');
    update_post_meta($scarf->ID, '_sku', 'KUS-SCF-01');
    update_post_meta($scarf->ID, '_kusuma_dye_source', 'Kulit Bawang Merah & Kayu Secang');
    update_post_meta($scarf->ID, '_kusuma_material', '100% Organic Linen Handwoven');
    update_post_meta($scarf->ID, '_kusuma_care', 'Cuci tangan dengan lerak alami, jemur di tempat teduh.');
    echo "Updated product Scarf\n";
}

$kit = get_page_by_path('botanical-color-diy-workshop-kit', OBJECT, 'product');
if ($kit) {
    update_post_meta($kit->ID, '_regular_price', '250000');
    update_post_meta($kit->ID, '_price', '250000');
    update_post_meta($kit->ID, '_stock_status', 'instock');
    update_post_meta($kit->ID, '_stock', '25');
    update_post_meta($kit->ID, '_sku', 'KUS-KIT-01');
    update_post_meta($kit->ID, '_kusuma_dye_source', 'Ekstrak Kulit Bawang & Kunyit Bubuk');
    update_post_meta($kit->ID, '_kusuma_material', 'Kain Katun Pre-mordanted & Peralatan DIY');
    update_post_meta($kit->ID, '_kusuma_care', 'Ikuti panduan booklet DIY di dalam kemasan.');
    echo "Updated product DIY Kit\n";
}

$bundle = get_page_by_path('raw-silk-shibori-fabric-bundle', OBJECT, 'product');
if ($bundle) {
    update_post_meta($bundle->ID, '_regular_price', '420000');
    update_post_meta($bundle->ID, '_price', '420000');
    update_post_meta($bundle->ID, '_stock_status', 'instock');
    update_post_meta($bundle->ID, '_stock', '8');
    update_post_meta($bundle->ID, '_sku', 'KUS-FAB-01');
    update_post_meta($bundle->ID, '_kusuma_dye_source', 'Kulit Manggis & Tunjung');
    update_post_meta($bundle->ID, '_kusuma_material', 'Raw Silk (Sutra Mentah 2 Meter)');
    update_post_meta($bundle->ID, '_kusuma_care', 'Dry clean atau cuci lembut tangan dengan lerak.');
    echo "Updated product Fabric Bundle\n";
}

// 6. Update Workshop Posts
$ws1 = get_page_by_path('intro-natural-dyeing', OBJECT, 'workshop');
if ($ws1) {
    update_post_meta($ws1->ID, '_kusuma_workshop_date', 'Sabtu, 15 Agustus 2026 (09.00 - 13.00 WIB)');
    update_post_meta($ws1->ID, '_kusuma_workshop_location', 'Kusuma Craft Lab Studio, Yogyakarta');
    update_post_meta($ws1->ID, '_kusuma_workshop_price', 'Rp350.000 / Peserta');
    echo "Updated Workshop 1\n";
}

$ws2 = get_page_by_path('traditional-shibori', OBJECT, 'workshop');
if ($ws2) {
    update_post_meta($ws2->ID, '_kusuma_workshop_date', 'Sabtu, 22 Agustus 2026 (10.00 - 15.00 WIB)');
    update_post_meta($ws2->ID, '_kusuma_workshop_location', 'Kusuma Craft Lab Studio, Yogyakarta');
    update_post_meta($ws2->ID, '_kusuma_workshop_price', 'Rp450.000 / Peserta');
    echo "Updated Workshop 2\n";
}

// 7. Configure WordPress Navigation Menus
$primary_menu_name = 'Primary Navigation Menu';
$primary_menu_exists = wp_get_nav_menu_object($primary_menu_name);

if (!$primary_menu_exists) {
    $primary_menu_id = wp_create_nav_menu($primary_menu_name);
} else {
    $primary_menu_id = $primary_menu_exists->term_id;
}

// Clear existing items in primary menu to prevent duplicates
$menu_items = wp_get_nav_menu_items($primary_menu_id);
if ($menu_items) {
    foreach ($menu_items as $item) {
        wp_delete_post($item->ID, true);
    }
}

// Add menu items to Primary Menu
$nav_items = array(
    array('title' => 'Shop', 'url' => home_url('/shop/')),
    array('title' => 'Color Archive', 'url' => home_url('/color-archive/')),
    array('title' => 'Process', 'url' => home_url('/process/')),
    array('title' => 'Journal', 'url' => home_url('/journal/')),
    array('title' => 'Workshop', 'url' => home_url('/workshops/')),
    array('title' => 'Custom', 'url' => home_url('/custom/')),
    array('title' => 'About', 'url' => home_url('/about/'))
);

foreach ($nav_items as $order => $item) {
    wp_update_nav_menu_item($primary_menu_id, 0, array(
        'menu-item-title' => $item['title'],
        'menu-item-url' => $item['url'],
        'menu-item-status' => 'publish',
        'menu-item-type' => 'custom'
    ));
}

// Assign to primary location
$locations = get_nav_menu_locations();
$locations['primary'] = $primary_menu_id;
set_theme_mod('nav_menu_locations', $locations);

echo "Primary menu configured and assigned successfully.\n";

// Flush rewrite rules
flush_rewrite_rules();
echo "Rewrite rules flushed.\n";

echo "\n=== KUSUMA CRAFT DATA COMPLETION FINISHED ===\n";
