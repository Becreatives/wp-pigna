<?php

namespace Pigna\Theme\App\Http;

/*
|-----------------------------------------------------------------
| Theme Assets
|-----------------------------------------------------------------
|
| This file is for registering your theme stylesheets and scripts.
| In here you should also deregister all unwanted assets which
| can be shiped with various third-parity plugins.
|
*/

use function Pigna\Theme\App\asset_path;

/**
 * Registers theme stylesheet files.
 *
 * @return void
 */
function register_stylesheets()
{
    wp_enqueue_style('foundation', asset_path('css/foundation.css'));
    /* development purpose */
//    wp_enqueue_style('app', asset_path('css/app.css'), array(), time());
    /* only for development purpose */
    wp_enqueue_style('app', asset_path('css/app.css'), array(), time());
}

add_action('wp_enqueue_scripts', 'Pigna\Theme\App\Http\register_stylesheets');

/**
 * Registers theme script files.
 *
 * @return void
 */
function register_scripts()
{
    wp_enqueue_script('foundation', asset_path('js/foundation.js'), ['jquery'], null, true);
    /* development purpose */
//    wp_enqueue_script('app', asset_path('js/app.js'), ['foundation'], time(), true);
    /* only for development purpose */
    wp_enqueue_script('app', asset_path('js/app.js'), ['foundation'], time(), true);
}

add_action('wp_enqueue_scripts', 'Pigna\Theme\App\Http\register_scripts');

/**
 * Registers editor stylesheets.
 *
 * @return void
 */
function register_editor_stylesheets()
{
    add_editor_style(asset_path('css/foundation.css'));
    add_editor_style(asset_path('css/app.css'));
}

add_action('admin_init', 'Pigna\Theme\App\Http\register_editor_stylesheets');

/**
 * Moves front-end jQuery script to the footer.
 *
 * @param \WP_Scripts $wp_scripts
 * @return void
 */
function move_jquery_to_the_footer($wp_scripts)
{
    if (!is_admin()) {
        $wp_scripts->add_data('jquery', 'group', 1);
        $wp_scripts->add_data('jquery-core', 'group', 1);
        $wp_scripts->add_data('jquery-migrate', 'group', 1);
    }
}

add_action('wp_default_scripts', 'Pigna\Theme\App\Http\move_jquery_to_the_footer');
