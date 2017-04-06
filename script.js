//                   PLEASE  NOTE 
// 
//to edit this file, you must run Gulp. Because it will compresses the code into new file in compressed folder called script.js. And this file (compressed/script.js) is linked the site. If unable to use gulp or anyother task runner. You can do it manually from online "script minified tools".
// 
//
$(document).ready(function() {

    // ++++++++++++++++++++
    // Show search in top
    // ++++++++++++++++++++ 
    $('.search').click(function(){
        $('.top-search-form-wrapper').slideToggle();
        $('.top-search-form-wrapper .search-form input').focus();
        $(this).toggleClass('show');
    });

    // ++++++++++++++++++++
    // On Touch screen no hover effect
    // ++++++++++++++++++++
      $('a').on('click', function(e) {
        var el = $(this);
        var link = el.attr('href');
        window.location = link;
      });

    // ++++++++++++++++++++ 
    // Responsive Menu
    // ++++++++++++++++++++ 
    $('.menu-button-wrapper').click(function() {
        $(this).toggleClass('show');
        $('.responsive-menu').slideToggle();
    });

    $(".responsive-menu .menu-item-has-children").append("<span class='has-details'></span>");

    $('.has-details').click(function() {
        $(this).toggleClass('show');
        $(this).parent('.menu-item-has-children').find('> .sub-menu').slideToggle();
    });
    // ++++++++++++++++++++ 
    // END of Responsive Menu
    // ++++++++++++++++++++ 

    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider-home').flexslider({
        animation: "fade",
        slideshowSpeed: 3000,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });

      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        asNavFor: '#slider'
      });
     
      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        slideshowSpeed: 3000,
        sync: "#carousel"
      });
    });

}); //End of Document ready
