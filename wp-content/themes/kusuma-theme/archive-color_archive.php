<?php
/**
 * The template for displaying Color Archive post type archives
 *
 * @package Kusuma_Craft
 */

get_header();
?>

<section class="section" style="background-color: var(--color-white); border-bottom: 1px solid var(--color-border);">
    <div class="container-narrow" style="text-align: center; padding: var(--spacing-lg) 0;">
        <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent); font-weight: bold; display: block; margin-bottom: var(--spacing-sm);">Living Color Lab</span>
        <h1 class="page-title" style="margin-bottom: var(--spacing-md);">Arsip Warna Kusuma (Color Archive)</h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: var(--color-dark-grey);">Koleksi dan basis data eksperimen warna alami yang diekstrak dari limbah rumah tangga organik, buah, rempah-rempah, dan dedaunan lokal Indonesia.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <!-- Interactive Javascript Filters -->
        <div class="archive-filters">
            <button class="archive-filter-btn active" data-filter="all">Semua Swatch</button>
            <button class="archive-filter-btn" data-filter="kitchen">Limbah Dapur (Kitchen Waste)</button>
            <button class="archive-filter-btn" data-filter="fruit">Kulit Buah (Fruit Skin)</button>
            <button class="archive-filter-btn" data-filter="spices">Rempah Lokal (Spices)</button>
        </div>

        <div class="archive-grid" id="color-archive-grid">
            <?php
            $swatches_query = new WP_Query( array(
                'post_type'      => 'color_archive',
                'posts_per_page' => -1,
                'post_status'    => 'publish'
            ) );

            if ( $swatches_query->have_posts() ) :
                while ( $swatches_query->have_posts() ) : $swatches_query->the_post();
                    // Get dye source taxonomy term for filters
                    $dye_sources = wp_get_post_terms( get_the_ID(), 'dye_source' );
                    $source_slug = 'other';
                    $source_name = 'Other';
                    
                    if ( ! empty( $dye_sources ) ) {
                        $slug = $dye_sources[0]->slug;
                        $source_name = $dye_sources[0]->name;
                        if ( stripos( $slug, 'kitchen' ) !== false ) {
                            $source_slug = 'kitchen';
                        } elseif ( stripos( $slug, 'fruit' ) !== false ) {
                            $source_slug = 'fruit';
                        } elseif ( stripos( $slug, 'spices' ) !== false ) {
                            $source_slug = 'spices';
                        }
                    }

                    // Get custom metadata
                    $swatch_source = get_post_meta( get_the_ID(), '_kusuma_swatch_source', true );
                    $swatch_fabric = get_post_meta( get_the_ID(), '_kusuma_swatch_fabric', true );
                    $swatch_result = get_post_meta( get_the_ID(), '_kusuma_swatch_result', true );
                    ?>
                    <div class="archive-card" data-category="<?php echo esc_attr( $source_slug ); ?>">
                        <div class="archive-swatch-container">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'large', array( 'class' => 'archive-swatch-img' ) ); ?>
                                <?php else : ?>
                                    <div style="width:100%; height:200px; background-color: var(--color-warm-neutral); display:flex; align-items:center; justify-content:center; color: white; font-weight:600; font-family:var(--font-heading);"><?php the_title(); ?> Swatch</div>
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="archive-card-content">
                            <div class="archive-card-meta"><?php echo esc_html( $source_name ); ?></div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="archive-card-specs">
                                <div class="archive-spec-row">
                                    <span>Sumber:</span>
                                    <span><?php echo esc_html( $swatch_source ); ?></span>
                                </div>
                                <div class="archive-spec-row">
                                    <span>Serat:</span>
                                    <span><?php echo esc_html( $swatch_fabric ); ?></span>
                                </div>
                                <div class="archive-spec-row">
                                    <span>Hasil:</span>
                                    <span><?php echo esc_html( $swatch_result ); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p style="grid-column: 1/-1; text-align: center; color: var(--color-text-muted);">Maaf, tidak ada swatch warna yang ditemukan.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Include JS inline or in main.js -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.archive-filter-btn');
    const cards = document.querySelectorAll('.archive-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');

            const filterValue = this.getAttribute('data-filter');

            cards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filterValue === 'all' || category === filterValue) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php
get_footer();
