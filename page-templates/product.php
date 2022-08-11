<?php
/* Template Name: Product */

namespace Pigna\Theme\Product;

/*
|------------------------------------------------------------------
| Index Controller
|------------------------------------------------------------------
|
| Think about theme template files as some sort of controllers
| from MVC design pattern. They should link application
| logic with your theme view templates files.
|
*/

use function Pigna\Theme\App\template;
use function Pigna\Theme\App\config;

/**
 * Renders product content.
 *
 */
function render_product()
{
    $textdomain = config('textdomain');
    template('partials/header', ['textdomain' => $textdomain]);
    template('partials/product/content', ['textdomain' => $textdomain]);
}
add_action('theme/product/content', 'Pigna\Theme\Product\render_product');

/**
 * Renders index page.
 *
 * @see resources/templates/index.tpl.php
 */
template('product');
