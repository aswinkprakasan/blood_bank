$(document).ready(function() {
    // var email = $('#email').val();
    errorClass: "error fail-alert";
    validClass: "valid success-alert";

    jQuery.validator.addMethod("emailvalid", 
    function isEmail(email) 
    {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
    , "Please enter a valid email address")
   $('#form').validate({
    rules:{
        email :{
            required:true,
            emailvalid: true 

        },
        password :{
            required:true,
            minlength:8
        }
    }

    // messages: {
    //     email :{
    //         required:"don't be careless",
           

    //     },
    //     password :{
    //         required:"don't be afraid",
    //         minlength:"hello"
    //     }
    // }
   })
})