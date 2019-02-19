$(document).ready(function(argument) {
	var
	    decrease     = $('.cart-decrease'),
	    increase     = $('.cart-increase'),
	    currentPrice = $('#current_price'),
	    cartItems    = $('.cart-desc__item'),
	    price        = 0;

	cartItems.each(function() {
		price += Number($(this).find('span[data-price]').attr('data-price'));
	});
	currentPrice.html(price);

	decrease.click(function() {
	    var
	        food          = $(this).parent().parent().find('.food-count'),
	        hidden 		  = $(this).parent().parent().find('.food-count-input-hidden'),
	        decreasePrice = Number($(this).attr('data-price'));

	    if (price > 0 && Number(food.html()) > 1) {
	    	price -= decreasePrice;
	    	currentPrice.html(price);
	    	(Number(food.html()) > 1) ? food.html(Number(food.html()) - 1) : food.html('1');
	   		hidden.val(food.html());
	    }
	});

	increase.click(function() {
	    var
	        food  		  = $(this).parent().parent().find('.food-count'),
	        hidden 		  = $(this).parent().parent().find('.food-count-input-hidden'),
	        increasePrice = Number($(this).attr('data-price'));

	    food.html(Number(food.html()) + 1);
	    hidden.val(food.html());
	    price += increasePrice;
	    currentPrice.html(price);
	});

	/* Food sorting */

    $('.catalog-search-prop').click(function() {
        var sortProperty = $(this).attr('data-search-param');
        catalogRedirect('/delivery.html?sort?' + sortProperty);
        console.log(1);
    });

    /* Search */

    cartDeliverySearch('cart_search_form');
    cartDeliverySearch('cart_search_mobile_form');

    /* Functions */

    function catalogRedirect(path) { window.location.href = path; }

    function cartDeliverySearch(form) {
    	$('#' + form).submit(function() {
	        var searchProperty = $('#' + form).find('input[type="text"]').val();
	        catalogRedirect(encodeURI('/delivery.html?search?' + searchProperty));
	        return false;
	    });
    }
});