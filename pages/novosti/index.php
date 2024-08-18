<?
$title = 'Новости';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
?>

<body class="news-page" data-page="novosti">

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>

  <main class="main news-page__main">

    <section class="news-page__section news-page__news news">
      <div class="news__container container">
        <h1 class="news__title title title_big">
          новости
        </h1>

        <ul class="news__card-wrap">
          <li class="news__card">
            <div class="news__card-img-wrap">
              <picture>
                <source srcset="img/news-img.webp" type="image/webp"><img class="news__card-img" src="img/news-img.jpg" alt="новость" />
              </picture>
            </div>
            <p class="news__card-date">
              22.05.2024
            </p>
            <h3 class="news__card-title">
              Заголовок новости в одну или две строки
            </h3>
            <p class="news__card-text text">
              С другой стороны, укрепление и развитие внутренней структуры однозначно определяет каждого участника как
              способного принимать собственные решения касаемо кластеризации усилий.
            </p>

            <a class="news__card-link" href="news-item.html">
              <p class="news__link-title">
                Читать новость
              </p>
              <svg width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 13.5H19.5M19.5 13.5L15.5 10M19.5 13.5L15.5 17" stroke="#777E85" />
              </svg>
            </a>
          </li>
        </ul>
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