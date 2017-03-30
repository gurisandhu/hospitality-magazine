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
    });

    // ++++++++++++++++++++ 
    // Responsive Menu
    // ++++++++++++++++++++ 
    $('.menu-button-wrapper').click(function() {
        $(this).toggleClass('show');
        $('.responsive-menu').addClass('show');
    });

    // ++++++++++++++++++++
    // Header fixed, reduce size
    // ++++++++++++++++++++
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 33) {
            $('body').addClass('on-scrolled');
        } else {
            $('body').removeClass('on-scrolled');
        }
    });

    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider-home').flexslider({
        animation: "fade",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });

      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        asNavFor: '#slider'
      });
     
      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel"
      });
    });

}); //End of Document ready
