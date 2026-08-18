<?php
/**
 * The main template file
 *
 * @package Kusuma_Craft
 */

get_header();
?>

<section class="section">
    <div class="container">
        <header class="page-header" style="margin-bottom: var(--spacing-lg); text-align: center;">
            <h1 class="page-title">
                <?php 
                if ( is_home() && ! is_front_page() ) {
                    single_post_title();
                } else {
                    the_archive_title();
                }
                ?>
            </h1>
        </header>

        <?php if ( have_posts() ) : ?>
            <div class="journal-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'journal-card' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="journal-card-img">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="journal-card-content">
                            <div class="journal-card-category">
                                <?php 
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) {
                                    echo esc_html( $categories[0]->name );
                                } else {
                                    echo 'Stories';
                                }
                                ?>
                            </div>
                            
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            
                            <div class="journal-card-excerpt">
                                <?php the_excerpt(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="journal-card-link">Baca Cerita</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination" style="margin-top: var(--spacing-lg); text-align: center;">
                <?php
                the_posts_navigation( array(
                    'prev_text' => __( '← Sebelumnya', 'kusuma-theme' ),
                    'next_text' => __( 'Berikutnya →', 'kusuma-theme' ),
                ) );
                ?>
            </div>

        <?php else : ?>
            <p style="text-align: center;"><?php esc_html_e( 'Maaf, tidak ada artikel ditemukan.', 'kusuma-theme' ); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
