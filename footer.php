<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package natifico
 */

?>







<!-- футер-->

<div class="footer">
  <div class="footer-left">
    <h1><?php pll_e('About'); ?></h1>
    <p><?php pll_e('Natifico unites professionals all around the ndustry. Advertisers, webmasters
and affiliates are fundamental of our business. Being an intermediary in the
business operations we are pushing our maximum to generate value for our
partners by injecting our energy into money making processes and cutting up
the risks for publishers as well as for advertisers.'); ?></p>
    <div class="footer-columns-a">
        <a href="https://www.facebook.com/Natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/facebook.jpg" alt=""></a>
        <a href="https://www.instagram.com/natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/instagram.jpg" alt=""></a>
        <a href="https://www.linkedin.com/company/natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/linkedin.jpg" alt=""></a>
        <a href="https://t.me/Natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/telegram.jpg" alt=""></a>
        <a href="https://vk.com/natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/vk.jpg" alt=""></a>
    </div>
  </div>
  <div class="footer-columns-a">
    <h1><?php pll_e('Quick Link'); ?></h1>
    <?php
    wp_nav_menu( array(
        'theme_location' => 'footer-columns-a',
        'menu_class'     => 'footer-columns-a',
        'menu'            => 'english', 
         ) );
?>

  </div>
  <div class="footer-columns-a">
      <h1><?php pll_e('Resources'); ?></h1>
      <a href=""><p>Customer Support</p></a>
      <a href=""><p>Privacy</p></a>
      <a href=""><p>Terms</p></a>
      <a href=""><p>Contact</p></a>
      <a href=""><p>Login</p></a>
      <a href=""><p>Register</p></a>
  </div>



  <div class="footer-4">
    <h1><?php pll_e('Contact Us'); ?></h1>
    <p>PBM Group Ltd. +852 81913202</p>
    <p>Hong Kong, Tsim Sha Tsui, 42 Cameron Road</p>
    <p>10F Chinachem Cameron Centre, Room1</p>

    <div class="sub-up">
         <p class="subscribe"><input type="name" placeholder="Your E-mail"><span><button>Subscribe</button></span>


    </div>
    <div class="footer-logo">
      <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="" width="300">
      <p>© Natifico.com 2018-<?php echo date('Y'); ?>. <?php pll_e('All rights reserved.'); ?></p>
    </div>
  </div>
</div>
<!--конец футер-->







<script>
        $('select').each(function(){
            var $this = $(this), numberOfOptions = $(this).children('option').length;

            $this.addClass('select-hidden');
            $this.wrap('<div class="select"></div>');
            $this.after('<div class="select-styled"></div>');

            var $styledSelect = $this.next('div.select-styled');
            $styledSelect.text($this.children('option').eq(0).text());

            var $list = $('<ul />', {
                'class': 'select-options'
            }).insertAfter($styledSelect);

            for (var i = 0; i < numberOfOptions; i++) {
                $('<li />', {
                    text: $this.children('option').eq(i).text(),
                    rel: $this.children('option').eq(i).val()
                }).appendTo($list);
            }

            var $listItems = $list.children('li');

            $styledSelect.click(function(e) {
                e.stopPropagation();
                $('div.select-styled.active').not(this).each(function(){
                    $(this).removeClass('active').next('ul.select-options').hide();
                });
                $(this).toggleClass('active').next('ul.select-options').toggle();
            });

            $listItems.click(function(e) {
                e.stopPropagation();
                $styledSelect.text($(this).text()).removeClass('active');
                $this.val($(this).attr('rel'));
                $list.hide();
                //console.log($this.val());
            });

            $(document).click(function() {
                $styledSelect.removeClass('active');
                $list.hide();
            });

        });
        </script>

<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("main").style.top = "0";
  } else {
    document.getElementById("main").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>
<script>
jQuery(document).ready(function($) {

  $(".languages").click(function(){
      $(".languages ul").show();
    })
 $(".languages ul").mouseleave(function(){
   $(".languages ul").hide();
 });

 $(".languages li a").click(function(){
      $(".languages li a").removeClass('sel');
      $(this).addClass('sel');
      var selectedValue = $(this).text();
      var showLang = selectedValue.substring(0, 2);
      $('.languages .current').html(showLang);
      $('.languages .current').attr("title", selectedValue);
      $('.languages .hover').html(selectedValue);
    })



 });
</script>


<script>

$('.slide2').owlCarousel({
    mouseDrag:false,
    loop:true,
    margin:10,
    nav:true,

    navText:['<img class="icon icons8-Chevron-Left" width="26" height="26" src="<?php bloginfo('template_directory'); ?>/images/right-arrow1.png">','<img class="icon icons8-hevron-Right-Filled" width="26" height="26" src="<?php bloginfo('template_directory'); ?>/images/right-arrow2.png">'],
    autoplay:0,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});







</script>

<script>
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText:['<img class="icon icons8-Chevron-Left" width="26" height="26" src="<?php bloginfo('template_directory'); ?>/images/right-arrow1.png">','<img class="icon icons8-hevron-Right-Filled" width="26" height="26" src="<?php bloginfo('template_directory'); ?>/images/right-arrow2.png">'],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  });
  </script>
