$(document).ready(function() {
    /* Toggle mobile menu */

    $('#burger_menu').click(function() {
        $('#menu_mobile').toggleClass('menu__mobile_open');
    });

    $(document).mouseup(function(e) {
        if (!$("#burger_menu").is(e.target)) {
            $('#menu_mobile').removeClass('menu__mobile_open');
        }
    });

    /* Pop-Up */

    $('.reserve_table').click(function() {
        $('#pop_up').removeClass('d-none');
        $('#pop_up').addClass('d-flex');
    });

    $('#close_pop_up').click(function() {
        $('#pop_up').removeClass('d-flex');
        $('#pop_up').addClass('d-none');
    });

    $(document).mouseup(function(e) {
        if ($("#pop_up").is(e.target)) {
            $('#pop_up').removeClass('d-flex');
            $('#pop_up').addClass('d-none');
        }
    });
});
