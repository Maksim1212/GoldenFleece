$(document).ready(function() {
    /* Food counter */

    var
        decrease = $('.decrease'),
        increase = $('.increase');

    decrease.click(function() {
        var
            food   = $(this).parent().parent().find('.food-count'),
            hidden = $(this).parent().parent().find('.food-count-input-hidden');

        (Number(food.html()) > 1) ? food.html(Number(food.html()) - 1) : food.html('1');
        hidden.val(food.html());
    });

    increase.click(function() {
        var
            food   = $(this).parent().parent().find('.food-count'),
            hidden = $(this).parent().parent().find('.food-count-input-hidden');

        food.html(Number(food.html()) + 1);
        hidden.val(food.html());
    });

    /* Catalog popup open */

    $('.catalog__desc').click(function(e) {
        e.preventDefault();

        $('#delivery_pop_up').removeClass('d-none').addClass('d-flex');

        $('.delivery-pop-up__carousel').slick({
            autoplay: false,
            infinite: true,
            dots: true,
            speed: 500,
            fade: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true
        });

        $('.delivery-pop-up__carousel').slick('slickGoTo', parseInt($(this).attr('data-slide')));
    });

    $('#delivery_pop_up_close').click(function() {
        $('#delivery_pop_up').removeClass('d-flex').addClass('d-none');
        $('.delivery-pop-up__carousel').slick('unslick');
    });

    $(document).mouseup(function(e) {
        if ($("#delivery_pop_up").is(e.target)) {
            $('#delivery_pop_up').removeClass('d-flex').addClass('d-none');
            $('.delivery-pop-up__carousel').slick('unslick');
        }
    });
});
