	<?php
	/*
	Template Name: agancy
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
        <div class="topslider-1180 topslider-1180-agency-h1 topslider-1180-agency-h1-h1">
            <div class="topslider-1180-left">
                <h1><?php pll_e('Natifico for Advertisers'); ?></h1>
                <div class="toplider-2-button">
                   <a href="<?php pll_e('/team/'); ?>"><button><?php pll_e('Contact us'); ?></button></a>
                </div>
            </div>
            <div class="topslider-1180-right topslider-1180-right-agency">
                    <h1><?php pll_e('First for Advertiers'); ?></h1>
                    <div class="small-trigle">
                      <div class="trigle-center-small"><p><?php pll_e('Our traffic comes from'); ?></p></div>


                        <div class="up-small">
                            <img src="<?php bloginfo('template_directory'); ?>/images/page3/money3.svg" alt="">
                          <p><?php pll_e('Trusted affiliate traffic'); ?></p>
                        </div>


                      <div class="up-small">
                              <img src="<?php bloginfo('template_directory'); ?>/images/page3/browser3.svg" alt="">
                          <p><?php pll_e('Direct websites'); ?></p>
                      </div>

                      <div class="up-small">
                              <img src="<?php bloginfo('template_directory'); ?>/images/page3/megaphone2.svg" alt="">
                          <p><?php pll_e('Internal media buying'); ?></p>
                      </div>

              </div><!--small-trigle-->

            </div>

          </div>
  </div>
<!-- КонецВверхний слайдер-->




<!--Top 5 offers-->
<div class="our-partners">
    <h1><?php pll_e('These companies trust us'); ?></h1>



    <div class="carousel-wrap">
      <div class="owl-carousel">
				<?php if( have_rows('agency', 22, 24)): ?>
								<?php while( have_rows('agency', 22, 24) ): the_row();

							// vars
							$image_agency = get_sub_field('image_agency');


							?>
        <div class="item item-agency"><img src="<?php echo $image_agency; ?>"></div>

			<?php endwhile; ?>
		<?php endif; ?>
      </div>
    </div>
























      <div class="slidecenter2">
				<?php if( have_rows('agency', 22, 24)): ?>
								<?php while( have_rows('agency', 22, 24) ): the_row();

							// vars
							$image_agency = get_sub_field('image_agency');


							?>
          <div class="brrrr2" style="background:url(<?php echo $image_agency; ?>);       background-size:       172px; background-position: center; background-repeat: no-repeat; "></div>

				<?php endwhile; ?>
			<?php endif; ?>
      </div>


    </div>
<!--конец Top 5 offers-->


















<!--Our advantages-->

<div class="advantages-big advantages-blog">
    <h1 class="blog-up-h1 h1-2 h1-2-2"><?php pll_e('Our strengths'); ?></h1>
    <div class="advantages">
        <div class="advantages-ps advantages-ps2">
            <div class="advantages-krug" style="background: #fff url(<?php bloginfo('template_directory'); ?>/images/page3/team2.svg) no-repeat center;">

            </div>
            <p><?php pll_e('Deep understanding of our Advertisers’ needs.'); ?></p>
        </div>
        <div class="advantages-ps advantages-ps2">
            <div class="advantages-krug" style="background: #fff url(<?php bloginfo('template_directory'); ?>/images/page3/wrench1.svg) no-repeat center;">

            </div>
            <p><?php pll_e('Auto and manual optimization processes.'); ?></p>
        </div>
        <div class="advantages-ps advantages-ps2">
            <div class="advantages-krug" style="background: #fff url(<?php bloginfo('template_directory'); ?>/images/page3/documents1.svg) no-repeat center;">

            </div>
            <p><?php pll_e('Transparency at all levels.'); ?></p>
        </div>
        <div class="advantages-ps advantages-ps2">
            <div class="advantages-krug" style="background: #fff url(<?php bloginfo('template_directory'); ?>/images/page3/presentation1.svg) no-repeat center;">

            </div>
            <p><?php pll_e('Customised ad campaigns’ launch strategies.'); ?></p>
        </div>

    </div>



    <div class="advantages2">
        <div class="advantages-ps advantages-ps2">
            <div class="advantages-krug" style="background: #fff url(<?php bloginfo('template_directory'); ?>/images/page3/deadline1.svg) no-repeat center;">

            </div>
            <p><?php pll_e('We invest only in long-term partnerships.'); ?></p>
        </div>
        <div class="advantages-ps advantages-ps2">
            <div class="advantages-krug" style="background: #fff url(<?php bloginfo('template_directory'); ?>/images/page3/police-badge1.svg) no-repeat center;">

            </div>
            <p><?php pll_e('Zero tolerance towards fraud.'); ?></p>
        </div>
        <div class="advantages-ps advantages-ps2 ">
            <div class="advantages-krug" style="background: #fff url(<?php bloginfo('template_directory'); ?>/images/page3/box1.svg) no-repeat center;">

            </div>
            <p><?php pll_e('We think “out of the box”.'); ?></p>
        </div>


    </div>
</div>

<!-- конец Our advantages-->


<!-- We are experts at promoting -->
<div class="our-partners our-partners-blog our-partners-agency-2 we-are">
    <h1><?php pll_e('We are experts at promoting'); ?></h1>
    <div class="experts-up">
        <div class="experts-up-1 expert-up-bg">
            <img src="<?php bloginfo('template_directory'); ?>/images/page3/experts-up-1.svg" alt="">
            <p><?php pll_e('Exclusive Mobile Applications'); ?></p>
        </div>
        <div class="experts-up-2 expert-up-bg">
            <img src="<?php bloginfo('template_directory'); ?>/images/page3/experts-up-2.svg" alt="">
            <p><?php pll_e('Entertainment services'); ?></p>
        </div>
    </div>
    <div class="experts-down">
        <div class="experts-down-1 expert-down-bg">
            <img src="<?php bloginfo('template_directory'); ?>/images/page3/experts-down-1.svg" alt="">
            <p><?php pll_e('Extensions'); ?></p>
        </div>
        <div class="experts-down-2 expert-down-bg">
            <img src="<?php bloginfo('template_directory'); ?>/images/page3/experts-up-2.svg" alt="">
            <p><?php pll_e('Games'); ?></p>
        </div>
        <div class="experts-down-3 expert-down-bg">
            <img src="<?php bloginfo('template_directory'); ?>/images/page3/experts-down-3.svg" alt="">
            <p><?php pll_e('Software'); ?></p>
        </div>
    </div>

    </div>
<!-- конец We are experts at promoting -->



<!-- Announcements of the Blog-->
<div class="blog-up bg-color">
    <h1 class="blog-up-h1 blog-up-h111"><?php pll_e('Stay updated by reading our Blog'); ?></h1>
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
			  <div class="all-blog all-blog-blog">
  <a href="<?php pll_e('/blog/'); ?>" style="text-decoration:none; color:black;">  <div style="margin: 0 auto;"> <p><?php pll_e('All blog'); ?></div></a>
   </div>
  </div>




  <!-- конец Announcements of the Blog -->






<!-- контакты -->
<div class="contacts-2 ">
    <h1 class="blog-up-h1 h1-2-2 h1-2-2-contacts-form"><?php pll_e('Contact form'); ?></h1>
    <div class="contacts">
        <div class="contacts-right contact-blog">
        <?php echo do_shortcode('[cf7form cf7key="help"]'); ?>
        </div>
    </div>

</div>

<!--Конец контакты -->




<?php
get_sidebar();
get_footer();
