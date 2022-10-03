<div class="large reveal" id="fedezModal" data-reveal>
    <?php if (function_exists('pll_current_language') && pll_current_language('slug') == 'it') { ?>
        <a target="_blank" href="https://shop.monocromo.eu">
            <img class="show-for-medium" src="<?= get_stylesheet_directory_uri() ?>/resources/assets/images/Monocromo_Pop_Up_Jeremy_Ville_1920x1280_ITA.jpg">
            <img class="hide-for-medium" src="<?= get_stylesheet_directory_uri() ?>/resources/assets/images/Monocromo_Pop_Up_Jeremy_Ville_1280x1920_ITA.jpg">
        </a>
    <?php } else { ?>
        <a target="_blank" href="https://shop.monocromo.eu/pages/eng1">
            <img class="show-for-medium" src="<?= get_stylesheet_directory_uri() ?>/resources/assets/images/Monocromo_Pop_Up_Jeremy_Ville_1920x1280_EN.jpg">
            <img class="hide-for-medium" src="<?= get_stylesheet_directory_uri() ?>/resources/assets/images/Monocromo_Pop_Up_Jeremy_Ville_1280x1920_EN.jpg">
        </a>
    <?php } ?>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>