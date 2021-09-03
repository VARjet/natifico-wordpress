
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package natifico
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>


	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php bloginfo('name'); ?><?php wp_title( ); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/min-320.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/agency.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blog.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/team.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/page-blog.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/affilate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/retina-1-5.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/retina-2k.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/help.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/login.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reg.css">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/owlcarousel/assets/owl.theme.default.min.css">
		<script src="<?php bloginfo('template_directory'); ?>/jquery/jquery-3.4.1.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/owlcarousel/owl.carousel.min.js"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>

</head>

<body >







		<nav>
<div class="main">

  <div><a href="<?php echo get_home_url(); ?>"> <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt=""></a></div>
  <div class="up-menu">

	  <?php
    wp_nav_menu( array(
        'theme_location' => 'мобильное меню',
        'menu_class'     => 'primary-menu',
        'menu'            => 'english', 
         ) );
?>



  </div>
  <div class="language">
    <div class="lang-btn">
      <span><a href="login.html"><?php pll_e('Login'); ?></a></span>
      <a href="<?php pll_e('/registration/'); ?>"><button><?php pll_e('Register'); ?></button></a>
    </div>

<div class="languages">
<span class="current" title="English"><?php pll_e('EN'); ?></span>

  <ul>
<?php pll_the_languages( array( 'show_flags' => 1, 'show_names' => 1 ) ); ?>



</ul>
</div>

      </div>
<!--////////////////////-->
<!-- MENU MOBILE -->
<!--////////////////////-->
<div class="col-xs-show col-sm-show menu-mobile">
    <div class="wrapper">
        <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt=""></a>
        <button id="bt-menu-mobile">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
        </button>
        <div class="languages">
          <span class="current" title="English"><?php pll_e('EN'); ?></span>
            <ul>
				<?php pll_the_languages( array( 'show_flags' => 1, 'show_names' => 1 ) ); ?>



          </ul>
          </div>
        <div class="clear"></div>

    </div>
    <div id="wrapper-menu-mobile">
    <div class="wrapper">


            <ul>
                <li class="first"><span></span><button id="bt-fechar-menu"><span class=""><img src="<?php bloginfo('template_directory'); ?>/images/icons/close.svg" alt=""></span></button><div class="clear"></div></li>
                <?php
    wp_nav_menu( array(
        'theme_location' => 'мобильное меню',
        'menu_class'     => '',
         ) );
?>

                <li><a href="login.html">Login</a></li>
                <li><a href="reg.html">Register</a></li>





            </ul>
        </div>
        <div class="block-menu-mobile"></div>
    </div>
</div>

</div>
</nav>
