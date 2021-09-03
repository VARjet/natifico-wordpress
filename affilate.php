	<?php
	/*
	Template Name: affilate
	Template Post Type: page
	*/
	?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package natifico
 */

get_header();
?>













<!--Вверхний слайдер-->
    <div class="topslider-2">
        <div class="topslider-1180">
            <div class="topslider-1180-left">
                <h1><?php pll_e('Natifico for Affiliates'); ?></h1>
                <div class="toplider-2-button">
                   <a href="<?php pll_e('/reg/'); ?>" target="_blank">  <button><?php pll_e('Registration'); ?></button></a>
                </div>
            </div>
            <div class="topslider-1180-right">
                <h1><?php pll_e('First for Affilates'); ?></h1>
              <div class="topslider-1180-right-div">
                <img src="<?php bloginfo('template_directory'); ?>/images/page2/money.svg" alt="">
                <p><?php pll_e('$2 000 average payout'); ?></p>
              </div>
              <div class="topslider-1180-right-div">
                  <img src="<?php bloginfo('template_directory'); ?>/images/page2/team.svg" alt="">
                  <p><?php pll_e('More than 1 000 direct offers'); ?></p>
              </div>
              <div class="topslider-1180-right-div">
                  <img src="<?php bloginfo('template_directory'); ?>/images/page2/gift.svg" alt="">
                  <p><?php pll_e('Up to 10% Referral program'); ?></p>
              </div>
              <div class="topslider-1180-right-div">
                  <img src="<?php bloginfo('template_directory'); ?>/images/page2/diamond.svg" alt="">
                  <p><?php pll_e('Only offers with long Life-Time'); ?></p>
              </div>
            </div>
          </div>
  </div>
<!-- КонецВверхний слайдер-->




