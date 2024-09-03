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
        <?
            $result = mysqli_query($db, "SELECT * FROM news ORDER BY DATE DESC");
            $news = mysqli_fetch_array($result);

            if (mysqli_num_rows($result) > 0) {
              do {
                echo '
                <li class="news__card">
                  <div class="news__card-img-wrap">
                    <img class="news__card-img" src="/img/' . $news['photo'] . '" alt="' . $news['title'] . '" />
                  </div>
                  <p class="news__card-date">
                    ' . date("d.m.Y", strtotime($news['date'])) . '
                  </p>
                  <h3 class="news__card-title">
                    ' . $news['title'] . '
                  </h3>
                  <a class="news__card-link" href="/pages/novost/?id=' . $news['id'] . '">
                    <p class="news__link-title">
                      Читать новость
                    </p>
                    <svg width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 13.5H19.5M19.5 13.5L15.5 10M19.5 13.5L15.5 17" stroke="#777E85" />
                    </svg>
                  </a>
                </li>
                ';
              } while ($news = mysqli_fetch_array($result));
            }
            ?>
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