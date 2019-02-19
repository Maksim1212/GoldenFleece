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
    

    /* Persons counter */

    var
        decrease = $('#decrease'),
        increase = $('#increase'),
        persons  = $('#persons'),
        hidden   = $('#persons_counter_input_hidden');

    decrease.click(function() {
        (Number(persons.html()) > 0) ? persons.html(Number(persons.html()) - 1) : persons.html(0);
        hidden.val(persons.html());
    });

    increase.click(function() {
        persons.html(Number(persons.html()) + 1);
        hidden.val(persons.html());
    });
});
