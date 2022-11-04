<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start-wp
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

<header class="header">
	<div class="container">
		<div class="header__wrapper">
			<?php get_template_part('template-parts/nav'); ?>
		</div>
	</div>
	<div class="menu">
		<div class="container">
			<ul>
				<li><a href="#" class="a-hover">Про компанію</a></li>
				<li><a href="#" class="a-hover">Послуги</a></li>
				<li><a href="#" class="a-hover">Переваги</a></li>
				<li><a href="#" class="a-hover">Наші роботи</a></li>
				<li><a href="#" class="a-hover">Ціни</a></li>
				<li><a href="#" class="a-hover">Етапи роботи</a></li>
				<li><a href="#" class="a-hover">Відгуки</a></li>
				<li><a href="#" class="a-hover">Часті запитання</a></li>
				<li><a href="#" class="a-hover">Контакти</a></li>
			</ul>
		</div>
	</div>
</header>



