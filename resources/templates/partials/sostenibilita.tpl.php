<?php
$langs = icl_get_languages('skip_missing=0&orderby=id&order=asc');
$active = 'it';
foreach ($langs as $lang) {
    if ($lang['active']) $active = $lang['code'];
}

$sustainability_link = get_permalink(get_page_by_path('sostenibilita'));
$sustainability_link = defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en' ? apply_filters('wpml_permalink', $sustainability_link, ICL_LANGUAGE_CODE) : $sustainability_link;
?>
<div id="sostenibility" class="orbit sostenibility" role="region" aria-label="Pigna Slider" data-orbit
     data-auto-play="false"
     data-timer-delay="5000"
     data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
    <div class="orbit-wrapper">

        <ul class="orbit-container">
            <li class="is-active orbit-slide">
                <figure class="orbit-figure grid-x align-middle slider-1">
                    <div class="grid-container full" style="width: 100%">
                        <div class="grid-x grid-x align-middle">
                            <div class='cell large-1 medium-1'></div>
                            <div class="cell small-12 medium-12 large-5">
                                <h1><?php _e('Sostenibilità', $textdomain); ?></h1>
                                <p>
                                    <?php _e('Made  in  Italy,  Patrimonio  storico,  Sostenibilità  e  Design.  Sono  questi  i  punti  cardine  su  cui  Pigna costruisce la propria evoluzione aziendale, intendendo la sostenibilità come modo di fare impresa e business  ogni  giorno:  un  percorso  in  continuo  divenire,  che  necessita  di  un  lavoro  intenso  e quotidiano.', $textdomain); ?>
                                </p>
                                <div class="actionbox">
                                    <a href="<?php echo $sustainability_link; ?>" class='btn --slide-1'><?php _e('Scopri di più', $textdomain); ?></a>
                                </div>

                            </div>
                            <div class="cell hide-for-small-only medium-6 large-5">

                            </div>
                        </div>
                    </div>
                </figure>
            </li>
            <li class=" orbit-slide">
                <figure class="orbit-figure grid-x align-middle slider-2">
                    <div class="grid-container full" style="width: 100%">
                        <div class="grid-x grid-x align-middle">
                            <div class='cell large-1 medium-1'></div>
                            <div class="cell small-12 medium-12 large-5">

                                <h1 class='--blue'><?php _e('Sostenibilità', $textdomain); ?></h1>
                                <p>
                                    <?php _e('Pigna  opera  all’interno  delle  linee  guida  internazionalmente  riconosciute  come  il  Global  Compact delle  Nazioni  Unite,  aderendo  all’Agenda  2030  e  agli  Obiettivi  di  Sviluppo  Sostenibile.  Oggi l’impegno  dell’azienda  per  la  sostenibilità  si  focalizza  sul  raggiungimento  di  6  dei  17  Obiettivi  di Sviluppo Sostenibile.', $textdomain); ?>
                                </p>
                                <div class="actionbox">
                                    <a href="<?php echo $sustainability_link; ?>" class='btn --slide-2'><?php _e('Scopri di più', $textdomain); ?></a>
                                </div>
                            </div>
                            <div class="cell hide-for-small-only medium-6 large-5">

                            </div>
                        </div>
                    </div>
                </figure>
            </li>
            <li class=" orbit-slide">
                <figure class="orbit-figure grid-x align-middle slider-3">
                    <div class="grid-container full" style="width: 100%">
                        <div class="grid-x grid-x align-middle">
                            <div class='cell large-1 medium-1'></div>
                            <div class="cell small-12 medium-12 large-5">

                                <h1 class='--red'><?php _e('Sostenibilità', $textdomain); ?></h1>
                                <p>
                                    <?php _e('Il primo Rapporto di Sostenibilità di Pigna mira a raccontare in maniera completa e trasparente cosa significa sostenibilità per l’azienda. Una fotografia istantanea di azioni, risultati, approcci e strategie con cui Pigna vuole creare valore durevole, diffuso e coerente con le necessità di tutti gli stakeholder e con gli equilibri ecologici.', $textdomain); ?>
                                </p>
                                <div class="actionbox">
                                    <a href="<?php echo $sustainability_link; ?>" class='btn --slide-3'><?php _e('Scopri di più', $textdomain); ?></a>
                                </div>
                            </div>
                            <div class="cell hide-for-small-only medium-6 large-5">

                            </div>
                        </div>
                    </div>
                </figure>
            </li>
        </ul>
    </div>

    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>
        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="chevron-left"
             class="svg-inline--fa fa-chevron-left fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 256 512">
            <path fill="currentColor"
                  d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"></path>
        </svg>
    </button>
    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>
        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="chevron-right"
             class="svg-inline--fa fa-chevron-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 256 512">
            <path fill="currentColor"
                  d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
        </svg>
    </button>

    <nav class="orbit-bullets">
        <button class="is-active" data-slide="0">
            <span class="show-for-sr">First slide details.</span>
            <span class="show-for-sr" data-slide-active-label>Current Slide</span>
        </button>
        <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
        <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
    </nav>

</div>
<script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>
