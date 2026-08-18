<?php
/**
 * WooCommerce integration template file
 *
 * @package Kusuma_Craft
 */

get_header();
?>

<section class="section" style="background-color: var(--color-off-white);">
    <div class="container">
        <?php woocommerce_content(); ?>
    </div>
</section>

<?php
get_footer();
