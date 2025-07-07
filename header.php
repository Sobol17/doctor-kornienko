<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php bloginfo('name'); ?><?php wp_title(' | '); ?></title>
    <?php wp_head(); ?>
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css"
		/>
	</head>
	<body class="<?php if (get_field('show_fixed_banner', 'option') && get_field('fixed_banner_text', 'option')): ?>pt-60<?php endif; ?>">
		<?php if (get_field('show_fixed_banner', 'option') && get_field('fixed_banner_text', 'option')): ?>
			<div class="fixed-top-banner">
				<div class="container">
					<?= get_field('fixed_banner_text', 'option'); ?>
				</div>
			</div>
		<?php endif; ?>
		<header class="header">
			<div class="header__line header__line--top">
				<div class="header__line-inner container">
					<a href="/" class="header__logo-wrapper">
						<img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Логотип сайта" />
						<p class="header__logo-text">
							Медико-психологический <br />
							центр Доктора Корниенко
						</p>
					</a>
					<a href="tel:+73952225550" class="header__phone">
						<span class="header__phone-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/phone.svg" alt="иконка телефон" />
						</span>
						<span class="header__phone-text">+7 (3952) 22‒55‒50</span>
					</a>
					<div class="header__info ml-auto">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/planet.svg" alt="иконка планета" />
						<span class="header__info__text">
							Байкальская улица 102, <br />
							1 этаж
						</span>
					</div>
					<div class="header__info">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/clock.svg" alt="иконка часы" />
						<span class="header__info__text">
							Вторник / Суббота: <br />
							10:00 - 17:00
						</span>
					</div>
					<div class="header-burger__wrapper">
						<button class="header__burger">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<nav class="burger-menu__nav hide">
							<ul class="burger-menu__list">
								<li>
									<a href="/about">О нас</a>
								</li>
								<li>
									<a href="/specialists">Наши специалисты</a>
								</li>
								<li>
									<a href="/services">Услуги</a>
								</li>
								<li>
									<a href="/info">Информация</a>
								</li>
								<li>
									<a href="/documents">Документы</a>
								</li>
								<li>
									<a href="/control">Надзорные органы</a>
								</li>
								<li>
									<a href="/contacts">Контакты</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="header__line header__line--bottom">
				<div class="header__line-inner container">
					<nav class="nav">
						<a href="/about" class="nav__link">О нас</a>
						<a href="/specialists" class="nav__link">Наши специалисты</a>
						<a href="/services" class="nav__link">Услуги</a>
						<a href="/licenses" class="nav__link">Лицензии</a>
						<a href="/info" class="nav__link">Информация</a>
						<a href="/documents" class="nav__link">Документы</a>
						<a href="/control" class="nav__link">Надзорные органы</a>
					</nav>
				</div>
			</div>
		</header>