<!--Top 5 offers-->
<div class="top-offers">
    <h1 class="blog-up-h1 h1-2"><?php pll_e('Top 5 offers'); ?></h1>
    <p><?php pll_e('In a decade, we have absorbed thousands of business cases and patterns of market behaviour and we have right skills to make an outstanding mix out of it
and share with our advertisers the visions we have, caused by our insights. Our in-house mediabuying team just knows.'); ?></p>
    <div class="line-big">
      <div class="line">
        <div class="line-flex">
            <div class="line-text lt-1"><span>1 </span><img src="<?php bloginfo('template_directory'); ?>/images/page2/crown.svg" alt=""></div>
            <div class="line-text lt-2"><img src="<?php bloginfo('template_directory'); ?>/images/page2/users.svg" alt=""><span> 1281</span></div>
        </div>
        <div class="shkala"><span>MacCleaner_ww</span></div>
        <div class="line-text lt-3"><img src="<?php bloginfo('template_directory'); ?>/images/page2/coin.svg" alt=""><span> 1,7$</span></div>
      </div>

      <div class="line">
        <div class="line-flex">
            <div class="line-text lt-1"><span>2 </span><img src="<?php bloginfo('template_directory'); ?>/images/page2/flash.svg" alt=""></div>
            <div class="line-text lt-2"><img src="<?php bloginfo('template_directory'); ?>/images/page2/users.svg" alt=""><span> 1215</span></div>
        </div>
        <div class="shkala shkala2"><span>TubiTV_Android_US</span></div>
        <div class="line-text lt-3"><img src="<?php bloginfo('template_directory'); ?>/images/page2/coin.svg" alt=""><span> 0,35$</span></div>
      </div>

      <div class="line">
        <div class="line-flex">
            <div class="line-text lt-1"><span>3 </span><img src="<?php bloginfo('template_directory'); ?>/images/page2/flash.svg" alt=""></div>
            <div class="line-text lt-2"><img src="<?php bloginfo('template_directory'); ?>/images/page2/users.svg" alt=""><span> 259</span></div>
        </div>
        <div class="shkala shkala3"><span>Movie_Extension_Chrome_multigeo</span></div>
        <div class="line-text lt-3"><img src="<?php bloginfo('template_directory'); ?>/images/page2/coin.svg" alt=""><span> 0,1 - 4,15$</span></div>
      </div>

      <div class="line">
        <div class="line-flex">
            <div class="line-text lt-1"><span>4 </span><img src="<?php bloginfo('template_directory'); ?>/images/page2/flash.svg" alt=""></div>
            <div class="line-text lt-2"><img src="<?php bloginfo('template_directory'); ?>/images/page2/users.svg" alt=""><span> 1237</span></div>
        </div>
        <div class="shkala shkala4"><span>ClickAllow</span></div>
        <div class="line-text lt-3"><img src="<?php bloginfo('template_directory'); ?>/images/page2/coin.svg" alt=""><span> 0,03-0,71$</span></div>
      </div>

      <div class="line">
        <div class="line-flex">
            <div class="line-text lt-1"><span>5 </span><img src="<?php bloginfo('template_directory'); ?>/images/page2/flash.svg" alt=""></div>
            <div class="line-text lt-2"><img src="<?php bloginfo('template_directory'); ?>/images/page2/users.svg" alt=""><span> 545</span></div>
        </div>
        <div class="shkala shkala5"><span>Update_FlashPlayer_Mac</span></div>
        <div class="line-text lt-3"><img src="<?php bloginfo('template_directory'); ?>/images/page2/coin.svg" alt=""><span> 6$</span></div>
      </div>


      <div class="line">
        <div class="line-flex">
            <div class="line-text lt-1"><span>6 </span><img src="<?php bloginfo('template_directory'); ?>/images/page2/flash.svg" alt=""></div>
            <div class="line-text lt-next"><img src="<?php bloginfo('template_directory'); ?>/images/page2/users-red.svg" alt=""><span class="next-line">Next 1336 offers</span></div>
        </div>
      </div>
    </div>
</div>
<!--конец Top 5 offers-->











<!--Why exactly us-->
<div class="why-exactly-us">
    <h1 class="blog-up-h1 h1-2"><?php pll_e('Why exactly us'); ?></h1>
    <div class="why-exactly-us-ps">
      <div class="why-exactly-us-ps-left">
        <div class="why-exactly-in">
          <div class="why-exactly-in-img">
              <img src="<?php bloginfo('template_directory'); ?>/images/page2/pie-chart.svg" alt="">
          </div>
          <div class="why-exactly-in-text">
              <h2><?php pll_e('Keep it short'); ?></h2>
              <p><?php pll_e('Portfolio only with offers with short conversion flow'); ?></p>
          </div>

        </div>
        <div class="why-exactly-in">
            <div class="why-exactly-in-img">
                <img src="<?php bloginfo('template_directory'); ?>/images/page2/vector.svg" alt="">
            </div>
            <div class="why-exactly-in-text">
                <h2><?php pll_e('Personal Approach'); ?></h2>
                <p><?php pll_e('Our managers are always ready to provide you hints and tips for effective optimization of your campaigns'); ?></p>
            </div>

          </div>
          <div class="why-exactly-in">
              <div class="why-exactly-in-img">
                  <img src="<?php bloginfo('template_directory'); ?>/images/page2/trust.svg" alt="">
              </div>
              <div class="why-exactly-in-text">
                  <h2><?php pll_e('We care about YOU'); ?></h2>
                  <p><?php pll_e('We are aiming to build long-term partnership, not quick business'); ?></p>
              </div>

            </div>
      </div>
      <div class="why-exactly-us-ps-right">
          <div class="why-exactly-in">
              <div class="why-exactly-in-img">
                  <img src="<?php bloginfo('template_directory'); ?>/images/page2/businessman.svg" alt="">
              </div>
              <div class="why-exactly-in-text">
                  <h2><?php pll_e('All is direct'); ?></h2>
                  <p><?php pll_e('Our offers are from direct advertisers, some of them are really exclusive'); ?></p>
              </div>

            </div>
            <div class="why-exactly-in">
                <div class="why-exactly-in-img">
                    <img src="<?php bloginfo('template_directory'); ?>/images/page2/money-transfer.svg" alt="">
                </div>
                <div class="why-exactly-in-text">
                    <h2><?php pll_e('Unique payment terms'); ?></h2>
                    <p><?php pll_e('Our payment terms are unique for every partner'); ?></p>
                </div>

              </div>
              <div class="why-exactly-in">
                  <div class="why-exactly-in-img">
                      <img src="<?php bloginfo('template_directory'); ?>/images/page2/spy.svg" alt="">
                  </div>
                  <div class="why-exactly-in-text">
                      <h2><?php pll_e('No fraud!'); ?></h2>
                      <p><?php pll_e('We have no tolerance towards fraud activity from advertisers or publishers sides.'); ?></p>
                  </div>

                </div>
      </div>
        </div>
       <a href="<?php pll_e('/blog/'); ?>"> <div class="why-exactly-button"><button><?php pll_e('Find real cases in our blog'); ?></button></div></a>
</div>
<!--конец Why exactly us-->






<!--Our advantages-->

<div class="advantages-big">
    <h1 class="blog-up-h1 h1-2 h1-2-2"><?php pll_e('Our advantages'); ?></h1>
    <div class="advantages">
        <div class="advantages-ps">
            <div class="advantages-krug" style="background: #fff url(<?php bloginfo('template_directory'); ?>/images/page2/startup1.svg) no-repeat center;">

            </div>
            <p><?php pll_e('Friendly UI'); ?></p>
        </div>
        <div class="advantages-ps">
            <div class="advantages-krug" style="background: #fff url(<?php bloginfo('template_directory'); ?>/images/page2/financial1.svg) no-repeat center;">

            </div>
            <p><?php pll_e('Detailed Custom Reporting'); ?></p>
        </div>
        <div class="advantages-ps">
            <div class="advantages-krug" style="background: #fff url(<?php bloginfo('template_directory'); ?>/images/page2/customer-service1.svg) no-repeat center;">

            </div>
            <p><?php pll_e('Personal Manager'); ?></p>
        </div>
        <div class="advantages-ps">
            <div class="advantages-krug" style="background: #fff url(<?php bloginfo('template_directory'); ?>/images/page2/worker1.svg) no-repeat center;">

            </div>
            <p><?php pll_e('24/7 Support'); ?></p>
        </div>
        <div class="advantages-ps">
            <div class="advantages-krug" style="background: #fff url(<?php bloginfo('template_directory'); ?>/images/page2/speedometer1.svg) no-repeat center;">

            </div>
            <p><?php pll_e('Individual rates and payment terms'); ?></p>
        </div>
    </div>
</div>

<!-- конец Our advantages-->







<!-- контакты -->
<div class="contacts-2">
    <h1 class="blog-up-h1 h1-2-2"><?php pll_e('Contacts'); ?></h1>
    <div class="contacts-for">
      <div class="contacts-for-left">
          <h2><?php pll_e('For Advertisers'); ?>:</h2>
          <p>advertisers@natifico.com</p>
      </div>
      <div class="contacts-for-right">
          <h2><?php pll_e('For Publishers'); ?>: </h2>
          <p>advertisers@natifico.com</p>
      </div>
    </div>
    <div class="contacts-2-social">
      <div> <a href="https://www.facebook.com/Natifico" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/social/facebook.svg" alt=""></a></div>
      <div> <a href="https://www.instagram.com/natifico" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/social/instagram.svg" alt=""></a></div>
      <div> <a href="https://www.linkedin.com/company/natifico" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/social/linkedin.svg" alt=""></a></div>
      <div> <a href="https://t.me/Natifico" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/social/telegram.svg" alt=""></a></div>
      <div> <a href="https://vk.com/natifico" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/social/vk.svg" alt=""></a></div>
    </div>
</div>
<!--Конец контакты -->














<!-- Announcements of the Blog-->
<div class="blog-up bg-color">
  <h1 class="blog-up-h1 blog-up-h111"><?php pll_e('Announcements of the Blog'); ?></h1>
   <div class="blog blog-page-2">


	  <?php $pc = new WP_Query(array(
			'showposts' => 3,
			'cat' => 1,
		)); ?>
	  <?php if (have_posts()) { while($pc->have_posts()){$pc->the_post(); ?>
   <div class="blog-left-post blp-bg">
   <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
      <h2><?php the_time('d.m.Y'); ?></h2>

      <h1><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 4 ); ?></a></h1>
    </div>

                <?php }
                } ?>

    </div>

  <div class="blog-buttons">
  <div class="blog-help"><a href="<?php pll_e('/help/'); ?>"><button><?php pll_e('help'); ?></button></a></div>
    <div class="blog-reg"><a href="<?php pll_e('/reg/'); ?>" target="_blank"><button><?php pll_e('Registration'); ?></button></a></div>
  </div>

