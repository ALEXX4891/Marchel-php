<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title><? echo $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="<? echo $keywords ?>" />
	<meta name="description" content="<? echo $description ?>" />
	<meta property="og:image" content="https://bulat2005.ru/css/img/head__logo.svg" />
	<meta property="og:title" content="Изготовление памятников из гранита и мрамора в Белгороде | Булат" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://bulat2005.ru" />
	<meta property="og:description " content="Производство мемориальных и надгробных памятников из натурального и литьевого камня в Белгороде. Каталог изделий с фото и ценами. Звоните!" />
	<meta property="og:locale" content="ru_RU" />
	<meta property="og:site_name" content="Изготовление памятников из гранита и мрамора в Белгороде | Булат" />
	<meta itemprop="name" content="Изготовление памятников из гранита и мрамора в Белгороде | Булат" />
	<meta itemprop="description" content="Производство мемориальных и надгробных памятников из натурального и литьевого камня в Белгороде. Каталог изделий с фото и ценами. Звоните!" />
	<meta itemprop="image" content="https://crb72.ru/css/img/view-min.jpg" />
	<script src="/js/libs/index.min.js"></script>
	<link rel="canonical" href="<? echo 'https://' . $_SERVER['HTTP_HOST'] . '' . $_SERVER['REQUEST_URI']; ?>" />
	<link rel="stylesheet" href="/css/libs/slick.css">
	<link rel="stylesheet" href="/css/libs/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="/css/libs/jquery.fancybox.min.css">
	<link rel="stylesheet" href="/css/main.css?ver=07">
	<link rel="stylesheet" href="/css/media.css?ver=07">
	<link rel="icon" href="/css/img/favicon/favicon.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="/css/img/favicon/apple-touch-icon-180x180.png" />
	<script type="text/javascript" src="/js/libs/jquery-3.5.1.min.js"></script>
	<meta name="yandex-verification" content="61eab143c7f168a0" />
	<meta name="google-site-verification" content="m-B_YlXv3qHmW5fNtLDaKnR2e8nzSgm7QY2LL6pjEAQ" />
</head>

<body>
	<?
	$result = mysql_query("SELECT * FROM contacts WHERE id = '1'", $db);
	$row1 = mysql_fetch_array($result);
	?>
	<!-- Меню_бургер -->
	<div class="burger burger__master">
		<div class="burger__top">
			<img src="/css/img/x_white.svg" alt="Крестик" class="burger__close">
			<nav class="burger__list">
				<a href="/pages/about/" class="burger__item">О компании</a>
				<a href="/pages/production/" class="burger__item">Производство</a>
				<div class="burger__item_wrap burger__item_wrap_products">
					<a href="#" class="burger__item">Товары</a>
					<img src="/css/img/arrow_right_white.svg" alt="Стрелка вправо">
				</div>
				<div class="burger__item_wrap burger__item_wrap_services">
					<a href="#" class="burger__item">Услуги</a>
					<img src="/css/img/arrow_right_white.svg" alt="Стрелка вправо">
				</div>
				<a href="/pages/work/" class="burger__item">Выполненные работы</a>
				<a href="/pages/cooperation/" class="burger__item">Сотрудничество</a>
				<a href="/pages/articles/" class="burger__item">Статьи</a>
				<a href="/pages/delivery/" class="burger__item">Доставка и оплата</a>
				<a href="/pages/contacts/" class="burger__item">Контакты</a>
			</nav>
		</div>
		<div class="burger__top_bottom">
			<div class="burger__tel">
				<a href="tel:<?= $row1['tel']; ?>" class="burger__tel_title"><?= $row1['tel']; ?></a>
				<div class="burger__tel_subtitle">(Производство)</div>
			</div>
			<!--
			<div class="burger__tel">
				<a href="tel:74722202888" class="burger__tel_title">+7 (4722) 202-888</a>
				<div class="burger__tel_subtitle">(Магазин)</div>
			</div>
