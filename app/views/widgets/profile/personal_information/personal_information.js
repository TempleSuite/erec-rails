$(document).ready(function() {
  
   //validation Personal Information 
  var $checkoutForm = $('#personal-information-form').validate({
    // Rules for form validation
    rules : {
      firstname : {
        required : true
      },
      lastname : {
        required : true
      },
      email : {
        email : true
      },
      phone : {
        required : true
      },
      country : {
        required : true
      },
      city : {
        required : true
      },
      state : {
        required : true
      },
      address : {
        required : true 
      },
      unit : {
        required : true
      },
      code : {
        required : true
      }
    },
    // Messages for form validation
    messages : {
      firstname : {
        required : 'Please enter your first name'
      },
      lastname : {
        required : 'Please enter your last name'
      },
      email : {
        required : 'Please enter your email address',
        email : 'Please enter a VALID email address: name@domain.com'
      },
      phone : {
        required : 'Please enter your phone number'
      },
      country : {
        required : 'Please select your country'
      },
      city : {
        required : 'Please enter your city'
      },
      state : {
        required : 'Please enter your state'
      },
      address : {
        required : 'Please enter your full address'
      },
      unit : {
        required : 'Please enter unit number'
      },
      code : {
        required : 'Please enter postal code'
      }
    },

    // Do not change code below
    errorPlacement : function(error, element) {
      error.insertAfter(element.parent());
    }
  });
  
  $('.letters-only').keypress(function (e) {
    var regex = new RegExp("^[a-zA-Z]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    return false;
  });  
  
});
