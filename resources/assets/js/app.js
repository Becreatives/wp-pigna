import $ from 'jquery';

console.log('create player');
const player = new Plyr('#player', {
    controls: ['play-large', 'mute', 'volume'],
});

player.on('ready', event => {
    console.log('player ready');
    $('.plyr').show();
    player.play();
});

player.on('ended', event => {
    console.log('player ended');
    // hide popup
    hidePopup();
});

$(".popup").on('click touch', function () {
    player.stop();
    // hide popup
    hidePopup();
});
$(".popup .plyr").on('click touch', function (e) {
    e.stopPropagation();
});


function hidePopup() {
    $(".popup").hide();
    $("body").css('overflow-y', 'auto');
}

var resizeTimer;

$(window).on('resize', function (e) {

    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {

        setHeight();

    }, 250);

});

function setHeight() {
    $(".insta").css('height', $(".insta").css('width'));
}

$("a").on('click', function (event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 600, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    } // End if
});

function initMobileMenu() {
    var $btnMenu = $('.btn-menu');
    var $closeMenu = $('#close-menu');
    var $overlayMenu = $('.overlay-menu');

    $btnMenu.on('click', function () {
        $overlayMenu.addClass('--open');
        $("body").addClass("--open");
        if (typeof $closeMenu != 'undefined') {
            $closeMenu.on('click', function () {
                $overlayMenu.removeClass('--open');
            });
        }
    });

    if (typeof $closeMenu != 'undefined') {
        $closeMenu.on('click', function () {
            $overlayMenu.removeClass('--open');
            $("body").removeClass("--open");
        });
    }
}

$(document).ready(function () {
    console.log('resize images');
    setHeight();
    initMobileMenu();
});
