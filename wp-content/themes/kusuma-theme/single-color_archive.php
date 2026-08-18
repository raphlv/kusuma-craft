<?php
/**
 * The template for displaying single color archive items
 *
 * @package Kusuma_Craft
 */

get_header();
?>

<section class="section">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header" style="text-align: center; margin-bottom: var(--spacing-lg);">
                    <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent); font-weight: bold; display: block; margin-bottom: var(--spacing-xs);">Color Swatch Record</span>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-lg); align-items: start;">
                    
                    <!-- Left: Large Swatch Image -->
                    <div>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="swatch-featured-image" style="border: 1px solid var(--color-border); box-shadow: var(--shadow-subtle);">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </div>
                        <?php else : ?>
                            <div style="width: 100%; height: 350px; background-color: var(--color-warm-neutral); display: flex; align-items: center; justify-content: center; color: white; font-family: var(--font-heading); font-size: 1.5rem;">
                                Swatch Image
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Right: Specs Table & Notes -->
                    <div style="background-color: var(--color-white); padding: var(--spacing-md); border: 1px solid var(--color-border); box-shadow: var(--shadow-subtle);">
                        <h2 style="font-size: 1.3rem; border-bottom: 2px solid var(--color-primary-navy); padding-bottom: 5px; margin-bottom: var(--spacing-sm);">Laboratory Specifications</h2>
                        
                        <?php
                        $swatch_source = get_post_meta( get_the_ID(), '_kusuma_swatch_source', true );
                        $swatch_origin = get_post_meta( get_the_ID(), '_kusuma_swatch_origin', true );
                        $swatch_extraction = get_post_meta( get_the_ID(), '_kusuma_swatch_extraction', true );
                        $swatch_fabric = get_post_meta( get_the_ID(), '_kusuma_swatch_fabric', true );
                        $swatch_mordant = get_post_meta( get_the_ID(), '_kusuma_swatch_mordant', true );
                        $swatch_result = get_post_meta( get_the_ID(), '_kusuma_swatch_result', true );
                        ?>
                        <table style="width: 100%; border-collapse: collapse; margin-bottom: var(--spacing-md); font-size: 0.95rem;">
                            <?php if ( $swatch_source ) : ?>
                            <tr style="border-bottom: 1px solid var(--color-border);">
                                <td style="padding: var(--spacing-xs) 0; font-weight: 600; color: var(--color-text-muted);">Dye Material Source</td>
                                <td style="padding: var(--spacing-xs) 0; text-align: right; font-weight: 500;"><?php echo esc_html( $swatch_source ); ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php if ( $swatch_origin ) : ?>
                            <tr style="border-bottom: 1px solid var(--color-border);">
                                <td style="padding: var(--spacing-xs) 0; font-weight: 600; color: var(--color-text-muted);">Waste Collection Origin</td>
                                <td style="padding: var(--spacing-xs) 0; text-align: right; font-weight: 500;"><?php echo esc_html( $swatch_origin ); ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php if ( $swatch_extraction ) : ?>
                            <tr style="border-bottom: 1px solid var(--color-border);">
                                <td style="padding: var(--spacing-xs) 0; font-weight: 600; color: var(--color-text-muted);">Extraction Technique</td>
                                <td style="padding: var(--spacing-xs) 0; text-align: right; font-weight: 500;"><?php echo esc_html( $swatch_extraction ); ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php if ( $swatch_fabric ) : ?>
                            <tr style="border-bottom: 1px solid var(--color-border);">
                                <td style="padding: var(--spacing-xs) 0; font-weight: 600; color: var(--color-text-muted);">Fabric Fiber</td>
                                <td style="padding: var(--spacing-xs) 0; text-align: right; font-weight: 500;"><?php echo esc_html( $swatch_fabric ); ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php if ( $swatch_mordant ) : ?>
                            <tr style="border-bottom: 1px solid var(--color-border);">
                                <td style="padding: var(--spacing-xs) 0; font-weight: 600; color: var(--color-text-muted);">Mordant Agent</td>
                                <td style="padding: var(--spacing-xs) 0; text-align: right; font-weight: 500;"><?php echo esc_html( $swatch_mordant ); ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php if ( $swatch_result ) : ?>
                            <tr style="border-bottom: 1px solid var(--color-border);">
                                <td style="padding: var(--spacing-xs) 0; font-weight: 600; color: var(--color-text-muted);">Color Result</td>
                                <td style="padding: var(--spacing-xs) 0; text-align: right; font-weight: 500;"><?php echo esc_html( $swatch_result ); ?></td>
                            </tr>
                            <?php endif; ?>
                        </table>

                        <h2 style="font-size: 1.3rem; border-bottom: 2px solid var(--color-primary-navy); padding-bottom: 5px; margin-bottom: var(--spacing-xs);">Experiment Notes</h2>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </div>

                </div>

                <footer class="entry-footer" style="margin-top: var(--spacing-lg); text-align: center; border-top: 1px solid var(--color-border); padding-top: var(--spacing-md);">
                    <a href="<?php echo esc_url( home_url( '/color-archive/' ) ); ?>" class="btn btn-secondary">← Kembali ke Arsip Warna</a>
                </footer>

            </article>
        <?php
        endwhile;
        ?>
    </div>
</section>

<?php
get_footer();
