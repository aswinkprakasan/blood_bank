$(document).ready(function () {
    // var email = $('#email').val();



    jQuery.validator.addMethod("passwordformat", function (value, element) {
        return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,20}$/i.test(value);
    }, "Password should contain atleast one character, one special character and one number (8-20 characters)");

    $('#form').validate({
        errorClass: "error fail-alert",
        validClass: "valid success-alert",
        rules: {

            oldpass: {
                required: true,
                passwordformat: true,
                minlength: 8
            },

            newpass: {
                required: true,
                passwordformat: true,
                minlength: 8
            },
            cnewpass: {
                required: true,
                passwordformat: true,
                minlength: 8
            }

        },

        messages: {

            oldpass: {
                required: "Donot leave your password blank",
                minlength: "Passwords should contain atleast 8 characters"
            },

            newpass: {
                required: "Donot leave your password blank",
                minlength: "Passwords should contain atleast 8 characters"
            },
            cnewpass: {
                required: "Donot leave your password blank",
                minlength: "Passwords should contain atleast 8 characters"
            }

        }
    })
})