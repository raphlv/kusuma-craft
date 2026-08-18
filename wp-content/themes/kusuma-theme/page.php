<?php
/**
 * The template for displaying all pages
 *
 * @package Kusuma_Craft
 */

get_header();
?>

<section class="section" style="background-color: var(--color-off-white);">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <?php if ( ! is_cart() && ! is_checkout() && ! is_account_page() ) : ?>
                    <header class="entry-header" style="text-align: center; margin-bottom: var(--spacing-lg);">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>
                <?php endif; ?>

                <div class="entry-content" style="background-color: var(--color-white); padding: var(--spacing-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-subtle);">
                    <?php the_content(); ?>
                </div>

            </article>
        <?php
        endwhile;
        ?>
    </div>
</section>

<?php
get_footer();
