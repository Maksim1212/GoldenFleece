$(document).ready(function() {
    /* Catalog Price Range */
    var itemPrice;

    if ($('body').width() <= 768) var catalogItems = $('.catalog__items_mobile .catalog__item');
    else var catalogItems = $('.catalog__items .catalog__item');

    if ($('body').width() <= 1200) {
        var
            range        = $('#catalog_price_range_mobile'),
            outputStart  = $('#catalog_price_start_mobile'),
            outputFinish = $('#catalog_price_finish_mobile');
    } else {
        var
            range        = $('#catalog_price_range'),
            outputStart  = $('#catalog_price_start'),
            outputFinish = $('#catalog_price_finish');
    }

    range.slider({
        range: true,
        min: 50,
        max: 2500,
        values: [50, 2500],
        slide: function(event, ui) {
            var
                start              = ui.values[0],
                finish             = ui.values[1],
                priceFindedCounter = 0;

            outputStart.html(start);
            outputFinish.html(finish);

            catalogItems.each(function() {
                if ($('body').width() <= 768) itemPrice = Number($(this).find('a[data-price]').attr('data-price'));
                else itemPrice = Number($(this).find('span[data-price]').attr('data-price'));

                if (itemPrice >= start && itemPrice <= finish) {
                    $(this).css('display', 'block');
                    if ($('body').width() <= 1200) {
                        priceFindedCounter++;
                        $('#undernav_mobile_finded').html('(' + priceFindedCounter + ')');
                    }
                } else {
                    $(this).css('display', 'none');
                    if (priceFindedCounter === 0) $('#undernav_mobile_finded').html('(0)');
                }
            });
        }
    });
});
