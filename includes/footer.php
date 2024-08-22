<footer class="footer">
	<div class="container footer__container">
		<a class="footer__logo logo" href="/">
			<img src="/img/logo_footer.svg" alt="" />
		</a>

		<p class="footer__copyright">
			© «Выездной сервис Альфа», 2018
			Все права защищены
		</p>

		<div class="footer__nav nav">
			<ul class="nav__list">
				<li class="nav__item">
					<a class="nav__link" href="/pages/o-nas/">
						О нас
					</a>
				</li>
				<li class="nav__item">
					<a class="nav__link" href="/pages/uslugi/">
						Услуги
					</a>
				</li>
				<li class="nav__item">
					<a class="nav__link" href="/pages/novosti/">
						Новости
					</a>
				</li>
				<li class="nav__item">
					<a class="nav__link" href="/pages/kontakty/">
						Контакты
					</a>
				</li>
			</ul>
		</div>

		<div class="footer__contacts">
			<a class="contacts__item contacts__item_phone phone-info" href="tel:<? echo preg_replace('/[^0-9\.]+/', '', $row1['tel']); ?>">
				<? echo $row1['tel']; ?>
			</a>

			<a class="contacts__item contacts__item_mail email-info" href="mailto:<? echo $row1['email']; ?>">
				<? echo $row1['email']; ?>
			</a>


			<ul class="social footer__social">
				<li class="social__item">
					<a class="social__link social__link_telegram telegram-info" target="_blank" href="https://t.me/+<? echo preg_replace('/[^0-9\.]+/', '', $row1['tel']); ?>">
						<svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M10.4038 21.1637L10.7476 15.8184C10.7476 15.8184 20.3726 7.32707 20.3726 6.90947C20.3726 6.49187 19.6851 6.90949 19.6851 6.90949L7.99756 14.3929L2.84131 12.9675C2.84131 12.9675 2.15381 12.6484 2.15381 12.2548C2.15381 11.8612 2.84131 11.5421 2.84131 11.5421L22.4351 3.7023C22.4351 3.7023 23.3709 3.24712 23.8101 3.7023C23.9672 3.86516 24.1538 4.05866 24.1538 4.41501C24.1538 4.41501 21.0601 21.52 20.3726 22.2327C20.0288 22.5891 19.6851 22.5891 18.9976 22.2327C18.4398 21.9436 13.8413 18.3128 13.8413 18.3128L11.4351 20.8073C11.0913 21.1636 10.7476 21.1637 10.4039 21.1637H10.4038Z"
								fill="#36B7FF" />
						</svg>
					</a>
				</li>

				<li class="social__item">
					<a class="social__link social__link_whatsapp whatsapp-info" target="_blank" href="https://api.whatsapp.com/send?phone=<? echo preg_replace('/[^0-9\.]+/', '', $row1['tel']); ?>">
						<svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M13.1538 22.8C18.9528 22.8 23.6538 18.2557 23.6538 12.65C23.6538 7.04431 18.9528 2.5 13.1538 2.5C7.35482 2.5 2.65381 7.04431 2.65381 12.65C2.65381 14.9193 3.42418 17.0146 4.72591 18.7049L2.65381 23.5L8.08484 21.541C9.58766 22.3434 11.3156 22.8 13.1538 22.8ZM10.2352 6.14418C10.5948 6.48509 10.7705 6.73495 11.314 7.50784C11.8576 8.28085 11.6737 8.87175 10.7706 9.37043C10.6683 9.42691 10.5545 9.46719 10.4385 9.50828C10.1603 9.60677 9.86878 9.70999 9.68937 10.0524C9.43509 10.5376 10.75 12.3162 12.2091 13.8028C13.6475 15.1666 15.4457 16.1894 15.803 16.1895C16.2137 16.1895 16.334 15.8748 16.4679 15.5247C16.5628 15.2762 16.6646 15.0099 16.8818 14.8257C17.2592 14.5056 17.963 14.1437 18.3227 14.4847C18.7998 14.9371 18.9962 15.1228 19.1286 15.248C19.2958 15.4062 19.361 15.4678 19.7611 15.8485C20.2045 16.2702 20.1208 16.8713 19.3992 17.5533C18.732 18.1838 18.1458 18.4491 17.2438 18.5761C16.4308 18.6905 15.6173 18.3768 14.6776 18.0144C14.5748 17.9748 14.4705 17.9345 14.3645 17.8942C12.2267 17.0811 11.1614 16.1644 9.68937 14.4847C9.63434 14.4219 9.58015 14.3602 9.52682 14.2995C8.29603 12.898 7.51892 12.0131 7.17201 10.0524C7.15739 9.96975 7.1393 9.88276 7.12038 9.79176C6.96732 9.05553 6.7596 8.05642 7.89125 6.98382C8.25101 6.64283 9.68937 5.62666 10.2352 6.14418Z"
								fill="#34D657" />
						</svg>
					</a>
				</li>

				<li class="social__item">
					<a class="social__link social__link_viber viber-info" target="_blank" href="viber://chat?number=%2B<? echo preg_replace('/[^0-9\.]+/', '', $row1['tel']); ?>">
						<svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M4.92406 4.14635C7.19429 2.00002 10.0321 2 10.5997 2L16.2755 2C16.8429 2 19.113 2.00001 21.3834 4.14634C23.6538 6.29267 23.6538 8.97561 23.6538 9.5122V13.2683C23.6538 13.8049 23.6538 16.2195 21.3834 18.3659C19.113 20.5122 16.8429 20.7805 16.2755 20.7805L11.3569 20.7805C11.3569 20.7805 8.07227 24 7.76188 24C7.4515 24 7.3705 23.8533 7.29745 23.6916C7.19882 23.4734 7.29745 20.0148 7.29745 20.0148C6.54899 19.6577 5.7366 19.1339 4.92424 18.3659C2.65381 16.2192 2.6538 13.8049 2.65381 13.2683V9.5122C2.65381 8.97561 2.65381 6.29271 4.92406 4.14635ZM7.25558 11.1219C6.75008 10.1663 6.50295 8.97561 6.68802 8.43901C7.05323 7.38011 8.39073 6.29268 8.95829 6.29268C9.29076 6.29268 9.57453 6.3387 9.80962 6.56096C10.2432 6.97085 10.6029 7.30246 10.9101 7.58569C11.4072 8.04399 11.767 8.37566 12.0799 8.7073C12.5862 9.2439 12.0799 9.81833 11.7961 10.0488C11.6757 10.1466 11.5482 10.2044 11.4226 10.2613C11.2525 10.3383 11.0859 10.4138 10.9447 10.5854C10.7926 10.7703 10.7322 10.8975 10.661 11.1219C10.4769 11.7021 11.0952 12.6056 11.7961 13.2683C12.497 13.9309 13.4988 14.5024 14.0663 14.3414C14.3037 14.2741 14.4383 14.217 14.6339 14.0732C14.8245 13.933 14.9108 13.7662 14.9983 13.597C15.0556 13.4863 15.1134 13.3744 15.2015 13.2683C15.424 13 16.0867 12.4954 16.6204 13L18.8906 15.1463C19.0291 15.2772 19.0605 15.6299 18.8906 15.9512C18.6069 16.4878 18.0393 17.0244 17.4717 17.561C16.688 18.3018 15.2015 17.8293 14.6339 17.561C12.7093 16.6512 11.6353 16.0288 10.0934 14.6097C8.79099 13.4111 7.53942 11.6585 7.25558 11.1219ZM13.8826 5.54539C13.3575 5.54539 13.3575 4.71824 13.7932 4.71824L13.8238 4.7182C14.3287 4.71715 16.6017 4.71241 18.5456 6.5502C20.5321 8.42829 20.663 10.3824 20.663 11.019C20.663 11.6556 19.7881 11.6248 19.7881 11.1036C19.7881 10.5824 19.6555 8.59494 17.978 7.08679C16.3005 5.57863 14.4077 5.54539 13.8826 5.54539ZM13.8608 6.50089C13.2939 6.529 13.3385 7.33279 13.9054 7.30468C14.4722 7.27656 15.6058 7.22034 16.7988 8.2358C17.9918 9.25127 18.0513 10.323 18.081 10.8588C18.1108 11.3947 18.9609 11.3525 18.9312 10.8167C18.9015 10.2808 18.7166 8.85481 17.4584 7.65604C16.2002 6.45728 14.4276 6.47278 13.8608 6.50089ZM14.4903 8.96165C13.923 8.97568 13.9007 8.17103 14.4681 8.15704C15.0354 8.14306 15.5392 8.39897 16.1924 8.9196C16.8456 9.44022 17.0731 9.97136 17.0879 10.5078C17.1028 11.0442 16.2518 11.0652 16.2369 10.5288C16.222 9.99239 15.9311 9.73117 15.6399 9.47002C15.3488 9.20897 15.0574 8.94763 14.4903 8.96165Z"
								fill="#B585F3" />
						</svg>
					</a>
				</li>
			</ul>
		</div>

		<button class="btn footer__btn popup-link" href="#call">
			Вызвать помощь
		</button>

		<a class="footer__policy" href="/pages/policy/">
			Политика конфиденциальности
		</a>
	</div>
