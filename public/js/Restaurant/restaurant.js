$(document).ready(function() {
    /* Slider */

    if ($('body').width() > 992) {
        $('.carousel').slick({
            autoplay: true,
            infinite: true,
            dots: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            autoplaySpeed: 3000,
            responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });
    }

    /* Reserve Table */

    $('.restaurant__reserve-table').click(function() {
        $('#pop_up').removeClass('d-none');
        $('#pop_up').addClass('d-flex');
    });

    /* Reserve table handler */

    $('.restaurant__reserve-table').click(function() {
        $('#table_number').val($(this).attr('data-table-id'));
    });
});
