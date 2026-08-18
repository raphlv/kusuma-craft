<?php
/**
 * The template for displaying Workshop archives
 *
 * @package Kusuma_Craft
 */

get_header();
?>

<section class="section" style="background-color: var(--color-white); border-bottom: 1px solid var(--color-border);">
    <div class="container-narrow" style="text-align: center; padding: var(--spacing-lg) 0;">
        <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent); font-weight: bold; display: block; margin-bottom: var(--spacing-sm);">Edukasi & Komunitas</span>
        <h1 class="page-title" style="margin-bottom: var(--spacing-md);">Workshop Pewarnaan Alami</h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: var(--color-dark-grey);">Bagikan kesadaran gaya hidup lambat ramah lingkungan melalui kelas pencelupan dan eksplorasi warna botani DIY.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: var(--spacing-md);">
            <?php
            $workshop_query = new WP_Query( array(
                'post_type'      => 'workshop',
                'posts_per_page' => -1,
                'post_status'    => 'publish'
            ) );

            if ( $workshop_query->have_posts() ) :
                while ( $workshop_query->have_posts() ) : $workshop_query->the_post();
                    // Get custom metadata
                    $workshop_date = get_post_meta( get_the_ID(), '_kusuma_workshop_date', true );
                    $workshop_location = get_post_meta( get_the_ID(), '_kusuma_workshop_location', true );
                    $workshop_price = get_post_meta( get_the_ID(), '_kusuma_workshop_price', true );
                    ?>
                    <div style="background-color: var(--color-white); border: 1px solid var(--color-border); box-shadow: var(--shadow-subtle); display: flex; flex-direction: column;">
                        <div style="height: 220px; overflow: hidden; background-color: var(--color-light-grey);">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%; height:100%; object-fit:cover;' ) ); ?>
                                <?php else : ?>
                                    <div style="width:100%; height:100%; background-color: var(--color-warm-neutral); display:flex; align-items:center; justify-content:center; color: white; font-family:var(--font-heading); font-size:1.2rem;"><?php the_title(); ?></div>
                                <?php endif; ?>
                            </a>
                        </div>
                        <div style="padding: var(--spacing-md); flex-grow: 1; display: flex; flex-direction: column;">
                            <span style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-accent); font-weight: bold; margin-bottom: 0.5rem;">Kelas Workshop</span>
                            <h3 style="font-size: 1.3rem; margin-bottom: var(--spacing-sm);"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div style="font-size: 0.9rem; color: var(--color-text-muted); margin-bottom: var(--spacing-md);">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <div style="margin-top: auto; border-top: 1px solid var(--color-border); padding-top: var(--spacing-sm); font-size: 0.85rem; margin-bottom: var(--spacing-md);">
                                <?php if ( $workshop_date ) : ?>
                                <div style="display: flex; justify-content: space-between; margin-bottom: 4px;">
                                    <span>Tanggal:</span>
                                    <span style="font-weight: 500;"><?php echo esc_html( $workshop_date ); ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if ( $workshop_location ) : ?>
                                <div style="display: flex; justify-content: space-between; margin-bottom: 4px;">
                                    <span>Lokasi:</span>
                                    <span style="font-weight: 500;"><?php echo esc_html( $workshop_location ); ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if ( $workshop_price ) : ?>
                                <div style="display: flex; justify-content: space-between; margin-bottom: 4px;">
                                    <span>Biaya:</span>
                                    <span style="font-weight: 500; color: var(--color-primary-navy);"><?php echo esc_html( $workshop_price ); ?></span>
                                </div>
                                <?php endif; ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="btn btn-primary" style="text-align: center; width: 100%;">Detail & Daftar</a>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p style="grid-column: 1/-1; text-align: center; color: var(--color-text-muted);">Maaf, tidak ada kelas workshop yang ditemukan saat ini.</p>
            <?php endif; ?>
        </div>

    </div>
</section>

<?php
get_footer();
