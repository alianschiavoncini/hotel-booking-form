jQuery( document ).ready(function( $ ) {

    /**
     * Datepicker for Check-in and Check-out
     */
    var bf_checkin = '.hotel-booking-form__input-checkin';
    var bf_checkout = '.hotel-booking-form__input-checkout';

    $(bf_checkin).datepicker({
        defaultDate: "+1w",
        inline: true,
        showOtherMonths: true,
        dateFormat: $(bf_checkin).attr( "data-date-format"),
        minDate: "today",

        onClose: function( selectedDate ) {
            $( bf_checkout ).datepicker( "option", "minDate", selectedDate );
            var myDate = $(this).datepicker("getDate");
            myDate.setDate( myDate.getDate() + 1 );
            var date = new Date();
            date.setDate(date.getDate() + 1);
            $(bf_checkout).datepicker("setDate", myDate);
        }
    });

    $(bf_checkout).datepicker({
        defaultDate: "+1w",
        inline: true,
        showOtherMonths: true,
        dateFormat: $( bf_checkout ).attr( "data-date-format"),
        minDate: "today" + 1,
    });

    $(bf_checkin).datepicker("setDate", "today");
    $(bf_checkout).datepicker("setDate", "today" + 1);

    /**
     * Show/hide children age select dropdown based on children select option value
     */
    var bf_children = '.hotel-booking-form__select-children';
    var bf_children_age = '.hotel-booking-form__column-children_age';

    //disable and hide all the children age
    $(bf_children_age + " select").prop('disabled', 'disabled')
    $(bf_children_age).css('display', 'none');

    //show the children_age select based on n children selected
    $( ".hotel-booking-form__select-children" ).change(function () {

        //disable and hide all children select the age before viewing them
        $(bf_children_age + " select").prop('disabled', 'disabled')
        $(bf_children_age).css('display', 'none');

        //get the value of the choosen children
        var n_children = $(bf_children).val();

        for (i = 1; i <= n_children; i++) {
            var wrapper = bf_children_age + '-' + i;
            $(wrapper + ' select').prop('disabled', false);
            $(wrapper).css('display', 'block');
        }

    });

    /**
     * Enable/disable the form submit button
     */
    $('.hotel-booking-form #privacy').click(function() {
        if($(this).is(':checked')) {
            $('.hotel-booking-form input[type=submit]').prop('disabled', false);
        }else{
            $('.hotel-booking-form input[type=submit]').prop("disabled", 'disabled');
        }
    });

});