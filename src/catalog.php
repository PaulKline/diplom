<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Каталог товаров</title>
  <link rel="stylesheet" href="css/reset.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/catalog.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/slider-card.js"></script>
  <script src="js/main.js"></script>
  <script src="js/catalog.js"></script>
</head>
<body>
  <!-- навбар -->
  <? include 'navbars.php'; ?>

  <main>
  <section class="section cotalog">
    <div class="container">
      <div class="cotalog-block">
        <div class="cotalog-navigation">
          <?php include 'miniNav.php'; ?>
        </div>
        <!-- /.cotalog-navigation -->
        <div class="cotalog-kinds">
          <h1 class="cotalog__title">каталог товаров</h1>
          
          <div class="cotalog-wrapper">
            <span class="cotalog-wrapper__name">Сортировать по:</span>
            <div class="cotalog-wrapper__tags">
              <div class="cotalog-wrapper__tag">Названию</div>
              <div class="cotalog-wrapper__tag">Цене</div>
              <div class="cotalog-wrapper__tag">Новинки</div>
            </div>
            <div class="cotalog-wrapper__content">
              <!-- начало сортировки по названию -->
              <div class="cotalog-wrapper__tagitems">
                
                  <div class="cotalog-card_list">
                    <div class="cotalog-card__item">
                      <a href="item.html"><img class="other-card__image" src="img/card/mini_kitchen.jpg" alt="кухня"></a>
                      <div class="other-card__line"></div>
                      <div class="other-card__name">Кухня "Велес"</div>
                      <div class="other-card__price">
                        <img class="other-card__priceimg" src="img/card/stars.png" alt="">
                        <div class="other-card__pricetag">
                          <span class="other-card__pricetagnew">89 руб.</span>
                          <strong class="other-card__pricetagold">100 руб</strong>
                        </div>
                      </div>
                      <div class="cotalog-amount">
                        <div class="cotalog__counter">
                          <button class="cotalog-minus">-</button>
                          <div class="cotalog-number">10</div>
                          <button class="cotalog-plus">+</button>
                        </div>
                        <a href="#"><img src="img/cotalog/basket.png" alt="корзина"></a>
                      </div>
                      <button class="cotalog__button"><a href="#">Купить в один клик</a> </button>
                    </div>
                  </div>
                  <div class="cotalog-card_list">
                    <div class="cotalog-card__item">
                      <a href="item.html"><img class="other-card__image" src="img/card/mini_kitchen.jpg"
                          alt="кухня"></a>
                      <div class="other-card__line"></div>
                      <div class="other-card__name">Кухня "Велес"</div>
                      <div class="other-card__price">
                        <img class="other-card__priceimg" src="img/card/stars.png" alt="">
                        <div class="other-card__pricetag">
                          <span class="other-card__pricetagnew">89 руб.</span>
                          <strong class="other-card__pricetagold">100 руб</strong>
                        </div>
                      </div>
                      <div class="cotalog-amount">
                        <div class="cotalog__counter">
                          <button class="cotalog-minus">-</button>
                          <div class="cotalog-number">10</div>
                          <button class="cotalog-plus">+</button>
                        </div>
                        <a href="#"><img src="img/cotalog/basket.png" alt="корзина"></a>
                      </div>
                      <button class="cotalog__button"><a href="#">Купить в один клик</a> </button>
                    </div>
                  </div>
                  <div class="cotalog-card_list">
                    <div class="cotalog-card__item">
                      <a href="item.html"><img class="other-card__image" src="img/card/mini_kitchen.jpg"
                          alt="кухня"></a>
                      <div class="other-card__line"></div>
                      <div class="other-card__name">Кухня "Велес"</div>
                      <div class="other-card__price">
                        <img class="other-card__priceimg" src="img/card/stars.png" alt="">
                        <div class="other-card__pricetag">
                          <span class="other-card__pricetagnew">89 руб.</span>
                          <strong class="other-card__pricetagold">100 руб</strong>
                        </div>
                      </div>
                      <div class="cotalog-amount">
                        <div class="cotalog__counter">
                          <button class="cotalog-minus">-</button>
                          <div class="cotalog-number">10</div>
                          <button class="cotalog-plus">+</button>
                        </div>
                        <a href="#"><img src="img/cotalog/basket.png" alt="корзина"></a>
                      </div>
                      <button class="cotalog__button"><a href="#">Купить в один клик</a> </button>
                    </div>
                  </div>
                  <div class="cotalog-card_list">
                    <div class="cotalog-card__item">
                      <a href="item.html"><img class="other-card__image" src="img/card/mini_kitchen.jpg"
                          alt="кухня"></a>
                      <div class="other-card__line"></div>
                      <div class="other-card__name">Кухня "Велес"</div>
                      <div class="other-card__price">
                        <img class="other-card__priceimg" src="img/card/stars.png" alt="">
                        <div class="other-card__pricetag">
                          <span class="other-card__pricetagnew">89 руб.</span>
                          <strong class="other-card__pricetagold">100 руб</strong>
                        </div>
                      </div>
                      <div class="cotalog-amount">
                        <div class="cotalog__counter">
                          <button class="cotalog-minus">-</button>
                          <div class="cotalog-number">10</div>
                          <button class="cotalog-plus">+</button>
                        </div>
                        <a href="#"><img src="img/cotalog/basket.png" alt="корзина"></a>
                      </div>
                      <button class="cotalog__button"><a href="#">Купить в один клик</a> </button>
                    </div>
                  </div>
                  <div class="cotalog-card_list">
                    <div class="cotalog-card__item">
                      <a href="item.html"><img class="other-card__image" src="img/card/mini_kitchen.jpg"
                          alt="кухня"></a>
                      <div class="other-card__line"></div>
                      <div class="other-card__name">Кухня "Велес"</div>
                      <div class="other-card__price">
                        <img class="other-card__priceimg" src="img/card/stars.png" alt="">
                        <div class="other-card__pricetag">
                          <span class="other-card__pricetagnew">89 руб.</span>
                          <strong class="other-card__pricetagold">100 руб</strong>
                        </div>
                      </div>
                      <div class="cotalog-amount">
                        <div class="cotalog__counter">
                          <button class="cotalog-minus">-</button>
                          <div class="cotalog-number">10</div>
                          <button class="cotalog-plus">+</button>
                        </div>
                        <a href="#"><img src="img/cotalog/basket.png" alt="корзина"></a>
                      </div>
                      <button class="cotalog__button"><a href="#">Купить в один клик</a> </button>
                    </div>
                  </div>
                  <div class="cotalog-card_list">
                    <div class="cotalog-card__item">
                      <a href="item.html"><img class="other-card__image" src="img/card/mini_kitchen.jpg"
                          alt="кухня"></a>
                      <div class="other-card__line"></div>
                      <div class="other-card__name">Кухня "Велес"</div>
                      <div class="other-card__price">
                        <img class="other-card__priceimg" src="img/card/stars.png" alt="">
                        <div class="other-card__pricetag">
                          <span class="other-card__pricetagnew">89 руб.</span>
                          <strong class="other-card__pricetagold">100 руб</strong>
                        </div>
                      </div>
                      <div class="cotalog-amount">
                        <div class="cotalog__counter">
                          <button class="cotalog-minus">-</button>
                          <div class="cotalog-number">10</div>
                          <button class="cotalog-plus">+</button>
                        </div>
                        <a href="#"><img src="img/cotalog/basket.png" alt="корзина"></a>
                      </div>
                      <button class="cotalog__button"><a href="#">Купить в один клик</a> </button>
                    </div>
                  </div>
                  <div class="cotalog-card_list">
                    <div class="cotalog-card__item">
                      <a href="item.html"><img class="other-card__image" src="img/card/mini_kitchen.jpg"
                          alt="кухня"></a>
                      <div class="other-card__line"></div>
                      <div class="other-card__name">Кухня "Велес"</div>
                      <div class="other-card__price">
                        <img class="other-card__priceimg" src="img/card/stars.png" alt="">
                        <div class="other-card__pricetag">
                          <span class="other-card__pricetagnew">89 руб.</span>
                          <strong class="other-card__pricetagold">100 руб</strong>
                        </div>
                      </div>
                      <div class="cotalog-amount">
                        <div class="cotalog__counter">
                          <button class="cotalog-minus">-</button>
                          <div class="cotalog-number">10</div>
                          <button class="cotalog-plus">+</button>
                        </div>
                        <a href="#"><img src="img/cotalog/basket.png" alt="корзина"></a>
                      </div>
                      <button class="cotalog__button"><a href="#">Купить в один клик</a> </button>
                    </div>
                  </div>
                  <div class="cotalog-card_list">
                    <div class="cotalog-card__item">
                      <a href="item.html"><img class="other-card__image" src="img/card/mini_kitchen.jpg"
                          alt="кухня"></a>
                      <div class="other-card__line"></div>
                      <div class="other-card__name">Кухня "Велес"</div>
                      <div class="other-card__price">
                        <img class="other-card__priceimg" src="img/card/stars.png" alt="">
                        <div class="other-card__pricetag">
                          <span class="other-card__pricetagnew">89 руб.</span>
                          <strong class="other-card__pricetagold">100 руб</strong>
                        </div>
                      </div>
                      <div class="cotalog-amount">
                        <div class="cotalog__counter">
                          <button class="cotalog-minus">-</button>
                          <div class="cotalog-number">10</div>
                          <button class="cotalog-plus">+</button>
                        </div>
                        <a href="#"><img src="img/cotalog/basket.png" alt="корзина"></a>
                      </div>
                      <button class="cotalog__button"><a href="#">Купить в один клик</a> </button>
                    </div>
                  </div>
                  <div class="cotalog-card_list">
                    <div class="cotalog-card__item">
                      <a href="item.html"><img class="other-card__image" src="img/card/mini_kitchen.jpg"
                          alt="кухня"></a>
                      <div class="other-card__line"></div>
                      <div class="other-card__name">Кухня "Велес"</div>
                      <div class="other-card__price">
                        <img class="other-card__priceimg" src="img/card/stars.png" alt="">
                        <div class="other-card__pricetag">
                          <span class="other-card__pricetagnew">89 руб.</span>
                          <strong class="other-card__pricetagold">100 руб</strong>
                        </div>
                      </div>
                      <div class="cotalog-amount">
                        <div class="cotalog__counter">
                          <button class="cotalog-minus">-</button>
                          <div class="cotalog-number">10</div>
                          <button class="cotalog-plus">+</button>
                        </div>
                        <a href="#"><img src="img/cotalog/basket.png" alt="корзина"></a>
                      </div>
                      <button class="cotalog__button"><a href="#">Купить в один клик</a> </button>
                    </div>
                  </div>
                  <div class="cotalog-card_list">
                    <div class="cotalog-card__item">
                      <a href="item.html"><img class="other-card__image" src="img/card/mini_kitchen.jpg"
                          alt="кухня"></a>
                      <div class="other-card__line"></div>
                      <div class="other-card__name">Кухня "Велес"</div>
                      <div class="other-card__price">
                        <img class="other-card__priceimg" src="img/card/stars.png" alt="">
                        <div class="other-card__pricetag">
                          <span class="other-card__pricetagnew">89 руб.</span>
                          <strong class="other-card__pricetagold">100 руб</strong>
                        </div>
                      </div>
                      <div class="cotalog-amount">
                        <div class="cotalog__counter">
                          <button class="cotalog-minus">-</button>
                          <div class="cotalog-number">10</div>
                          <button class="cotalog-plus">+</button>
                        </div>
                        <a href="#"><img src="img/cotalog/basket.png" alt="корзина"></a>
                      </div>
                      <button class="cotalog__button"><a href="#">Купить в один клик</a> </button>
                    </div>
                  </div>
                  <div class="cotalog-card_list">
                    <div class="cotalog-card__item">
                      <a href="item.html"><img class="other-card__image" src="img/card/mini_kitchen.jpg"
                          alt="кухня"></a>
                      <div class="other-card__line"></div>
                      <div class="other-card__name">Кухня "Велес"</div>
                      <div class="other-card__price">
                        <img class="other-card__priceimg" src="img/card/stars.png" alt="">
                        <div class="other-card__pricetag">
                          <span class="other-card__pricetagnew">89 руб.</span>
                          <strong class="other-card__pricetagold">100 руб</strong>
                        </div>
                      </div>
                      <div class="cotalog-amount">
                        <div class="cotalog__counter">
                          <button class="cotalog-minus">-</button>
                          <div class="cotalog-number">10</div>
                          <button class="cotalog-plus">+</button>
                        </div>
                        <a href="#"><img src="img/cotalog/basket.png" alt="корзина"></a>
                      </div>
                      <button class="cotalog__button"><a href="#">Купить в один клик</a> </button>
                    </div>
                  </div>
                  <div class="cotalog-card_list">
                    <div class="cotalog-card__item">
                      <a href="item.html"><img class="other-card__image" src="img/card/mini_kitchen.jpg"
                          alt="кухня"></a>
                      <div class="other-card__line"></div>
                      <div class="other-card__name">Кухня "Велес"</div>
                      <div class="other-card__price">
                        <img class="other-card__priceimg" src="img/card/stars.png" alt="">
                        <div class="other-card__pricetag">
                          <span class="other-card__pricetagnew">89 руб.</span>
                          <strong class="other-card__pricetagold">100 руб</strong>
                        </div>
                      </div>
                      <div class="cotalog-amount">
                        <div class="cotalog__counter">
                          <button class="cotalog-minus">-</button>
                          <div class="cotalog-number">10</div>
                          <button class="cotalog-plus">+</button>
                        </div>
                        <a href="#"><img src="img/cotalog/basket.png" alt="корзина"></a>
                      </div>
                      <button class="cotalog__button"><a href="#">Купить в один клик</a> </button>
                    </div>
                  </div>
                
              </div>
              <!-- конец сортировки по названию -->
              <!-- начало сортировки по цене -->
              <div class="cotalog-wrapper__tagitems">
                
              </div>
              <!-- конец сортировки по цене -->
              <!-- начало сортировки по нивинкам -->
              <div class="cotalog-wrapper__tagitems">

              </div>
              <!-- конец сортировки по новинкам -->
            </div>
          </div>
          <button class="button cotalog__button"><a href="#">Показать еще</a> </button>
          <!-- /.cotalog-wrapper -->
        </div>
        <!-- /.cotalog-kinds -->
      </div>
      <!-- /.cotalog-block -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section cotalog -->
  </main>
  <!-- модальные окна  --> 
  <?php include 'modals.php'; ?>
  <!-- футер начало -->
  <?php include 'footer.php'; ?>
</body>
</html>