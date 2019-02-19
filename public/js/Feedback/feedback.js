$(document).ready(function() {
    $('#feedback_add').click(function() {
        $('#feedback_pop_up').removeClass('d-none');
        $('#feedback_pop_up').addClass('d-flex');
    });

    $('#feedback_pop_up_close').click(function() {
        $('#feedback_pop_up').addClass('d-none');
        $('#feedback_pop_up').removeClass('d-flex');
    });

    $(document).mouseup(function(e) {
        if ($("#feedback_pop_up").is(e.target)) {
            $('#feedback_pop_up').addClass('d-none');
            $('#feedback_pop_up').removeClass('d-flex');
        }
    });
});