</footer>

<div class="cookie">
	<div class="cookie__wrapper">
		<p>
			Продолжая использовать наш сайт, вы принимаете
			<a href="/pages/cookie/" target="_blank">
				политику использования cookie-файлов.
			</a>
		</p>
	</div>
	<div class="cookie__btn">
		Принимаю

	</div>
	<p title="Не принимаю" class="cookie__close">
		<svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path
				d="M14.3793 14.3102C14.8556 13.8698 15.5956 13.9022 16.0321 14.3827L25 24.2534L33.9679 14.3827C34.4044 13.9022 35.1444 13.8698 35.6207 14.3102C36.0969 14.7507 36.1291 15.4973 35.6925 15.9778L26.5869 26L35.6925 36.0222C36.1291 36.5027 36.0969 37.2493 35.6206 37.6898C35.1444 38.1302 34.4044 38.0978 33.9679 37.6173L25 27.7467L16.0321 37.6173C15.5956 38.0978 14.8556 38.1302 14.3794 37.6898C13.9031 37.2493 13.8709 36.5027 14.3075 36.0222L23.4131 26L14.3075 15.9778C13.8709 15.4973 13.9031 14.7507 14.3793 14.3102Z"
				fill="black" />
		</svg>
	</p>
</div>

<?
include '' . $_SERVER["DOCUMENT_ROOT"] . '/includes/popup.php';
?>

<script src="/js/lib/swiper-bundle.min.js"></script>
<script src="/js/lib/jquery-3.5.1.min.js"></script>
<script src="/js/lib/jquery.maskedinput.min.js"></script>
<script type="module" src="/js/app.js"></script>

