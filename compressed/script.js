function validateForm(){var e=document.forms.contactForm.flname,r=document.forms.contactForm.email,a=document.forms.contactForm.phone,o=document.forms.contactForm.message,u=document.forms.contactForm.inquiry_type,l=document.forms.contactForm.siteurl,i=l.value+"/mailform.php",n="",t="",s="",d="",m=0;null!=e.value&&""!=e.value||(n="<li>Name required</li>",jQuery(e).parent(".form-row").addClass("error-input"),m+=1),jQuery(e).keyup(function(){null==e.value||""==e.value?(n="<li>Name required</li>",jQuery(e).parent(".form-row").addClass("error-input"),m+=1):(jQuery(e).parent(".form-row").removeClass("error-input"),n=" ")});var y=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))jQuery/;null==r.value||""==r.value?(t="<li>Email required</li>",jQuery(r).parent(".form-row").addClass("error-input"),m+=1):r.value.match(y)||(t="<li>Email invalid</li>",jQuery(r).parent(".form-row").addClass("error-input"),m+=1),jQuery(r).keyup(function(){null==r.value||""==r.value?(t="<li>Email required</li>",jQuery(r).parent(".form-row").addClass("error-input"),m+=1):r.value.match(y)?jQuery(r).parent(".form-row").removeClass("error-input"):(t="<li>Email invalid</li>",jQuery(r).parent(".form-row").addClass("error-input"),m+=1)}),null!=u.value&&""!=u.value||(s="<li>Type of Inquiry required</li>",jQuery(u).parent().parent(".form-row").addClass("error-input"),m+=1),jQuery(u).parent().change(function(){null==u.value||""==u.value?(s="<li>Type of Inquiry required</li>",jQuery(a).parent().parent(".form-row").addClass("error-input"),m+=1):(jQuery(u).parent().parent(".form-row").removeClass("error-input"),s=" ")}),null!=o.value&&""!=o.value||(d="<li>Message required</li>",jQuery(o).parent(".form-row").addClass("error-input"),m+=1),jQuery(o).keyup(function(){null==o.value||""==o.value?(d="<li>Message required</li>",jQuery(o).parent(".form-row").addClass("error-input"),m+=1):(jQuery(o).parent(".form-row").removeClass("error-input"),d=" ")});var c=document.getElementById("form-validation");c.innerHTML="";var p="<p>Thank you for your inquiry <b>"+e.value+"</b>, hospitality magazine staff member will contact you shortly.</p>";return m>0?(jQuery(".form-validation").show().delay(4e3).queue(function(e){jQuery(this).hide(),e()}),jQuery(".form-validation").addClass("error"),jQuery(".form-validation").removeClass("success"),jQuery("html, body").animate({scrollTop:jQuery(".form-validation").offset().top-66},1e3),1==m?c.innerHTML+="<p>Please check following 1 error</p>":c.innerHTML+="<p>Please check following "+m+" errors</p>",!1):(jQuery.ajax({type:"post",url:i,data:jQuery("form").serialize(),success:function(){jQuery(".form-validation").show().delay(4e3).queue(function(e){jQuery(this).hide(),e()}),c.innerHTML+=p,jQuery(".form-validation").removeClass("error-input"),jQuery(".form-validation").addClass("success")}}),!1)}jQuery(document).ready(function(){jQuery(".search").click(function(){jQuery(".top-search-form-wrapper").slideToggle(),jQuery(".top-search-form-wrapper .search-form input").focus(),jQuery(this).toggleClass("show")}),jQuery("a").on("click",function(e){var r=jQuery(this),a=r.attr("href");window.location=a}),jQuery(".menu-button-wrapper").click(function(){jQuery(this).toggleClass("show"),jQuery(".responsive-menu").slideToggle()}),jQuery(".responsive-menu .menu-item-has-children").append("<span class='has-details'></span>"),jQuery(".has-details").click(function(){jQuery(this).toggleClass("show"),jQuery(this).parent(".menu-item-has-children").find("> .sub-menu").slideToggle()}),jQuery(function(){SyntaxHighlighter.all()}),jQuery(window).load(function(){jQuery(".flexslider-home").flexslider({animation:"fade",slideshowSpeed:3e3,start:function(e){jQuery("body").removeClass("loading")}}),jQuery("#carousel").flexslider({animation:"slide",controlNav:!1,animationLoop:!1,asNavFor:"#slider"}),jQuery("#slider").flexslider({animation:"slide",controlNav:!1,slideshowSpeed:3e3,sync:"#carousel"})})});