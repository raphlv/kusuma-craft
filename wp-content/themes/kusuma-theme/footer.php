<?php
/**
 * The template for displaying the footer
 *
 * @package Kusuma_Craft
 */
?>

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="site-footer-grid" style="grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: var(--spacing-lg);">
            <!-- Col 1: Legal & Business Identity -->
            <div class="footer-col footer-col-about">
                <?php 
                $logogram_path = get_template_directory_uri() . '/images/logogram.png';
                ?>
                <img src="<?php echo esc_url( $logogram_path ); ?>" alt="Kusuma Logogram" style="height: 36px; width: auto; margin-bottom: var(--spacing-sm); opacity: 0.8;">
                <h3 style="margin-bottom: 4px; font-size: 1.1rem; color: var(--color-off-white);">PT KRIYA CITA KUSUMA</h3>
                <p style="font-size: 0.82rem; color: var(--color-warm-neutral); margin-bottom: 6px;"><strong>Owner / Director:</strong> DIAH KUSUMAWARDANI</p>
                <p style="font-size: 0.82rem; color: var(--color-warm-neutral); line-height: 1.5; margin-bottom: var(--spacing-sm);">
                    <strong>Business Address:</strong><br>
                    KUSUMA CRAFT STUDIO - Griya Pipit 6 Blok A5/16-17, RT 03/RW 013, Pondok Kacang Timur, Pondok Aren, Tangerang Selatan, Banten - 15226
                </p>
                <p style="font-size: 0.82rem; line-height: 1.5; opacity: 0.7;">A Living Color Archive of Indonesia. Transforming domestic organic waste into natural colors, textiles, and crafted objects.</p>
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

            <!-- Col 3: Customer Care -->
            <div class="footer-col footer-col-links">
                <h3>Customer Care</h3>
                <ul>
                    <li><a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>">Akun Saya &amp; Status Pesanan</a></li>
                    <li><a href="<?php echo esc_url( wc_get_cart_url() ); ?>">Keranjang Belanja</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/custom/' ) ); ?>">Custom &amp; Collaboration</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/care-guide/' ) ); ?>">Care Guide</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/shipping-returns/' ) ); ?>">Kebijakan Pengiriman &amp; Garansi</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a></li>
                </ul>
            </div>

            <!-- Col 4: Payment & Shipping Credentials -->
            <div class="footer-col footer-col-payment-shipping">
                <h3>Pembayaran & Pengiriman</h3>
                <div style="font-size: 0.82rem; color: var(--color-warm-neutral); line-height: 1.6; margin-bottom: var(--spacing-sm);">
                    <div style="margin-bottom: var(--spacing-xs); background: rgba(255,255,255,0.05); padding: 8px 12px; border-left: 3px solid var(--color-terracotta);">
                        <strong style="color: var(--color-off-white); display: block; margin-bottom: 2px;">BANK RAKYAT INDONESIA</strong>
                        Branch: KC Bintaro<br>
                        No. Rek: <strong>0393-01-004141-56-4</strong><br>
                        a.n. PT KRIYA CITA KUSUMA<br>
                        <span style="font-size: 0.78rem; opacity: 0.8; font-style: italic;">(Menerima Rekening & QRIS)</span>
                    </div>
                    <div style="background: rgba(255,255,255,0.05); padding: 8px 12px; border-left: 3px solid var(--color-warm-neutral);">
                        <strong style="color: var(--color-off-white); display: block; margin-bottom: 2px;">Mitra Pengiriman Resmi</strong>
                        Kurir <strong>JNE</strong> (Express / Regular)<br>
                        <span style="font-size: 0.78rem; opacity: 0.8;">Dikirim langsung dari Studio Tangerang Selatan</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="copyright">
                &copy; <?php echo date( 'Y' ); ?> PT KRIYA CITA KUSUMA. All Rights Reserved. Made with care.
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
