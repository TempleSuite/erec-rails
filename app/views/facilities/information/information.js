$(document).ready(function() {

  //validation 
  var $checkoutForm = $('#facility-information-form').validate({
    // Rules for form validation
    rules : {
      email : {
        required : true,
        email : true
      },
      phone : {
        required : true
      },
      country : {
        required : true,
        letters : true
      },
      city : {
        required : true,
        letters: true
      },
      address : {
        required : true 
      },
      unit : {
        required : true,
        digits : true
      },
      code : {
        required : true
      },
      capacity :{
        digits : true
      },
      deposit :{
        required : true,
        digits : true
      }
    },
    // Messages for form validation
    messages : {
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
      address : {
        required : 'Please enter your full address'
      },
      unit : {
        required : 'Please enter unit number'
      },
      code : {
        required : 'Please enter postal code'
      },
      capacity :{
       capacity : 'Please enter digits'
      },
      deposit :{
        required : 'Please enter security deposit'
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
