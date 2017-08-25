$(document).ready(function(){

    $('.slick-slider').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        speed: 300,
        fade: true,
        cssEase: 'linear'
    });

    $(".button-collapse").sideNav();
 
    $('select').material_select();

});