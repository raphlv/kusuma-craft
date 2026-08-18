<?php
/**
 * Template Name: Custom & Collaboration Page
 *
 * @package Kusuma_Craft
 */

get_header();
?>

<section class="section" style="background-color: var(--color-white); border-bottom: 1px solid var(--color-border);">
    <div class="container-narrow" style="text-align: center; padding: var(--spacing-lg) 0;">
        <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent); font-weight: bold; display: block; margin-bottom: var(--spacing-sm);">Kolaborasi & Pesanan Khusus</span>
        <h1 class="page-title" style="margin-bottom: var(--spacing-md);">Mulai Proyek Bersama Kami</h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: var(--color-dark-grey);">Kusuma membuka kolaborasi kriya tekstil ramah lingkungan untuk kebutuhan personal, dekorasi interior, corporate gifting, maupun kemitraan riset akademis.</p>
    </div>
</section>

<section class="section">
    <div class="container-narrow">
        <div style="display: grid; grid-template-columns: 1fr; gap: var(--spacing-xl);">
            
            <!-- Tab Selection or Split sections -->
            <div style="background-color: var(--color-white); padding: var(--spacing-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-subtle);">
                <h2 style="font-size: 1.5rem; border-bottom: 2px solid var(--color-primary-navy); padding-bottom: 0.5rem; margin-bottom: var(--spacing-md);">Formulir Pengajuan Kemitraan / Pesanan</h2>
                
                <form action="#" method="post" onsubmit="event.preventDefault(); alert('Terima kasih! Formulir Anda telah terkirim. Tim Kusuma akan segera menghubungi Anda melalui email/WhatsApp dalam 1-2 hari kerja.'); this.reset();">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-sm); margin-bottom: var(--spacing-sm);">
                        <div>
                            <label style="display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 4px; color: var(--color-primary-navy);">Nama Lengkap *</label>
                            <input type="text" required style="width: 100%; padding: 0.7rem; border: 1px solid var(--color-border); background-color: var(--color-off-white);" placeholder="Nama Anda">
                        </div>
                        <div>
                            <label style="display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 4px; color: var(--color-primary-navy);">Nama Perusahaan / Institusi (Opsional)</label>
                            <input type="text" style="width: 100%; padding: 0.7rem; border: 1px solid var(--color-border); background-color: var(--color-off-white);" placeholder="Nama Kantor / Kampus">
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-sm); margin-bottom: var(--spacing-sm);">
                        <div>
                            <label style="display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 4px; color: var(--color-primary-navy);">Alamat Email *</label>
                            <input type="email" required style="width: 100%; padding: 0.7rem; border: 1px solid var(--color-border); background-color: var(--color-off-white);" placeholder="alamat@domain.com">
                        </div>
                        <div>
                            <label style="display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 4px; color: var(--color-primary-navy);">Nomor WhatsApp *</label>
                            <input type="tel" required style="width: 100%; padding: 0.7rem; border: 1px solid var(--color-border); background-color: var(--color-off-white);" placeholder="08xxxxxxxxxx">
                        </div>
                    </div>

                    <div style="margin-bottom: var(--spacing-sm);">
                        <label style="display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 4px; color: var(--color-primary-navy);">Tipe Kemitraan / Layanan *</label>
                        <select required style="width: 100%; padding: 0.7rem; border: 1px solid var(--color-border); background-color: var(--color-off-white);">
                            <option value="">-- Pilih Layanan --</option>
                            <option value="custom_order">Pesanan Custom Personal (Wearable/Kain)</option>
                            <option value="corporate_gifting">Paket Hadiah Korporat / Corporate Gifting</option>
                            <option value="brand_collab">Kolaborasi Desain & Brand Partner</option>
                            <option value="academic_collab">Kolaborasi Riset / Akademik (PISN)</option>
                        </select>
                    </div>

                    <div style="margin-bottom: var(--spacing-sm);">
                        <label style="display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 4px; color: var(--color-primary-navy);">Detail Pesanan / Konsep Kolaborasi *</label>
                        <textarea required rows="6" style="width: 100%; padding: 0.7rem; border: 1px solid var(--color-border); background-color: var(--color-off-white); resize: vertical;" placeholder="Jelaskan kebutuhan jenis produk, estimasi jumlah, spesifikasi ukuran, serta ide visual yang diinginkan..."></textarea>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-sm); margin-bottom: var(--spacing-md);">
                        <div>
                            <label style="display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 4px; color: var(--color-primary-navy);">Target Deadline</label>
                            <input type="date" style="width: 100%; padding: 0.7rem; border: 1px solid var(--color-border); background-color: var(--color-off-white);">
                        </div>
                        <div>
                            <label style="display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 4px; color: var(--color-primary-navy);">Estimasi Budget (Opsional)</label>
                            <input type="text" style="width: 100%; padding: 0.7rem; border: 1px solid var(--color-border); background-color: var(--color-off-white);" placeholder="Contoh: Rp5.000.000">
                        </div>
                    </div>

                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Kirim Formulir Pengajuan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();
