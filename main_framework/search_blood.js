$(document).ready(function () {
    // var email = $('#email').val();


    jQuery.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Only letters are allowed");


    $('#form').validate({
        errorClass: "error fail-alert",
        validClass: "valid success-alert",
        rules: {

            city: {

                lettersonly: true
            }

        },

        // messages: {

        //     city :{
        //         required:"Donot leave your city empty",
        //     }

        // }
    })
})