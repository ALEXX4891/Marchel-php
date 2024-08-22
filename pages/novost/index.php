<?
$title = 'Новость';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
$serviceId = (int)$_GET['id'];

?>

<body class="news-item-page" data-page="novosti">

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>

  <main class="main news-item-page__main">

    <?
    $result = mysqli_query($db, "SELECT * FROM news WHERE id = '{$serviceId}'");
    $row = mysqli_fetch_array($result);
    ?>

    <section class="news-item-page__section news-item-page__content content">
      <div class="content__container container">

        <div class="content__img-wrap">
          <img src="/img/<?= $row['photo'] ?>" alt="новость">
        </div>

        <p class="content__date">
          <?= $row['date'] ?>
        </p>

        <h1 class="content__title title title_big">
          <?= $row['name'] ?>
        </h1>

        <p class="content__text text">
          <?= $row['text'] ?>
        </p>

      </div>
    </section>


    <section class="news-item-page__section news-item-page__news news">
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
          <?
            $result = mysqli_query($db, "SELECT * FROM news ORDER BY DATE DESC LIMIT 3");
            $row = mysqli_fetch_array($result);

            if (mysqli_num_rows($result) > 0) {
              do {
                echo '
                <li class="news__card swiper-slide">
                  <div class="news__card-img-wrap">
                    <img class="news__card-img" src="/img/' . $row['photo'] . '" alt="' . $row['title'] . '" />
                  </div>
                  <p class="news__card-date">
                    ' . $row['date'] . '
                  </p>
                  <h3 class="news__card-title">
                    ' . $row['title'] . '
                  </h3>
                  <a class="news__card-link" href="/pages/novost/?id=' . $row['id'] . '">
                    <p class="news__link-title">
                      Читать новость
                    </p>
                    <svg width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 13.5H19.5M19.5 13.5L15.5 10M19.5 13.5L15.5 17" stroke="#777E85" />
                    </svg>
                  </a>
                </li>
                ';
              } while ($row = mysqli_fetch_array($result));
            }
            ?>
          </ul>

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