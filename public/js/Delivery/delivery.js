/* Sort items when user has been redirected from Contacts page */

var
    sortParam   = document.location.href.split('?sort?')[1],  //param of the sorting items on delivery page from other pages
    searchParam = document.location.href.split('?search?')[1]; //param of searching items on delivery page from other pages

if (sortParam) contactsRedirectDeliverySort(sortParam);  //if sort param is exist we are start sorting
if (searchParam) contactsRedirectDeliverySearch(decodeURI(searchParam)); //if search param is exist we are start searching



/* Delivery Full Slider */

$('.full-slider').slick({
    autoplay: true,
    infinite: true,
    dots: true,
    speed: 500,
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplaySpeed: 1000
});



/* Delivery Sort Select */

var sortSelected = $('#delivery_sort_selected');

$('#delivery_sort_select').click(function() {
    $('#delivery_sort_select_drop').toggleClass('d-none');
});

$(document).mouseup(function(e) {
    if (!$('#delivery_sort_select, #delivery_sort_select i, #delivery_sort_select span').is(e.target)) {
        $('#delivery_sort_select_drop').addClass('d-none');
    }
});

$('.delivery-catalog__sort-select-option').click(function() {
    sortSelected.html($(this).html());
    $('#delivery_sort_select_drop').addClass('d-none');
    $('#delivery_sort_select_arrow').removeClass('delivery-catalog__sort-arrow_rotate');
});



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

    $('#food_count').html('1');
    $('#food_count_hidden').val('1');

    $('#delivery_pop_up_title').html($(this).attr('data-title'));
    $('#delivery_pop_up_price').html($(this).attr('data-price') + ' грн');
    $('#delivery_pop_up_weight').html($(this).attr('data-weight') + ' гр');
    $('#delivery_pop_up_desc').html($(this).attr('data-desc'));
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



/* Catalog Sorting Handling */

var
    catalogItems = $('.catalog__item'),
    catalogProps = $('.catalog-search-prop');

catalogProps.click(function() {
    var searchProperty = $(this).attr('data-search-param');
    catalogItems.each(function() {
        $(this).hasClass(searchProperty) ? $(this).css('display', 'block')
        : $(this).css('display', 'none');
    });
});



/* Delivery Search */

deliverySearch('delivery_search_form');



/* Delivery Undernav Mobile */

$('#delivery_undernav_mobile__open').click(function() {
    $('.delivery-undernav-mobile__wrapper-catalog-drop').toggleClass('d-none');
});



/* Search mobile */

$('#delivery_search_mobile').click(function() {
    $('#delivery_search_mobile_pop_up').removeClass('d-none');
    $('#delivery_search_mobile_pop_up').addClass('d-flex');
});

$(document).mouseup(function(e) {
    if ($("#delivery_search_mobile_pop_up").is(e.target)) {
        $('#delivery_search_mobile_pop_up').addClass('d-none');
        $('#delivery_search_mobile_pop_up').removeClass('d-flex');
    }
});

deliverySearch('delivery_search_mobile_form');



/* Mobile menu */

if ($('body').width() <= 768) {
    $('.delivery-catalog__mobile-menu-carousel').slick({
        autoplay: false,
        infinite: true,
        dots: false,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false
    });
}



/* ------------- Functions ------------- */

if ($('body').width() <= 768) var catalogItems = $('.catalog__items_mobile .catalog__item');
else var catalogItems = $('.catalog__items .catalog__desktop-item');
var foodTitle;

function deliverySearch(form) {
    $('#' + form).submit(function() {
        $('#delivery_search_mobile_pop_up').addClass('d-none');
        var formSearchParam = $(this).find('input[type="text"]').val().toLowerCase();
        catalogItems.each(function() {
            if ($('body').width() <= 768) foodTitle = $(this).find('a[data-title]').attr('data-title').toLowerCase();
            else foodTitle = $(this).find('span[data-title]').attr('data-title').toLowerCase();

            if (foodTitle.search(formSearchParam) != -1) {
                $(this).css('display', 'block');
            } else { $(this).css('display', 'none'); }
        });
        $('html, body').animate({ scrollTop: $('#delivery_catalog').offset().top }, 500);
        return false;
    });
}

function contactsRedirectDeliverySort(param) {
    var catalogItems = $('.catalog__item');
    catalogItems.each(function() {
        $(this).hasClass(param) ? $(this).css('display', 'block')
        : $(this).css('display', 'none');
    });

    setTimeout(function() {
        $('html, body').animate({ scrollTop: $('#delivery_catalog').offset().top }, 1000);
    }, 500);
}

function contactsRedirectDeliverySearch(param) {
    if ($('body').width() <= 768) {
        var catalogItems    = $('.catalog__items_mobile .catalog__item');
        var dataTitleKeeper = 'a';
    } else {
        var catalogItems    = $('.catalog__items .catalog__desktop-item');
        var dataTitleKeeper = 'span';   
    }

    catalogItems.each(function() {
        var foodTitle = $(this).find(dataTitleKeeper + '[data-title]').attr('data-title').toLowerCase();
        if (foodTitle.search(param.toLowerCase()) != -1) { $(this).css('display', 'block'); } 
        else { $(this).css('display', 'none'); }
    });

    setTimeout(function() {
        $('html, body').animate({ scrollTop: $('#delivery_catalog').offset().top }, 1000);
    }, 500);
}