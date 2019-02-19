$(document).ready(function() {
    /* Open Search input */

    $('#delivery_nav_search_icon').click(function() {
        $(this).parent().find('input[name="delivery_search"]').toggleClass('d-none');
    });

    $('.delivery-nav__list-catalog-block span, .delivery-nav__list-catalog-arrow').click(function() {
        $('.delivery-nav__catalog-list').toggleClass('d-none');
        $('.delivery-nav__special-list').addClass('d-none');
    });

    $('.delivery-nav__list-special-block span, .delivery-nav__list-special-arrow').click(function() {
        $('.delivery-nav__special-list').toggleClass('d-none');
        $('.delivery-nav__catalog-list').not('.delivery-undernav__catalog-list').addClass('d-none');
    });

    $('.catalog-search-prop').click(function() {
        $('.delivery-nav__special-list').addClass('d-none');
        $('.delivery-nav__catalog-list').not('.delivery-undernav__catalog-list').addClass('d-none');
    });

    $(document).click(function(e) {
        if (!$('.delivery-nav__list-catalog-block span, .delivery-nav__list-catalog-arrow, .delivery-nav__list-special-block span, .delivery-nav__list-special-arrow, .catalog__menu-item-check').is(e.target)) {
            $('.delivery-nav__special-list').addClass('d-none');
            $('.delivery-nav__catalog-list').not('.delivery-undernav__catalog-list').addClass('d-none');
        }
    });

    /*  */

    $("#show_finded").click(function() {
        $('.delivery-undernav-mobile__wrapper-catalog-drop').addClass('d-none');
    });

    $('.catalog-search-prop').click(function() {
        $('.delivery-undernav-mobile__wrapper-catalog-drop').addClass('d-none');
    });
});
