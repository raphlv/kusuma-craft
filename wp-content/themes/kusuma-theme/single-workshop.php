<?php
/**
 * The template for displaying single Workshop items
 *
 * @package Kusuma_Craft
 */

get_header();
?>

<section class="section">
    <div class="container-narrow">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header" style="text-align: center; margin-bottom: var(--spacing-lg);">
                    <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent); font-weight: bold; display: block; margin-bottom: var(--spacing-xs);">Workshop Detail</span>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="entry-featured-image" style="margin-bottom: var(--spacing-lg); text-align: center; max-height: 400px; overflow: hidden;">
                        <?php the_post_thumbnail( 'large', array( 'style' => 'max-width: 100%; height: auto; border: 1px solid var(--color-border);' ) ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content" style="background-color: var(--color-white); padding: var(--spacing-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-subtle);">
                    <?php
                    $workshop_date = get_post_meta( get_the_ID(), '_kusuma_workshop_date', true );
                    $workshop_location = get_post_meta( get_the_ID(), '_kusuma_workshop_location', true );
                    $workshop_price = get_post_meta( get_the_ID(), '_kusuma_workshop_price', true );
                    
                    if ( $workshop_date || $workshop_location || $workshop_price ) :
                    ?>
                    <div style="background-color: var(--color-off-white); border: 1px solid var(--color-border); padding: var(--spacing-md); margin-bottom: var(--spacing-lg); font-size: 0.95rem;">
                        <h3 style="font-size: 1.1rem; margin-bottom: var(--spacing-xs); border-bottom: 1px solid var(--color-border); padding-bottom: var(--spacing-xs);">Informasi Kelas</h3>
                        <?php if ( $workshop_date ) : ?>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 6px;">
                            <span style="font-weight: 600; color: var(--color-text-muted);">Tanggal:</span>
                            <span style="font-weight: 500;"><?php echo esc_html( $workshop_date ); ?></span>
                        </div>
                        <?php endif; ?>
                        <?php if ( $workshop_location ) : ?>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 6px;">
                            <span style="font-weight: 600; color: var(--color-text-muted);">Lokasi:</span>
                            <span style="font-weight: 500;"><?php echo esc_html( $workshop_location ); ?></span>
                        </div>
                        <?php endif; ?>
                        <?php if ( $workshop_price ) : ?>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 6px;">
                            <span style="font-weight: 600; color: var(--color-text-muted);">Biaya Pendaftaran:</span>
                            <span style="font-weight: 500; color: var(--color-primary-navy);"><?php echo esc_html( $workshop_price ); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <?php the_content(); ?>
                    
                    <div style="margin-top: var(--spacing-lg); border-top: 2px solid var(--color-primary-navy); padding-top: var(--spacing-md);">
                        <h3 style="margin-bottom: var(--spacing-sm);">Pendaftaran Kelas</h3>
                        <p>Untuk mendaftar ke kelas ini, silakan hubungi admin kami melalui WhatsApp di nomor <strong>0812-3456-7890</strong> dengan format:</p>
                        <blockquote style="background-color: var(--color-off-white); padding: var(--spacing-sm); border-left: 4px solid var(--color-accent); font-style: italic; margin-bottom: var(--spacing-md);">
                            Nama Lengkap / Email / No. HP / Judul Kelas / Jumlah Tiket
                        </blockquote>
                        <p>Setelah mengirimkan format pendaftaran, admin kami akan memverifikasi ketersediaan slot dan memberikan instruksi pembayaran transfer bank.</p>
                    </div>
                </div>

                <footer class="entry-footer" style="margin-top: var(--spacing-lg); text-align: center; border-top: 1px solid var(--color-border); padding-top: var(--spacing-md);">
                    <a href="<?php echo esc_url( home_url( '/workshops/' ) ); ?>" class="btn btn-secondary">← Kembali ke Daftar Workshop</a>
                </footer>

            </article>
        <?php
        endwhile;
        ?>
    </div>
</section>

<?php
get_footer();
