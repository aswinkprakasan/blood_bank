$(document).ready(function() {
    // var email = $('#email').val();
    

    jQuery.validator.addMethod("emailvalid", 
    function isEmail(email) 
    {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }, "Please enter a valid email address")

    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
      }, "Only letters are allowed");

    jQuery.validator.addMethod("phnumvalid", function(value, element) {
        return this.optional(element) || /^[6-9]\d{9}$/i.test(value);
      }, "Please enter a valid phonenumber");
    
   $('#form').validate({
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules:{
        email :{
            required:true,
            emailvalid: true 

        },
        username :{
            lettersonly:true,
            required:true,
            minlength:3
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
            max:150
        },
        address :{
            required:true,
            minlength:10
        },
        city :{
            required :true,
            lettersonly :true
        },
        phonenumber :{
            required:true,
            phnumvalid :true,
            minlength:10,
            maxlength:10,
            number :true
        },
        dob :{
            required:true,
            date:true
        },
        sex :{
            required:true
        },
        bloodgroup :{
            required:true
        }

    },

    messages: {
        email :{
            required:"Donot leave your email address empty",
            
        },
        username :{
            
            required:"Donot leave your name empty",
            minlength:"Name should contain atleast 3 characters"
        },
        password :{
            required:"Donot leave your password blank",
            minlength:"Passwords should contain atleast 8 characters"
        },
        cpassword :{
            required:"Donot leave your password blank",
            minlength:"Passwords should contain atleast 8 characters"
        },
        weight :{
            required:"Donot leave your weight empty",
            number:"Only numerical values are allowed",
            max:"Please reduce your weight"   
        },
        address :{
            required:"Donot leave your weight empty",
            minlength:"Atleat 10 characters are required"
        },
        city :{
            required:"Donot leave your city empty",
        },
        phonenumber :{
            required:"Donot leave your phonenumber empty",
            minlength:"Minimum length of the phone number must be 10",
            maxlength:"Maximum length of the phone number must be 10",
            number :"Only numerical values are allowed"
        },
        dob :{
            required:"Donot leave your date of birth empty"
        },
        sex :{
            required:"Donot leave your sex empty"
        },
        bloodgroup :{
            required:"Donot leave your blood group empty"
        }

    }
   })
})