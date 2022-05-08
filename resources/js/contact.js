import $ from 'jquery';

function contactInit() {
    $('.js-input').keyup(function () {
        if ($(this).val()) {
            $(this).addClass('not-empty');
        } else {
            $(this).removeClass('not-empty');
        }
    });

    if ($("#content").val().length > 0) {
        $("#content").addClass('not-empty');
    } else {
        $("#content").addClass('not-empty');
    }
}

export { contactInit }