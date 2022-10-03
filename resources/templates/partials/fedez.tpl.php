<div class="large reveal" id="fedezModal" data-reveal>
    <?php if (pll_current_language('slug') == 'it') { ?>
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
    <p onclick="hideFedezModal()" style="position: absolute;top: 15px;right: 15px;font-weight: 600;text-transform: uppercase;cursor: pointer;">chiudi</p>
</div>

<script type="text/javascript">
    function hideFedezModal() {
        var fdOverlay = document.getElementsByClassName('reveal-overlay')[0]
        var htmlEl = document.getElementsByTagName('html')[0]

        if(fdOverlay && htmlEl) {
            fdOverlay.remove()
            htmlEl.classList.remove('is-reveal-open')
        }
    }
</script>
<style>
    #fedezModal {
        padding-top: 50px !important;
        background-color: #cbe9f7 !important;
    }
</style>