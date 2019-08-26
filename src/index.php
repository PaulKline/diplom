<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Дипломный проект</title>
  <link rel="stylesheet" href="css/reset.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <? include 'navbars.php'; ?>
  <main>
    <header class="header head-slider">
      <div class="slider header__slider">
        <div class="slider__images">
          <img class="slider__img" src="img/header/item-1.jpg" alt="">
            <a class="button button__header" href="#" >
              <h6 >Диван "Бурино"</h6>
              <span>Мягкая мебель</span>
            </a> 
        </div>
        <div class="slider__img">
          <img class="slider__img" src="img/header/item-2.jpg" alt="">
          <a class="button button__header" href="#">
          <h6>Диван "Бурино"</h6>
          <span>Мягкая мебель</span>
          </a>
        </div>
        <div class="slider__img">
          <img class="slider__img" src="img/header/item-3.jpg" alt="">
          <a class="button button__header" href="#">
            <h6>Диван "Бурино"</h6>
            <span>Мягкая мебель</span>
          </a>
        </div>
        <div class="slider__img">
          <img class="slider__img" src="img/header/item-4.jpg" alt="">
          <a class="button button__header" href="#">
          <h6>Диван "Бурино"</h6>
          <span>Мягкая мебель</span>
          </a>
        </div>
        <div class="slider__img">
          <img class="slider__img" src="img/header/item-5.jpg" alt="">
          <a class="button button__header" href="#">
          <h6>Диван "Джиро"</h6>
          <span>Мягкая мебель</span>
          </a>
        </div>
      </div>
    </header>

    <section class="section portfolio">
      <div class="container">
        <h2 class="portfolio-title title">новое поступление</h2>
        <!-- /.portfolio-title title -->
        <span class="portfolio-subtitle subtitle">Новинки каталога </span>
        <!-- /.portfolio-subtitle subtitle -->
        <div class="portfolio-block">
          <div class="portfolio-item">
            <img class="portfolio__image" src="img/portfolio/kitchen.jpg" alt="кухня велас">
            <button class="button portfolio__button button-velas"><a href="item.php">Кухня "Велас"</a> </button>
          </div>
          <div class="portfolio-item">
            <img class="portfolio__image" src="img/portfolio/livingroom.jpg" alt="кухня велас">
            <button class="button portfolio__button button-irrida">Гостинная "Иррида"</button>
          </div>
          <div class="portfolio-item">
            <img class="portfolio__image" src="img/portfolio/livingroon_2.jpg" alt="кухня велас">
            <button class="button portfolio__button button-purrino">Диван "Пуррино"</button>
          </div>
          <div class="portfolio-item">
            <img class="portfolio__image" src="img/portfolio/livingroon_3.jpg" alt="кухня велас">
            <button class="button portfolio__button button-iddida">Гостинная "Иддида"</button>
          </div>
      
          
        </div>
        <!-- /.portfolio-block -->
          <button class="button portfolio-full__button"><a href="catalog.php">Полный каталог</a> </button>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section portfolio -->
    <section class="section sails" style="display: flex;">
      <div class="container">
        <div class="sails-block">
          <h4 class="sails-subtitle">акция месяца</h4>
          <!-- /.h4 sails-subtitle -->
          <h2 class="sails-title">при заказе любого дивана скидка 10%</h2>
          <!-- /.sails-title -->
          <p class="sails-text">Посмотрите, что покупают люди чаще всего, быть может вы найдете свою мечту. Высококачественная
            продукция и экологически чистый материал.</p>
          <!-- /.sails-text -->
          <div class="sails-buttons">
            <button class="button sails__button">Все акции</button>
            <button class="button more__button sails__more">Подробней <img src="img/more-info.png" alt="узнать подробнее"></button>
          </div>
          <div class="top-dots"></div>
          <!-- /.sails-buttons -->
        </div>
        
      </div>
      <div class="sails-slider slider">
        <div class="sails-item" slider-item>
          <img src="img/sails/couch.jpg" alt="">
        </div>
        <div class="sails-item slider-item">
          <img src="img/sails/couch.jpg" alt="">
        </div>
        <div class="sails-item slider-item">
          <img src="img/sails/couch.jpg" alt="">
        </div>
        <div class="sails-item slider-item">
          <img src="img/sails/couch.jpg" alt="">
        </div>
        <div class="sails-item slider-item">
          <img src="img/sails/couch.jpg" alt="">
        </div>
      </div>

      <!-- /.container -->
      
    </section>
    <!-- /.section seils -->
    <section class="section offers">
      <div class="container">
        <h2 class="title offers-title">преимущества работы с нами</h2>
        <span class="subtitle offers-subtitle">Почему стоит заказывать у нас?</span>
        <div class="offers-block">
          <div class="block__image">
          <img src="img/offers/blank.png" alt=""> 
          </div>
          <!-- /.block__image -->
          <div class="block__text">
            <h4 class="block__title">Профессиональный расчет</h4>
            <p class="offer__text">Мы осуществляем професссиональный и быстрый расчет кухни и мебели по вашим размерам </p>
          </div>
          <!-- /.block__text -->
          <div class="block__image">
            <img src="img/offers/like.png" alt="">  
          </div>
          <!-- /.block__image -->
          <div class="block__text">
            <h4 class="block__title">отличные результаты</h4>
            <p class="offer__text">Более 1 000 довольный покупателей уже пользуются мебелью от “МебельLike”</p>
          </div>  
          <!-- /.block__text -->
          <div class="block__text">
            <h4 class="block__title">ценовая политика</h4>
            <p class="offer__text">В нашей компании создана оптимальная ценовая политика для наших покупателей</p>
          </div>
          <!-- /.block__text -->
          <div class="block__image">
            <img src="img/offers/coins.png" alt="">
          </div>
          <!-- /.block__image -->
          <div class="block__text">
            <h4 class="block__title">Профессиональные сотрудники</h4>
            <p class="offer__text">Работают квалифицированные сотрудники с большим опытом работы</p>
          </div>
          <!-- /.block__text -->
          <div class="block__image">
            <img src="img/offers/face.png" alt="">
          </div>
          <!-- /.block__image -->
          
        </div>
        <!-- /.offers-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section offers -->
    <section class="section feedback">
      <div class="container">
        <div class="feedback-block">
          <h2 class="title feedback__title">Покупатели говорят</h2>
          <span class="subtitle feedback__subtitle">Наши клиенты о нас</span>
        <div class="wrapper">
          <div class="tabs">
            <span class="tab tab1 active"><img src="img/feedback/1.png" alt="человек"><div class="tabs-block1"  ><h6 class="tabs-title">Сергей Семенов<br></h6>
            <span class="tabs-subtitle">г. Москва </span></div> </span>
            <span class="tab tab2"><img src="img/feedback/2.png" alt="человек"><div class="tabs-block2"  style="display: none;">
              <h6 class="tabs-title">Сергей Семенов</h6>
              <span class="tabs-subtitle">г. Москва</span>
            </div> </span></span>
            <span class="tab tab3"><img src="img/feedback/3.png" alt="человек"> <div class="tabs-block3 " style="display: none;">
              <h6 class="tabs-title">Сергей Семенов</h6>
              <span class="tabs-subtitle">г. Москва</span>
            </div> </span> </span>
            <span class="tab tab4"><img src="img/feedback/add.png" alt="добавить"><div class="tabs-block4 " style="display: none;">
              <h6 class="tabs-title">Сергей Семенов</h6>
              <span class="tabs-subtitle">г. Москва</span>
            </div> </span></span>
          </div>
          <div class="tab_content">
            <div class="tab_item" style="display: block;">
              <img class="feedback__image"src="img/feedback/quote.png" alt="quote">
              <p>Не следует, однако забывать, что начало повседневной работы по формированию позиции требуют определения и уточнения
              модели развития. Таким образом укрепление и развитие структуры играет важную роль в формировании существенных финансовых
              и административных условий. Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение
              нашей деятельности играет важную роль в формировании соответствующий условий активизации.</p>
              <button class="button feedback-button">Все отзывы</button>
            </div>
            <div class="tab_item" style="display: none;">
              <img class="feedback__image"src="img/feedback/quote.png" alt="quote">
              <p>Не следует, однако забывать, что начало повседневной работы по формированию позиции требуют определения и уточнения
                модели развития. Таким образом укрепление и развитие структуры играет важную роль в формировании существенных
                финансовых
                и административных условий. Повседневная практика показывает, что постоянное информационно-пропагандистское
                обеспечение
                нашей деятельности играет важную роль в формировании соответствующий условий активизации.</p>
                <button class="button feedback-button">Все отзывы</button>
            </div>
            <div class="tab_item" style="display: none;">
              <img class="feedback__image"src="img/feedback/quote.png" alt="quote">
              <p>Нужный текст</p>
              <button class="button feedback-button">Все отзывы</button>
            </div>
            <div class="tab_item" style="display: none;">
              <img class="feedback__image"src="img/feedback/quote.png" alt="quote">
              <p>Не следует, однако забывать, что начало повседневной работы по формированию позиции требуют определения и уточнения
              модели развития. Таким образом укрепление и развитие структуры играет важную роль в формировании существенных финансовых
              и административных условий. Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение
              нашей деятельности играет важную роль в формировании соответствующий условий активизации.</p>
              <button class="button feedback-button">Все отзывы</button>
            </div>
          </div>
        </div>
        <!-- /.feedback-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section feedback -->
    <section class="section about">
      <div class="container">
        <div class="about-block">
          <h2 class="title about-title">о КОМПАНИИ</h2>
          <!-- /.title about-title -->
          <span class="subtitle about-subtitle">Немного интересного о нас</span>
          <!-- /.subtitle about-subtitle -->
          <p class="about-text">Не следует, однако забывать, что начало повседневной работы по формированию позиции требуют определения и уточнения модели развития. Таким образом укрепление и развитие структуры играет важную роль в формировании существенных финансовых и административных условий. Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании соответствующий условий активизации. </p>
          <!-- /.about-text -->
        </div>
        <!-- /.about-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section about -->
    <section class="section news">
      <div class="container">
        <h2 class="title news__title">новости</h2>
        <span class="subtitle news__subtitle">Самые свежие новости нашей компании</span>
        <div class="news-block">
          <div class="news-card">
            <img src="img/news/kitchen.jpg" alt="кухня">
            <h4 class="news-card__title">новый год - скидки всем новым клиентам</h4>
            <p class="news__text">Мы осуществляем професссиональный и быстрый расчет кухни и мебели</p>
            <button class="button more__button news__button">Подробней <img src="img/more-info.png" alt="узнать подробнее"></button>
            <span class="news__date"><strong>20</strong>  <br> Декабря</span>
          </div>
          <!-- /.news-card -->
          <div class="news-card">
            <img src="img/news/woman.jpg" alt="девушка с подарками">
            <h4 class="news-card__title">новый год - скидки всем новым клиентам</h4>
            <p class="news__text">Мы осуществляем професссиональный и быстрый расчет кухни и мебели</p>
            <button class="button more__button news__button">Подробней <img src="img/more-info.png" alt="узнать подробнее"></button>
            <span class="news__date"><strong>20</strong>  <br> Декабря</span>
          </div>
          <!-- /.news-card -->
          <div class="news-card">
            <img src="img/news/couch.jpg" alt="диван">
            <h4 class="news-card__title">новый год - скидки всем новым клиентам</h4>
            <p class="news__text">Мы осуществляем професссиональный и быстрый расчет кухни и мебели</p>
            <button class="button more__button news__button ">Подробней <img src="img/more-info.png" alt="узнать подробнее"></button>
            <span class="news__date"><strong>20</strong>  <br> Декабря</span>
          </div>
          <!-- /.news-card -->
          <!-- /.button news__button -->
        </div>
        <!-- /.news-block -->
        <button class="button news-button ">Все новости</button>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section news -->
    <section class="section brif">
      <div class="brif-bg__line"></div>
      <div class="container">
        <div class="brif-block">
          <div class="brif__banner">
            <img src="img/brif/worker.jpg" alt="рабочий фирмы">
          </div>
          <!-- /.brif__banner -->
          <div class="brif-box">
            <h2 class="brif__title">Пригласить <br> замерщика</h2>
            <span class="brif__text">Отправьте заявку на замер и мы вместе расчитаем точную стоимость вашей новой мебели или
              кухни</span>
            <form action="#" class="brif__form" id="brof-form">
              <input type="username" name='username'placeholder="Как Вас зовут?" id="brif-username">
              <input class="phones" type="tel" name='phone'placeholder="Ваш номер телефона" id="brif-phone">
              <button class="button brif__button">Пригласить</button>
            </form>
            <div class="success-brif"></div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section brif -->
    <div class="modal-one" id="modal-one">
      <div class="modal-one__active" id="callorder-active">
        <div class="modal-callorder">
          <div class="callorder-block">
            <button class="modal-callorder__close" id="close__one">&times;</button>
            <h2 class="modal-callorder__title"> Заказать звонок </h2>
            <span class="modal-callorder__subtitle">Заполните форму ниже и мы перезвоним Вам </span>
            <form action="#" class="modal-callorder-form">
              <input type="name" name="username" placeholder="Ваше имя" id="callorder-username">
              <input class="phones"  type="tel" name="phone" placeholder="Ваш номер" id="callorder-phone">
              <button class="button modal-callorder__button">Позвонить</button>
            </form>
            <span class="success-callorder"></span>
            <span class="modal-callorder__text">Или позвоните нам сами:<br>
              <a href="tel:79504302525">+7(950)430-25-25</a> <br>
              <a href="tel:79993504550">+7(999)350-45-50</a>
        
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- /.moadal -->
    <?php include 'modals.php' ?>
    <!-- /.moadal -->
  </main>
  <!-- mein -->
  <?php include 'footer.php'; ?>
  <!-- /.footer -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src ="js/owl.carousel.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/slider-card.js"></script>
  
</body>
</html>