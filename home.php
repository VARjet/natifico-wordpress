	<?php
	/*
	Template Name: home
	Template Post Type: page
	*/
	?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package natifico
 */

get_header();
?>












<!--Вверхний слайдер-->
    <div class="topslider">
    <div class="top-big-slider">

        <div class="yopslider-h1-h1">
            <h1><?php pll_e('First in monetization'); ?></h1>
            <div class="slider-button-1"><span><p><?php pll_e('Natifico for Affiliates Publishers Registration'); ?></p></span>
            <div class="slider-up-btn"><button></button></div>
           </div>
           <a href="/agency/" style="text-decoration:none;"> <div class="slider-button-2"><button></button> <span><p><?php pll_e('Natifico for Advertisers Performance Agency'); ?></p></span>
            </div></a>

            <div class="slider-button-reg"><span><p><?php pll_e('Login'); ?></p></span>
              <div class="slider-up-btn"><button></button></div>
             </div>



        </div>
        <div class="yopslider-h2-h2">
          <img src="<?php bloginfo('template_directory'); ?>/images/toplider-img.svg" alt="" width="10">
        </div>

    </div>
  </div>
<!-- КонецВверхний слайдер-->










<!--Наши партнёры-->
<div class="our-partners">
  <h1><?php pll_e('Our Partners'); ?></h1>

	<div class="carousel-wrap">
    <div class="owl-carousel">
	<?php if( have_rows('partners', 2, 12)): ?>
					<?php while( have_rows('partners', 2, 12) ): the_row();

				// vars
				$image_partner = get_sub_field('image_partner');


				?>

      <div class="item item-index" style="background:url(<?php echo $image_partner; ?>);     background-position: center; background-repeat: no-repeat; background-size:contain;"></div>


		<?php endwhile; ?>
	<?php endif; ?>
    </div>
  </div>








    <div class="slidecenter2">
        <div class="brrrr2" style="background:url(<?php bloginfo('template_directory'); ?>/images/partners/ali.png);     background-position: center; background-repeat: no-repeat;"></div>
        <div class="brrrr2" style="background:url(<?php bloginfo('template_directory'); ?>/images/partners/ebay.png);    background-position: center; background-repeat: no-repeat;">    </div>
        <div class="brrrr2 huyna2" style="background:url(<?php bloginfo('template_directory'); ?>/images/partners/lazada.png);  background-position: center; background-repeat: no-repeat;">  </div>
        <div class="brrrr2 huyna2" style="background:url(<?php bloginfo('template_directory'); ?>/images/partners/uc.png);      background-position: center; background-repeat: no-repeat;">      </div>
        <div class="brrrr2 huyna2" style="background:url(<?php bloginfo('template_directory'); ?>/images/partners/ask.png);     background-position: center; background-repeat: no-repeat;">     </div>
        <div class="brrrr2 huynya" style="background:url(<?php bloginfo('template_directory'); ?>/images/partners/ali.png);     background-position: center; background-repeat: no-repeat;">     </div>
    </div>


  </div>

<!--Конец Наши партнёры-->














<!--Блог-->
<div class="blog-up">
    <h1 class="blog-up-h1 blog-up-h111"><?php pll_e('Blog'); ?></h1>
    <div class="blog">
  <div class="blog-left">
	  <?php
$pc = new WP_Query('showposts=4'); ?>
<?php while ($pc->have_posts()) : $pc->the_post(); ?>
	      <div class="blog-left-post">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
	  <h2><?php the_time('j F, Y'); ?></h2>
	  <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

		</div>

	  <?php endwhile; ?>
<?php wp_reset_postdata(); ?>


  </div>

  <div class="blog-right">
    <p><?php pll_e('Хочу поблагодарить команду Natifico за действительно крутые и свежие офферы! И отдельно за эксклюзив :) Много стран, молниеносная поддержка, топовые показатели по конверсии и профиту. За все время работы удалось масштабироваться практически в три раза. Доволен совместной работой. Однозначно рекомендую.'); ?></p>
    <p style="text-align: right; color:black;">- <?php pll_e('Стивен Уоллис, юрист'); ?></p>
  </div>