<script>
jQuery(document).ready(
function ()
{
    menuMobile ();
});

function menuMobile ()
{
    $("#bt-menu-mobile").click(function(){
        $("#wrapper-menu-mobile").css({left:0, opacity:0});
        $("#wrapper-menu-mobile").animate({opacity:1},0);
        $("#wrapper-menu-mobile .wrapper").animate({ right:"0"},0);
        jQuery(document.body).css('overflow', 'hidden');
        return false;
    });

    $("#bt-fechar-menu").click(function(){
        closeMenuMobile ();
        return false;
    });

    $(".block-menu-mobile").mousedown(function(){
        closeMenuMobile ();
    });
}

function closeMenuMobile (){
    $("#wrapper-menu-mobile .wrapper").animate({ right:"-100%"},0,function(){
        $("#wrapper-menu-mobile").animate({opacity:0},0,function(){
            $("#wrapper-menu-mobile").css({left:"100%", opacity:1});
            jQuery(document.body).css('overflow', 'auto');
        });
    });
}


</script>









<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
    // Get the modal
    var modal1 = document.getElementById("myModal1");

    // Get the button that opens the modal
    var btn1 = document.getElementById("myBtn1");

    // Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("close1")[0];

    // When the user clicks on the button, open the modal
    btn1.onclick = function() {
      modal1.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
      modal1.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal1) {
        modal1.style.display = "none";
      }
    }
</script>
<script>
        // Get the modal
        var modal2 = document.getElementById("myModal2");

        // Get the button that opens the modal
        var btn2 = document.getElementById("myBtn2");

        // Get the <span> element that closes the modal
        var span2 = document.getElementsByClassName("close2")[0];

        // When the user clicks on the button, open the modal
        btn2.onclick = function() {
          modal2.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span2.onclick = function() {
          modal2.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal2) {
            modal2.style.display = "none";
          }
        }
</script>
<script>
    // Get the modal
    var modal3 = document.getElementById("myModal3");

    // Get the button that opens the modal
    var btn3 = document.getElementById("myBtn3");

    // Get the <span> element that closes the modal
    var span3 = document.getElementsByClassName("close3")[0];

    // When the user clicks on the button, open the modal
    btn3.onclick = function() {
      modal3.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span3.onclick = function() {
      modal3.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal3) {
        modal3.style.display = "none";
      }
    }
</script>
<script>
    // Get the modal
    var modal4 = document.getElementById("myModal4");

    // Get the button that opens the modal
    var btn4 = document.getElementById("myBtn4");

    // Get the <span> element that closes the modal
    var span4 = document.getElementsByClassName("close4")[0];

    // When the user clicks on the button, open the modal
    btn4.onclick = function() {
      modal4.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span4.onclick = function() {
      modal4.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal4) {
        modal4.style.display = "none";
      }
    }
</script>
<script>
     // Get the modal
     var modal5 = document.getElementById("myModal5");

     // Get the button that opens the modal
     var btn5 = document.getElementById("myBtn5");

     // Get the <span> element that closes the modal
     var span5 = document.getElementsByClassName("close5")[0];

     // When the user clicks on the button, open the modal
     btn5.onclick = function() {
       modal5.style.display = "block";
     }

     // When the user clicks on <span> (x), close the modal
     span5.onclick = function() {
       modal5.style.display = "none";
     }

     // When the user clicks anywhere outside of the modal, close it
     window.onclick = function(event) {
       if (event.target == modal5) {
         modal5.style.display = "none";
       }
     }
</script>
<script>
$(document).ready(function () {

  'use strict';

   var c, currentScrollTop = 0,
       navbar = $('nav');

   $(window).scroll(function () {
      var a = $(window).scrollTop();
      var b = navbar.height();

      currentScrollTop = a;

      if (c < currentScrollTop && a > b + b) {
        navbar.addClass("scrollUp");
      } else if (c > currentScrollTop && !(a <= b)) {
        navbar.removeClass("scrollUp");
      }
      c = currentScrollTop;
  });

});
</script>
<script>
function setInfoHeight() {
  $(window).on('load resize', function() {
    $('.info').each(function () {
      var current = $(this);
      var closed = $(this).height() == 0;
      current.height('auto').attr('h', current.height() );
      current.height(closed ? '0' : current.height());
    });
  });
}
function moreInformation() {

  $('.icon-container').click(function() {
    var info = $(this).closest('.dish-header').next('.info'); // Just the one info
    var icon = $(this).children('.info-btn'); // Select the logo

    // Stop any ongoing animation loops. Without this, you could click button 10
    // times real fast, and watch an animation of the info showing and closing
    // for a few seconds after
    icon.stop();
    info.stop();

    // Flip icon and hide/show info (choose 1 method here and)
    icon.toggleClass('flip');

    // Metnod 1, animation handled by JS
    // info.slideToggle('slow');

    // Method 2, animation handled by CSS, use with setInfoheight function
    info.toggleClass('active').height(icon.is('.flip') ? info.attr('h') : '0');

  });
};

$(moreInformation);
$(setInfoHeight);

</script>























	</div><!-- #content -->


</div><!-- #page -->
<?php wp_footer(); ?>


</body>
</html>
