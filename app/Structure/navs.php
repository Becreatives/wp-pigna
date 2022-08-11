<?php

namespace Pigna\Theme\App\Structure;

/*
|----------------------------------------------------------------
| Theme Navigation Areas
|----------------------------------------------------------------
|
| This file is for registering your theme custom navigation areas
| where various menus can be assigned by site administrators.
|
*/

use function Pigna\Theme\App\config;

/**
 * Registers navigation areas.
 *
 * @return void
 */
function register_navigation_areas()
{

    register_nav_menus([
        'primary_top' => __('Primary TOP', config('textdomain')),
        'primary' => __('Primary', config('textdomain')),
        'mobile' => __('Mobile', config('textdomain')),
    ]);

}
add_action('after_setup_theme', 'Pigna\Theme\App\Structure\register_navigation_areas');
