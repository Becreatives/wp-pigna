<?php get_header(); ?>

<?php
/**
 *
 * @hooked Pigna\Theme\Product\render_product - 10
 */
do_action('theme/product/content');
?>

<?php get_footer(); ?>
