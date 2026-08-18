<?php
/**
 * The template for displaying the footer
 *
 * @package Kusuma_Craft
 */
?>

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="site-footer-grid">
            <!-- Col 1: About Brand -->
            <div class="footer-col footer-col-about">
                <?php 
                $logogram_path = get_template_directory_uri() . '/images/logogram.png';
                ?>
                <img src="<?php echo esc_url( $logogram_path ); ?>" alt="Kusuma Logogram" style="height: 36px; width: auto; margin-bottom: var(--spacing-sm); opacity: 0.8;">
                <h3>Kusuma Craft</h3>
                <p>A Living Color Archive of Indonesia. Transforming domestic organic waste into natural colors, textiles, and crafted objects.</p>
            </div>

            <!-- Col 2: Navigation Links -->
            <div class="footer-col footer-col-links">
                <h3>Explore</h3>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">Shop</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/color-archive/' ) ); ?>">Color Archive</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>">Process</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>">Journal</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/workshops/' ) ); ?>">Workshops</a></li>
                </ul>
            </div>

            <!-- Col 3: Customer Support -->
            <div class="footer-col footer-col-links">
                <h3>Customer Care</h3>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/custom/' ) ); ?>">Custom & Collaboration</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/care-guide/' ) ); ?>">Care Guide</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a></li>
                    <li><a href="https://instagram.com" target="_blank" rel="noopener">Instagram</a></li>
                </ul>
            </div>

            <!-- Col 4: Newsletter -->
            <div class="footer-col footer-col-newsletter">
                <h3>Notes from the Color Lab</h3>
                <p>Subscribe to receive updates on new collections, workshop announcements, and botanical color experiments.</p>
                <form class="newsletter-form" action="#" method="post" onsubmit="event.preventDefault(); alert('Terima kasih telah berlangganan!');">
                    <input type="email" placeholder="Alamat Email Anda" required>
                    <button type="submit">→</button>
                </form>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="copyright">
                &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved. Made with care.
            </div>
            <div class="footer-credits">
                Inovasi Pewarna Tekstil Berbasis Limbah Organik Domestik (PISN 2026)
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
