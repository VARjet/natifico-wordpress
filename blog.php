	<?php
	/*
	Template Name: blog
	Template Post Type: page, news
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
    <div class="topslider-2 page-blog-bg-color">
        <div class="topslider2-1180 topslider2-1180-blog">
                <h1><?php pll_e('Our blog'); ?></h1>
        <div class="our-blog-up">
            <div class="our-blog-up-left our-blog-up-blog-blog">
							<?php
					$pcblog = new WP_Query('showposts=1');

					 ?>
					<?php while ($pcblog->have_posts()) : $pcblog->the_post(); ?>
          <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
          <div class="spirits" style="background: url('<?php echo $backgroundImg[0]; ?>');"><p><?php the_title(); ?></p></div>
							<?php endwhile; ?>

            </div>
            <div class="our-blog-up-right our-blog-up-blog-blog">
							<?php
					$pcblog = new WP_Query('showposts=2');

					 ?>
					 <?php while ($pcblog->have_posts()) : $pcblog->the_post(); ?>
	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                    <div class="amazon" style="background: url('<?php echo $backgroundImg[0]; ?>');"><p><?php the_title(); ?></p></div>
<?php endwhile; ?>
            </div>
        </div>

        </div>
  </div>
<!-- КонецВверхний слайдер-->



<!--Top 5 offers-->
<div class="our-partners our-partners-blog">
        <h1><?php pll_e('Quick search blog'); ?></h1>
        <div class="search">
        <form role="search" method="get" action="<?php echo home_url( '/' ); ?>" style="max-width: 1180px;width: 100%; display: flex;">
					<input  type="search" class="search-field" value="" name="s" placeholder="<?php pll_e('Please enter a search text ...'); ?> " ><input type="submit" class="search-submit" />
					</form>
        </div>
    </div>
<!--конец Top 5 offers-->






<div class="our-partners our-partners-blog-find">
        <h1><?php pll_e('Find latest news below'); ?></h1>

    </div>








               <div class="container">
                    <div class="flex">

<?php	query_posts('cat=1'); // вместо "5" указываем идентификатор вашей рубрики.
while (have_posts()) : the_post();?>
						<div class="blog-left-post content">

            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
      							  <h2><?php the_time('d.m.Y'); ?></h2>
	  							  <h1><a href="<?php the_permalink() ?>"><?php the_title()?></a></h1>

    						</div>
	                 						<?php
endwhile;
wp_reset_query();
?>





                    </div>

                    <a href="#" id="loadMore"><p><?php pll_e('Load More'); ?></p></a>

                  </div>



<script>
$(document).ready(function(){
  $(".content").slice(0, 3).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".content:hidden").slice(0,3).slideDown();
    if($(".content:hidden").length == 0) {
      $("#loadMore").text("<?php pll_e('Больше постов тютю'); ?>").addClass("noContent");
    }
  });

});
</script>
















<?php
get_sidebar();
get_footer();
