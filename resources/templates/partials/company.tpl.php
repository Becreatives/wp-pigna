<?php
    $company_link = get_permalink( get_page_by_path( 'azienda' ) );
    $company_link = defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE == 'en' ? apply_filters( 'wpml_permalink', $company_link , ICL_LANGUAGE_CODE ) : $company_link;
?>
<div id="company" class="orbit company" role="region"
     data-timer-delay="5000"
     data-orbit
     aria-label="Pigna Slider"
     data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
    <div class="orbit-wrapper">


        <ul class="orbit-container">
            <li class="is-active orbit-slide">
                <figure class="orbit-figure grid-x align-middle slider-1">
                    <div class="grid-container full" style="width: 100%">
                        <div class="grid-x grid-x align-middle">
                            <div class='cell large-1 medium-12 small-12'></div>
                            <div class="cell small-12 medium-12 large-5">
                                <h1><?php _e('Pigna 1839', $textdomain); ?></h1>
                                <p>
                                    <?php _e('Fondata nel 1839 da Paolo Pigna ad Alzano Lombardo (BG) - dove ancora oggi c’è la sede aziendale - fin dalla nascita Pigna è il brand dei quaderni Made in Italy.Già dal 17° secolo ad Alzano Lombardo si produceva una carta di altissima qualità. Cartiere Paolo Pigna continua ancora oggi questa lunga tradizione, scrivendo la storia della carta da quel territorio industriale, per tutto il mondo', $textdomain); ?>
                                </p>
                                <div class="actionbox">
                                    <a href="<?php echo $company_link; ?>" class='btn'><?php _e('Scopri di più', $textdomain); ?></a>
                                </div>

                            </div>
                            <div class="cell hide-for-small-only medium-6 large-5">

                            </div>
                        </div>
                    </div>
                </figure>
            </li>
            <li class="orbit-slide">
                <figure class="orbit-figure grid-x align-middle slider-0">
                    <div class="grid-container full" style="width: 100%">
                        <div class="grid-x grid-x align-middle">
                            <div class='cell large-1 medium-1'></div>
                            <!--                            image-->
                        </div>
                    </div>
                </figure>
            </li>
            <li class="orbit-slide">
                <figure class="orbit-figure grid-x align-middle slider-3">
                    <div class="grid-container full" style="width: 100%">
                        <div class="grid-x grid-x align-middle">
                            <div class='cell large-1 medium-1'></div>
                            <div class="cell small-12 medium-12 large-5">

                                <h1><?php _e('Pigna 1839', $textdomain); ?></h1>
                                <p>
                                    <?php _e('Cartiere  Paolo  Pigna  è  stata  la  prima  azienda  a  unire  la  più  sapiente  arte  artigiana  con  i  vantaggi tecnologici dell’industria. Grazie alla grafica, al design, alla qualità e all’amore per i dettagli del fatto bene, i quaderni Pigna sono presenti da sempre su milioni di scrivanie, accompagnando ogni giorno la creatività degli italiani a scuola, in ufficio e nel tempo libero', $textdomain); ?>
                                </p>
                                <div class="actionbox">
                                    <a href="<?php echo $company_link; ?>" class='btn'><?php _e('Scopri di più', $textdomain); ?></a>
                                </div>
                            </div>
                            <div class="cell hide-for-small-only medium-6 large-5">

                            </div>
                        </div>
                    </div>
                </figure>
            </li>
            <li class="orbit-slide">
                <figure class="orbit-figure grid-x align-middle slider-2">
                    <div class="grid-container full" style="width: 100%">
                        <div class="grid-x grid-x align-middle">
                            <div class='cell large-1 medium-1'></div>
                            <!--                            image-->
                        </div>
                    </div>
                </figure>
            </li>
            <li class="orbit-slide">
                <figure class="orbit-figure grid-x align-middle slider-5">
                    <div class="grid-container full" style="width: 100%">
                        <div class="grid-x grid-x align-middle">
                            <div class='cell large-1 medium-1'></div>
                            <div class="cell small-12 medium-12 large-5">

                                <h1><?php _e('Pigna 1839', $textdomain); ?></h1>
                                <p>
                                    <?php _e('A partire dagli anni ‘50 Pigna estende la propria gamma prodotti includendo gli astucci, i diari e oggi anche gli zaini e i colori per bambini. Le collezioni si evolvono guardando al futuro e al mondo che cambia, senza mai dimenticare le radici italiane su cui l’azienda ha costruito la propria storia. Oggi  Pigna  è  un  brand  leader  del  Made  in  Italy,  sempre  impegnato  a  creare  oggetti  quotidiani  per idee senza tempo, capaci di ispirare le persone a riscoprire, esprimere e raccontare la propria unicità', $textdomain); ?>
                                </p>
                                <div class="actionbox">
                                    <a href="<?php echo $company_link; ?>" class='btn'><?php _e('Scopri di più', $textdomain); ?></a>
                                </div>
                            </div>
                            <div class="cell hide-for-small-only medium-6 large-5">

                            </div>
                        </div>
                    </div>
                </figure>
            </li>
            <li class="orbit-slide">
                <figure class="orbit-figure grid-x align-middle slider-4">
                    <div class="grid-container full" style="width: 100%">
                        <div class="grid-x grid-x align-middle">
                            <div class='cell large-1 medium-1'></div>
                        </div>
                    </div>
                </figure>
            </li>
            <li class="orbit-slide">
                <figure class="orbit-figure grid-x align-middle slider-6">
                    <div class="grid-container full" style="width: 100%">
                        <div class="grid-x grid-x align-middle">
                            <div class='cell large-1 medium-12 small-12'></div>
                            <div class="cell small-12 medium-12 large-5">
                                <h1><?php _e('Pigna riconosciuto come marchio storico', $textdomain); ?></h1>
                                <p>
                                    <?php _e('di interesse nazionale dal Ministero dello Sviluppo Economico. Il marchio storico Pigna con la iconica "P" degli anni 50 è stato inserito nel Registro Speciale dei Marchi Storici di interesse nazionale, albo istituito dal Ministero dello Sviluppo Economico in collaborazione con Unioncamere.', $textdomain); ?>
                                </p>
                                <div class="actionbox">
                                    <a href="<?php echo $company_link; ?>#marchio-storico" class='btn'><?php _e('Scopri di più', $textdomain); ?></a>
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
        </button>
        <button data-slide="1"></button>
        <button data-slide="2"></button>
        <button data-slide="3"></button>
        <button data-slide="4"></button>
        <button data-slide="5"></button>
        <button data-slide="6"></button>
    </nav>

</div>
