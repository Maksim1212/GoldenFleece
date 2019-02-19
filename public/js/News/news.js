$(document).ready(function() {
    var portfolioItems = $('.news__item');
    $('.portfolio-heading-menu__item').click(function() {
        var searchParam = $(this).attr('data-menu');
        portfolioItems.each(function() {
            $(this).hasClass(searchParam) ? $(this).css('display', 'block') :
            $(this).css('display', 'none');
        });
    });
});
