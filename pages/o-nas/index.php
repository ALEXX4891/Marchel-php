<?
$title = 'О нас';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
?>

<body class="about-us-page" data-page="o-nas">

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>

  <main class="main about-us-page__main">
    <section class="about-us-page__section about-us-page__banner banner">
      <div class="banner__container container">
        <h1 class="banner__title">
          Компания «Альфа»
        </h1>
        <h3 class="banner__subtitle">
          Выездной сервис
        </h3>
      </div>
    </section>

    <section class="about-us-page__section about-us-page__about about">
      <div class="about__container container">
        <h2 class="about__title title title_big">
          о нашей компании
        </h2>
        <p class="about__text text">
          С другой стороны, укрепление и развитие внутренней структуры однозначно определяет каждого участника как
          способного принимать собственные решения касаемо кластеризации усилий. Внезапно, акционеры крупнейших компаний
          представлены в исключительно положительном свете. Безусловно, начало повседневной работы по формированию
          позиции создаёт предпосылки для направлений прогрессивного развития.
        </p>
        <p class="about__text text">
          С другой стороны, укрепление и развитие внутренней структуры однозначно определяет каждого участника как
          способного принимать собственные решения касаемо кластеризации усилий. Внезапно, акционеры крупнейших компаний
          представлены в исключительно положительном свете. Безусловно, начало повседневной работы по формированию
          позиции создаёт предпосылки для направлений прогрессивного развития.
        </p>

        <ul class="about__facts-wrap">
          <li class="about__fact">
            <p class="about__fact-first-word">
              Более
            </p>
            <p class="about__fact-number">
              10
            </p>
            <p class="about__fact-last-word">
              лет практики
            </p>
          </li>

          <li class="about__fact">
            <p class="about__fact-first-word">
              Более
            </p>
            <p class="about__fact-number">
              20
            </p>
            <p class="about__fact-last-word">
              квалифицированных специалистов
            </p>
          </li>

          <li class="about__fact">
            <p class="about__fact-first-word">
              Более
            </p>
            <p class="about__fact-number">
              1000
            </p>
            <p class="about__fact-last-word">
              ситуаций, решенных компанией
            </p>
          </li>
        </ul>
      </div>
    </section>

    <section class="about-us-page__section about-us-page__services services">
      <div class="services__container container">
        <h2 class="services__title title">
          Мы предоставляем большой спектр услуг
        </h2>

        <a class="services__link-all" href="/pages/uslugi/">
          <p class="services__link-title">
            Все услуги
          </p>
          <svg width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 13.5H19.5M19.5 13.5L15.5 10M19.5 13.5L15.5 17" stroke="#777E85" />
          </svg>
        </a>

        <ul class="services__card-wrap">
        </ul>
      </div>
    </section>

    <section class="about-us-page__section about-us-page__news news">
      <div class="news__container container">
        <h2 class="news__title title">
          Будьте в курсе событий
        </h2>

        <a class="news__link-all" href="/pages/novosti/">
          <p class="news__link-title">
            Все новости
          </p>
          <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.5 4.5H10M10 4.5L6 1M10 4.5L6 8" stroke="#777E85" />
          </svg>



        </a>

        <div class="news__slider swiper">
          <ul class="news__card-wrap swiper-wrapper">
          </ul>

          <div class="news__slider-pagination swiper-pagination">
          </div>

        </div>

      </div>
    </section>

    <section class="about-us-page__section about-us-page__form-block form-block">
      <div class="form-block__container container">
        <form class="form-block__big-form big-form main-form" action="#" enctype="multipart/form-data">

          <h2 class="big-form__title">
            Отправьте срочную заявку
          </h2>
          <p class="big-form__desc">
            Напишите нам и наши специалисты свяжутся с вами
          </p>

          <input class="big-form__input big-form__input_name" type="text" name="name" placeholder="Имя">

          <input class="big-form__input big-form__input_phone" type="text" name="phone" placeholder="Номер телефона"
            inputmode="numeric">

          <textarea class="big-form__input big-form__input_message" name="message" rows="5" cols="30"
            placeholder="Опишите ситуацию, например: “Спустило колесо”"></textarea>

          <button class="big-form__btn popup-link" href="#success">
            Отправить
          </button>

          <div class="big-form__geo-wrap">
            <h5 class="big-form__geo-title">
              Или отправьте свои геоданные через один из мессенджеров
            </h5>

            <ul class="big-form__geo-card-wrap">
              <li class="big-form__geo-card">
                <a class="big-form__geo-link big-form__geo-link_telegram telegram-info" target="_blank" href="https://t.me/+<? echo preg_replace('/[^0-9\.]+/', '', $row['tel']); ?>">
                  <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.5 31.6087L14.0625 22.0434C14.0625 22.0434 29.8125 6.84844 29.8125 6.10115C29.8125 5.35386 28.6875 6.1012 28.6875 6.1012L9.5625 19.4926L1.125 16.9419C1.125 16.9419 0 16.3709 0 15.6665C0 14.9621 1.125 14.3911 1.125 14.3911L33.1875 0.362012C33.1875 0.362012 34.7189 -0.452515 35.4375 0.362013C35.6946 0.653442 36 0.9997 36 1.63739C36 1.63739 30.9375 32.2463 29.8125 33.5218C29.25 34.1594 28.6875 34.1594 27.5625 33.5218C26.6498 33.0044 19.125 26.5072 19.125 26.5072L15.1875 30.971C14.625 31.6086 14.0626 31.6086 13.5001 31.6087H13.5Z"
                      fill="#36B7FF" />
                  </svg>

                </a>
              </li>

              <li class="big-form__geo-card">
                <a class="big-form__geo-link big-form__geo-link_whatsapp whatsapp-info" target="_blank" href="https://api.whatsapp.com/send?phone=<? echo preg_replace('/[^0-9\.]+/', '', $row['tel']); ?>">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M17 32.8667C26.3888 32.8667 34 25.5092 34 16.4333C34 7.35745 26.3888 0 17 0C7.61116 0 0 7.35745 0 16.4333C0 20.1074 1.24727 23.4998 3.35483 26.2366L0 34L8.7931 30.8284C11.2262 32.1274 14.0238 32.8667 17 32.8667ZM12.2747 5.9001C12.8569 6.45205 13.1414 6.85658 14.0213 8.10793C14.9013 9.35946 14.6037 10.3162 13.1414 11.1236C12.9758 11.215 12.7916 11.2802 12.6037 11.3467C12.1534 11.5062 11.6814 11.6733 11.3909 12.2276C10.9792 13.0133 13.1082 15.8929 15.4704 18.2997C17.7994 20.5078 20.7106 22.1638 21.2891 22.1639C21.9541 22.164 22.1489 21.6544 22.3656 21.0875C22.5194 20.6853 22.6842 20.2542 23.0359 19.9558C23.6468 19.4376 24.7864 18.8517 25.3686 19.4038C26.1412 20.1362 26.4591 20.4369 26.6734 20.6397C26.9442 20.8958 27.0497 20.9955 27.6976 21.6118C28.4155 22.2946 28.2798 23.2679 27.1116 24.3719C26.0313 25.3929 25.0822 25.8224 23.6219 26.0279C22.3055 26.2132 20.9885 25.7053 19.4671 25.1186C19.3007 25.0544 19.1318 24.9892 18.9601 24.9239C15.4989 23.6075 13.7743 22.1233 11.3909 19.4038C11.3018 19.3022 11.2141 19.2023 11.1277 19.1039C9.13502 16.8348 7.87685 15.4021 7.31518 12.2276C7.29151 12.0939 7.26223 11.953 7.2316 11.8057C6.98378 10.6137 6.64747 8.99611 8.47967 7.25952C9.06214 6.70744 11.3909 5.06221 12.2747 5.9001Z"
                      fill="#33D657" />
                  </svg>
                </a>
              </li>

              <li class="big-form__geo-card big-form__geo-link_viber">
                <a class="big-form__geo-link viber-info" target="_blank" href="viber://chat?number=%2B<? echo preg_replace('/[^0-9\.]+/', '', $row['tel']); ?>">
                  <svg width="34" height="34" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.77025 2.14635C5.04048 1.63753e-05 7.87826 2.71661e-06 8.44587 0L14.1217 0C14.6891 0 16.9592 8.57144e-06 19.2296 2.14634C21.5 4.29267 21.5 6.97561 21.5 7.5122V11.2683C21.5 11.8049 21.5 14.2195 19.2296 16.3659C16.9592 18.5122 14.6891 18.7805 14.1217 18.7805L9.20313 18.7805C9.20313 18.7805 5.91846 22 5.60807 22C5.29769 22 5.21669 21.8533 5.14364 21.6916C5.04501 21.4734 5.14364 18.0148 5.14364 18.0148C4.39518 17.6577 3.58279 17.1339 2.77043 16.3659C0.5 14.2192 0.499991 11.8049 0.5 11.2683V7.5122C0.5 6.97561 0.499997 4.29271 2.77025 2.14635ZM5.10177 9.12194C4.59627 8.16627 4.34914 6.97561 4.53421 6.43901C4.89942 5.38011 6.23692 4.29268 6.80448 4.29268C7.13695 4.29268 7.42072 4.3387 7.65581 4.56096C8.08937 4.97085 8.44906 5.30246 8.75627 5.58569C9.25339 6.04399 9.61315 6.37566 9.92606 6.7073C10.4324 7.2439 9.92606 7.81833 9.64234 8.04878C9.52184 8.14664 9.39439 8.20438 9.26882 8.26126C9.09871 8.33831 8.93208 8.41379 8.79094 8.58535C8.6388 8.77028 8.57836 8.89753 8.50716 9.12194C8.32306 9.7021 8.94137 10.6056 9.64228 11.2683C10.3432 11.9309 11.345 12.5024 11.9125 12.3414C12.1499 12.2741 12.2845 12.217 12.4801 12.0732C12.6707 11.933 12.757 11.7662 12.8445 11.597C12.9018 11.4863 12.9596 11.3744 13.0477 11.2683C13.2702 11 13.9329 10.4954 14.4666 11L16.7368 13.1463C16.8753 13.2772 16.9067 13.6299 16.7368 13.9512C16.4531 14.4878 15.8855 15.0244 15.3179 15.561C14.5342 16.3018 13.0477 15.8293 12.4801 15.561C10.5554 14.6512 9.48145 14.0288 7.93959 12.6097C6.63718 11.4111 5.38561 9.65853 5.10177 9.12194ZM11.7288 3.54539C11.2037 3.54539 11.2037 2.71824 11.6394 2.71824L11.67 2.7182C12.1749 2.71715 14.4479 2.71241 16.3918 4.5502C18.3783 6.42829 18.5092 8.38242 18.5092 9.01901C18.5092 9.6556 17.6343 9.62476 17.6343 9.10359C17.6343 8.58243 17.5017 6.59494 15.8242 5.08679C14.1467 3.57863 12.2539 3.54539 11.7288 3.54539ZM11.707 4.50089C11.1401 4.529 11.1847 5.33279 11.7516 5.30468C12.3184 5.27656 13.452 5.22034 14.645 6.2358C15.838 7.25127 15.8975 8.32298 15.9272 8.85882C15.9569 9.39467 16.8071 9.3525 16.7774 8.81666C16.7477 8.28081 16.5627 6.85481 15.3045 5.65604C14.0463 4.45728 12.2738 4.47278 11.707 4.50089ZM12.3365 6.96165C11.7692 6.97568 11.7469 6.17103 12.3143 6.15704C12.8816 6.14306 13.3854 6.39897 14.0386 6.9196C14.6918 7.44022 14.9193 7.97136 14.9341 8.50777C14.949 9.04418 14.0979 9.06521 14.0831 8.5288C14.0682 7.99239 13.7772 7.73117 13.486 7.47002C13.195 7.20897 12.9036 6.94763 12.3365 6.96165Z"
                      fill="#B585F3" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>

          <div class="big-form__agreement-wrap">
            <span class="big-form__agreement-text">
              Нажимая на кнопку Вы соглашаетесь с нашей
            </span>
            <a class="big-form__agreement-link" href="/pages/policy/" target="_blank">
              политикой обработки персональных данных
            </a>
          </div>
        </form>
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