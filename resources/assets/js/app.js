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

$(document).ready(function () {
  console.log('resize images');
  setHeight();
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

var $btnMenu = $('.btn-menu');
var $closeMenu = $('#close-menu');
var $overlayMenu = $('.overlay-menu');
if(typeof $btnMenu != 'undefined' &&  typeof $closeMenu != 'undefined' && typeof $overlayMenu != 'undefined' ){
  $btnMenu.on('click',function() {
    $overlayMenu.addClass('--open');
  });
  $closeMenu.on('click',function() {
    $overlayMenu.removeClass('--open');

  });

}
