<?
$title = 'Услуги';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
?>

<body class="services-page" data-page="uslugi">

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>

  <main class="main services-page__main">
    <section class="services-page__section">
      <div class="services-page__container container">

        <h2 class="services-page__title title title_big">
          Чем мы можем вам помочь
        </h2>


        <article class="services-page__filter filter">
          <div class="filter__container">


            <ul class="filter__list">
              <li class="filter__item filter__item_input">
                <div class="filter__input-wrap">
                  <input class="filter__input" type="text" placeholder="Найти услугу" name="search" id="search"
                    value="">
                  <svg class="filter__icon filter__icon_search " width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M15.75 16.25L12.3855 12.8795M14.25 8.375C14.25 10.0658 13.5784 11.6873 12.3828 12.8828C11.1873 14.0784 9.56576 14.75 7.875 14.75C6.18424 14.75 4.56274 14.0784 3.36719 12.8828C2.17165 11.6873 1.5 10.0658 1.5 8.375C1.5 6.68424 2.17165 5.06274 3.36719 3.86719C4.56274 2.67165 6.18424 2 7.875 2C9.56576 2 11.1873 2.67165 12.3828 3.86719C13.5784 5.06274 14.25 6.68424 14.25 8.375Z"
                      stroke="#777E85" stroke-linecap="round" />
                  </svg>
                  <svg class="filter__icon filter__icon_close" width="25" height="25" viewBox="0 0 25 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7.0487 7.01482C7.28215 6.79891 7.64489 6.81482 7.85888 7.05036L12.2549 11.8889L16.6509 7.05036C16.8649 6.81482 17.2277 6.79891 17.4611 7.01482C17.6946 7.23073 17.7103 7.59671 17.4963 7.83225L13.0328 12.7451L17.4963 17.6579C17.7103 17.8935 17.6946 18.2595 17.4611 18.4754C17.2276 18.6913 16.8649 18.6754 16.6509 18.4398L12.2549 13.6013L7.8589 18.4398C7.6449 18.6754 7.28216 18.6913 7.04871 18.4754C6.81525 18.2595 6.79948 17.8935 7.01348 17.6579L11.477 12.7451L7.01347 7.83225C6.79947 7.59671 6.81524 7.23073 7.0487 7.01482Z"
                      fill="#5D5D5D" fill-opacity="0.7" />
                  </svg>
                  <ul class="filter__dropdown">
                  </ul>
                </div>

              </li>

              <li class="filter__item">
                <button class="filter__link" data-service="Срочный ремонт">
                  <p class="filter__link-title">
                    Срочный ремонт
                  </p>
                  <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 4.5H10M10 4.5L6 1M10 4.5L6 8" stroke="#777E85" />
                  </svg>
                </button>
              </li>

              <li class="filter__item">
                <button class="filter__link" data-service="Ремонт и замена колес">
                  <p class="filter__link-title">
                    Ремонт и замена колес
                  </p>
                  <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 4.5H10M10 4.5L6 1M10 4.5L6 8" stroke="#777E85" />
                  </svg>
                </button>
              </li>

              <li class="filter__item">
                <button class="filter__link" data-service="Налаживание электросистемы">
                  <p class="filter__link-title">
                    Налаживание электросистемы
                  </p>
                  <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 4.5H10M10 4.5L6 1M10 4.5L6 8" stroke="#777E85" />
                  </svg>
                </button>
              </li>

              <li class="filter__item">
                <button class="filter__link" data-service="Услуги с выездом">
                  <p class="filter__link-title">
                    Услуги с выездом
                  </p>
                  <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 4.5H10M10 4.5L6 1M10 4.5L6 8" stroke="#777E85" />
                  </svg>
                </button>
              </li>

              <li class="filter__item">
                <button class="filter__link" data-service="Доставка">
                  <p class="filter__link-title">
                    Доставка
                  </p>
                  <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 4.5H10M10 4.5L6 1M10 4.5L6 8" stroke="#777E85" />
                  </svg>
                </button>
              </li>

              <li class="filter__item">
                <button class="filter__link" data-service="Трезвый водитель">
                  <p class="filter__link-title">
                    Трезвый водитель
                  </p>
                  <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 4.5H10M10 4.5L6 1M10 4.5L6 8" stroke="#777E85" />
                  </svg>
                </button>
              </li>

              <li class="filter__item">
                <button class="filter__link" data-service="Диагностика">
                  <p class="filter__link-title">
                    Диагностика
                  </p>
                  <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 4.5H10M10 4.5L6 1M10 4.5L6 8" stroke="#777E85" />
                  </svg>
                </button>
              </li>
            </ul>
          </div>
        </article>

        <article class="services-page__services services">

          <div class="services__container">

            <ul class="services__card-wrap">
            </ul>

            <button class="services__btn">
              Ещё услуги
            </button>

            <span class="services__not-found">
              По вашему запросу ничего не найдено
            </span>

          </div>
        </article>
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