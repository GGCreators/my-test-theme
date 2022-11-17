<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-test-theme
 */

 //получение кастомного лого для его вывода
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:regular,700&display=swap" rel="stylesheet" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="open" class="header">
			<div id="close" class="header__container">
				<div class="header__first">
					<a href="#" class="header__logo"><img src="<?php echo esc_url( $logo[0] ); ?>" alt="Логотип"></a>
					<div class="header__social">
						<a href="https://t.me/joinchat/LKU85jXkhDFjYmFi" class="social__icon"><img src="<?php echo get_template_directory_uri(  ) . '/assets/img/tg.svg'?>"
								alt="Телеграм"></a>
						<a href="https://invite.viber.com/?g2=AQAdmKDfP22GMkup4jFYeIlwKqx1iJRy3ID9gTUWBgY5B95vbAd4mv3VhhAVNp4%2B&lang=ru"
							class="social__icon"><img src="<?php echo get_template_directory_uri(  ) . '/assets/img/viber.svg'?>" alt="Вайбер"></a>
					</div>
					<div class="header__phone">Единый номер <br> <a href="tel:1099" class="phone">1099</a>
					</div>
					<a href="#open" class="icon-menu"><span></span></a>
					<a href="#close" class="close-icon-menu"></a>
				</div>
				<div class="header__menu">
					<nav class="menu__body">
						<ul class="menu__list menu">
							<li class="menu__item">
								<a href="#" class="menu__link mainlink">Абонентам</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link mainlink">Услуги</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link mainlink">Тарифы</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link">О компании</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link">Закупки</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link">Контакты</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link">Обратная связь</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link">Вакансии</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link">Приём граждан</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link">Метрологический центр</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
