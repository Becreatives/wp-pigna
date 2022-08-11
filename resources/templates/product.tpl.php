<?php get_header(); ?>

<?php
/**
 * Functions hooked into `theme/homepage/content` action.
 *
 * @hooked Pigna\Theme\Homepage\render_home - 10
 */
do_action('theme/product/content');
?>

<?php get_footer(); ?>
