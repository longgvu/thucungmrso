import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
window.$ = window.jQuery = require('jquery');
require('bootstrap');
require('slick-carousel');

$(document).ready(function() {
    $('#avatarSlider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});