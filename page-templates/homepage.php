<?php
/* Template Name: Homepage */

namespace Pigna\Theme\Homepage;

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
function render_home()
{
    $textdomain = config('textdomain');

    //template('partials/popup');

    //template('partials/bellacopia', ['textdomain' => $textdomain]);
    template('partials/ferragni', ['textdomain' => $textdomain]);
    //template('partials/company', ['textdomain' => $textdomain]);
    //template('partials/sostenibilita', ['textdomain' => $textdomain]);
    template('partials/barrow', ['textdomain' => $textdomain]);
    template('partials/monocromo', ['textdomain' => $textdomain]);
    template('partials/monocromo-second', ['textdomain' => $textdomain]);
    template('partials/astucci', ['textdomain' => $textdomain]);
    template('partials/zaini', ['textdomain' => $textdomain]);
    template('partials/bts', ['textdomain' => $textdomain]);
    template('partials/flowers', ['textdomain' => $textdomain]);
    template('partials/scrittura', ['textdomain' => $textdomain]);
    template('partials/pdi', ['textdomain' => $textdomain]);
    template('partials/contacts', ['textdomain' => $textdomain]);
    //template('partials/event-popup', ['textdomain' => $textdomain]);
}
add_action('theme/homepage/content', 'Pigna\Theme\Homepage\render_home');

/**
 * Renders index page.
 *
 * @see resources/templates/index.tpl.php
 */
template('homepage');
