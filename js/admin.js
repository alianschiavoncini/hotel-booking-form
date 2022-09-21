jQuery( document ).ready(function( $ ) {

    //Ref. https://stackoverflow.com/questions/14853779/adding-input-elements-dynamically-to-form

    // Room types
    var room_max_fields = 10;
    var room_wrapper = $(".room-type");
    var room_add_button = $(".hotel-booking-form-room_options_add_field");

    var room_n = $('.hotel-booking-form-new-room-option').length;
    $(room_add_button).click(function(e) {
        e.preventDefault();
        if (room_n < room_max_fields) {
            room_n++;
            $(room_wrapper).append('<div class="hotel-booking-form-new-room-option">' + room_n + ') <input type="text" name="hotel-booking-form-room_options[]" class="regular-text" /><button class="button hotel-booking-form-room_options_delete_field">Delete</button></div>');
        } else {
            alert('You reached the limits of ' + room_max_fields);
        }
    });

    $(room_wrapper).on("click", ".hotel-booking-form-room_options_delete_field", function(e) {
        e.preventDefault();
        $(this).parent('div.hotel-booking-form-new-room-option').remove();
        room_n--;
    })

    // Treatment types
    var treatment_max_fields = 10;
    var treatment_wrapper = $(".treatment-type");
    var treatment_add_button = $(".hotel-booking-form-treatment_options_add_field");

    var treatment_n = $('.hotel-booking-form-new-treatment-option').length;
    $(treatment_add_button).click(function(e) {
        e.preventDefault();
        if (treatment_n < treatment_max_fields) {
            treatment_n++;
            $(treatment_wrapper).append('<div class="hotel-booking-form-new-treatment-option">' + treatment_n + ') <input type="text" name="hotel-booking-form-treatment_options[]" class="regular-text" /><button class="button hotel-booking-form-treatment_options_delete_field">Delete</button></div>');
        } else {
            alert('You reached the limits of ' + treatment_max_fields);
        }
    });

    $(treatment_wrapper).on("click", ".hotel-booking-form-treatment_options_delete_field", function(e) {
        e.preventDefault();
        $(this).parent('div.hotel-booking-form-new-treatment-option').remove();
        treatment_n--;
    })

    // Color picker
    $('.colorpick').iris({
        // or in the data-default-color attribute on the input
        defaultColor: true,
        // a callback to fire whenever the color changes to a valid color
        change: function(event, ui){},
        // a callback to fire when the input is emptied or an invalid color
        clear: function() {},
        // hide the color picker controls on load
        hide: true,
        // show a group of common colors beneath the square
        palettes: true
    });


    $('.section-wrapper td').click(function (e) {
        if (!$(e.target).is(".colorpick, .colour-picker, .iris-picker, .iris-picker-inner")) {
            $('.colorpick').iris('hide');
            return true;
        }
    });

    $('.colorpick').click(function (event) {
        $('.colorpick').iris('hide');
        $(this).iris('show');
        return false;
    });

});