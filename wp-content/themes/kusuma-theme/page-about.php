<?php
/**
 * Template Name: About Page
 *
 * @package Kusuma_Craft
 */

get_header();
?>

<section class="section" style="background-color: var(--color-white); border-bottom: 1px solid var(--color-border);">
    <div class="container-narrow" style="text-align: center; padding: var(--spacing-lg) 0;">
        <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent); font-weight: bold; display: block; margin-bottom: var(--spacing-sm);">Our Story & Legal Identity</span>
        <h1 class="page-title" style="margin-bottom: var(--spacing-md);">Mengenal PT KRIYA CITA KUSUMA</h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: var(--color-dark-grey);">Kusuma Craft adalah laboratorium kriya dan tekstil berkelanjutan di bawah naungan PT KRIYA CITA KUSUMA. Kami mendedikasikan diri untuk meriset pewarna alami dari limbah organik domestik dan merancang objek fungsional bernilai seni tinggi.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-lg); align-items: center;">
            <!-- Left: Text content -->
            <div>
                <h2 style="margin-bottom: var(--spacing-md);">The Maker's Touch</h2>
                <p>Dipimpin oleh <strong>DIAH KUSUMAWARDANI</strong> selaku Owner & Director, Kusuma lahir dari keinginan untuk mengeksplorasi hubungan antara limbah rumah tangga, warna botani, dan kerajinan tangan. Setiap helai kain yang kami warnai membawa spirit DIY (*Do It Yourself*), dibuat secara personal dan intim, dekat dengan praktik seni serat serta edukasi lingkungan.</p>
                <p>Bagi kami, warna botani bukan hanya soal keindahan visual. Ini adalah arsip hidup Nusantara, sebuah cara untuk mengingat kembali bagaimana leluhur kita memanfaatkan tumbuhan di sekitar mereka, yang kini kami kembangkan dengan inovasi pemanfaatan limbah sisa dapur (*kitchen waste*).</p>
            </div>

            <!-- Right: Image -->
            <div>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/hero_bg.png' ); ?>" alt="DIAH KUSUMAWARDANI - Kusuma Maker" style="box-shadow: var(--shadow-medium); border: 8px solid var(--color-white);">
            </div>
        </div>
    </div>
</section>

<!-- Legal Identity & Studio Address Section -->
<section class="section" style="background-color: var(--color-white); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
    <div class="container-narrow">
        <div style="background-color: var(--color-off-white); border: 1px solid var(--color-border); padding: var(--spacing-lg); box-shadow: var(--shadow-subtle);">
            <h2 style="font-size: 1.4rem; color: var(--color-primary-navy); border-bottom: 2px solid var(--color-primary-navy); padding-bottom: 8px; margin-bottom: var(--spacing-md); text-align: center;">Profil Perusahaan & Informasi Resmi</h2>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-md); font-size: 0.95rem; line-height: 1.7;">
                <div>
                    <h3 style="font-size: 1.1rem; color: var(--color-primary-navy); margin-bottom: 6px;">Identitas Badan Usaha</h3>
                    <p style="margin-bottom: 6px;"><strong>Company Name:</strong><br>PT KRIYA CITA KUSUMA</p>
                    <p style="margin-bottom: 6px;"><strong>Owner / Director:</strong><br>DIAH KUSUMAWARDANI</p>
                    <p style="margin-bottom: 0;"><strong>Business Address:</strong><br>KUSUMA CRAFT STUDIO - Griya Pipit 6 Blok A5/16-17, RT 03/RW 013, Pondok Kacang Timur, Pondok Aren, Tangerang Selatan, Banten - 15226</p>
                </div>
                
                <div>
                    <h3 style="font-size: 1.1rem; color: var(--color-primary-navy); margin-bottom: 6px;">Pembayaran & Shipping</h3>
                    <p style="margin-bottom: 6px;"><strong>Bank Name:</strong> BANK RAKYAT INDONESIA (BRI)<br>
                    <strong>Branch:</strong> KC Bintaro<br>
                    <strong>Account Number:</strong> 0393-01-004141-56-4<br>
                    <strong>Account Holder:</strong> PT KRIYA CITA KUSUMA</p>
                    <p style="margin-bottom: 6px;"><strong>Metode Wallet / Payment:</strong><br>Transfer Rekening Bank & QRIS</p>
                    <p style="margin-bottom: 0;"><strong>Jasa Pengiriman Resmi:</strong><br>Kurir JNE (Express / Regular)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background-color: var(--color-soft-beige); border-bottom: 1px solid var(--color-border);">
    <div class="container">
        <header style="text-align: center; margin-bottom: var(--spacing-lg);">
            <h2>Nilai-Nilai Dasar Kami</h2>
        </header>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: var(--spacing-md);">
            <div style="background-color: var(--color-white); padding: var(--spacing-md); border: 1px solid var(--color-border); border-radius: 0;">
                <h3 style="font-size: 1.2rem; color: var(--color-primary-navy); margin-bottom: var(--spacing-sm);">Sadar Material</h3>
                <p style="font-size: 0.95rem; line-height: 1.6;">Kami melacak kembali asal-usul setiap serat kain dan bahan pewarna, memprioritaskan serat organik alami serta limbah domestik untuk meminimalkan dampak lingkungan.</p>
            </div>

            <div style="background-color: var(--color-white); padding: var(--spacing-md); border: 1px solid var(--color-border); border-radius: 0;">
                <h3 style="font-size: 1.2rem; color: var(--color-primary-navy); margin-bottom: var(--spacing-sm);">Pendidikan Berkelanjutan</h3>
                <p style="font-size: 0.95rem; line-height: 1.6;">Melalui workshop natural dye dan program DIY, kami membagikan pengetahuan tentang cara berkriya yang ramah lingkungan kepada komunitas urban.</p>
            </div>

            <div style="background-color: var(--color-white); padding: var(--spacing-md); border: 1px solid var(--color-border); border-radius: 0;">
                <h3 style="font-size: 1.2rem; color: var(--color-primary-navy); margin-bottom: var(--spacing-sm);">Slow Craft</h3>
                <p style="font-size: 0.95rem; line-height: 1.6;">Kami percaya pada proses lambat, perhatian pada detail, dan sentuhan tangan manusia yang membuat setiap objek kriya kami unik dan tiada duanya.</p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
