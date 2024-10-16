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

              <?
              // // $limit = (int)$_POST['limit'];    
              // // if ($limit == 0) {
              // //   $limit = 8;
              // // }          
              // // $result = mysqli_query($db, "SELECT * FROM services ORDER BY RAND() LIMIT " . $limit);
              // $result = mysqli_query($db, "SELECT * FROM services");
              // $arr = [];
              // // for ($i = 0; $i < mysqli_num_rows($result); $i++) {
              // //   $arr[] = mysqli_fetch_assoc($result);
              // // }
              // //собираем все данные в один массив
              // foreach ($result as $row) {
              //   $arr[] = $row['type'];
              // }

              // $arr = array_unique($arr);
              // echo '<pre>';
              // print_r($arr);
              // echo '</pre>';

              // if (mysqli_num_rows($result) > 0) {
              //   do {
              //     echo '
              //       <li class="services__card" data-service="' . $row['type'] . '" data-name="' . $row['name'] . '">
              //         <img class="services__img" src="/img/' . $row['photo'] . '" alt="' . $row['name'] . '" />

              //         <a class="services__card-link" href="/pages/usluga/?id=' . $row['id'] . '">
              //           <p class="services__card-title">' . $row['name'] . '</p>
              //           <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              //             <path
              //               d="M16.9884 3.15206C17.0724 2.60619 16.6979 2.09561 16.1521 2.01163L7.25671 0.643113C6.71085 0.559134 6.20026 0.933565 6.11628 1.47943C6.03231 2.02529 6.40674 2.53588 6.9526 2.61986L14.8596 3.83631L13.6431 11.7433C13.5591 12.2891 13.9336 12.7997 14.4794 12.8837C15.0253 12.9677 15.5359 12.5933 15.6199 12.0474L16.9884 3.15206ZM1.59136 14.8064L16.5914 3.8064L15.4086 2.19359L0.408636 13.1936L1.59136 14.8064Z"
              //               fill="white" />
              //           </svg>
              //         </a>
              //       </li>
              //       ';
              //   } while ($row = mysqli_fetch_array($result));
              // }
              ?>

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

              <li class="filter__item">
                <button class="filter__link" data-service="Прочие услуги">
                  <p class="filter__link-title">
                    Прочие услуги
                  </p>
                  <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 4.5H10M10 4.5L6 1M10 4.5L6 8" stroke="#777E85" />
                  </svg>
                </button>
              </li>
            </ul>
          </div>
          <button class="filter-back" style="display: none">
            <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.5 4.5H10M10 4.5L6 1M10 4.5L6 8" stroke="#777E85"></path>
            </svg>
            <p>Фильтр</p>
          </button>
        </article>


        <?
        $result = mysqli_query($db, "SELECT * FROM services ORDER BY RAND()");
        $arr = [];
        // for ($i = 0; $i < mysqli_num_rows($result); $i++) {
        //   $arr[] = mysqli_fetch_assoc($result);
        // }
        //собираем все данные в один массив
        foreach ($result as $row) {
          $arr[] = $row;
        }

        $json = json_encode($arr);
        // echo '<pre>';
        // print_r($arr);
        // echo '</pre>';

        // $row = mysqli_fetch_array($result);

        // if (mysqli_num_rows($result) > 0) {
        //   do {
        //     echo '
        //             <li class="services__card" data-service="' . $row['type'] . '">
        //               <img class="services__img" src="/img/' . $row['photo'] . '" alt="' . $row['name'] . '" />

        //               <a class="services__card-link" href="/pages/usluga/?id=' . $row['id'] . '">
        //                 <p class="services__card-title">' . $row['name'] . '</p>
        //                 <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        //                   <path
        //                     d="M16.9884 3.15206C17.0724 2.60619 16.6979 2.09561 16.1521 2.01163L7.25671 0.643113C6.71085 0.559134 6.20026 0.933565 6.11628 1.47943C6.03231 2.02529 6.40674 2.53588 6.9526 2.61986L14.8596 3.83631L13.6431 11.7433C13.5591 12.2891 13.9336 12.7997 14.4794 12.8837C15.0253 12.9677 15.5359 12.5933 15.6199 12.0474L16.9884 3.15206ZM1.59136 14.8064L16.5914 3.8064L15.4086 2.19359L0.408636 13.1936L1.59136 14.8064Z"
        //                     fill="white" />
        //                 </svg>
        //               </a>
        //             </li>
        //             ';
        //   } while ($row = mysqli_fetch_array($result));
        // }
        ?>



        <article class="services-page__services services">

          <div class="services__container">

            <ul class="services__card-wrap">
              <?
              // $limit = (int)$_POST['limit'];    
              // if ($limit == 0) {
              //   $limit = 8;
              // }          
              // $result = mysqli_query($db, "SELECT * FROM services ORDER BY RAND() LIMIT " . $limit);
              $result = mysqli_query($db, "SELECT * FROM services ORDER BY RAND()");

              $row = mysqli_fetch_array($result);

              if (mysqli_num_rows($result) > 0) {
                do {
                  echo '
                    <li class="services__card" data-service="' . trim($row['type']) . '" data-name="' . trim($row['name']) . '">
                      <img class="services__img" src="/img/' . trim($row['photo']) . '" alt="' . trim($row['alt']) . '" />

                      <a class="services__card-link" href="/pages/usluga/?id=' . trim($row['id']) . '">
                        <p class="services__card-title">' . trim($row['name']) . '</p>
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M16.9884 3.15206C17.0724 2.60619 16.6979 2.09561 16.1521 2.01163L7.25671 0.643113C6.71085 0.559134 6.20026 0.933565 6.11628 1.47943C6.03231 2.02529 6.40674 2.53588 6.9526 2.61986L14.8596 3.83631L13.6431 11.7433C13.5591 12.2891 13.9336 12.7997 14.4794 12.8837C15.0253 12.9677 15.5359 12.5933 15.6199 12.0474L16.9884 3.15206ZM1.59136 14.8064L16.5914 3.8064L15.4086 2.19359L0.408636 13.1936L1.59136 14.8064Z"
                            fill="white" />
                        </svg>
                      </a>
                    </li>
                    ';
                } while ($row = mysqli_fetch_array($result));
              }
              ?>
            </ul>

            <button class="services__btn" onclick="showMore()">
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

  <script>
    let limit = 12;

    function showCards() {
      const cardWrap = document.querySelector('.services__card-wrap');
      const cards = cardWrap.children;
      for (let i = 0; i < cards.length; i++) {
        cards[i].style.display = 'none';
      }
      for (let i = 0; i < limit; i++) {
        if (cards[i]) {
          cards[i].style.display = 'block';
          // console.log(cards[i]);
        }
      }
    }
    showCards();

    function hideFilter() {
      const filter = document.querySelector('.filter__container');
      const link = document.querySelector('.filter-back');
      filter.style.display = 'none';
      link.style.display = 'grid';
    }

    function showFilter() {
      const filter = document.querySelector('.filter__container');
      const link = document.querySelector('.filter-back');
      filter.style.display = 'block';
      link.style.display = 'none';
    }

    function setLinkTitle(text) {
      const link = document.querySelector('.filter-back').querySelector('p');
      link.textContent = text;
    }

    // showFilter()

    if (window.innerWidth < 850) {
      hideFilter();
    }

    function showMore() {
      limit += 6;
      const cardWrap = document.querySelector('.services__card-wrap');
      const cards = cardWrap.children;
      let btn = document.querySelector('.services__btn');

      for (let i = 0; i < limit; i++) {
        let card = cardWrap.children[i];
        if (!card) break;
        card.style.display = 'block';
      }

      if (limit >= cards.length) {
        btn.style.display = 'none';
      }
    }


    const data = <?= $json ?>;
    // console.log(data);
    const filter = document.querySelector(".services-page__filter");


    if (filter) {
      const filterDropdown = filter.querySelector(".filter__dropdown");
      const hints = new Set(data.map((item) => item.name));

      hints.forEach((hint) => {
        const option = document.createElement("option");
        const filterHint = document.createElement("li");
        filterHint.classList.add("filter__dropdown-item");
        filterHint.innerHTML = hint;
        filterDropdown.append(filterHint);

      });

      filterInit();

      function filterInit() {
        const filterItems = document.querySelectorAll(".filter__link");
        const cards = document.querySelectorAll(".services__card");
        let id = "";
        let cardsLength = cards.length;
        const notFoundMessage = document.querySelector(".services__not-found");
        const addServToShowBtn = document.querySelector(".services__btn");

        const input = document.querySelector(".filter__input");
        const inputSearchBtn = document.querySelector(".filter__icon_search");
        const inputCloseBtn = document.querySelector(".filter__icon_close");
        const filterDropdownList = document.querySelector(".filter__dropdown");
        const filterDropdownItems = document.querySelectorAll(
          ".filter__dropdown-item"
        );
        const link = document.querySelector('.filter-back');

        link.addEventListener("click", function(e) {
          showFilter();
        });

        filterItems.forEach((item) => {
          item.addEventListener("click", function(e) {
            cardsLength = 0;
            id = item.getAttribute("data-service");
            render(cards, id, "type");
            clearSearchInput();
            hideFilter();
            setLinkTitle(id);
            addServToShowBtn.style.display = "none";
          });
        });

        input.addEventListener("input", function(e) {
          cardsLength = 0;
          addServToShowBtn.style.display = "none";
          render(cards, input.value, "name");
          filterDropdownList.classList.add("filter__dropdown_active");
          filterDropdownList.innerHTML = "";

          filterDropdownItems.forEach((item) => {
            if (item.innerText.toLowerCase().includes(e.target.value.toLowerCase())) {
              filterDropdownList.append(item);
            }
          });

          // hideFilter();
          // setLinkTitle('фильтр');
          if (e.target.value == "") {
            filterDropdownList.classList.remove("filter__dropdown_active");
            clearSearchInput();
          }
        });

        filterDropdownItems.forEach((item) => {
          item.addEventListener("click", function(e) {
            console.log('тест');
            input.value = e.target.innerText.trim();
            searchInput();
            hideFilter();
            setLinkTitle('фильтр');


            render(cards, input.value, "name-strict");
            addServToShowBtn.style.display = "none";

          });
        });

        inputSearchBtn.addEventListener("click", function(e) {
          render(cards, input.value, "name");
          searchInput();
          hideFilter();
          setLinkTitle('фильтр');
        });

        document.addEventListener("keydown", function(e) {
          if (e.key === "Enter") {
            render(cards, input.value, "name");
            searchInput();
            hideFilter();
            setLinkTitle('фильтр');
          }

        });

        inputCloseBtn.addEventListener("click", function(e) {
          clearSearchInput();
          showCards();
        });

        function render(cards, id, mode) {
          const notFoundMessage = document.querySelector(".services__not-found");

          cardsLength = 0;
          if (mode == "name") {
            cards.forEach((item) => {
              if (item.getAttribute("data-name").includes(id)) {
                item.style.display = "block";
                cardsLength++;
              } else {
                item.style.display = "none";
              }
            });
          }

          if (mode == "name-strict") {
            cards.forEach((item) => {
              if (id === item.getAttribute("data-name")) {
                item.style.display = "block";
                cardsLength++;
              } else {
                item.style.display = "none";
              }
            });
          }

          if (mode == "type") {
            cards.forEach((item) => {
              if (id === item.getAttribute("data-service")) {
                item.style.display = "block";
                cardsLength++;
              } else {
                item.style.display = "none";
              }
            });
          }


          if (cardsLength == 0) {
            notFoundMessage.style.display = "block";
          } else {
            notFoundMessage.style.display = "none";
          }
        }

        function clearSearchInput() {
          input.value = "";
          filterDropdownList.classList.remove("filter__dropdown_active");
          inputSearchBtn.style.display = "block";
          inputCloseBtn.style.display = "none";
          addServToShowBtn.style.display = "block";

        }

        function searchInput() {
          filterDropdownList.classList.remove("filter__dropdown_active");
          inputSearchBtn.style.display = "none";
          inputCloseBtn.style.display = "block";
          addServToShowBtn.style.display = "none";

        }

        // function addServToShow() {
        //   addServToShowBtn.addEventListener("click", function(e) {
        //     cards.forEach((item) => {
        //       item.style.display = "block";
        //     });
        //   });
        // }


      }
    }
  </script>

</body>

</html>