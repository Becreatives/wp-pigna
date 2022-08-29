<?php
    $language = function_exists('pll_current_language') ? pll_current_language()  : ICL_LANGUAGE_CODE;
    $sustainability_cover = $language == 'en' ? 'sustainability_cover.jpg' : '2021 Rapporto sostenibiltà Pigna_Copertina_ITA (1) (1).jpg';
    $doc_filename = $language  == 'en' ? 'PIGNA_report21_ENG-schermo.pdf' : 'PIGNA_report21_ITA-schermo.pdf';
?>
<div id="page-sustainability">
    <div class="sustainability-section">
        <div class="grid-container text-center">
            <img id="sostenibilita-icon-1"
                 src="<?= get_stylesheet_directory_uri() ?>/public/images/sostenibilita-icon-1a.png"/>
            <div class="grid-x align-right py-180px">
                <div class="cell small-12 medium-5 medium-text-right text-center">
                    <h2 class="--text-red --font-bold"><?php _e('Sustainability', $textdomain); ?></h2>
                    <p>
                        <?php _e('The first Pigna Sustainability Report aims to tell in a complete and transparent way what sustainability means for the company. A snapshot of the actions, results, approaches, and strategies with which Pigna wants to create lasting, widespread, and consistent value with the needs of all stakeholders and with ecological balances.', $textdomain); ?>
                    </p>
                </div>
            </div>
            <div class="video-wrapper">
                <video
                        class="video-js w-full vjs-default-skin"
                        controls
                        poster='<?= get_stylesheet_directory_uri() ?>/public/images/sostenibilita-video-poster.png'
                        preload="auto"
                        data-setup='{ "aspectRatio":"1920:1080"}'
                >
                    <source
                            src="<?= get_stylesheet_directory_uri() ?>/resources/assets/video/Video_Pigna-Bilancio-v3-2.mp4"
                            type="video/mp4"/>
                    <source
                            src="<?= get_stylesheet_directory_uri() ?>/resources/assets/video/Video_Pigna-Bilancio-v3.webm"
                            type="video/webm"/>
                </video>
                <div class="video-play-wrapper grid-x align-center">
                    <button class="video-play"><?php _e('Watch the video', $textdomain); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="sustainability-section">
        <div class="grid-container">
            <img id="sostenibilita-icon-2"
                 src="<?= get_stylesheet_directory_uri() ?>/public/images/sostenibilita-icon-2a.png"/>
            <div class="grid-x align-left pt-180px">
                <div class="cell small-12 medium-5 medium-text-left text-center">
                    <h2 class="--text-blue --font-bold"><?php _e('The application effort', $textdomain); ?></h2>
                    <p>
                        <?php _e('Pigna operates within internationally recognized guidelines such as the United Nations Global Compact, adhering to the 2030 Agenda and the Sustainable Development Goals. Today the company\'s commitment to sustainability focuses on achieving 6 of the 17 Sustainable Development Goals.', $textdomain); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="sustainability-section mt-90px">
        <div class="grid-container">
            <img id="sostenibilita-icon-3"
                 src="<?= get_stylesheet_directory_uri() ?>/public/images/sostenibilita-icon-3a.png"/>
            <div class="grid-x align-right py-90px">
                <div class="cell small-8 medium-5 text-right sustainability-report-wrapper">
                    <img src="<?= get_stylesheet_directory_uri() ?>/public/images/<?php echo $sustainability_cover; ?>"
                         id="sostenibilita-report-cover"/>
                    <div class="grid-x align-center">
                        <a class="btn-report"
                           href="<?= get_stylesheet_directory_uri() ?>/resources/assets/pdf/<?php echo $doc_filename; ?>"><?php _e('Download report', $textdomain); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>
