<?php
    $sustainability_cover = defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE == 'en' ? 'sustainability_cover.jpg' : '2021 Rapporto sostenibiltà Pigna_Copertina_ITA (1) (1).jpg';
    $doc_filename = defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE == 'en' ? 'PIGNA_report21_ENG-schermo.pdf' : 'PIGNA_report21_ITA-schermo.pdf';
?>
<div id="page-sustainability">
    <div class="sustainability-section">
        <div class="grid-container text-center">
            <img id="sostenibilita-icon-1"
                 src="<?= get_stylesheet_directory_uri() ?>/public/images/sostenibilita-icon-1a.png"/>
            <div class="grid-x align-right py-180px">
                <div class="cell small-12 medium-5 medium-text-right text-center">
                    <h2 class="--text-red --font-bold"><?php _e('Sostenibilità', $textdomain); ?></h2>
                    <p>
                        <?php _e('Il primo Rapporto di Sostenibilità di Pigna mira a raccontare in maniera completa e trasparente cosa significa sostenibilità per l\'azienda. Una fotografia istantanea di azioni, risultati, approcci e strategie con cui Pigna vuole creare valore durevole, diffuso e coerente con le necessità di tutti gli stakeholder e con gli equilibri ecologici.', $textdomain); ?>
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
                    <button class="video-play"><?php _e('Guarda il video', $textdomain); ?></button>
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
                    <h2 class="--text-blue --font-bold"><?php _e('L\'impegno', $textdomain); ?></h2>
                    <p>
                        <?php _e('Pigna opera all\'interno delle linee guida internazionalmente riconosciute come il Global Compact delle Nazioni Unite, aderendo all’Agenda 2030 e agli Obiettivi di Sviluppo Sostenibile. Oggi l\'impegno dell\'azienda per la sostenibilità si focalizza sul raggiungimento di 6 dei 17 Obiettivi di Sviluppo Sostenibile.', $textdomain); ?>
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
                           href="<?= get_stylesheet_directory_uri() ?>/resources/assets/pdf/<?php echo $doc_filename; ?>"><?php _e('Scarica il report', $textdomain); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>
