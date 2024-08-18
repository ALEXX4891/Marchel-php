<?php
	session_start();

	if ($_SERVER['REQUEST_URI'] != '/' AND $_SERVER['REQUEST_URI'] != '/pages/contacts/') 
	{
		echo '
		<!-- Форма_вопросы -->
		<form action="#" class="form__questions form__questions_small">
			<div class="form__questions_box form__questions_box_small">
				<div class="form__questions_box_small_wrap">
					<h3 class="form__questions_title">Остались вопросы?</h3>
					<div class="form__questions_subtitle form__questions_subtitle_small">
						Оставьте свои данные, и наши специалисты свяжутся с Вами через несколько минут
					</div>
				</div>
				<div class="form__questions_small_wrap">
					<div class="form__questions_box_wrap formAll">
						<div class="form__questions_box_wrap_wrap wrapInput">
							<input type="tel" name="inputLine" class="input__tel" placeholder="Телефон">
						</div>
						<div class="form__questions_polucy form__questions_polucy_small">
							<div class="questions__policy_text">Оставляя данные в этой форме, Вы соглашаетесь</div>
							<a href="/uploads/policy.pdf" target="_blank" class="questions__policy_link">с политикой конфиденциальности</a>
						</div>
					</div>
					<input name="btnLine" type="submit" class="form__questions_btn form__questions_btn_small form__questions_btn_callback" onclick="ym(65953018,\'reachGoal\',\'form__questions_btn_callback\');">
				</div>
			</div>
		</form>
		<!-- Конец_Форма_вопросы -->
		';
	}
