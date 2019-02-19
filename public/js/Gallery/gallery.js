$(document).ready(function() {
    var portfolioItems = $('.gallery-desc__image');
    $('.portfolio-heading-menu__item').click(function() {
        var searchParam = $(this).attr('data-menu');
        portfolioItems.each(function() {
            $(this).hasClass(searchParam) ? $(this).css('display', 'block') :
            $(this).css('display', 'none');
        });
    });
});
