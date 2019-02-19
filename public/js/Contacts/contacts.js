$(document).ready(function() {
    /* Food sorting */

    $('.catalog-search-prop').click(function() {
        var sortProperty = $(this).attr('data-search-param');
        catalogRedirect('/delivery.html?sort?' + sortProperty);
        console.log(1);
    });

    /* Search */

    $('#contact_search_form').submit(function() {
        var searchProperty = $('#contact_search_form input[type="text"]').val();
        catalogRedirect(encodeURI('/delivery.html?search?' + searchProperty));
        return false;
    });

    function catalogRedirect(path) { window.location.href = path; }
});