-->
		</div>
	</div>
	<!-- Конец_Меню_бургер -->
	<!-- Бургер_товары -->
	<div class="burger burger__slave burger__slave_products">
		<div class="burger__top">
			<div class="burger__link_back_wrap burger__link_back_wrap_products">
				<img src="/css/img/arrow_left_white.svg" alt="Стрелка влево">
				<a href="#" class="burger__link_back">Назад</a>
			</div>
			<img src="/css/img/x_white.svg" alt="Крестик" class="burger__close">
			<a href="/pages/products/" class="burger__title">Товары</a>
			<nav class="burger__list">
				<?php
				$resultR = mysql_query("SELECT * FROM category_products WHERE id != 6 AND id != 7 ORDER BY position ASC", $db);
				$rowR = mysql_fetch_array($resultR);
				if (mysql_num_rows($resultR) > 0) {
					do {
						if ($rowR['cat'] == 0) {
							echo '
							<div class="burger__item_wrap">
							<a href="/pages/products/?pid=' . $rowR['id'] . '" class="burger__item">' . $rowR['name'] . '</a>
							</div>
							';
						}
					} while ($rowR = mysql_fetch_array($resultR));
				}
				?>
			</nav>
		</div>
		<div class="burger__top_bottom">
			<div class="burger__tel">
				<a href="tel:<?= $row1['tel']; ?>" class="burger__tel_title"><?= $row1['tel']; ?></a>
				<div class="burger__tel_subtitle">(Производство)</div>
			</div>
			<!--
			<div class="burger__tel">
				<a href="tel:74722202888" class="burger__tel_title">+7 (4722) 202-888</a>
				<div class="burger__tel_subtitle">(Магазин)</div>
			</div>
-->
		</div>
	</div>
	<!-- Конец_бургер_товары -->
	<!-- Бургер_услуги -->
	<div class="burger burger__slave burger__slave_services">
		<div class="burger__top">
			<div class="burger__link_back_wrap burger__link_back_wrap_services">
				<img src="/css/img/arrow_left_white.svg" alt="Стрелка влево">
				<a href="#" class="burger__link_back">Назад</a>
			</div>
			<img src="/css/img/x_white.svg" alt="Крестик" class="burger__close">
			<a href="/pages/services/" class="burger__title">Услуги</a>
			<nav class="burger__list">
				<?php
				$resultY = mysql_query("SELECT * FROM category_services ORDER BY position ASC", $db);
				$rowY = mysql_fetch_array($resultY);
				if (mysql_num_rows($resultY) > 0) {
					do {
						echo '
						<a href="/pages/services/?sid=' . $rowY['id'] . '" class="burger__item">' . nl2br($rowY['name']) . '</a>
					';
					} while ($rowY = mysql_fetch_array($resultY));
				}
				?>
			</nav>
		</div>
		<div class="burger__top_bottom">
			<div class="burger__tel">
				<a href="tel:<?= $row1['tel']; ?>" class="burger__tel_title"><?= $row1['tel']; ?></a>
				<div class="burger__tel_subtitle">(Производство)</div>
			</div>
			<!--
			<div class="burger__tel">
				<a href="tel:74722202888" class="burger__tel_title">+7 (4722) 202-888</a>
				<div class="burger__tel_subtitle">(Магазин)</div>
			</div>
-->
		</div>
	</div>
	<!-- Конец_бургер_услуги -->
	<!-- Шапка -->
	<header class="header">
		<div class="header__top container">
			<!-- <div class="address__store">
				<div class="address__title">Адрес магазина</div>
				<div class="address__subtitle_items">
					<div class="address__subtitle_item">
						<img src="/css/img/ico__map.svg" alt="Иконка карты">
						<a href="/pages/contacts/" class="address__subtitle">пр. Б. Хмельницкого, 131 оф. 2б </a>
					</div>
					<div class="address__subtitle_item">
						<img src="/css/img/ico__tel.svg" alt="Иконка телефона">
						<a href="tel:+74722317614" class="address__subtitle address__subtitle_underline">+7 (4722) 31-76-14 </a>
					</div>
				</div>
			</div> -->
			<div class="header__top_left">
				<div class="header__top_left_item">
					<a href="tel:<?= $row1['tel']; ?>" class="top_left_item_title address__subtitle_underline"><?= $row1['tel']; ?></a>
					<div class="top_left_item_subtitle">(Производство)</div>
				</div>
				<!--
				<div class="header__top_left_item">
					<a href="tel:+74722202888" class="top_left_item_title address__subtitle_underline">+7 (4722) 202-888</a>
					<div class="top_left_item_subtitle">(Магазин)</div>
				</div>
