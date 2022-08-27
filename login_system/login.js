$(document).ready(function() {
    // var email = $('#email').val();
    errorClass: "error fail-alert";
    validClass: "valid success-alert";

    jQuery.validator.addMethod("emailvalid", 
    function isEmail(email) 
    {
        var regex = /^([a-z0-9_.+-])+\@(([a-z0-9-])+\.)+([a-z0-9]{2,4})+$/;
        return regex.test(email);
    }
    , "Please enter a valid email address")
   $('#form').validate({
    errorClass: "error fail-alert",
    validClass: "valid success-alert",

    rules:{
        email :{
            required:true,
            emailvalid: true 

        },
        password :{
            required:true,
            minlength:8
        }
    },

    messages: {
        email :{
            required:"Donot leave this blank empty"
           

        },
        password :{
            required:"Please enter your email address",
            minlength:"Passwords should contain atleast 8 characters"
        }
    }
   })
})