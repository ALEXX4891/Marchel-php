<?
$title = 'Ошибка 404';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
?>

<body class="not-found" data-page="404">

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>

  <main class="main not-found__main">
    <section class="section not-found__section">
      <div class="container not-found__container">
        <div class="not-found__img">
          <svg width="301" height="120" viewBox="0 0 301 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M49.7752 118.333V91.5H0V71.5L56.767 0H72.0825V71.3333H86.732V91.5H72.0825V118.333H49.7752ZM22.4738 71.3333H52.2723V33.6667L22.4738 71.3333Z"
              fill="#31373D" />
            <path
              d="M151.479 120C143.156 119.889 135.775 118 129.339 114.333C122.902 110.667 117.519 105.833 113.191 99.8333C108.862 93.8333 105.588 87.3889 103.369 80.5C101.26 73.5 100.206 66.6667 100.206 60C100.206 52.8889 101.371 45.7778 103.702 38.6667C106.032 31.5556 109.417 25.1111 113.857 19.3333C118.407 13.4444 123.845 8.77778 130.171 5.33333C136.497 1.77778 143.6 0 151.479 0C160.025 0 167.461 1.88889 173.787 5.66666C180.224 9.44444 185.606 14.3333 189.934 20.3333C194.263 26.3333 197.481 32.8333 199.59 39.8333C201.809 46.8333 202.919 53.5555 202.919 60C202.919 67.2222 201.754 74.3889 199.423 81.5C197.093 88.5 193.652 94.8889 189.102 100.667C184.663 106.444 179.28 111.111 172.954 114.667C166.628 118.111 159.47 119.889 151.479 120ZM123.346 60C123.456 64.6667 124.067 69.3333 125.177 74C126.397 78.5556 128.118 82.7778 130.337 86.6667C132.668 90.5556 135.609 93.7222 139.16 96.1667C142.712 98.5 146.818 99.6667 151.479 99.6667C156.473 99.6667 160.746 98.3889 164.298 95.8333C167.849 93.2778 170.735 90 172.954 86C175.285 82 177.005 77.7222 178.115 73.1667C179.225 68.6111 179.78 64.2222 179.78 60C179.78 55.3333 179.169 50.7222 177.948 46.1667C176.839 41.5 175.063 37.2222 172.621 33.3333C170.291 29.4444 167.35 26.3333 163.798 24C160.358 21.5556 156.252 20.3333 151.479 20.3333C146.596 20.3333 142.379 21.6111 138.827 24.1667C135.276 26.7222 132.335 30 130.004 34C127.785 38 126.12 42.2778 125.01 46.8333C123.9 51.3889 123.346 55.7778 123.346 60Z"
              fill="#31373D" />
            <path
              d="M264.043 118.333V91.5H214.268V71.5L271.035 0H286.35V71.3333H301V91.5H286.35V118.333H264.043ZM236.742 71.3333H266.54V33.6667L236.742 71.3333Z"
              fill="#31373D" />
          </svg>
        </div>
        <h1 class="not-found__title">
          Страница не найдена
        </h1>
        <p class="not-found__text">
          Мы не смогли найти страницу, которую вы ищете.
        </p>
        <a class="not-found__link btn" href="/">
          На главную
        </a>
      </div>
    </section>

  </main>

  <?
  include '' . $_SERVER["DOCUMENT_ROOT"] . '/includes/footer.php';
  ?>
</body>

</html>