<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package game-life
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">

<!-- <a href="#header" id="top">
	<i class="ti-angle-double-up"></i>
</a>
 -->
<div class="header" id="header">
	<nav class="navbar navbar-default">
		<div class="navbar-header">
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>
		</div>
		  
		<?php wp_nav_menu(array(
			'theme_location' => 'header-menu',
			// 'container' => 'false',
			'container_class' => 'collapse navbar-collapse',
			'container_id' => 'bs-example-navbar-collapse-1',
			'menu_class' => 'nav navbar-nav',
		)) ?>
	</nav>
	<!-- .. Меню -->
	<div class="header__customs">
		<!-- Поиск -->
		<div class="header__search-block">
	        <form action="" method="post" class="search">
				<input type="text" class="form-control" id="exampleInputAmount" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s" />
				<button type="submit" class="btn btn-default">
					<i class="ti-search"></i>
				</button>
			</form>
        </div>
        <!-- // Поиск -->
        <!-- Регистрация/Авторизация -->
        <div class="header__registration">
        	<a href="#">Вход</a>
			<a href="#">Регистрация</a>
        </div>
        <!-- Регистрация/Авторизация -->
	</div>
</div>

<div class="slider">
	<div class="head_carousel owl-carousel owl-theme">
		<div class="item" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img/slide-1.jpg); background-size: cover; background-position: center;">
		</div>
		<div class="item" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img/slide-2.jpg); background-size: cover; background-position: center;">
		</div>
	</div>
</div>