$(document).ready(function(){$(".search").click(function(){$(".top-search-form-wrapper").slideToggle(),$(".top-search-form-wrapper .search-form input").focus()}),$(".menu-button-wrapper").click(function(){$(this).toggleClass("show"),$(".responsive-menu").addClass("show")}),$(window).scroll(function(){var o=$(window).scrollTop();o>=33?$("body").addClass("on-scrolled"):$("body").removeClass("on-scrolled")}),$(function(){SyntaxHighlighter.all()}),$(window).load(function(){$(".flexslider-home").flexslider({animation:"fade",start:function(o){$("body").removeClass("loading")}}),$("#carousel").flexslider({animation:"slide",controlNav:!1,animationLoop:!1,slideshow:!1,asNavFor:"#slider"}),$("#slider").flexslider({animation:"slide",controlNav:!1,animationLoop:!1,slideshow:!1,sync:"#carousel"})})});