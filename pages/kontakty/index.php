<?
$title = 'Контакты';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
?>

<body class="contacts-page" data-page="kontakty">

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>

  <main class="main contacts-page__main">
    <section class="contacts-page__section contacts-page__contacts contacts">
      <div class="contacts__container container">
        <h1 class="contacts__title">
          контакты
        </h1>

        <div class="contacts__item contacts__item_phone">
          <h4 class="contacts__subtitle">
            Свяжитесь с нами:
          </h4>
          <a class="contacts__link contacts__link_phone phone-info" href="tel:<? echo preg_replace('/[^0-9\.]+/', '', $row['tel']); ?>">
            <? echo $row['tel']; ?>
          </a>

          <button class="contacts__call-btn popup-link" href="#call">
            Заказать звонок
          </button>
        </div>

        <div class="contacts__item contacts__item_mail">
          <h4 class="contacts__subtitle">
            E-mail:
          </h4>
          <a class="contacts__link contacts__link_mail email-info" href="mailto:<? echo $row['email']; ?>">
            <? echo $row['email']; ?>
          </a>
        </div>

        <div class="contacts__item contacts__item_work-time">
          <h4 class="contacts__subtitle">
            Режим работы:
          </h4>
          <p class="contacts__link contacts__link_work-time">
            Круглосуточно
          </p>
        </div>

        <div class="contacts__item contacts__item_geo">
          <h4 class="contacts__subtitle">
            Задайте вопрос в мессенджерах или отправьте свою геопозицию:
          </h4>
          <div>
            <ul class="contacts__geo-card-wrap">
              <li class="contacts__geo-card">
                <a class="contacts__geo-link contacts__geo-link_telegram telegram-info" target="_blank" href="https://t.me/+<? echo preg_replace('/[^0-9\.]+/', '', $row['tel']); ?>">
                  <svg width="49" height="41" viewBox="0 0 49 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M18.5 38.1164L19.25 26.5817C19.25 26.5817 40.25 8.25842 40.25 7.35727C40.25 6.45613 38.75 7.35732 38.75 7.35732L13.25 23.5058L2 20.4299C2 20.4299 0.5 19.7413 0.5 18.892C0.5 18.0426 2 17.354 2 17.354L44.75 0.436544C44.75 0.436544 46.7919 -0.54568 47.75 0.436545C48.0928 0.787974 48.5 1.20552 48.5 1.9745C48.5 1.9745 41.75 38.8853 40.25 40.4233C39.5 41.1923 38.75 41.1922 37.25 40.4233C36.033 39.7994 26 31.9646 26 31.9646L20.75 37.3474C20.0001 38.1163 19.2501 38.1163 18.5002 38.1164H18.5Z"
                      fill="#36B7FF" />
                  </svg>
                </a>
              </li>

              <li class="contacts__geo-card">
                <a class="contacts__geo-link contacts__geo-link_whatsapp whatsapp-info"
                  href=" https://api.whatsapp.com/send?phone=79994589482" target="_blank">
                  <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M22.5 43.5C34.9264 43.5 45 33.7622 45 21.75C45 9.73781 34.9264 0 22.5 0C10.0736 0 0 9.73781 0 21.75C0 26.6127 1.6508 31.1027 4.44022 34.7249L0 45L11.6379 40.8022C14.8582 42.5215 18.5609 43.5 22.5 43.5ZM16.2459 7.80895C17.0165 8.53947 17.393 9.07489 18.5576 10.7311C19.7224 12.3875 19.3284 13.6537 17.393 14.7224C17.1738 14.8434 16.9301 14.9297 16.6814 15.0177C16.0853 15.2288 15.4607 15.45 15.0762 16.1836C14.5313 17.2235 17.3491 21.0347 20.4755 24.2202C23.558 27.1427 27.4111 29.3345 28.1768 29.3346C29.0569 29.3347 29.3147 28.6602 29.6015 27.91C29.8051 27.3776 30.0232 26.807 30.4886 26.4121C31.2973 25.7262 32.8055 24.9508 33.5761 25.6815C34.5986 26.6508 35.0194 27.0489 35.3031 27.3172C35.6615 27.6562 35.801 27.7882 36.6586 28.6039C37.6087 29.5076 37.4292 30.7957 35.883 32.257C34.4532 33.6082 33.1971 34.1767 31.2642 34.4487C29.522 34.6939 27.779 34.0217 25.7653 33.2452C25.545 33.1602 25.3214 33.074 25.0943 32.9876C20.5133 31.2452 18.2306 29.2808 15.0762 25.6815C14.9583 25.547 14.8422 25.4148 14.7279 25.2846C12.0905 22.2814 10.4252 20.3852 9.68185 16.1836C9.65053 16.0066 9.61178 15.8202 9.57123 15.6252C9.24324 14.0476 8.79813 11.9066 11.2231 9.60818C11.994 8.8775 15.0762 6.69999 16.2459 7.80895Z"
                      fill="#33D657" />
                  </svg>
                </a>
              </li>

              <li class="contacts__geo-card">
                <a class="contacts__geo-link contacts__geo-link_viber viber-info" target="_blank" href="viber://chat?number=%2B<? echo preg_replace('/[^0-9\.]+/', '', $row['tel']); ?>">
                  <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M5.47293 4.58538C10.4458 3.49836e-05 16.6619 5.80366e-06 17.9052 2.00178e-10L30.338 0C31.5809 0 36.5535 1.83117e-05 41.5267 4.58536C46.5 9.1707 46.5 14.9024 46.5 16.0488V24.0732C46.5 25.2195 46.5 30.378 41.5268 34.9634C36.5535 39.5488 31.5809 40.122 30.338 40.122L19.564 40.122C19.564 40.122 12.369 47 11.6891 47C11.0092 47 10.8318 46.6867 10.6718 46.3412C10.4557 45.8749 10.6718 38.4863 10.6718 38.4863C9.03229 37.7233 7.25279 36.6043 5.47332 34.9634C0.5 30.3774 0.49998 25.2195 0.5 24.0732V16.0488C0.5 14.9024 0.499993 9.17078 5.47293 4.58538ZM10.5801 19.4878C9.47279 17.4461 8.93145 14.9024 9.33684 13.7561C10.1368 11.4939 13.0666 9.17072 14.3098 9.17072C15.0381 9.17072 15.6597 9.26904 16.1746 9.74387C17.1243 10.6195 17.9122 11.328 18.5852 11.9331C19.6741 12.9122 20.4621 13.6207 21.1476 14.3292C22.2566 15.4756 21.1476 16.7028 20.5261 17.1951C20.2621 17.4042 19.9829 17.5275 19.7079 17.649C19.3353 17.8137 18.9703 17.9749 18.6611 18.3414C18.3278 18.7365 18.1955 19.0084 18.0395 19.4878C17.6362 20.7272 18.9906 22.6575 20.5259 24.0731C22.0613 25.4888 24.2558 26.7097 25.4989 26.3658C26.0188 26.222 26.3136 26.0999 26.7421 25.7927C27.1597 25.4932 27.3486 25.137 27.5403 24.7755C27.6658 24.5388 27.7925 24.2999 27.9854 24.0731C28.4728 23.5 29.9244 22.4221 31.0935 23.5L36.0664 28.0853C36.3697 28.365 36.4385 29.1185 36.0664 29.8049C35.4449 30.9512 34.2017 32.0976 32.9583 33.2439C31.2417 34.8266 27.9855 33.8171 26.7421 33.2439C22.5262 31.3003 20.1736 29.9706 16.7962 26.939C13.9433 24.3782 11.2018 20.6341 10.5801 19.4878ZM25.0964 7.57424C23.9462 7.57424 23.9462 5.80715 24.9005 5.80715L24.9676 5.80706C26.0736 5.80481 31.0525 5.7947 35.3106 9.72089C39.6621 13.7332 39.9487 17.9079 39.9487 19.2679C39.9487 20.6279 38.0322 20.562 38.0322 19.4486C38.0322 18.3352 37.7419 14.0892 34.0673 10.8672C30.3928 7.64526 26.2466 7.57425 25.0964 7.57424ZM25.0486 9.61554C23.8069 9.6756 23.9046 11.3928 25.1463 11.3327C26.388 11.2727 28.871 11.1525 31.4842 13.3219C34.0975 15.4914 34.2278 17.7809 34.2929 18.9257C34.3581 20.0704 36.2204 19.9803 36.1552 18.8356C36.0901 17.6908 35.6851 14.6444 32.929 12.0834C30.1729 9.52236 26.2903 9.55548 25.0486 9.61554ZM26.4276 14.8726C25.1848 14.9026 25.1361 13.1836 26.3788 13.1537C27.6217 13.1238 28.7252 13.6705 30.156 14.7828C31.5868 15.895 32.0851 17.0297 32.1176 18.1757C32.1501 19.3217 30.286 19.3666 30.2534 18.2206C30.2208 17.0746 29.5835 16.5166 28.9456 15.9587C28.3081 15.401 27.6697 14.8427 26.4276 14.8726Z"
                      fill="#B585F3" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>
  </main>

  <?
  include '' . $_SERVER["DOCUMENT_ROOT"] . '/includes/footer.php';
  ?>

  <div class="mobile-call-btn">
    <button class="btn popup-link" href="#call">
      Вызвать помощь
    </button>
  </div>

</body>

</html>