<?php
$language = function_exists('pll_current_language') ? pll_current_language() : ICL_LANGUAGE_CODE;
?>
<div class="grid-container full content-documents">
    <div class="grid-x document align-middle">
        <div class="cell small-12 medium-8">
	            <h2><?php _e('Pigna Code of Ethics', $textdomain); ?></h2>
        </div>
        <div class="cell small-12 medium-4 text-center">
            <?php if($language === 'it') { ?>
            <a class="btn" target="_blank" href="<?= get_stylesheet_directory_uri() ?>/public/images/codice-edico-cartiere-paolo-pigna.pdf"><?php _e('View Doc', $textdomain); ?></a>
            <?php }else { ?>
                <a class="btn" target="_blank" href="<?= get_stylesheet_directory_uri() ?>/public/images/ethics-en.pdf"><?php _e('View Doc', $textdomain); ?></a>

            <?php }?>
        </div>
    </div>
</div>
<hr>
<div class="grid-container full content-documents">
    <div class="grid-x document align-middle">
        <div class="cell small-12 medium-8">

	            <h2><?php _e('Pigna Model 231 – general part', $textdomain); ?></h2>

        </div>
        <div class="cell small-12 medium-4 text-center">
            <?php if($language === 'it') { ?>
            <a class="btn" target="_blank" href="<?= get_stylesheet_directory_uri() ?>/public/images/2022.03 Modello 231 parte generale Pigna - versione 02.pdf"><?php _e('View Doc', $textdomain); ?></a>
            <?php } else { ?>
                <a class="btn" target="_blank" href="<?= get_stylesheet_directory_uri() ?>/public/images/model-231-en.pdf"><?php _e('View Doc', $textdomain); ?></a>

            <?php }?>
        </div>
    </div>
</div>
<hr>
<div class="grid-container full content-documents">
    <div class="grid-x document align-middle">
        <div class="cell small-12 medium-8">
	            <h2><?php _e('Pigna Whistleblowing Procedure', $textdomain); ?></h2>

        </div>
        <div class="cell small-12 medium-4 text-center">
            <?php if($language === 'it') { ?>
            <a class="btn" target="_blank" href="<?= get_stylesheet_directory_uri() ?>/public/images/procedura-whistleblowing-pigna.pdf"><?php _e('View Doc', $textdomain); ?></a>
            <?php }else{ ?>
                <a class="btn" target="_blank" href="<?= get_stylesheet_directory_uri() ?>/public/images/procedure-en.pdf"><?php _e('View Doc', $textdomain); ?></a>
            <?php } ?>
        </div>
    </div>
</div>
