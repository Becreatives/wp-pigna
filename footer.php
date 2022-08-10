<?php

namespace Pigna\Theme\Footer;

/*
|------------------------------------------------------------------
| Footer Controller
|------------------------------------------------------------------
|
| Controller for outputting layout's closing markup. Template
| rendered here should include `wp_footer()` function call.
|
*/

use function Pigna\Theme\App\template;
use function Pigna\Theme\App\config;

/**
 * Renders layout's footer.
 *
 * @see resources/templates/layout/footer.tpl.php
 */
$textdomain = config('textdomain');
template('layout/footer', ['textdomain' => $textdomain]);
