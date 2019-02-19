$(document).ready(function(argument) {

	/* Food sorting */

    $('.catalog-search-prop').click(function() {
        var sortProperty = $(this).attr('data-search-param');
        catalogRedirect('/delivery.html?sort?' + sortProperty);
        console.log(1);
    });

    /* Search */

    cartDeliverySearch('details_search_form');
    cartDeliverySearch('details_search_mobile_form');

    /* Functions */

    function catalogRedirect(path) { window.location.href = path; }

    function cartDeliverySearch(form) {
    	$('#' + form).submit(function() {
	        var searchProperty = $('#' + form).find('input[type="text"]').val();
	        catalogRedirect(encodeURI('/delivery.html?search?' + searchProperty));
	        console.log(searchProperty);
	        return false;
	    });
    }


    /* Pop Up */

    $('#details_pop_up_close').click(function() {
        $('#details_pop_up').removeClass('d-flex');
        $('#details_pop_up').addClass('d-none');
    });

    $(document).mouseup(function(e) {
        if ($("#details_pop_up").is(e.target)) {
            $('#details_pop_up').removeClass('d-flex');
            $('#details_pop_up').addClass('d-none');
        }
    });
});