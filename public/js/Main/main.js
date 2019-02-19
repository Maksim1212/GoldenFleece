$(document).ready(function() {

    /* Init Main Slider */

    $('.offer__carousel').slick({
        autoplay: true,
        infinite: true,
        dots: false,
        speed: 500,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplaySpeed: 5000
    });
});
