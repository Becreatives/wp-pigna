<?php

namespace Pigna\Theme\Page;

/*
|------------------------------------------------------------------
| Page Controller
|------------------------------------------------------------------
|
| Think about theme template files as some sort of controllers
| from MVC design pattern. They should link application
| logic with your theme view templates files.
|
*/

use function Pigna\Theme\App\template;

/**
 * Renders single page.
 *
 * @see resources/templates/single.tpl.php
 */
template('single');
