<?php
$language = function_exists('pll_current_language') ? pll_current_language()  : ICL_LANGUAGE_CODE;
$sustainability_cover_2020 = $language == 'en' ? 'sustainability_cover_2020_en.png' : 'sustainability_cover_2020_ita.png';
$sustainability_cover_2021 = $language == 'en' ? 'sustainability_cover_2021_en.jpg' : 'sustainability_cover_2021_ita.jpg';
$doc_filename_2020 = $language  == 'en' ? 'Sostenibilità_impaginato_eng_web.pdf' : 'Sostenibilità_impaginato_ita_web.pdf';
$doc_filename_2021 = $language  == 'en' ? 'PIGNA_report21_ENG-schermo.pdf' : 'PIGNA_report21_ITA-schermo.pdf';
?>
<div id="page-sustainability">
    <div class="sustainability-section sustainability-section__1" style="position: relative; z-index: 10">
        <div class="grid-container text-center">
            <div class="grid-x align-middle">
                <div class="cell small-12 medium-6"></div>
                <div class="cell small-12 medium-6 medium-text-right text-center page-background">
                    <h2 class="--text-red --font-bold"><?php _e('Sustainability', $textdomain); ?></h2>
                    <p>
                        <?php _e('The Pigna Sustainability Report aims to tell in a complete and transparent way what sustainability means for the company. A snapshot of the actions, results, approaches, and strategies with which Pigna wants to create lasting, widespread, and consistent value with the needs of all stakeholders and with ecological balances.', $textdomain); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="sustainability-section sustainability-section__2">
        <div class="grid-container">
            <div class="grid-x align-middle">
                <div class="cell small-12 medium-5 medium-text-left text-center">
                    <h2 class="--text-yellow --font-bold"><?php _e('The application effort', $textdomain); ?></h2>
                    <p class="--text-white">
                        <?php _e('Pigna operates within internationally recognized guidelines such as the United Nations Global Compact, adhering to the 2030 Agenda and the Sustainable Development Goals. Today the company\'s commitment to sustainability focuses on achieving 6 of the 17 Sustainable Development Goals.', $textdomain); ?>
                    </p>
                </div>
                <div class="cell small-12 medium-7">
                    <img src="<?= get_stylesheet_directory_uri() ?>/public/images/sustainability/sezione-2-1.svg">
                </div>
            </div>
        </div>
    </div>

    <div class="sustainability-section sustainability-section__3">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell medium-3" style="position:relative;">
                    <img id="glasses" src="<?= get_stylesheet_directory_uri() ?>/public/images/sustainability/sezione-3-1.svg">
                </div>
                <div class="cell small-12 medium-6 sustainability-report-wrapper">
                    <img src="<?= get_stylesheet_directory_uri() ?>/public/images/sustainability/<?php echo $sustainability_cover_2021; ?>" id="sostenibilita-report-cover" />
                    <div class="grid-x align-center">
                        <a target="_blank" class="btn-report" href="<?= get_stylesheet_directory_uri() ?>/resources/assets/pdf/<?php echo $doc_filename_2021; ?>"><?php _e('Download report', $textdomain); ?></a>
                    </div>
                </div>
                <div class="cell medium-3" style="position:relative;">
                    <img id="paper" src="<?= get_stylesheet_directory_uri() ?>/public/images/sustainability/sezione-3-2.svg">
                </div>
            </div>
        </div>
        <img id="pens" src="<?= get_stylesheet_directory_uri() ?>/public/images/sustainability/sezione-3-3.svg">
    </div>

    <div class="sustainability-section sustainability-section__4">
        <div class="grey-bk">
            <div class="grid-container">
                <div class="grid-x align-middle">
                    <div class="cell small-12">
                        <h2 class="--text-red --font-bold"><?php _e('Balance and Report', $textdomain); ?></h2>
                    </div>
                    <div class="cell small-8 medium-4" style="position: relative;">
                        <img src="<?= get_stylesheet_directory_uri() ?>/public/images/sustainability/<?php echo $sustainability_cover_2021; ?>" id="sostenibilita-report-cover" />
                        <div class="vt-line"></div>
                    </div>
                    <div class="cell small-12 medium-8">
                        <h3><?php _e('Balance 2021', $textdomain); ?></h3>
                        <a target="_blank" class="btn-report" href="<?= get_stylesheet_directory_uri() ?>/resources/assets/pdf/<?php echo $doc_filename_2021; ?>"><?php _e('Download report 2021', $textdomain); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-bk">
            <div class="grid-container">
                <div class="grid-x align-middle">
                    <div class="cell small-8 medium-4" style="position: relative;">
                        <img src="<?= get_stylesheet_directory_uri() ?>/public/images/sustainability/<?php echo $sustainability_cover_2020; ?>" id="sostenibilita-report-cover" />
                        <div class="vt-line"></div>
                    </div>
                    <div class="cell small-12 medium-8">
                        <div class="grid-x align-middle">
                            <div class="cell small-12 large-6">
                                <h3><?php _e('Balance 2020', $textdomain); ?></h3>
                                <a target="_blank" class="btn-report green" href="<?= get_stylesheet_directory_uri() ?>/resources/assets/pdf/<?php echo $doc_filename_2020; ?>"><?php _e('Download report 2020', $textdomain); ?></a>
                            </div>
                            <div class="cell small-12 large-6">
                                <video preload="metadata" controls>
                                    <source src="<?= get_stylesheet_directory_uri() ?>/resources/assets/video/Video_Pigna-Bilancio-v3-2.mp4#t=0.001" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>