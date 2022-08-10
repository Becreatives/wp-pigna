<?php
/* Template Name: Certificates */

namespace Pigna\Theme\Certificates;

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
 * Renders homepage content.
 *
 * @see resources/templates/partials/monocromo.tpl.php
 * @see resources/templates/partials/bts.tpl.php
 * @see resources/templates/partials/flowers.tpl.php
 */
function render_certificates()
{
    $textdomain = config('textdomain');

    template('partials/page-header');
    template('partials/content-certificates', ['textdomain' => $textdomain]);
}
add_action('theme/homepage/content', 'Pigna\Theme\Certificates\render_certificates');

/**
 * Renders index page.
 *
 * @see resources/templates/index.tpl.php
 */
template('homepage');