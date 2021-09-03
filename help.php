	<?php 
	/*
	Template Name: help
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
    <div class="topslider-2 page-blog-bg-color topslider-2-team topslider-2-help">
        <div class="topslider2-1180 topslider2-1180-blog">
                <h1><?php pll_e('Natifico help'); ?></h1>
                <div class="our-partners our-partners-team our-partners-help">
                    <p style="float: left; font-size: 36px; font-weight: bold;    font-family: 'Roboto Slab', serif;    line-height: 100%;"><?php pll_e('Quick search'); ?></p>
                    <div class="search search-help" style="margin: 0; max-width: 1180px;">
                            <input placeholder="Please enter a search text ... " ><button onclick=""></button></input>
                    </div>
                </div>
            
        </div> 
  </div>
<!-- КонецВверхний слайдер-->



    <div class="blog-up bg-color ">
      <h1 class="blog-up-h1 help-faq" style="color: #343C5C;"><?php pll_e('FAQ'); ?></h1>
     
        <div class="container" style="display:flex;">
      
          
      
            <div class="dish-container">
              <div class="flex-container flex-column dish">
				  
              <?php if( have_rows('faq') ): ?>
			<?php while( have_rows('faq') ): the_row(); 

		// vars
		$image = get_sub_field('up_text');
		$content = get_sub_field('down_text');

		?>
         <div class="option">
                  <div class="flex-container justify-between dish-header">
                    <div class="icon-container"><h4 style="     max-width: 330px;   position: absolute;
                        margin: 0px 0px 0 20px;"> <?php echo $image; ?></h4>
                      <div class="info-btn">
                            <i class="fa fa-question-circle-o fa-lg front" aria-hidden="true"></i>
                            <i class="fa fa-times-circle fa-lg back" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <span class="info">
                    <p> <?php echo $content; ?></p>
                  </span>

                </div>		

                <?php endwhile; ?>
<?php endif; ?>
				  
				  
				  
				  
				  

      

      

              </div>
            </div>
        </div>
  
    </div>


<!-- контакты -->
<div class="contacts-2">
        <h1 class="blog-up-h1 h1-2-2"><?php pll_e('Still Have Questions?'); ?></h1>
        <div class="contacts">
            <div class="contacts-right contact-blog">
            <?php echo do_shortcode('[cf7form cf7key="help"]'); ?>

            </div>
        </div>
        <div class="contacts-for contacts-for-team">
                <div class="contacts-for-left">
                    <h2><?php pll_e('For Advertisers'); ?>:</h2>
                    <p>advertisers@natifico.com</p>
                </div>
                <div class="contacts-for-right">
                    <h2><?php pll_e('For Publishers'); ?>: </h2>
                    <p>advertisers@natifico.com</p>
                </div>
              </div>
              <div class="contacts-2-social contacts-2-social-help">
              <div><a href="https://www.facebook.com/Natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/facebook.svg" alt=""></a></div>
              <div><a href="https://www.instagram.com/natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/instagram.svg" alt=""></a></div>
              <div><a href="https://www.linkedin.com/company/natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/linkedin.svg" alt=""></a></div>
              <div><a href="https://t.me/Natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/telegram.svg" alt=""></a></div>
              <div><a href="https://vk.com/natifico"><img src="<?php bloginfo('template_directory'); ?>/images/social/vk.svg" alt=""></a></div>
              </div>
    </div>
    
    <!--Конец контакты -->




<?php
get_sidebar();
get_footer();