?>
	<!-- Футрер -->
	<footer>
		<div class="footer_wrap container">
			<div class="footer_up"></div>
			<div class="footer__left">
				<a href="/" class="footer__logo_bulat">
					<img src="/css/img/footer__logo.svg" alt="Логотип">
				</a>
				<div class="footer__left_text">© 2020 — ООО «БУЛАТ»</div>
			</div>
			<div class="footer__center">
				<div class="footer__center_wrap">
					<div class="footer__center_item">
						<a href="/pages/about/">О компании</a>
					</div>
					<div class="footer__center_item">
						<a href="/pages/production/">Производство</a>
					</div>
					<div class="footer__center_item">
						<a href="/pages/cooperation/">Сотрудничество</a>
					</div>
				</div>
				<div class="footer__center_wrap">
					<div class="footer__center_item">
						<a href="/pages/articles/">Статьи</a>
					</div>
					<div class="footer__center_item">
						<a href="/pages/products/">Товары</a>
					</div>
					<div class="footer__center_item">
						<a href="/pages/services/">Услуги</a>
					</div>
				</div>
				<div class="footer__center_wrap">
					<div class="footer__center_item">
						<a href="/pages/contacts/">Контакты</a>
					</div>
					<div class="footer__center_item">
						<a href="/pages/work/">Выполненные работы</a>
					</div>
					<div class="footer__center_item">
						<a href="/pages/delivery/">Доставка и оплата</a>
					</div>
				</div>
			</div>
			<div class="footer__right">
				<div class="footer__btn btn-modal">Обратная связь</div>
				<div class="footer__right_wrap">
					<a href="/uploads/policy.pdf" class="footer__right_policy" target="_blank">Политика конфиденциальности</a>
					<!-- <a href="https://ww.net.ru/" target="_blank" class="ww__logo">
						<img src="/css/img/logo_ww.svg" alt="" class="footer__logo">
						<div class="footer__logo_text">
							Сайт разработан<br>
							в веб-студии WW
						</div>
					</a> -->
				</div>
			</div>
			<div class="footer_down"></div>
			<div class="footer_down_wrap"></div>
		</div>
		<style>

        .ww {
            font-family: Arial;
            font-size: 12px;
            line-height: 1.4;
			margin-top: 20px;
        }

        .ww img {
            display: block;
        }

        .ww_line {
            width: 100%;
            height: 1px;
            background-color: rgba(0, 0, 0, 0.2);   
        }

        .wwWrapper {
            padding: 30px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ww__side {
            width: 210px;
            display: flex;
            align-items: center;
            padding: 10px;
            text-decoration: none;
            color: #fff;
        }

        .ww__side:first-child {
            border-right: 1px solid rgba(0, 0, 0, 0.2);
            justify-content: flex-end;
        }

        .ww__side:first-child:hover {
            text-decoration: underline;
            color: #fff;
        }

		.ww__text span {
			white-space: nowrap;
		}

        .ww__side:first-child .ww__text {
            margin-right: 7px;
            text-align: right;
        }

        .ww__side:nth-child(2) .ww__img {
            margin-right: 10px;
        }

        .ww__side:first-child .ww__img img {
            width: 48px;
        }

        .ww__side:nth-child(2) .ww__img img {
            width: 30px;
        }

        .ww__link {
            color: #fff;
        }

        .ww__link:hover {
            color: #fff;
        }


        @media screen and (max-width: 1200px) {
            .container {
                width: 100%;
            }
        }

        @media screen and (max-width: 460px) {
            .wwWrapper {
                flex-direction: column;
            }
            .ww__side:first-child {
                border-right: none;
                justify-content: flex-start;
                flex-direction: row-reverse;
                justify-content: center;
            }
            .ww__side:first-child .ww__text {
                margin-right: 0;
                text-align: left;
            }
            .ww__side:first-child .ww__img img {
                margin-right: 10px;
            }
            .ww__side:nth-child(2) .ww__img {
                padding-left: 41px;
            }
            .ww__side {
                width: 270px;
            }
        }
    </style>

    <div class="container">
        <div class="ww">
            <div class="ww_line"></div>
            <div class="wwWrapper">

                <a href="https://ww.net.ru/" class="ww__side" target="_blank" title="Перейти на сайт диджитал студии WW">
                    <div class="ww__text">
                        <span>
                            Сайт разработан <br>
                            в диджитал студии «WW»
                        </span>
                    </div>
                    <div class="ww__img">
                        <img src="https://ww.net.ru/css/img/newLogo/newLogowwWhite.svg" alt="Диджитал студия WW">
                    </div>
                </a>

                <div class="ww__side">
	<!--
                    <div class="ww__img">
                        <img src="https://ww.net.ru/css/img/newLogo/wwMark.svg" alt="Проверено">
                    </div>

                    <div class="ww__text">
                        <span>Сайт проверен 09.01.2023</span>
                        <a href="/uploads/report/report_09012023.pdf" target="_blank" class="ww__link">Просмотреть отчет</a>
                    </div>
	-->
                </div>

            </div>
        </div>
    </div>
	</footer>
	<!-- Конец_Футрер -->
	<!-- Модалка_обратная_связь -->
	<div class="modal modal__form" style="opacity: 0; display: none;">
		<div class="popup">
			<form action="#" class="form__modal">
				<div class="form__modal_box">
					<img src="/css/img/decor_line_up.svg" alt="Декоративная линия">
					<img src="/css/img/x_black.svg" alt="Крестик" class="modal_close closebtn">
					<div class="form__modal_title Feedback_modal_title">Обратная связь</div>
					<div class="form__modal_box_wrap modalFormSend">
						<input name="name_call" type="text" class="input__name input__name_modal" placeholder="Имя">
						<input name="phone_call" type="tel" class="input__tel input__tel_modal" placeholder="Телефон">
						<textarea type="text" name="text_call" class="input__text input__text_modal" style="resize: none;" placeholder="Текст сообщения"></textarea>
					</div>
					<input name="btn_call" type="submit" class="form__modal_btn form__modal_btn_callback" onclick="ym(65953018,'reachGoal','form__modal_btn_callback');">
					<div class="modal__form_policy">
						Оставляя данные в этой форме, Вы соглашаетесь<br>
						<a href="/uploads/policy.pdf" target="_blank" class="modal__form_policy_link">с политикой конфиденциальности</a>
					</div>
					<img src="/css/img/decor_line_down.svg" alt="Декоративная линия">
				</div>
			</form>
		</div>
	</div>
	<!-- Конец_Модалка_обратная_связь -->
	<!-- Модалка_Заказать -->
	<div class="modal modal__form_order" style="opacity: 0; display: none;">
		<div class="popup">
			<form action="#" class="form__modal">
				<div class="form__modal_box">
					<img src="/css/img/decor_line_up.svg" alt="Декоративная линия">
					<img src="/css/img/x_black.svg" alt="Крестик" class="modal_close closebtn">
					<div class="form__modal_title">Заказать</div>
					<div class="form__modal_box_wrap">
						<input name="phone" type="tel" class="input__tel input__tel_modal" placeholder="Телефон">
					</div>
					<input name="btn" type="submit" class="form__modal_btn form__modal_btn_callback" onclick="ym(65953018,'reachGoal','form__modal_btn_callback');">
					<div class="modal__form_policy">
						Оставляя данные в этой форме, Вы соглашаетесь<br>
						<a href="/uploads/policy.pdf" target="_blank" class="modal__form_policy_link">с политикой конфиденциальности</a>
					</div>
					<img src="/css/img/decor_line_down.svg" alt="Декоративная линия">
				</div>
			</form>
		</div>
	</div>
	<!-- Конец_Модалка_Заказать -->
	<!-- Попап_отправлено -->
	<div class="modal popup__send" style="opacity: 0; display: none;">
		<div class="popup">
			<div class="form__modal">
				<div class="popup__send_wrap">
					<img src="/css/img/decor_line_up.svg" alt="Декоративная линия">
					<img src="/css/img/x_black.svg" alt="Крестик" class="modal_close closebtn">
					<img src="/css/img/v.svg" alt="Галочка" class="fix2022_1">
					<div class="form__modal_title">Отправлено</div>
					<div class="form__modal_subtitle">
						Наши специалисты свяжутся с Вами в<br>
						ближайшее время.
					</div>
					<img src="/css/img/decor_line_down.svg" alt="Декоративная линия">
				</div>
			</div>
		</div>
	</div>
	<!-- Конец_Попап_отправлено -->
	<!-- <script type="text/javascript" src="/js/libs/jquery-3.5.1.min.js"></script> -->
	<script type="text/javascript" src="/js/libs/slick.min.js"></script>
	<script src="/js/libs/jquery.fancybox.min.js"></script>
	<script src="/js/libs/jquery.maskedinput.js"></script>
	<script src="/js/main.js?ver=06"></script>
	<!-- <script src="/js/test.js?ver=1"></script> -->
	<?
		if($_SESSION["user_ok_cock"] != '1')
		{
			echo'
			<div class="cookie">
				<div class="cookie__wrapper">
					<p>Продолжая использовать наш сайт, вы принимаете </p><a href="/uploads/cookie.pdf" download target="_blank">политику использования cookie-файлов.</a>
				</div>
				<div class="cookie__btn" onclick="policyFunc(\'1\');">Принимаю</div>
				<img src="/css/img/cookie-x.svg" alt="Крест" title="Не принимаю" class="cookie__close">
			</div>
			';
		}
	?>
	<script>
		function policyFunc($cookie) {
			$.ajax({
				type: 'POST',
				url: "/backend/acceptCookie.php",
				data: {"cookie": $cookie},
				response: 'text',
				success: function (data) {
					$('.cookie').fadeTo(500, 0);
					setTimeout(function () {
						$('.cookie').hide();
					}, 500);
				}
			})
		}
	</script>
	<!-- Разметка JSON-LD, созданная Мастером разметки структурированных данных Google. -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "ООО «БУЛАТ»",
  "image" : "https://bulat2005.ru/css/img/head__logo.svg",
  "telephone" : "+7 (4722) 202-888",
  "email" : "",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "К. Заслонова, 177",
    "addressLocality" : "Белгород",
    "addressRegion" : "Белгородская область",
    "addressCountry" : "Россия",
    "postalCode" : "308017"
  },
  "url" : "https://bulat2005.ru/"
}
</script>
</body>
</html>