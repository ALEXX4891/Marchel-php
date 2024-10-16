<?php
$title = 'Услуга';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
$serviceId = (int)$_GET['id'];

$resultCont = mysqli_query($db, "SELECT * FROM contacts");
$cont = mysqli_fetch_array($resultCont);

$resultServ = mysqli_query($db, "SELECT * FROM services WHERE id = '{$serviceId}'");
$serv = mysqli_fetch_array($resultServ);
?>

<body class="services-item-page" data-page="uslugi">

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>


  <main class="main services-item-page__main">
    <section class="services-item-page__section services-item-page__banner banner">
      <div class="banner__container container">
        <h1 class="banner__title">
          <?= $serv['name'] ?>
        </h1>
        <p class="banner__text text">
          <?= $serv['description'] ?>
        </p>
        <button class="banner__btn btn popup-link" href="#call">
          Вызвать помощь
        </button>
        <div class="banner__img">
          <img class="banner__photo" alt="<?= $serv['alt'] ?>" src="/img/<?= $serv['photo'] ?>">
        </div>
      </div>
    </section>

    <section class="services-item-page__section services-item-page__work work">
      <div class="work__container container">
        <h2 class="work__title title">
          <?= $serv['title_1'] ?>
        </h2>

        <ul class="work__card-wrap">
          <li class="work__card">
            <h5 class="work__card-title">
              Круглосуточно
            </h5>
            <p class="work__card-text text">
              Наша команда специалистов готова помочь в любое время суток, без перерывов и выходных. Благодаря этому вы
              можете получить необходимую помощь и поддержку в любое удобное для вас время. Мы обеспечиваем надежность и
              доступность сервиса
            </p>
          </li>

          <li class="work__card">
            <h5 class="work__card-title">
              Быстро
            </h5>
            <p class="work__card-text text">
              Мы прибудем на место в течение 15-30 минут после вашего звонка. Это гарантия быстрого реагирования и
              быстрого решения вашей проблемы. Не стоит терять время - доверьте нам заботу о вашей безопасности и
              комфорте </p>
          </li>

          <li class="work__card">
            <h5 class="work__card-title">
              Качественно
            </h5>
            <p class="work__card-text text">
              Мы учитываем все ваши пожелания и требования, чтобы обеспечить отличный результат. Независимо от сложности
              задачи, мы найдем оптимальное решение для вас. Доверьтесь нам и ощутите настоящий комфорт работы с
              профессионалами </p>
          </li>
        </ul>
      </div>
    </section>

    <section class="services-item-page__section services-item-page__article article">
      <div class="article__container container">
        <h2 class="article__title title">
          <?= $serv['title_2'] ?>
        </h2>

        <p class="article__card-text text">
          <?= $serv['text'] ?>
        </p>

        </ul>
      </div>
    </section>

    <section class="services-item-page__section services-item-page__form-block form-block">
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
                <a class="big-form__geo-link big-form__geo-link_telegram telegram-info" target="_blank" href="https://t.me/+<? echo preg_replace('/[^0-9\.]+/', '', $cont['messenger-tel']); ?>">
                  <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.5 31.6087L14.0625 22.0434C14.0625 22.0434 29.8125 6.84844 29.8125 6.10115C29.8125 5.35386 28.6875 6.1012 28.6875 6.1012L9.5625 19.4926L1.125 16.9419C1.125 16.9419 0 16.3709 0 15.6665C0 14.9621 1.125 14.3911 1.125 14.3911L33.1875 0.362012C33.1875 0.362012 34.7189 -0.452515 35.4375 0.362013C35.6946 0.653442 36 0.9997 36 1.63739C36 1.63739 30.9375 32.2463 29.8125 33.5218C29.25 34.1594 28.6875 34.1594 27.5625 33.5218C26.6498 33.0044 19.125 26.5072 19.125 26.5072L15.1875 30.971C14.625 31.6086 14.0626 31.6086 13.5001 31.6087H13.5Z"
                      fill="#36B7FF" />
                  </svg>

                </a>
              </li>

              <li class="big-form__geo-card">
                <a class="big-form__geo-link big-form__geo-link_whatsapp whatsapp-info" target="_blank" href="https://api.whatsapp.com/send?phone=<? echo preg_replace('/[^0-9\.]+/', '', $cont['messenger-tel']); ?>">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M17 32.8667C26.3888 32.8667 34 25.5092 34 16.4333C34 7.35745 26.3888 0 17 0C7.61116 0 0 7.35745 0 16.4333C0 20.1074 1.24727 23.4998 3.35483 26.2366L0 34L8.7931 30.8284C11.2262 32.1274 14.0238 32.8667 17 32.8667ZM12.2747 5.9001C12.8569 6.45205 13.1414 6.85658 14.0213 8.10793C14.9013 9.35946 14.6037 10.3162 13.1414 11.1236C12.9758 11.215 12.7916 11.2802 12.6037 11.3467C12.1534 11.5062 11.6814 11.6733 11.3909 12.2276C10.9792 13.0133 13.1082 15.8929 15.4704 18.2997C17.7994 20.5078 20.7106 22.1638 21.2891 22.1639C21.9541 22.164 22.1489 21.6544 22.3656 21.0875C22.5194 20.6853 22.6842 20.2542 23.0359 19.9558C23.6468 19.4376 24.7864 18.8517 25.3686 19.4038C26.1412 20.1362 26.4591 20.4369 26.6734 20.6397C26.9442 20.8958 27.0497 20.9955 27.6976 21.6118C28.4155 22.2946 28.2798 23.2679 27.1116 24.3719C26.0313 25.3929 25.0822 25.8224 23.6219 26.0279C22.3055 26.2132 20.9885 25.7053 19.4671 25.1186C19.3007 25.0544 19.1318 24.9892 18.9601 24.9239C15.4989 23.6075 13.7743 22.1233 11.3909 19.4038C11.3018 19.3022 11.2141 19.2023 11.1277 19.1039C9.13502 16.8348 7.87685 15.4021 7.31518 12.2276C7.29151 12.0939 7.26223 11.953 7.2316 11.8057C6.98378 10.6137 6.64747 8.99611 8.47967 7.25952C9.06214 6.70744 11.3909 5.06221 12.2747 5.9001Z"
                      fill="#33D657" />
                  </svg>
                </a>
              </li>

              <li class="big-form__geo-card big-form__geo-link_viber">
                <a class="big-form__geo-link viber-info" target="_blank" href="viber://chat?number=%2B<? echo preg_replace('/[^0-9\.]+/', '', $cont['messenger-tel']); ?>">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M3.67565 3.31708C7.35126 2.53073e-05 11.9458 4.19839e-06 12.8647 1.44809e-10L22.0542 0C22.9728 0 26.6482 1.32468e-05 30.3241 3.31707C34 6.63412 34 10.7805 34 11.6098V17.4146C34 18.2439 34 21.9756 30.3241 25.2927C26.6482 28.6098 22.9728 29.0244 22.0542 29.0244L14.0908 29.0244C14.0908 29.0244 8.77275 34 8.27022 34C7.76768 34 7.63655 33.7733 7.51827 33.5235C7.35858 33.1861 7.51827 27.8411 7.51827 27.8411C6.30648 27.2892 4.99119 26.4797 3.67593 25.2927C0 21.9751 -1.49643e-05 18.2439 6.0385e-08 17.4146V11.6098C6.0385e-08 10.7805 -4.81989e-06 6.63418 3.67565 3.31708ZM7.45049 14.0975C6.63206 12.6206 6.23194 10.7805 6.53158 9.9512C7.12287 8.31471 9.28834 6.63414 10.2073 6.63414C10.7455 6.63414 11.205 6.70526 11.5856 7.04876C12.2875 7.68222 12.8699 8.19471 13.3673 8.63243C14.1722 9.34072 14.7546 9.8533 15.2612 10.3658C16.081 11.1951 15.2612 12.0829 14.8019 12.439C14.6068 12.5903 14.4004 12.6795 14.1971 12.7674C13.9217 12.8865 13.6519 13.0031 13.4234 13.2683C13.1771 13.5541 13.0793 13.7507 12.964 14.0975C12.6659 14.9942 13.667 16.3905 14.8018 17.4146C15.9366 18.4387 17.5586 19.3219 18.4774 19.0731C18.8617 18.9691 19.0797 18.8808 19.3964 18.6585C19.705 18.4419 19.8446 18.1842 19.9863 17.9227C20.0791 17.7515 20.1727 17.5786 20.3153 17.4146C20.6755 17 21.7485 16.2202 22.6126 17L26.2882 20.3171C26.5124 20.5194 26.5632 21.0644 26.2882 21.561C25.8288 22.3902 24.9099 23.2195 23.9909 24.0488C22.7221 25.1937 20.3154 24.4634 19.3964 24.0488C16.2802 22.6428 14.5414 21.6809 12.0451 19.4878C9.93639 17.6353 7.91003 14.9268 7.45049 14.0975ZM18.1799 5.47924C17.3298 5.47924 17.3298 4.20092 18.0352 4.20092L18.0848 4.20085C18.9022 4.19923 22.5823 4.19191 25.7296 7.03213C28.9459 9.93464 29.1577 12.9547 29.1577 13.9385C29.1577 14.9223 27.7412 14.8746 27.7412 14.0692C27.7412 13.2638 27.5266 10.1922 24.8106 7.8614C22.0947 5.53061 19.0301 5.47924 18.1799 5.47924ZM18.1446 6.95592C17.2269 6.99937 17.2991 8.24158 18.2168 8.19814C19.1346 8.15469 20.9699 8.0678 22.9014 9.63714C24.833 11.2065 24.9293 12.8628 24.9774 13.6909C25.0255 14.519 26.402 14.4539 26.3539 13.6257C26.3057 12.7976 26.0064 10.5938 23.9693 8.74116C21.9322 6.88852 19.0624 6.91247 18.1446 6.95592ZM19.1638 10.7589C18.2453 10.7806 18.2093 9.53704 19.1278 9.51543C20.0465 9.49381 20.8621 9.88932 21.9196 10.6939C22.9772 11.4985 23.3455 12.3194 23.3696 13.1484C23.3936 13.9774 22.0157 14.0099 21.9917 13.1809C21.9676 12.3519 21.4965 11.9482 21.025 11.5446C20.5538 11.1411 20.082 10.7372 19.1638 10.7589Z"
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

    <section class="services-item-page__section services-item-page__services services">
      <div class="services__container container">
        <div class="services__slider swiper">
          <h2 class="services__title title title_big">
            Похожие услуги
          </h2>
          <ul class="services__card-wrap swiper-wrapper">
            <?
            $resultServAll = mysqli_query($db, "SELECT * FROM services ORDER BY RAND() LIMIT 8");
            $servAll = mysqli_fetch_array($resultServAll);

            if (mysqli_num_rows($resultServAll) > 0) {
              do {
                echo '
                    <li class="services__card swiper-slide">
                      <img class="services__img" src="/img/' . $servAll['photo'] . '" alt="' . $servAll['alt'] . '" />

                      <a class="services__card-link" href="/pages/usluga/?id=' . $servAll['id'] . '">
                        <p class="services__card-title">' . $servAll['name'] . '</p>
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M16.9884 3.15206C17.0724 2.60619 16.6979 2.09561 16.1521 2.01163L7.25671 0.643113C6.71085 0.559134 6.20026 0.933565 6.11628 1.47943C6.03231 2.02529 6.40674 2.53588 6.9526 2.61986L14.8596 3.83631L13.6431 11.7433C13.5591 12.2891 13.9336 12.7997 14.4794 12.8837C15.0253 12.9677 15.5359 12.5933 15.6199 12.0474L16.9884 3.15206ZM1.59136 14.8064L16.5914 3.8064L15.4086 2.19359L0.408636 13.1936L1.59136 14.8064Z"
                            fill="white" />
                        </svg>
                      </a>
                    </li>
                    ';
              } while ($servAll = mysqli_fetch_array($resultServAll));
            }
            ?>
          </ul>

          <div class="swiper-button-prev">
            <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.75 4H1.25M1.25 4L5.25 0.5M1.25 4L5.25 7.5" stroke="#777E85" />
            </svg>

          </div>
          <div class="swiper-button-next">
            <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.5 4.5H10M10 4.5L6 1M10 4.5L6 8" stroke="#777E85" />
            </svg>

          </div>

          <div class="news__slider-pagination swiper-pagination">
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