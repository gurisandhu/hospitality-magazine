<div class="hide-body"></div>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
<!--Flexslider Plugin REMOVE AFTER WORDPRESS-->
     <!-- jQuery -->
   <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="flexslider/js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        // animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="flexslider/js/shCore.js"></script>
  <script type="text/javascript" src="flexslider/js/shBrushXml.js"></script>
  <script type="text/javascript" src="flexslider/js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="flexslider/js/jquery.easing.js"></script>
  <script src="flexslider/js/jquery.mousewheel.js"></script>
  <script defer src="flexslider/js/demo.js"></script>
<!--End of Flexslider Plugin REMOVE AFTER WORDPRESS-->
<!--<script src="compressed/script.js"></script>-->
</body>
</html>