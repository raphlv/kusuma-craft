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
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php 
                $logo_path = get_template_directory_uri() . '/images/logo.png?v=2';
                ?>
                <img src="<?php echo esc_url( $logo_path ); ?>" alt="<?php bloginfo( 'name' ); ?>">
            </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="<?php esc_attr_e( 'Toggle Navigation Menu', 'kusuma-theme' ); ?>" aria-expanded="false" aria-controls="site-navigation">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <!-- Navigation Menu -->
        <nav id="site-navigation" class="site-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'fallback_cb'    => 'kusuma_fallback_menu',
            ) );
            
            // Fallback menu callback if no menu is assigned in WP Admin
            function kusuma_fallback_menu() {
                echo '<ul>';
                echo '<li><a href="' . esc_url( home_url( '/shop/' ) ) . '">Shop</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/color-archive/' ) ) . '">Color Archive</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/process/' ) ) . '">Process</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/journal/' ) ) . '">Journal</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/workshops/' ) ) . '">Workshop</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/custom/' ) ) . '">Custom</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/about/' ) ) . '">About</a></li>';
                echo '</ul>';
            }
            ?>
        </nav>

        <!-- Header Actions -->
        <div class="site-header-actions">
            <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                <!-- Cart Link -->
                <a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'kusuma-theme' ); ?>">
                    <span class="dashicons dashicons-cart" style="font-size: 20px; width: 20px; height: 20px; vertical-align: middle; color: var(--color-primary-navy);"></span>
                    <?php if ( WC()->cart->get_cart_contents_count() > 0 ) : ?>
                        <span class="cart-contents-count" style="background-color: var(--color-accent); color: white; border-radius: 50%; padding: 0.1rem 0.4rem; font-size: 0.75rem; font-weight: bold; margin-left: 2px;">
                            <?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?>
                        </span>
                    <?php endif; ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</header>
