import $ from 'jquery';

function contactInit() {
    $('.js-input').keyup(function () {
        console.log("KEY");
        if ($(this).val()) {
            $(this).addClass('not-empty');
        } else {
            $(this).removeClass('not-empty');
        }
    });
}

export { contactInit }