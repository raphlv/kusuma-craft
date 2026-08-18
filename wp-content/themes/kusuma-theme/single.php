<?php
/**
 * The template for displaying all single posts
 *
 * @package Kusuma_Craft
 */

get_header();
?>

<section class="section" style="background-color: var(--color-white);">
    <div class="container-narrow">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header" style="text-align: center; margin-bottom: var(--spacing-lg);">
                    <div style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent); font-weight: bold; margin-bottom: var(--spacing-xs);">
                        <?php 
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo esc_html( $categories[0]->name );
                        } else {
                            echo 'Stories';
                        }
                        ?>
                    </div>
                    <h1 class="entry-title" style="margin-bottom: var(--spacing-sm); line-height: 1.3; font-family: var(--font-heading);"><?php the_title(); ?></h1>
                    <div class="entry-meta" style="font-size: 0.9rem; color: var(--color-text-muted);">
                        Dipublikasikan pada <?php echo get_the_date(); ?> oleh <?php the_author(); ?>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="entry-featured-image" style="margin-bottom: var(--spacing-lg); text-align: center; max-height: 450px; overflow: hidden; border: 1px solid var(--color-border); box-shadow: var(--shadow-subtle);">
                        <?php the_post_thumbnail( 'large', array( 'style' => 'width: 100%; height: auto; object-fit: cover;' ) ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content" style="font-size: 1.05rem; line-height: 1.8; color: var(--color-dark-grey); margin-bottom: var(--spacing-lg);">
                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer" style="margin-top: var(--spacing-xl); text-align: center; border-top: 1px solid var(--color-border); padding-top: var(--spacing-md);">
                    <a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>" class="btn btn-secondary">← Kembali ke Journal</a>
                </footer>

            </article>
        <?php
        endwhile;
        ?>
    </div>
</section>

<?php
get_footer();
