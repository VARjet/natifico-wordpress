<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package natifico
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
<br>
<br>
<br>
<br>

<div class="page404">
<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'natifico' ); ?></h1>
<img src="<?php bloginfo('template_directory'); ?>/images/404.png" width="100%" height="100%" alt="lorem">
</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
