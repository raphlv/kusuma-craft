<?php
/**
 * Kusuma Craft Theme functions and definitions
 *
 * @package Kusuma_Craft
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/* ==========================================================================
   THEME SETUP
   ========================================================================== */
function kusuma_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Register Nav Menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'kusuma-theme' ),
        'footer'  => esc_html__( 'Footer Menu', 'kusuma-theme' ),
    ) );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Declare WooCommerce Support
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'kusuma_theme_setup' );

/* ==========================================================================
   ENQUEUE SCRIPTS & STYLES
   ========================================================================== */
function kusuma_theme_scripts() {
    // Google Fonts: Playfair Display (Serif) & Raleway (Sans-Serif)
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap', array(), null );

    // Theme Main Stylesheet
    wp_enqueue_style( 'kusuma-theme-style', get_stylesheet_uri(), array( 'google-fonts' ), '1.0.0' );

    // Custom Frontend Script
    wp_enqueue_script( 'kusuma-theme-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'kusuma_theme_scripts' );

/* ==========================================================================
   REGISTER CUSTOM POST TYPE: COLOR ARCHIVE
   ========================================================================== */
function kusuma_register_color_archive_cpt() {
    $labels = array(
        'name'               => _x( 'Color Archive', 'post type general name', 'kusuma-theme' ),
        'singular_name'      => _x( 'Color Swatch', 'post type singular name', 'kusuma-theme' ),
        'menu_name'          => _x( 'Color Archive', 'admin menu', 'kusuma-theme' ),
        'name_admin_bar'     => _x( 'Color Swatch', 'add new on admin bar', 'kusuma-theme' ),
        'add_new'            => _x( 'Add New Swatch', 'color_archive', 'kusuma-theme' ),
        'add_new_item'       => __( 'Add New Color Swatch', 'kusuma-theme' ),
        'new_item'           => __( 'New Color Swatch', 'kusuma-theme' ),
        'edit_item'          => __( 'Edit Color Swatch', 'kusuma-theme' ),
        'view_item'          => __( 'View Color Swatch', 'kusuma-theme' ),
        'all_items'          => __( 'All Swatches', 'kusuma-theme' ),
        'search_items'       => __( 'Search Swatches', 'kusuma-theme' ),
        'not_found'          => __( 'No swatches found.', 'kusuma-theme' ),
        'not_found_in_trash' => __( 'No swatches found in Trash.', 'kusuma-theme' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'color-archive' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-art',
        'show_in_rest'       => true, // Enable Block Editor
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
    );

    register_post_type( 'color_archive', $args );
}
add_action( 'init', 'kusuma_register_color_archive_cpt' );

/* ==========================================================================
   REGISTER CUSTOM POST TYPE: WORKSHOP
   ========================================================================== */
function kusuma_register_workshop_cpt() {
    $labels = array(
        'name'               => _x( 'Workshops', 'post type general name', 'kusuma-theme' ),
        'singular_name'      => _x( 'Workshop', 'post type singular name', 'kusuma-theme' ),
        'menu_name'          => _x( 'Workshops', 'admin menu', 'kusuma-theme' ),
        'name_admin_bar'     => _x( 'Workshop', 'add new on admin bar', 'kusuma-theme' ),
        'add_new'            => _x( 'Add New Workshop', 'workshop', 'kusuma-theme' ),
        'add_new_item'       => __( 'Add New Workshop', 'kusuma-theme' ),
        'new_item'           => __( 'New Workshop', 'kusuma-theme' ),
        'edit_item'          => __( 'Edit Workshop', 'kusuma-theme' ),
        'view_item'          => __( 'View Workshop', 'kusuma-theme' ),
        'all_items'          => __( 'All Workshops', 'kusuma-theme' ),
        'search_items'       => __( 'Search Workshops', 'kusuma-theme' ),
        'not_found'          => __( 'No workshops found.', 'kusuma-theme' ),
        'not_found_in_trash' => __( 'No workshops found in Trash.', 'kusuma-theme' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'workshops' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-groups',
        'show_in_rest'       => true, // Enable Block Editor
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
    );

    register_post_type( 'workshop', $args );
}
add_action( 'init', 'kusuma_register_workshop_cpt' );

/* ==========================================================================
   REGISTER CUSTOM TAXONOMIES FOR COLOR ARCHIVE
   ========================================================================== */
function kusuma_register_color_taxonomies() {
    // 1. Color Family (Blue, Brown, Yellow, Muted, etc.)
    register_taxonomy( 'color_family', 'color_archive', array(
        'label'        => __( 'Color Family', 'kusuma-theme' ),
        'rewrite'      => array( 'slug' => 'color-family' ),
        'hierarchical' => true,
        'show_in_rest' => true,
    ) );

    // 2. Dye Source (Kitchen Waste, Leaves, Spices, Fruit Skins, etc.)
    register_taxonomy( 'dye_source', 'color_archive', array(
        'label'        => __( 'Dye Source', 'kusuma-theme' ),
        'rewrite'      => array( 'slug' => 'dye-source' ),
        'hierarchical' => true,
        'show_in_rest' => true,
    ) );

    // 3. Fabric Type (Cotton, Linen, Silk, Rayon, etc.)
    register_taxonomy( 'fabric_type', 'color_archive', array(
        'label'        => __( 'Fabric Type', 'kusuma-theme' ),
        'rewrite'      => array( 'slug' => 'fabric-type' ),
        'hierarchical' => true,
        'show_in_rest' => true,
    ) );
}
add_action( 'init', 'kusuma_register_color_taxonomies' );

/* ==========================================================================
   WOOCOMMERCE INTEGRATION UTILITIES
   ========================================================================== */
// Unhook default WooCommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

// Hook custom wrappers for our theme structure
function kusuma_woocommerce_wrapper_start() {
    echo '<section class="section"><div class="container">';
}
add_action( 'woocommerce_before_main_content', 'kusuma_woocommerce_wrapper_start', 10 );

function kusuma_woocommerce_wrapper_end() {
    echo '</div></section>';
}
add_action( 'woocommerce_after_main_content', 'kusuma_woocommerce_wrapper_end', 10 );

// Change loop columns to 3
function kusuma_loop_columns() {
    return 3;
}
add_filter( 'loop_shop_columns', 'kusuma_loop_columns', 999 );

// Output Custom Product Metadata (Natural Dye Source, Material, Care Guide) in Single Product
function kusuma_show_product_custom_meta() {
    global $product;
    if ( ! $product ) return;

    $dye_source = get_post_meta( $product->get_id(), '_kusuma_dye_source', true );
    $material   = get_post_meta( $product->get_id(), '_kusuma_material', true );
    $care       = get_post_meta( $product->get_id(), '_kusuma_care', true );

    if ( $dye_source || $material || $care ) {
        echo '<div style="background-color: var(--color-white); border: 1px solid var(--color-border); padding: var(--spacing-md); margin: var(--spacing-md) 0; font-size: 0.9rem;">';
        echo '<h4 style="font-size: 1rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-primary-navy); margin-bottom: 0.5rem; border-bottom: 1px solid var(--color-border); padding-bottom: 4px;">Spesifikasi Natural Dye & Material</h4>';
        if ( $dye_source ) {
            echo '<div style="margin-bottom: 4px;"><strong>Sumber Pewarna:</strong> ' . esc_html( $dye_source ) . '</div>';
        }
        if ( $material ) {
            echo '<div style="margin-bottom: 4px;"><strong>Material Serat:</strong> ' . esc_html( $material ) . '</div>';
        }
        if ( $care ) {
            echo '<div style="margin-bottom: 4px;"><strong>Perawatan:</strong> ' . esc_html( $care ) . '</div>';
        }
        echo '</div>';
    }
}
add_action( 'woocommerce_single_product_summary', 'kusuma_show_product_custom_meta', 25 );

