<?php

namespace Pigna\Theme\Header;

/*
|------------------------------------------------------------------
| Header Controller
|------------------------------------------------------------------
|
| Controller for outputting layout's opening markup. Template
| rendered here should include `wp_head()` function call.
|
*/

use function Pigna\Theme\App\template;
use function Pigna\Theme\App\config;

/**
 * Renders layout's head.
 *
 * @see resources/templates/layout/head.tpl.php
 */
$textdomain = config('textdomain');

template('layout/head', ['textdomain' => $textdomain]);
