<?php
/**
 * Template Name: Process Page
 *
 * @package Kusuma_Craft
 */

get_header();
?>

<section class="section" style="background-color: var(--color-white); border-bottom: 1px solid var(--color-border);">
    <div class="container-narrow" style="text-align: center; padding: var(--spacing-lg) 0;">
        <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent); font-weight: bold; display: block; margin-bottom: var(--spacing-sm);">Siklus Produksi</span>
        <h1 class="page-title" style="margin-bottom: var(--spacing-md);">Proses Slow Craft Pewarnaan Alami</h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: var(--color-dark-grey);">Setiap kain dan produk kriya Kusuma melewati siklus pembuatan lambat yang menghargai alam, waktu, dan ketelitian tangan.</p>
    </div>
</section>

<section class="section">
    <div class="container-narrow">
        <div style="display: flex; flex-direction: column; gap: var(--spacing-xl);">
            
            <!-- Step 1 -->
            <div style="display: grid; grid-template-columns: 80px 1fr; gap: var(--spacing-md);">
                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-primary-navy); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-family: var(--font-heading); font-weight: bold;">1</div>
                <div>
                    <h3 style="margin-top: 5px;">Collect (Mengumpulkan Limbah Dapur)</h3>
                    <p>Kami mengumpulkan limbah organik dapur seperti kulit bawang merah, kulit bawang putih, sisa buah-buahan, ampas kopi, rempah-rempah, dan dedaunan kering dari konsumsi domestik sehari-hari maupun pasar lokal.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div style="display: grid; grid-template-columns: 80px 1fr; gap: var(--spacing-md);">
                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-primary-navy); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-family: var(--font-heading); font-weight: bold;">2</div>
                <div>
                    <h3 style="margin-top: 5px;">Extract (Ekstraksi Pigmen Warna)</h3>
                    <p>Limbah yang terkumpul direbus perlahan untuk melepaskan pigmen warna botani alaminya. Proses ini membutuhkan waktu berjam-jam untuk mendapatkan kepekatan warna yang stabil tanpa bahan kimia sintetis berbahaya.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div style="display: grid; grid-template-columns: 80px 1fr; gap: var(--spacing-md);">
                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-primary-navy); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-family: var(--font-heading); font-weight: bold;">3</div>
                <div>
                    <h3 style="margin-top: 5px;">Dye (Pencelupan Serat Alami)</h3>
                    <p>Kain serat alami (linen, sutra, katun) dicelup secara manual ke dalam bak pewarna. Pencelupan dilakukan berulang kali (bisa mencapai 10-15 kali pencelupan) untuk menghasilkan kedalaman warna yang optimal dan merata secara natural.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div style="display: grid; grid-template-columns: 80px 1fr; gap: var(--spacing-md);">
                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-primary-navy); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-family: var(--font-heading); font-weight: bold;">4</div>
                <div>
                    <h3 style="margin-top: 5px;">Dry (Pengeringan Alami)</h3>
                    <p>Kain dikeringkan perlahan di tempat teduh dengan sirkulasi udara alami dan sinar matahari langsung yang terkontrol. Pengeringan alami menjaga kelembutan serat kain dan mengunci pigmen warna botani di dalam serat.</p>
                </div>
            </div>

            <!-- Step 5 -->
            <div style="display: grid; grid-template-columns: 80px 1fr; gap: var(--spacing-md);">
                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-primary-navy); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-family: var(--font-heading); font-weight: bold;">5</div>
                <div>
                    <h3 style="margin-top: 5px;">Craft (Menjahit & Merakit Objek)</h3>
                    <p>Kain yang telah selesai diwarnai kemudian dipotong dan dijahit secara presisi menjadi produk kriya siap pakai, seperti wearable scarf, accessories, home living objects, dan art pieces fungsional lainnya.</p>
                </div>
            </div>

            <!-- Step 6 -->
            <div style="display: grid; grid-template-columns: 80px 1fr; gap: var(--spacing-md);">
                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: var(--color-primary-navy); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-family: var(--font-heading); font-weight: bold;">6</div>
                <div>
                    <h3 style="margin-top: 5px;">Use (Pemakaian & Perawatan Lestari)</h3>
                    <p>Pengguna diajak merawat produk kriya pewarna alami ini menggunakan detergen lerak alami, menghindari pemutih, dan tidak menjemur langsung di bawah terik matahari terpanas untuk menjaga kilau warna alami tetap awet.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();
