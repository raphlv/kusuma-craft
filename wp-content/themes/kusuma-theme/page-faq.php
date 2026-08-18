<?php
/**
 * Template Name: FAQ Page
 *
 * @package Kusuma_Craft
 */

get_header();
?>

<section class="section" style="background-color: var(--color-white); border-bottom: 1px solid var(--color-border);">
    <div class="container-narrow" style="text-align: center; padding: var(--spacing-lg) 0;">
        <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent); font-weight: bold; display: block; margin-bottom: var(--spacing-sm);">Pusat Bantuan & Pertanyaan</span>
        <h1 class="page-title" style="margin-bottom: var(--spacing-md);">Pertanyaan Yang Sering Diajukan (FAQ)</h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: var(--color-dark-grey);">Temukan jawaban seputar material pewarna alami limbah dapur, proses pesanan, pengiriman, hingga kemitraan workshop.</p>
    </div>
</section>

<section class="section">
    <div class="container-narrow">
        <div class="faq-accordion-wrapper">
            
            <!-- Category 1: Products & Natural Dye -->
            <h2 style="font-size: 1.3rem; margin-bottom: var(--spacing-md); color: var(--color-primary-navy); border-bottom: 2px solid var(--color-primary-navy); padding-bottom: 5px;">Produk & Pewarnaan Alami</h2>

            <div class="faq-item">
                <button class="faq-question">
                    <span>Apakah warna kain alami Kusuma akan mudah luntur saat dicuci?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Produk Kusuma melewati proses mordanting (*pengikatan pigmen*) serta perebusan terkontrol berulang kali untuk memastikan ketahanan luntur warna (*colorfastness*). Selama Anda merawat kain sesuai dengan <em>Care Guide</em> (menggunakan sabun lerak netral dan menjemur di tempat teduh), warna alami akan bertahan dengan sangat baik.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>Mengapa terdapat sedikit variasi tone warna pada produk yang sama?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Setiap produk Kusuma dibuat secara manual (*handmade slow craft*) dari limbah organik domestik seperti kulit bawang merah, kulit manggis, dan rimpang lokal. Variasi musiman material organik dan sentuhan tangan pengrajin menghasilkan perbedaan tone yang subtle pada tiap helainya. Hal ini adalah bukti keaslian produk handmade, bukan cacat produksi.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>Apakah pewarna yang digunakan aman untuk kulit sensitif?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Ya, 100% aman. Kami hanya menggunakan bahan organik buangan dapur dan bahan botani lokal yang dikombinasikan dengan serat serat alami (linen, sutra mentah, dan katun organik) tanpa logam berat beracun atau pewarna kimia sintetis.</p>
                </div>
            </div>

            <!-- Category 2: Orders & Shipping -->
            <h2 style="font-size: 1.3rem; margin-top: var(--spacing-lg); margin-bottom: var(--spacing-md); color: var(--color-primary-navy); border-bottom: 2px solid var(--color-primary-navy); padding-bottom: 5px;">Pemesanan & Pengiriman</h2>

            <div class="faq-item">
                <button class="faq-question">
                    <span>Berapa lama proses pengolahan dan pengiriman produk?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Untuk produk <em>Ready Stock</em>, pesanan akan dikirimkan dalam 1-2 hari kerja. Untuk produk <em>Made-to-Order</em> atau pesanan custom, waktu pengerjaan pencelupan membutuhkan waktu 7-14 hari kerja tergantung kompleksitas motif dan warna.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>Metode pembayaran apa saja yang diterima?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Kami menerima pembayaran melalui Transfer Bank (BCA, Mandiri), QRIS, Virtual Account, serta e-wallet utama di Indonesia.</p>
                </div>
            </div>

            <!-- Category 3: Workshop & Collaboration -->
            <h2 style="font-size: 1.3rem; margin-top: var(--spacing-lg); margin-bottom: var(--spacing-md); color: var(--color-primary-navy); border-bottom: 2px solid var(--color-primary-navy); padding-bottom: 5px;">Workshop & Kolaborasi</h2>

            <div class="faq-item">
                <button class="faq-question">
                    <span>Bagaimana cara mendaftar workshop natural dye Kusuma?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Anda dapat memilih jadwal workshop di halaman <a href="<?php echo esc_url( home_url('/workshops/') ); ?>">Workshops</a> dan menghubungi admin kami via WhatsApp untuk mengamankan slot pendaftaran.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>Apakah Kusuma melayani pemesanan korporat (Corporate Gifting) atau riset kolaborasi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Tentu. Kami sangat terbuka untuk kolaborasi desain, paket hadiah suvenir keberlanjutan perusahaan, maupun kemitraan akademis (seperti Program PISN 2026). Silakan isi formulir di halaman <a href="<?php echo esc_url( home_url('/custom/') ); ?>">Custom & Collaboration</a>.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            const item = this.parentElement;
            const isOpen = item.classList.contains('is-open');
            
            // Close all items
            document.querySelectorAll('.faq-item').forEach(el => {
                el.classList.remove('is-open');
                const icon = el.querySelector('.faq-icon');
                if (icon) icon.textContent = '+';
            });
            
            // If was not open, open it
            if (!isOpen) {
                item.classList.add('is-open');
                const icon = this.querySelector('.faq-icon');
                if (icon) icon.textContent = '−';
            }
        });
    });
});
</script>

<?php
get_footer();