</div>
<!-- конец Announcements of the Blog -->



<!-- второй слайдер-->
<div class="slider-two">
    <h1 class="blog-up-h1 blog-up-h1110" ><?php pll_e('Feedback from our Partners'); ?></h1>
  <div class="owl-carousel slide2 owl-theme">
    <div>
      <h1><?php pll_e('Vincent Frechette'); ?></h1>
      <h2><?php pll_e('Head Of Network Operations at PWN Games'); ?></h2>
      <div class="stars">
        <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
        <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
        <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
        <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
        <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
      </div>
      <p><?php pll_e('Arman and his team have a deep understanding of their traffic and are able to deliver quality users steadily to our games. And most importantly, they are nice and responsive and definitely great to work with!'); ?> </p>
    </div>
    <div>
        <h1><?php pll_e('Anton Jurovick'); ?>i</h1>
        <h2><?php pll_e('Ceo and Co-Owner of Coinis'); ?></h2>
        <div class="stars">
          <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
          <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
          <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
          <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
          <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
        </div>
        <p><?php pll_e('“Working with Natiffico is utmost enjoyment. These guys know the game, very dedicated and thorough approach towards rocketing our products to the space.”'); ?></p>
      </div>
      <div>
          <h1></h1>
          <h2><?php pll_e('Selfadevrtiser.com'); ?></h2>
          <div class="stars">
            <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
            <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
            <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
            <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
            <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
          </div>
          <p><?php pll_e('“Natifico is a team of Online experts. Delivering results with superb professionalism and personal communication. Highly recommended for any advertiser to give a try”'); ?></p>
        </div>
        <div>
            <h1><?php pll_e('Arthur Galiev'); ?></h1>
            <h2><?php pll_e('CMO at Adsterra Network'); ?></h2>
            <div class="stars">
              <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
              <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
              <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
              <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
              <span><img src="<?php bloginfo('template_directory'); ?>/images/icons/star4.svg" alt=""></span>
            </div>
            <p><?php pll_e('“With Natifico, we have never had any issues with payments, lack of communication or any misunderstandings. Reliable partners who understand the market and business. Recommended to work"'); ?></p>
          </div>

  </div>
	<div class="navbox"></div>
</div>

<!-- конец второй слайдер-->


















<?php

get_footer();
