$(document).ready(function () {
    // var email = $('#email').val();


    jQuery.validator.addMethod("emailvalid",
        function isEmail(email) {
            var regex = /^([a-z0-9_.+-])+\@(([a-z0-9-])+\.)+([a-z0-9]{2,4})+$/;
            return regex.test(email);
        }, "Please enter a valid email address");



    $('#form').validate({
        errorClass: "error fail-alert",
        validClass: "valid success-alert",
        rules: {
            email: {
                required: true,
                emailvalid: true

            },

            dob: {
                required: true,
                date: true
            }

        },

        messages: {
            email: {
                required: "Donot leave your email address empty",

            },

            dob: {
                required: "Donot leave your date of birth empty"
            }
        }
    })
})