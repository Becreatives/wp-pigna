<?php
/* Template Name: News */

namespace Pigna\Theme\News;

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
 * Renders company content.
 *
 * @see resources/templates/partials/monocromo.tpl.php
 * @see resources/templates/partials/bts.tpl.php
 * @see resources/templates/partials/flowers.tpl.php
 */
function render_news()
{
    $textdomain = config('textdomain');
    template('partials/content-news', ['textdomain' => $textdomain]);
    template('partials/contacts', ['textdomain' => $textdomain]);
}
add_action('theme/homepage/content', 'Pigna\Theme\News\render_news');

/**
 * Renders index page.
 *
 * @see resources/templates/index.tpl.php
 */
template('homepage');
