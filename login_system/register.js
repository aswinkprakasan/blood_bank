$(document).ready(function() {
    // var email = $('#email').val();
    errorClass: "error fail-alert";
    validClass: "valid success-alert";

    jQuery.validator.addMethod("emailvalid", 
    function isEmail(email) 
    {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }, "Please enter a valid email address")

    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
      }, "Letters only please");

    jQuery.validator.addMethod("phnumvalid", function(value, element) {
        return this.optional(element) || /^[6-9]\d{9}$/i.test(value);
      }, "Please enter a valid phonenumber");
    
   $('#form').validate({
    rules:{
        email :{
            required:true,
            emailvalid: true 

        },
        username :{
            lettersonly:true,
            required:true
        },
        password :{
            required:true,
            minlength: 8
        },
        cpassword :{
            required:true,
            minlength: 8
        },
        weight :{
            required:true,
            number :true,
            min : 50
        },
        address :{
            required:true
        },
        city :{
            required :true,
            lettersonly :true
        },
        phonenumber :{
            required:true,
            phnumvalid :true,
            minlength:10,
            maxlength:10

        }

    },

    // messages: {
    //     email :{
    //         required:"Donot leave your email address empty"
    //     },
    //     username :{
    //         lettersonly:"Numerical values are not allowed",
    //         required:"Please enter your name"
    //     },
    //     password :{
    //         required:"Donot leave your password blank"
    //     },
    //     cpassword :{

    //     },
    //     weight :{
            
    //     },
    //     address :{
            
    //     },
    //     city :{
            
    //     },
    //     phonenumber :{
            
    //     }
    // }
   })
})