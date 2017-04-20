//                   PLEASE  NOTE 
// 
//to edit this file, you must run Gulp. Because it will compresses the code into new file in compressed folder called script.js. And this file (compressed/script.js) is linked the site. If unable to use gulp or anyother task runner. You can do it manually from online "script minified tools".
// 
//
jQuery(document).ready(function() {

    // ++++++++++++++++++++
    // Show search in top
    // ++++++++++++++++++++ 
    jQuery('.search').click(function(){
        jQuery('.top-search-form-wrapper').slideToggle();
        jQuery('.top-search-form-wrapper .search-form input').focus();
        jQuery(this).toggleClass('show');
    });

    // ++++++++++++++++++++
    // On Touch screen no hover effect
    // ++++++++++++++++++++
      jQuery('a').on('click', function(e) {
        var el = jQuery(this);
        var link = el.attr('href');
        window.location = link;
      });

    // ++++++++++++++++++++ 
    // Responsive Menu
    // ++++++++++++++++++++ 
    jQuery('.menu-button-wrapper').click(function() {
        jQuery(this).toggleClass('show');
        jQuery('.responsive-menu').slideToggle();
    });

    jQuery(".responsive-menu .menu-item-has-children").append("<span class='has-details'></span>");

    jQuery('.has-details').click(function() {
        jQuery(this).toggleClass('show');
        jQuery(this).parent('.menu-item-has-children').find('> .sub-menu').slideToggle();
    });
    // ++++++++++++++++++++ 
    // END of Responsive Menu
    // ++++++++++++++++++++ 

    jQuery(function(){
      SyntaxHighlighter.all();
    });
    jQuery(window).load(function(){
      jQuery('.flexslider-home').flexslider({
        animation: "fade",
        slideshowSpeed: 3000,
        start: function(slider){
          jQuery('body').removeClass('loading');
        }
      });

      jQuery('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        asNavFor: '#slider'
      });
     
      jQuery('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        slideshowSpeed: 3000,
        sync: "#carousel"
      });
    });

}); //End of Document ready

// form validation
  function validateForm(){
    //Variables
    var flname        = document.forms["contactForm"]["flname"];
    var email         = document.forms["contactForm"]["email"];
    var phone         = document.forms["contactForm"]["phone"];
    var message       = document.forms["contactForm"]["message"];
    var inquiry_type  = document.forms["contactForm"]["inquiry_type"];
    var siteUrl       = document.forms["contactForm"]["siteurl"];
    var formUrl       = siteUrl.value + "/mailform.php";


    //Error Variables
    var flname_error = "";
    var email_error = "";
    // var phone_error = "";
    var inquiry_type_error = "";
    var message_error = "";
    var totalError = 0;

  if (flname.value == null || flname.value ==""){
    flname_error = "<li>Name required</li>";
    jQuery(flname).parent('.form-row').addClass('error-input');
    totalError += 1;
  }
  jQuery(flname).keyup(function(){
    if (flname.value == null || flname.value ==""){
        flname_error = "<li>Name required</li>";
        jQuery(flname).parent('.form-row').addClass('error-input');
        totalError += 1;
    } else{
      jQuery(flname).parent('.form-row').removeClass('error-input');
      flname_error = " ";
    }
  });

  var mailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (email.value == null || email.value ==""){
    email_error = "<li>Email required</li>";
    jQuery(email).parent('.form-row').addClass('error-input');
    totalError += 1;
  } else if (!email.value.match(mailformat)){
    email_error = "<li>Email invalid</li>";
    jQuery(email).parent('.form-row').addClass('error-input');
    totalError += 1; 
  }
  jQuery(email).keyup(function(){
    if (email.value == null || email.value ==""){
      email_error = "<li>Email required</li>";
      jQuery(email).parent('.form-row').addClass('error-input');
      totalError += 1;
    } else if(!email.value.match(mailformat)){
      email_error = "<li>Email invalid</li>";
      jQuery(email).parent('.form-row').addClass('error-input');
      totalError += 1; 
    } else{
      jQuery(email).parent('.form-row').removeClass('error-input');
    }
  });

  // if (phone.value == null || phone.value ==""){
  //   phone_error = "<li>Phone required</li>";
  //   jQuery(phone).addClass('error-input');
  //   totalError += 1;
  // }
  // jQuery(phone).keyup(function(){
  //   if (phone.value == null || phone.value ==""){
  //       phone_error = "<li>Phone required</li>";
  //       jQuery(phone).addClass('error-input');
  //       totalError += 1;
  //   } else{
  //     jQuery(phone).removeClass('error-input');
  //     phone_error = " ";
  //   }
  // });

  if (inquiry_type.value == null || inquiry_type.value ==""){
    inquiry_type_error = "<li>Type of Inquiry required</li>";
    jQuery(inquiry_type).parent().parent('.form-row').addClass('error-input');
    totalError += 1;
  }
  jQuery(inquiry_type).parent().change(function(){
    if (inquiry_type.value == null || inquiry_type.value ==""){
        inquiry_type_error = "<li>Type of Inquiry required</li>";
        jQuery(phone).parent().parent('.form-row').addClass('error-input');
        totalError += 1;
    } else{
      jQuery(inquiry_type).parent().parent('.form-row').removeClass('error-input');
      inquiry_type_error = " ";
    }
  });

  if (message.value == null || message.value ==""){
    message_error = "<li>Message required</li>";
    jQuery(message).parent('.form-row').addClass('error-input');
    totalError += 1;
  }
  jQuery(message).keyup(function(){
    if (message.value == null || message.value ==""){
        message_error = "<li>Message required</li>";
        jQuery(message).parent('.form-row').addClass('error-input');
        totalError += 1;
    } else{
      jQuery(message).parent('.form-row').removeClass('error-input');
      message_error = " ";
    }
  });

  var validation_report = document.getElementById('form-validation');
  validation_report.innerHTML = '';

  var success_message = "<p>Thank you for your inquiry <b>" + flname.value + "</b>, hospitality magazine staff member will contact you soon.</p>";

  if (totalError > 0){
    jQuery('.form-validation').show().delay(4000).queue( function(next){
            jQuery(this).hide();
            next();
        });
    jQuery('.form-validation').addClass('error');
    jQuery('.form-validation').removeClass('success');
    jQuery('html, body').animate({
      scrollTop: jQuery('.form-validation').offset().top - 66
    }, 1000);
    
    // validation_report.innerHTML += flname_error +  email_error + inquiry_type_error + message_error;
    if (totalError == 1){
      validation_report.innerHTML += '<p>Please check following 1 error</p>';
    } else {
      validation_report.innerHTML += '<p>Please check following ' + totalError + ' errors</p>'; 
    }
    return false;
  }
    
  jQuery.ajax({
    // var formData = jQuery('form').serialize();
    type: "post",
    url: formUrl,
    data: jQuery('form').serialize(),
    success: function(){
      jQuery('.form-validation').show().delay(4000).queue( function(next){
            jQuery(this).hide();
            next();
        });
      validation_report.innerHTML += success_message;
      jQuery('.form-validation').removeClass('error-input');
      jQuery('.form-validation').addClass('success');
    }
  });
  return false;
  }//end of contactForm