</div>
</div>
<div class="all-blog">
	<a href="/blog/" style="text-decoration: none;
    color: black;"><div> <p><?php pll_e('All blog'); ?></div></a>
</div>
<!--Блог-->




<!--Why Natifico Rocks-->


<div class="payouts-up">
    <h1 class="blog-up-h1" ><?php pll_e('Why Natifico Rocks'); ?></h1>
  <div class="payouts">


    <div id="myBtn" class="view view-first">

        <img src="<?php bloginfo('template_directory'); ?>/images/icons/line-chart.svg" alt="">
        <h1 style="color: black;"><?php pll_e('High payouts'); ?></h1>
        <div class="mask">
          <h2><?php pll_e('High payouts'); ?></h2>
          <p><?php pll_e('High payouts are results of a big work, which is done based on our values
applied to all business processes.'); ?></p>
        </div>
    </div>

    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <p><?php pll_e('High payouts are results of a big work, which is done based on our values
applied to all business processes.'); ?></p>
      </div>

    </div>


<div id="myBtn1" class="view view-first">
    <img src="<?php bloginfo('template_directory'); ?>/images/icons/stats1.svg" alt="">
    <h1 style="color: black;"><?php pll_e('Personal manager'); ?>
      </h1>


      <div class="mask">
        <h2><?php pll_e('Personal manager'); ?>
          </h2>
        <p><?php pll_e('In order to succeed, it is really crucial to have a great communication channel.
Our managers are ready to give you a hand even in the most difficult cases.'); ?></p>

      </div>
    </div>
    <div id="myModal1" class="modal1">
        <!-- Modal content -->
        <div class="modal-content1">
          <span class="close1">&times;</span>
          <p><?php pll_e('In order to succeed, it is really crucial to have a great communication channel.
Our managers are ready to give you a hand even in the most difficult cases.'); ?></p>
        </div>

      </div>














            <div id="myBtn2" class="view view-first">
                <img src="<?php bloginfo('template_directory'); ?>/images/icons/video-marketing1.svg" alt="">
                <h1 style="color: black;"><?php pll_e('Catchy promo materials'); ?></h1>


                  <div class="mask">
                    <h2><?php pll_e('Catchy promo materials'); ?></h2>
                    <p><?php pll_e('Creative materials are one of the key factors for effective campaigns. We will
share with you knowledge and expertise of the moneymaking campaign, so you
can develop your unique outstanding promo materials.'); ?></p>

                  </div>
                </div>
                <div id="myModal2" class="modal2">
                    <!-- Modal content -->
                    <div class="modal-content2">
                      <span class="close2">&times;</span>
                      <p><?php pll_e('Creative materials are one of the key factors for effective campaigns. We will
share with you knowledge and expertise of the moneymaking campaign, so you
can develop your unique outstanding promo materials.'); ?></p>
                    </div>

                  </div>
                <div id="myBtn3" class="view view-first">
                    <img src="<?php bloginfo('template_directory'); ?>/images/icons/presentation.svg" alt="">
                    <h1 style="color: black;"><?php pll_e('Exclusive WW Offers'); ?>
                      </h1>


                      <div class="mask">
                        <h2><?php pll_e('Exclusive WW Offers'); ?>
                          </h2>
                        <p><?php pll_e('We deliver great opportunities for our partners, by sharing exclusive and direct
offers we provide absolute competitive advantage among others CPA network.'); ?></p>

                      </div>
                    </div>
                    <div id="myModal3" class="modal3">
                        <!-- Modal content -->
                        <div class="modal-content3">
                          <span class="close3">&times;</span>
                          <p><?php pll_e('We deliver great opportunities for our partners, by sharing exclusive and direct
offers we provide absolute competitive advantage among others CPA network.'); ?></p>
                        </div>

                      </div>
                    <div id="myBtn4" class="view view-first">
                        <img src="<?php bloginfo('template_directory'); ?>/images/icons/pie-chart.svg" alt="">
                        <h1 style="color: black;"><?php pll_e('Explosive ROI'); ?></h1>


                          <div class="mask">
                            <h2><?php pll_e('Explosive ROI'); ?></h2>
                            <p><?php pll_e('The mix of well chosen offer, creatives, traffic sources and our
recommendations gives you ROI far beyond expectations.'); ?></p>

                          </div>
                        </div>
                        <div id="myModal4" class="modal4">
                            <!-- Modal content -->
                            <div class="modal-content4">
                              <span class="close4">&times;</span>
                              <p><?php pll_e('The mix of well chosen offer, creatives, traffic sources and our
recommendations gives you ROI far beyond expectations.'); ?></p>
                            </div>

                          </div>

                        <div id="myBtn5" class="view view-first">
                            <img src="<?php bloginfo('template_directory'); ?>/images/icons/profits.svg" alt="">
                            <h1 style="color: black;"><?php pll_e('TOP verticals'); ?></h1>


                              <div class="mask">
                                <h2><?php pll_e('TOP verticals'); ?></h2>
                                <p><?php pll_e('We have gained a great experience about verticals presented in our Affiliate
program. Main verticals are Mobile Content, Software, Extensions, CC submit
and App installs. We are targeted to the offers with quick monetization flow, so
you can get results in a short period of time at minimum risk.'); ?></p>

                              </div>
                            </div>
                            <div id="myModal5" class="modal5">
                                <!-- Modal content -->
                                <div class="modal-content5">
                                  <span class="close5">&times;</span>
                                  <p><?php pll_e('We have gained a great experience about verticals presented in our Affiliate
program. Main verticals are Mobile Content, Software, Extensions, CC submit
and App installs. We are targeted to the offers with quick monetization flow, so
you can get results in a short period of time at minimum risk.'); ?></p>
                                </div>

                              </div>
  </div>
</div>

<!-- конец Why Natifico Rocks-->



<!-- второй слайдер-->
<div class="slider-two">

    <h1 class="blog-up-h1 blog-up-h1110" ><?php pll_e('Feedback from our Partners'); ?></h1>
  <div class="owl-carousel slide2 owl-theme">

  <?php if( have_rows('слайдер')): ?>
			<?php while( have_rows('слайдер') ): the_row();

		// vars
		$name = get_sub_field('имя');
    $company = get_sub_field('компания');
    $text = get_sub_field('текст');

    ?>

    <div>
      <h1><?php echo $name; ?></h1>
      <h2><?php echo $company; ?></h2>
      <div class="stars">
        <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
        <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
        <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
        <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
        <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
      </div>
      <p><?php echo $text; ?></p>
    </div>
    <?php endwhile; ?>
<?php endif; ?>





          <div class="navbox"></div>
  </div>
</div>

<!-- конец второй слайдер-->















<!-- натифига регистрация-->

<div class="nat-reg">
  <h1 class="blog-up-h1 blog-up-h111" style="color: #343C5C;"><?php pll_e('Natifico for Affiliates  Registration'); ?></h1>
  <div class="blog-up-button">
    <a href="#">
      <button class="get-started"><?php pll_e(' GET STARTED'); ?></button>
    </a>
  </div>

</div>

<!-- конец натифига регистрация-->


<hr style="color: #EFF3FC; max-width: 1180px; border:0.5px solid #EFF3FC">









<!-- контакты-->


<div class="contacts">
  <div class="contacts-left">
    <div class="contacts-left-hr">
      <h1><?php pll_e('Contacts'); ?></h1>
      <p><span><?php pll_e('Skype'); ?>: </span>natifico</p>
      <p><span><?php pll_e('Telegram'); ?>: </span>@natifico</p>
      <p><span><?php pll_e('Phone'); ?>: </span>+852 81913202</p>
    </div>
    <div class="contact-social">
      <a href="https://www.facebook.com/Natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/facebook.svg" alt=""></a>
      <a href="https://www.instagram.com/natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/instagram.svg" alt=""></a>
      <a href="https://www.linkedin.com/company/natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/linkedin.svg" alt=""></a>
      <a href="https://t.me/Natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/telegram.svg" alt=""></a>
      <a href="https://vk.com/natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/vk.svg" alt=""></a>
    </div>
  </div>
  <div class="contacts-right">
	  <?php echo do_shortcode('[cf7form cf7key="home-2"]'); ?>
  </div>
</div>

<!--конец контакты-->





















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

<?php

get_footer();
