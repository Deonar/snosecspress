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
			<div class="nav">
				<a href="#" class="nav__logo">SnosEcspress</a>

				<a class="location item" href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/img/nav/location.svg" alt="">
					<div>
						<p>Київ та область</p>
						<p>Пн-Нд 10:00-20:00</p>
					</div>
				</a>
				<a class="email item" href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/img/nav/email.svg" alt="">
					<p>arturkozar49@gmail.com</p>
				</a>
				<div class="nav__soc">
					<a href="#" class="item"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/nav/f.svg" alt=""></a>
					<a href="#" class="item"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/nav/tg.svg" alt=""></a>
					<a href="#" class="item"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/nav/i.svg" alt=""></a>
				</div>
				<div class="nav__call">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/img/nav/call.svg" alt="">
					<div>
						<a href="#">+38 099 5278624</a>
						<a href="#">+38 093 4641082</a>
					</div>
				</div>
				<div class="nav__btn">
					<a href="#" class="btn">Замовити Дзвінок</a>
				</div>
			</div>
		</div>
	</div>
	<div class="menu">
		<div class="container">
			<ul>
				<li><a href="#">Про компанію</a></li>
				<li><a href="#">Послуги</a></li>
				<li><a href="#">Переваги</a></li>
				<li><a href="#">Наші роботи</a></li>
				<li><a href="#">Ціни</a></li>
				<li><a href="#">Етапи роботи</a></li>
				<li><a href="#">Відгуки</a></li>
				<li><a href="#">Часті запитання</a></li>
				<li><a href="#">Контакти</a></li>
			</ul>
		</div>
	</div>
</header>



