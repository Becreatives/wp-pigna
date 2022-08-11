<?php
$company_link = get_permalink(get_page_by_path('azienda'));
$company_link = defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en' ? apply_filters('wpml_permalink', $company_link, ICL_LANGUAGE_CODE) : $company_link;
$sustainability_link = get_permalink(get_page_by_path('sostenibilita'));
$sustainability_link = defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en' ? apply_filters('wpml_permalink', $sustainability_link, ICL_LANGUAGE_CODE) : $sustainability_link;
$news_link = get_permalink(get_page_by_path('rassegna-stampa'));
$news_link = defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en' ? apply_filters('wpml_permalink', $news_link, ICL_LANGUAGE_CODE) : $news_link;
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= home_url() ?>/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= home_url() ?>/apple-touch-icon-152x152.png"/>
    <link rel="icon" type="image/png" href="<?= home_url() ?>/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="<?= home_url() ?>/favicon-16x16.png" sizes="16x16"/>
    <meta name="application-name" content="Pigna"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="<?= home_url() ?>/mstile-144x144.png"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- plyr -->
    <script src="https://cdn.plyr.io/3.5.2/plyr.polyfilled.js"></script>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.2/plyr.css"/>
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet"/>
</head>

<body <?php body_class(); ?>>
<main id="app" class="app">
    <div class="nav-header">
        <div class='nav-top'>
            <div class='grid-container'>
                <div class="grid-x align-bottom ">
                    <div class="cell large-6 medium-5 small-4">
                        <a href="<?= home_url(); ?>"><img class='logo'
                                                          src="<?= get_stylesheet_directory_uri() ?>/public/images/logo_pigna.svg"></a>
                    </div>
                    <!--
                <div class="title-bar" data-responsive-toggle="menu" data-hide-for="medium">
                    <button class="menu-icon" type="button" data-toggle="menu"></button>
                </div>
            -->
                    <div class="cell large-6 medium-7  small-8 align-middle" id="menu">
                        <div style="display:flex; align-items:center; margin-left: auto">
                            <?php wp_nav_menu(array('theme_location' => 'primary_top', 'container' => 'ul',
                                'menu_class'=> 'top-menu top',  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>')); ?>
                            <ul class="top-menu">
                                <li class="lang-switcher">
                                    <?php
                                    $langs = icl_get_languages('skip_missing=0&orderby=id&order=asc');
                                    $first = true;
                                    echo '<span style="padding: .3rem 0.4rem"> | </span>';
                                    foreach ($langs as $lang) { ?>
                                        <a href="<?= $lang['url'] ?>">
                                            <?php
                                            if ($lang['code'] === 'it') {
                                                echo 'ITA';
                                            } else {
                                                echo 'ENG';
                                            }
                                            ?></a>
                                        <?php
                                        if ($first) {
                                            echo '<span style="padding: .3rem 0.4rem"> | </span>';
                                            $first = false;
                                        }
                                        ?>
                                    <?php }
                                    echo '<span style="padding: .3rem 0.4rem"> | </span>';
                                    ?>
                                </li>
                                <li class="social">
                                    <a target="_blank" href="https://www.instagram.com/pigna/"><i
                                                class="fab fa-instagram"></i></a>
                                </li>
                                <li class="social">
                                    <a target="_blank" href="https://facebook.com/PignaOfficial/"><i
                                                class="fab fa-facebook"></i></a>
                                </li>
                                <li class="ov-menu">
                                    <div class="btn-menu">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="bottom-bar">
            <div class='wrapper'>
                <div class='grid-container'>
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="overlay-menu">
        <?php wp_nav_menu(array('theme_location' => 'mobile')); ?>

        <div id="close-menu"><i class="fa fa-times"></i></div>
    </div>
