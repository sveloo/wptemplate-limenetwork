$(document).ready(function(){

    $('.slick-slider').slick({
        autoplay: true,
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        fade: true,
        cssEase: 'linear'
    });

    $(".button-collapse").sideNav();

    $('select').material_select();

});