-->
			</div>
			<a href="/">
				<img src="/css/img/head__logo.svg" alt="logo" class="head__logo">
			</a>
			<div class="address__production">
				<div class="address__title">Адрес производства</div>
				<div class="address__subtitle_items">
					<div class="address__subtitle_item">
						<img src="/css/img/ico__map.svg" alt="Иконка карты">
						<a href="/pages/contacts/" class="address__subtitle"><?= $row1['address']; ?></a>
					</div>
					<div class="address__subtitle_item">
						<img src="/css/img/ico__tel.svg" alt="Иконка телефона">
						<a href="tel:<?= $row1['tel']; ?>" class="address__subtitle address__subtitle_underline"><?= $row1['tel']; ?></a>
					</div>
				</div>
			</div>
			<div class="header__top_right">
				<div class="header__top_right_title">Меню</div>
				<img src="/css/img/burger.svg" alt="" class="burger__open">
			</div>
		</div>
		<div class="header__list_bg">
			<ul class="header__list container">
				<li class="header__list_item">
					<a href="/pages/about/" class="header__list_item_underline">О компании</a>
				</li>
				<div class="vl"></div>
				<li class="header__list_item">
					<a href="/pages/production/" class="header__list_item_underline">Производство</a>
				</li>
				<div class="vl"></div>
				<li class="header__list_item header__list_item_product">
					<a href="#">Товары</a>
					<div class="header__list_item_products_menu">
						<div class="products__left_items products__left_items_menu">
							<?php
							$resultT = mysql_query("SELECT * FROM category_products WHERE id != 6 AND id != 7 ORDER BY position ASC", $db);
							$rowT = mysql_fetch_array($resultT);
							if (mysql_num_rows($resultT) > 0) {
								do {
									if ($rowT['cat'] == 0) {
										echo '
										<a href="/pages/products/?pid=' . $rowT['id'] . '" class="left__item left__item_menu">
											<div class="left__item_title left__item_title_menu">' . $rowT['name'] . '</div>
										</a>
										';
									}
								} while ($rowT = mysql_fetch_array($resultT));
							}
							?>
						</div>
					</div>
				</li>
				<div class="vl"></div>
				<li class="header__list_item header__list_item_product">
					<a href="#">Услуги</a>
					<div class="header__list_item_products_menu">
						<div class="products__left_items products__left_items_menu">
							<?php
							$resultU = mysql_query("SELECT * FROM category_services ORDER BY position ASC", $db);
							$rowU = mysql_fetch_array($resultU);
							if (mysql_num_rows($resultU) > 0) {
								do {
									echo '
									<a href="/pages/services/?sid=' . $rowU['id'] . '" class="left__item left__item_menu">
										<div class="left__item_title left__item_title_menu">' . nl2br($rowU['name']) . '</div>
									</a>
									';
								} while ($rowU = mysql_fetch_array($resultU));
							}
							?>
						</div>
					</div>
				</li>
				<div class="vl"></div>
				<li class="header__list_item">
					<a href="/pages/work/" class="header__list_item_underline">Выполненные работы</a>
				</li>
				<div class="vl"></div>
				<li class="header__list_item">
					<a href="/pages/cooperation/" class="header__list_item_underline">Сотрудничество</a>
				</li>
				<div class="vl"></div>
				<li class="header__list_item">
					<a href="/pages/articles/" class="header__list_item_underline">Статьи</a>
				</li>
				<div class="vl"></div>
				<li class="header__list_item">
					<a href="/pages/delivery/" class="header__list_item_underline">Доставка и оплата</a>
				</li>
				<div class="vl"></div>
				<li class="header__list_item">
					<a href="/pages/contacts/" class="header__list_item_underline">Контакты</a>
				</li>
			</ul>
		</div>
		<?php
		if ($_SERVER['REQUEST_URI'] == '/') {
			echo '<h1 class="header__title container">Изготовление памятников из гранита и мрамора</h1>';
		}
		?>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">
			(function(m, e, t, r, i, k, a) {
				m[i] = m[i] || function() {
					(m[i].a = m[i].a || []).push(arguments)
				};
				m[i].l = 1 * new Date();
				k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
			})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

			ym(84880456, "init", {
				clickmap: true,
				trackLinks: true,
				accurateTrackBounce: true,
				webvisor: true
			});
		</script>
		<noscript>
			<div><img src="https://mc.yandex.ru/watch/84880456" style="position:absolute; left:-9999px;" alt="" /></div>
		</noscript>
		<!-- /Yandex.Metrika counter -->

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-XR8HHM8NEK"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'G-XR8HHM8NEK');
		</script>

	</header>
	<!-- Конец_Шапка -->