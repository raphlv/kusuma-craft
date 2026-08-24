<?php
/**
 * The header for our theme
 *
 * @package Kusuma_Craft
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="container-wide">
        <!-- Logo -->
        <div class="site-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?> - Beranda">
                <?php 
                $logo_path = get_template_directory_uri() . '/images/logo.png?v=2';
                ?>
                <img src="<?php echo esc_url( $logo_path ); ?>" alt="<?php bloginfo( 'name' ); ?>">
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav id="site-navigation" class="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'kusuma-theme' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'fallback_cb'    => 'kusuma_fallback_menu',
            ) );
            ?>

            <!-- Mobile Drawer Extra Account & Cart Links -->
            <div class="mobile-nav-actions">
                <?php if ( class_exists( 'WooCommerce' ) ) : 
                    $myaccount_page_url = wc_get_page_permalink( 'myaccount' );
                    $cart_page_url      = wc_get_cart_url();
                    $cart_count         = WC()->cart ? WC()->cart->get_cart_contents_count() : 0;
                    $is_logged_in       = is_user_logged_in();
                    $current_user       = wp_get_current_user();
                ?>
                    <a href="<?php echo esc_url( $myaccount_page_url ); ?>" class="mobile-nav-action-link">
                        <svg class="mobile-nav-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span><?php echo $is_logged_in ? sprintf( esc_html__( 'Akun Saya (%s)', 'kusuma-theme' ), esc_html( $current_user->display_name ) ) : esc_html__( 'Masuk / Daftar Akun', 'kusuma-theme' ); ?></span>
                    </a>
                    <a href="<?php echo esc_url( $cart_page_url ); ?>" class="mobile-nav-action-link">
                        <svg class="mobile-nav-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        <span><?php esc_html_e( 'Keranjang Belanja', 'kusuma-theme' ); ?> (<?php echo esc_html( $cart_count ); ?>)</span>
                    </a>
                <?php endif; ?>
            </div>
        </nav>

        <!-- Right Header Area (Account, Cart & Mobile Hamburger) -->
        <div class="site-header-right">
            <!-- Header Actions: Akun & Keranjang -->
            <div class="site-header-actions">
                <?php if ( class_exists( 'WooCommerce' ) ) : 
                    $myaccount_page_url = wc_get_page_permalink( 'myaccount' );
                    $cart_page_url      = wc_get_cart_url();
                    $cart_count         = WC()->cart ? WC()->cart->get_cart_contents_count() : 0;
                    $is_logged_in       = is_user_logged_in();
                    $current_user       = wp_get_current_user();
                ?>
                    <!-- Account Link -->
                    <a class="header-action-btn header-account-btn" href="<?php echo esc_url( $myaccount_page_url ); ?>" title="<?php echo $is_logged_in ? esc_attr( sprintf( __( 'Akun Saya (%s)', 'kusuma-theme' ), $current_user->display_name ) ) : esc_attr__( 'Masuk / Daftar Akun', 'kusuma-theme' ); ?>" aria-label="<?php esc_attr_e( 'Akun Saya', 'kusuma-theme' ); ?>">
                        <div class="header-action-icon-wrap">
                            <svg class="header-action-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <span class="header-action-text"><?php echo $is_logged_in ? esc_html( $current_user->display_name ) : esc_html__( 'Akun', 'kusuma-theme' ); ?></span>
                    </a>

                    <!-- Cart Link with Badge -->
                    <a class="header-action-btn cart-contents" id="header-cart-btn" href="<?php echo esc_url( $cart_page_url ); ?>" title="<?php esc_attr_e( 'Lihat Keranjang Belanja', 'kusuma-theme' ); ?>" aria-label="<?php esc_attr_e( 'Keranjang Belanja', 'kusuma-theme' ); ?>">
                        <div class="header-action-icon-wrap">
                            <svg class="header-action-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                            <span class="cart-contents-count <?php echo ( $cart_count > 0 ) ? 'has-items' : 'is-zero'; ?>" id="header-cart-count">
                                <?php echo esc_html( $cart_count ); ?>
                            </span>
                        </div>
                        <span class="header-action-text"><?php esc_html_e( 'Keranjang', 'kusuma-theme' ); ?></span>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="<?php esc_attr_e( 'Buka Navigasi Menu', 'kusuma-theme' ); ?>" aria-expanded="false" aria-controls="site-navigation">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </div>
    </div>
</header>
