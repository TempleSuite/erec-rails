$(document).ready(function() {

  //validation Emergency/Medical Information 
  var $checkoutForm = $('#emergency-contact-form').validate({
    // Rules for form validation
    rules : {
      name : {
        required : true
      },
      email : {
        email : true
      },
      phone1 : {
        required : true
      },
      allergies : {
        required : true
      },
      conditions : {
        required : true
      },
      dietary : {
        required : true
      },
      bloodtype : {
        required : true 
      },
      secretword : {
        required : true
      }
    },
    // Messages for form validation
    messages : {
      name : {
        required : 'Please enter emergency name'
      },
      email : {
        required : 'Please enter your email address',
        email : 'Please enter a VALID email address: name@domain.com'
      },
      phone1 : {
        required : 'Please enter emergency phone number'
      },
      allergies : {
        required : 'Do you have allergy?'
      },
      conditions : {
        required : 'Please enter conditions'
      },
      dietary : {
        required : 'Please enter dietary restriction'
      },
      bloodtype : {
        required : 'Please enter your blood type'
      },
      secretword : {
        required : 'Please enter pickup secret word'
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
