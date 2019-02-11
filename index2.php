<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#272727">
  <title>Услуга - AMDPlus</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/fonts.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/plugins/jquery.fancybox.min.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!--Виджет для коментариев ВК -->
  <script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
  <script type="text/javascript">
      VK.init({apiId: 6830438, onlyWidgets: true});
  </script>

  <script src="https://api-maps.yandex.ru/2.1/?apikey=766bc559-a3c3-4a3d-bc04-c4bc7d023920&lang=ru_RU" type="text/javascript">
  </script>
</head>
<body>

<!-- Header -->
<?php include("includes/header.php") ?>
<!-- Выпадающее меню -->
<?php include("includes/header/dropdowns.php") ?>
<!-- Мобильное меню -->
<?php include("includes/header/mobile-menu.php") ?>
<!-- Оценка по фото -->
<?php include("includes/header/cost-estimate.php") ?>

<div class="content main">
  <!-- Шапка сайта -->
  <div class="page-header">
    <div class="page-header__container">
      <!-- Заголовки страницы -->
      <div class="page-header__title">
        <div class="gallery-slider-wrapper" data-js="scheme-slider-wrapper">
          <div class="gallery-slider" data-js="scheme-slider">
            <div class="main-slider__item">
              <div class="main-slider__text">
                <h2 class="h2_yellow">Полировка кузова <span class="h2_mobile">автомобиля</span></h2>
                <h3 class="h3_white">Вы — звезда серого потока</h3>
                <a href="javascript:void(0);" class="button button_wide button_large" data-js="ajax-link"><span>Записаться</span></a>
              </div>
              <img src="assets/images/bgs/main-top__bg-01.png" alt="">
            </div>
            <div class="main-slider__item">
              <div class="main-slider__text">
                <h2 class="h2_yellow">Полировка кузова <span class="h2_mobile">автомобиля</span></h2>
                <h3 class="h3_white">Вы — звезда серого потока</h3>
                <a href="javascript:void(0);" class="button button_wide button_large" data-js="ajax-link"><span>Записаться</span></a>
              </div>
              <img src="assets/images/bgs/main-top__bg-02.png" alt="">
            </div>
          </div>
          <div class="row gallery-slider__navigator slider-navigator">
            <div>
              <div class="prev">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                     viewBox="0 0 8.5 14" xml:space="preserve">
                <path transform="rotate(134.999 4.347 9.857)"
                      d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                  <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/>
                </svg>
              </div>
              <div class="next">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                     viewBox="0 0 8.5 14" xml:space="preserve">
                <path transform="rotate(134.999 4.347 9.857)"
                      d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                  <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Детейлинг  -->
  <div class="cost-of cost-of_other main-cost-of_other">
    <div class="cost-of__underlay" data-js="underlay">
      <div class="row">
        <div></div>
        <div></div>
      </div>
    </div>
    <div class="row row_with-margin" data-js="underlay-content">
      <h2>Детейлинг</h2>
      <h3 class="h3_white">Профессиональная реставрация и тюнинг</h3>
      <p>Наше ателье предоставляют полный комплекс detailing услуг: от профессиональной мойки и ремонта повреждений
        салона до полировки и обработки кузова защитными покрытиями. Мы справляемся с самыми сложными проблемами и
        делаем все возможное, чтобы внешний вид вашего авто полностью соответствовал вашим ожиданиям.</p>
    </div>
    <div class="row">
      <div class="cost-of__slider-wrapper" data-js="cost-of-slider-wrapper">
        <div class="cost-of__slider" data-js="cost-of-slider">
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/main/main-deteiling-01.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Полировка кузова</div>
                <div class="cost-of-item__subtitle">Вы — звезда в сером потоке</div>
                <div class="cost-of-item__info">
                  <div class="cost-of-item__price">от 5 000 Р</div>
                </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Подробнее</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/main/main-deteiling-02.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Защитные покрытия</div>
                <div class="cost-of-item__subtitle">Эволюция в защите авто</div>
                <div class="cost-of-item__info">
                  <div class="cost-of-item__price">от 9 000 Р</div>
                </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Подробнее</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/main/main-deteiling-03.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Ремонт салона</div>
                <div class="cost-of-item__subtitle">Эффект «как после покупки»</div>
                <div class="cost-of-item__info">
                  <div class="cost-of-item__price">от 1 000 Р</div>
                </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Подробнее</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/main/main-deteiling-04.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Химчистка</div>
                <div class="cost-of-item__subtitle">Машина чище, чем в день покупки</div>
                <div class="cost-of-item__info">
                  <div class="cost-of-item__price">от 4 000 Р</div>
                </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Подробнее</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/main/main-deteiling-02.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Защитные покрытия</div>
                <div class="cost-of-item__subtitle">Эволюция в защите авто</div>
                <div class="cost-of-item__info">
                  <div class="cost-of-item__price">от 9 000 Р</div>
                </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Подробнее</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/main/main-deteiling-03.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Ремонт салона</div>
                <div class="cost-of-item__subtitle">Эффект «как после покупки»</div>
                <div class="cost-of-item__info">
                  <div class="cost-of-item__price">от 1 000 Р</div>
                </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Подробнее</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cost-of__slider__navigator slider-navigator" data-js="cost-of-slider-navigator">
          <div>
            <div class="prev">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                   viewBox="0 0 8.5 14" xml:space="preserve"><path transform="rotate(134.999 4.347 9.857)"
                                                                   d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/></svg>
            </div>
            <a href="portfolio.php" class="slider__link">Ещё работы</a>
            <div class="next">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                   viewBox="0 0 8.5 14" xml:space="preserve"><path transform="rotate(134.999 4.347 9.857)"
                                                                   d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  Услуги детейлинга-->
  <div class="main-deteyling-services">
    <div class="row">
      <h2>Услуги детейлинга</h2>
      <h3>Восстановление и реставрация</h3>
      <p>Мы работаем не только с автомобилями, но и с мото-, авиа-, водным транспортом, всегда гарантируя высокое
        качество работы и безупречный результат. Используя современные инструменты и профессиональные материалы
        проверенных брендов, мы дарим вторую жизнь автомобилям, кожаным изделиям и мягкой мебели.</p>
    </div>
    <div class="row main-deteiling">
      <div class="main-deteiling__left-block">
        <div>
          <a href="" class="main-deteiling__link">Реставрация мотоциклов</a>
          <p class="main-deteiling__text">Перетяжка и капитальный ремонт</p>
          <a href="" class="main-deteiling__link">Реставрация скутеров</a>
          <p class="main-deteiling__text">Устранение дефектов и редизайн</p>
          <a href="" class="main-deteiling__link">Реставрация водного транспорта</a>
          <p class="main-deteiling__text">Ремонт и детейлинг яхт, катеров, гидроциклов</p>
          <a href="" class="main-deteiling__link">Реставрация самолётов, вертолётов</a>
          <p class="main-deteiling__text">Ремонт, покраска и перетяжка салона</p>
        </div>
        <div>
          <a href="" class="main-deteiling__link">Реставрация кожаной мебели</a>
          <p class="main-deteiling__text">Ремонт и перетяжку мягкой мебели</p>
          <a href="" class="main-deteiling__link">Реставрация изделий из кожи</a>
          <p class="main-deteiling__text">Новая жизнь любимых вещей</p>
          <a href="" class="main-deteiling__link">Химчистка чемоданов и сумок</a>
          <p class="main-deteiling__text">Тизер про химчистку</p>
        </div>
      </div>
      <div class="main-deteiling-right-block">
        <a href="" class="main-deteiling__link">Ремонт сидений</a>
        <a href="" class="main-deteiling__link">Покраска салона</a>
        <a href="" class="main-deteiling__link">Реставрация ретро-авто</a>
        <a href="" class="main-deteiling__link">Ремонт вмятин</a>
        <a href="" class="main-deteiling__link">Ремонт стёкол</a>
        <a href="" class="main-deteiling__link">Тонировка</a>
      </div>
    </div>
  </div>

  <!-- Портфолио (маленький слайдер) -->
  <div class="portfolio" id="portfolio">
    <div class="row">
      <h2>Портфолио</h2>
      <h3 class="h3_white">Работы по ремонту салона</h3>
      <p>
        Чтобы вы по достоинству оценили мастерство профессионалов сети детейлинг-центров «АMD plus»
        и результат их работы, мы подготовили для вас подробное портфолио, в котором собрали фото авто
        до и после ремонта салона. Оцените финальный результат ↓
      </p>
    </div>
    <!-- Слайдер портфолио (маленький) -->
    <div class="row">
      <div class="portfolio-slider-small-wrapper" data-js="portfolio-slider-small-wrapper">
        <div class="portfolio-underlay">
          <div></div>
          <div></div>
        </div>
        <div class="portfolio-slider-small" data-js="portfolio-slider-small">
          <a href="portfolio-page.php" class="item">
            <div class="portfolio-slider-small__image-wrapper">
              <div class="portfolio-slider-small__image">
                <img src="assets/images/photos/portfolio-small-1.jpg" alt="" class="">
              </div>
              <div class="portfolio-slider-small__more"><span>Подробнее</span></div>
            </div>
            <div class="portfolio-slider-small__content">
              <div class="portfolio-slider-small__title">
                Реставрация переднего кресла
                Toyota Prado
              </div>
              <div class="portfolio-slider-small__info">
                <div class="portfolio-slider-small__price">4 000 Р</div>
                <div class="portfolio-slider-small__time">1,5 часа</div>
              </div>
            </div>
          </a>
          <a href="portfolio-page.php" class="item">
            <div class="portfolio-slider-small__image-wrapper">
              <div class="portfolio-slider-small__image">
                <img src="assets/images/photos/portfolio-small-2.jpg" alt="" class="">
              </div>
              <div class="portfolio-slider-small__more"><span>Подробнее</span></div>
            </div>
            <div class="portfolio-slider-small__content">
              <div class="portfolio-slider-small__title">
                Реставрация переднего кресла
                Toyota Prado
              </div>
              <div class="portfolio-slider-small__info">
                <div class="portfolio-slider-small__price">4 000 Р</div>
                <div class="portfolio-slider-small__time">1,5 часа</div>
              </div>
            </div>
          </a>
          <a href="portfolio-page.php" class="item">
            <div class="portfolio-slider-small__image-wrapper">
              <div class="portfolio-slider-small__image">
                <img src="assets/images/photos/portfolio-small-3.jpg" alt="" class="">
              </div>
              <div class="portfolio-slider-small__more"><span>Подробнее</span></div>
            </div>
            <div class="portfolio-slider-small__content">
              <div class="portfolio-slider-small__title">
                Реставрация переднего кресла
                Toyota Prado
              </div>
              <div class="portfolio-slider-small__info">
                <div class="portfolio-slider-small__price">4 000 Р</div>
                <div class="portfolio-slider-small__time">1,5 часа</div>
              </div>
            </div>
          </a>
          <a href="portfolio-page.php" class="item">
            <div class="portfolio-slider-small__image-wrapper">
              <div class="portfolio-slider-small__image">
                <img src="assets/images/photos/portfolio-small-2.jpg" alt="" class="">
              </div>
              <div class="portfolio-slider-small__more"><span>Подробнее</span></div>
            </div>
            <div class="portfolio-slider-small__content">
              <div class="portfolio-slider-small__title">
                Реставрация переднего кресла
                Toyota Prado
              </div>
              <div class="portfolio-slider-small__info">
                <div class="portfolio-slider-small__price">4 000 Р</div>
                <div class="portfolio-slider-small__time">1,5 часа</div>
              </div>
            </div>
          </a>
        </div>
        <div class="portfolio-slider__navigator slider-navigator">
          <div>
            <div class="prev">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                   viewBox="0 0 8.5 14" xml:space="preserve"><path transform="rotate(134.999 4.347 9.857)"
                                                                   d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/></svg>
            </div>
            <a href="portfolio.php" class="slider__link">Ещё работы</a>
            <div class="next">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                   viewBox="0 0 8.5 14" xml:space="preserve"><path transform="rotate(134.999 4.347 9.857)"
                                                                   d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-brands">
      <div class="row">
        <div class="portfolio-brands__title">Смотрите, как мы ремонтируем салоны авто разных марок:</div>

        <div class="portfolio-brands__grid">
          <a href="javascript:void(0);" class="portfolio-brands__item">
            <div class="portfolio-brands__icon">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="74" height="50"
                   viewBox="0 0 74 50" xml:space="preserve"><path class="svg-path"
                                                                  d="M37 2.5C24.6 2.5 14.5 12.6 14.5 25S24.6 47.5 37 47.5 59.5 37.4 59.5 25 49.4 2.5 37 2.5zm0 36.3c-7.6 0-13.8-6.2-13.8-13.8S29.4 11.2 37 11.2 50.8 17.4 50.8 25 44.6 38.8 37 38.8zM24.8 11.5c.5-.3 1.1-.4 1.7-.2.5.2.9.7 1 1.3 0 .2 0 .4-.1.7-.1.4-.4.7-.7 1.1-.5.6-1 1.3-1.5 1.9-.4.5-.9 1.1-1.3 1.6l-.1.1c-.2-.1-.3-.3-.5-.4-.6-.5-1.2-1-1.9-1.5-.6-.5-1.3-1-1.9-1.5-.2-.1-.3-.3-.5-.4h-.1l.1-.1c.5-.6.9-1.2 1.3-1.7.5-.6 1-1.2 1.5-1.9.1-.1.2-.2.3-.4.2-.2.4-.3.7-.4.5-.2 1.1-.1 1.5.3.2.2.4.5.4.7.1.3 0 .6.1.8zm15.8-7.2l.2 6.2-1.6-.2-.2-4.1-1.5 4.1h-1.1l-1.5-4.1-.2 4.1-1.5.2.2-6.2 2.1-.2L37 8.5l1.5-4.4 2.1.2zm9.5 13.6l-.8-1.4 2.7-3.6-4.1 1.9-1.1-1.1 3.7-4.8 1.1 1.1-2.1 2.8 3.4-1.6 1 1.3-2.3 3 3.2-1.5.8 1.4-5.5 2.5z"/>
                <path class="svg-path"
                      d="M24.1 13.6l-1.2 1.5c.2.2.4.4.6.5.1.1.2.2.4.3l.1.1c.4-.6.9-1.1 1.3-1.7.2-.2.3-.4.5-.6.2-.2.2-.5.1-.7-.1-.3-.4-.4-.7-.4-.2 0-.4.1-.6.3-.1.2-.3.5-.5.7zm-.3-1.6c.1-.2 0-.5-.2-.6-.1-.2-.5-.3-.7-.2s-.3.3-.5.4c-.5.6-1 1.2-1.4 1.8l-.1.1c.1.1.2.2.3.2.3.2.5.4.8.6.3-.3.5-.6.8-1 .2-.2.4-.5.7-.8.1-.1.2-.3.3-.5zm.1 13H37V11.9c-7.1.2-12.9 6-13.1 13.1zM37 38.1c7.1-.2 12.9-5.9 13.1-13.1H37v13.1z"/></svg>
            </div>
            <span>BMW</span>
          </a>
          <a href="javascript:void(0);" class="portfolio-brands__item">
            <div class="portfolio-brands__icon">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="74" height="50"
                   viewBox="0 0 74 50" xml:space="preserve"><path class="svg-path"
                                                                  d="M37.2 4.6h-.5l-3.2 18.1 3.5 2 3.5-1.9zm17.7 31.3l.1-.2.1-.2-13.9-11.8-3.7 1.9v4zm-35.8.2l-.1-.2-.1-.2 14.1-12 3.4 1.9v4z"/>
                <path d="M37 5.6c-10.7 0-19.4 8.7-19.4 19.4S26.3 44.4 37 44.4 56.4 35.7 56.4 25 47.7 5.6 37 5.6z"
                      fill="none"/>
                <path class="svg-path"
                      d="M37 2.5C24.6 2.5 14.5 12.6 14.5 25S24.6 47.5 37 47.5 59.5 37.4 59.5 25 49.4 2.5 37 2.5zm0 41.9c-10.7 0-19.4-8.7-19.4-19.4S26.3 5.6 37 5.6 56.4 14.3 56.4 25 47.7 44.4 37 44.4z"/></svg>
            </div>
            <span>Mercedes</span>
          </a>
          <a href="javascript:void(0);" class="portfolio-brands__item">
            <div class="portfolio-brands__icon">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="74" height="50"
                   viewBox="0 0 74 50" xml:space="preserve"><path class="svg-path"
                                                                  d="M15 13.5C8.4 13.5 3 18.7 3 25s5.4 11.5 12 11.5S27 31.3 27 25c.1-6.3-5.3-11.5-12-11.5zM24.2 25c0 4.8-4.1 8.7-9.1 8.7S6 29.8 6 25c-.1-4.8 4-8.7 9-8.7s9.2 3.9 9.2 8.7z"/>
                <path class="svg-path"
                      d="M29.7 13.5c-6.6 0-12 5.2-12 11.5s5.4 11.5 12 11.5 12-5.2 12-11.5-5.4-11.5-12-11.5zM38.8 25c0 4.8-4.1 8.7-9.1 8.7s-9.1-3.9-9.1-8.7 4.1-8.7 9.1-8.7 9.1 3.9 9.1 8.7z"/>
                <path class="svg-path"
                      d="M44.3 13.5c-6.6 0-12 5.2-12 11.5s5.4 11.5 12 11.5 12-5.2 12-11.5c.1-6.3-5.3-11.5-12-11.5zM53.5 25c0 4.8-4.1 8.7-9.1 8.7s-9.1-3.9-9.1-8.7 4.1-8.7 9.1-8.7 9.1 3.9 9.1 8.7z"/>
                <path class="svg-path"
                      d="M59 13.5c-6.6 0-12 5.2-12 11.5s5.4 11.5 12 11.5S71 31.3 71 25s-5.4-11.5-12-11.5zM68.1 25c0 4.8-4.1 8.7-9.1 8.7s-9.1-3.9-9.1-8.7 4.1-8.7 9.1-8.7 9.1 3.9 9.1 8.7z"/></svg>
            </div>
            <span>AUDI</span>
          </a>
          <a href="javascript:void(0);" class="portfolio-brands__item">
            <div class="portfolio-brands__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="74" height="50" viewBox="0 0 74 50">
                <path
                  d="M6.1 32.2h18.6c.6 0 .8.3.8.8v2.8c0 .8.5 1.2 1.2 1.2h21c.7 0 1.2-.4 1.2-1.2V33c0-.6.2-.8.8-.8h11.7c.8 0 1.4-.2 1.8-1L69 19.6c-.1-.3 0-.4 0-.7 0-.8-.7-1.1-1.1-1.1H49.6c-.5 0-.8-.1-.8-.8v-2.8c0-.8-.4-1.2-1.2-1.2h-21c-.8 0-1.2.4-1.2 1.2V17c0 .6-.3.8-.8.8h-12c-.9 0-1.5.5-1.7 1L5.1 30.6c-.1.2-.1.3-.1.5 0 .5.3 1.1 1.1 1.1zm4.6-4.7l2.8-5.6c.1-.2.3-.3.7-.3h14.1c.5 0 .8-.2.8-.8v-3.3c0-.6.2-.8.8-.8h14.5c.5 0 .8.2.8.8v3.2c0 .5.3.8.8.8h16.7c.5 0 .7.4.7.6 0 .1 0 .2-.1.3L60.5 28c-.2.3-.5.3-.7.3H46c-.6 0-.8.3-.8.8v3.2c0 .5-.2.8-.8.8H29.8c-.5 0-.8-.2-.8-.8v-3.2c0-.6-.3-.8-.8-.8H11.4c-.4 0-.7-.3-.7-.6v-.2z"
                  fill="#595b60"/>
              </svg>
            </div>
            <span>Chevrolet</span>
          </a>
          <a href="javascript:void(0);" class="portfolio-brands__item">
            <div class="portfolio-brands__icon">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="74" height="50"
                   viewBox="0 0 74 50" xml:space="preserve"><path class="svg-path"
                                                                  d="M51.7 38.9c.1.1.2.2.4.1.3 0 .3-.5.3-.5s.1-1.1.1-2.1c0-1.3-1-2.5-1-2.5S40.8 22 37 22 22.5 33.9 22.5 33.9s-1 1.2-1 2.5c0 1.1.1 2.1.1 2.1s0 .5.3.5c.2 0 .3-.1.4-.1 1.2-1.1 10.8-9.3 14.7-9.3 4-.1 13.5 8.2 14.7 9.3z"/>
                <path class="svg-path"
                      d="M21.9 28c.2 0 .3-.1.4-.1 1.2-1 10.8-9.3 14.7-9.3 4 0 13.5 8.3 14.7 9.3.1.1.2.2.4.1.3 0 .3-.5.3-.5s.1-1.1.1-2.1c0-1.3-1-2.5-1-2.5S40.8 11 37 11 22.5 22.9 22.5 22.9s-1 1.2-1 2.5c0 1.1.1 2.1.1 2.1s0 .5.3.5z"/></svg>
            </div>
            <span>Citroen</span>
          </a>
          <a href="javascript:void(0);" class="portfolio-brands__item">
            <div class="portfolio-brands__icon">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="74" height="50"
                   viewBox="0 0 74 50" xml:space="preserve"><path class="svg-path"
                                                                  d="M37 11C17 11 .7 17.3.7 25S17 39 37 39s36.3-6.2 36.3-14S57 11 37 11zm0 25.5C18.3 36.5 3.2 31.4 3.2 25c0-6.3 15.1-11.5 33.8-11.5 18.6 0 33.8 5.1 33.8 11.5S55.7 36.5 37 36.5z"/>
                <path class="svg-path"
                      d="M57.6 28.3c-.1 0-.3.2-.4.4-.5.5-2.5 2.6-3.5 2.7.2 0-.4.1-.4-.4 0-.3.2-.7.3-.9l5.4-9.7h-2L53.8 26c-.3-.5-.6-1.7-2.1-1.7-2.5 0-3.4 1.7-5.1 3.3-.6.4-1.2 1-2.6 1-.8 0-1.4-.7-1.3-1.5.1-.7.3-1 .8-1.2.2.7.7 1 1.4 1 .8 0 1.3-.8 1.3-1.5 0-.6-.4-1.3-1.4-1.3-.9-.1-1.6.4-2.6 1.6 0 0 .3-1.7-1.6-1.7-.2 0-.4 0-.6.1-1 .3-2.4 2-3.4 3.3.1-.3.1-.5.1-.8 0-.7-.3-1.7-.8-2.2-.1-.1-.2-.1-.3-.1-.3 0-.6.3-.6.7.3.3.6.9.6 1.5s-.2 1.7-.4 2.2c-1 1.7-2.2 2.7-3.6 2.5-.8-.2-1.3-.9-1.2-2.1.1-.7.5-1.6.9-2.1.6-.9 1.7-1.8 3.2-2 0 0 .1-.3-.1-.5-.1-.1-.2-.3-.5-.3-2.1.1-3.4 1.6-4.2 3.2-.3.5-.7 1.3-.9 1.8 0 0-.2.6-1.1 1.3-.7.4-.8.5-.9.5 0 .2.2.4.4.6.1.1.3-.1.4-.2 1.2-.7 1.3-1 1.3-1 .3 1.4 1.5 2.2 2.8 2.2 1.8 0 3.5-1.7 4.5-3.2 1-1.6 2.4-3.1 2.4-3.1.6-.5 1.1-.9 1.5-.9.3 0 .6.3.5.6-.1.5-.3 1-.7 1.7l-2.7 4.7h2.1c1.2-2.4 1.3-2.4 2.5-4.7.3 1.3 1 1.7 2 1.8.9 0 1.5 0 2.2-.4-.2.7-.1 1.4.2 1.9.3.6.8 1.3 2 1.4 1.5 0 2.9-.7 3.4-1 .1.7.5 1.1 1.4 1.1 1.9-.1 3.5-2 4.6-3.3.2-.2.4-.6.4-.7-.1-.1-.3-.2-.4-.2zm-4.9-.7s-.9 1.5-1.7 2.4c-1.6 1.6-2.6 1.1-2.8.9s-.4-.8-.3-1.5c.1-.6.6-1.7 1-2.3.9-1.1 2-1.9 2.9-1.8 1.1.1 1.2 1.2.7 2.2l.2.1zm-5.2-11.5c-.6 0-.3.1-1.6.3-1.3.2-2.9.2-4.2.2-3.4-.1-7.6-.8-9.3-1.1-1.5-.3-2.8-.4-4-.4-6.3 0-8.8 2.6-8.8 5.1 0 1.4 1 2.7 2.4 2.7 2.6 0 4.1-2.8 4.3-3.8 0 0 .1-.2-.1-.3-.1-.1-.3 0-.4.2-.4.8-1.8 1.8-2.8 2-.9.2-1.6-.3-1.6-1.1-.1-1.9 2.1-4.1 6.9-4.1 1.4 0 3.1.4 5.1.8 1.8.4 5.7 2.2 9.4 2.2 2.4 0 5.2-1.6 5.2-2.4 0-.1 0-.3-.5-.3z"/>
                <path class="svg-path"
                      d="M34 19.6c-.8-.1-1.4.5-1.5 1.6 0 .3.1.6.1.6s-1.8.3-3.3.4c1.9-3.2 3.6-4.3 4.1-4.8l.4-.4c.1-.3-.1-.4-.2-.4-.6 0-3.5 2.2-5.8 5.7-.6.1-3 .3-3.8 1.2-.1.1-.2.3-.2.3.1.2.2.3.4.1.5-.6 2.5-.8 3-.8-3 4.2-5.7 7-8.1 7-.3 0-.5 0-.8-.1-1-.2-1.6-1.3-1.6-2.2 0-1.3 1.2-2.6 1.9-2.9.2-.1.3-.2.3-.3 0-.2-.1-.3-.4-.3-2.2.7-3.5 2.7-3.4 4.3.1 2.6 2 4.1 4.2 4.1 3.1 0 4.6-1.4 9.6-9.6 2-.2 3-.3 4-.5 0 0 .3.7 1.1.7.1 0 .1-.1.2-.4-.3 0-.7-.3-.7-.5.3-.2.6-.3.8-.5.3-.3.7-.9.7-1.4-.2-.4-.5-.8-1-.9zm-.2 1.6c-.4.4-.6.4-.6.4-.1-.3-.1-.6 0-1s.3-.6.7-.6c.2 0 .3.2.3.3 0 .3-.2.8-.4.9z"/></svg>
            </div>
            <span>Ford</span>
          </a>
          <a href="javascript:void(0);" class="portfolio-brands__item">
            <div class="portfolio-brands__icon">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="74" height="50"
                   viewBox="0 0 74 50" xml:space="preserve"><path class="svg-path"
                                                                  d="M16.2 33.5c.2 1.1.5 2.2.9 3.3.3.6.6 1.2.9 1.7.7 1 1.7 1.8 2.9 2.3.5.2 1 .4 1.5.5 1.4.4 2.8.6 4.3.7l4.2.3c2 .1 4 .1 5.6.1 1.7 0 2.9 0 4.2-.1 1.7 0 3.5-.1 5.3-.2 1.3-.1 2.6-.2 3.9-.5 1.1-.2 2.1-.5 3.1-.9 1.6-.7 2.9-1.8 3.6-3.4.3-.7.6-1.4.8-2.1.4-1.4.6-2.8.8-4.2.2-1.4.3-2.8.5-4.2l.3-4.2c.1-2.2.1-4.5-.1-6.7-.1-.9-.2-1.7-.5-2.5-.5-1.4-1.2-2.6-2.4-3.5-.8-.6-1.6-1-2.5-1.3-1.2-.4-2.5-.6-3.7-.8-1.6-.2-3.1-.3-4.7-.4s-3.2-.1-4.9-.2c-2.2-.1-4.3 0-6.5 0-2.4 0-4.9.1-7.3.4-1.2.1-2.4.2-3.6.5-1 .2-2 .4-3 .8-1.7 1-3 2.1-3.7 3.6-.5.9-.7 1.9-.9 2.8-.1 1.1-.2 2.1-.2 3.1v4c0 2.4.3 4.8.5 7.1.2 1.4.4 2.7.7 4zm1-13c0-1.1.1-2.3.1-3.4.1-1 .2-2 .5-3 .4-1.2 1.1-2.3 2.2-3 .6-.4 1.3-.7 2-1 .8-.3 1.6-.4 2.4-.5 1.1-.1 2.3-.3 3.5-.4.8-.1 1.6-.1 2.4-.2 1.3-.1 2.7-.1 4-.1h5.9c1.5 0 3 .1 4.5.2 1.6.1 3.2.2 4.8.5 1 .1 2.1.4 3 .7 1.2.5 2.2 1.2 2.8 2.3.4.6.7 1.3.8 2 .2.7.3 1.4.3 2.2.2 2.2.2 4.3.2 6.5 0 1.3-.1 2.6-.2 3.9-.1 1-.2 2.1-.3 3.1-.2 1.7-.5 3.4-1 5-.2.6-.4 1.1-.7 1.6-.7 1.3-1.7 2.2-3.1 2.8-.9.3-1.7.5-2.6.7-1.6.2-3.1.4-4.7.5-2.2.1-4.3.2-6.5.2H37c-1.9 0-3.7-.1-5.6-.1-1.4-.1-2.7-.2-4.1-.3-1.1-.1-2.2-.2-3.3-.5-.5-.1-1.1-.3-1.6-.5-1.4-.6-2.3-1.6-3-2.9-.4-.9-.7-1.8-1-2.7-.3-1.3-.5-2.6-.7-3.9-.2-1.5-.3-2.9-.4-4.4-.1-1.8-.1-3.5-.1-5.3z"/>
                <path class="svg-path"
                      d="M23.9 12.7c.1.8.1 1.6.2 2.3.1 1.3.2 2.5.2 3.8.1 1 .1 2.1.2 3.1l.3 3.6c.1 1 .1 1.9.2 2.9l.3 3.9c.1 1.1.2 2.1.2 3.2.1 1.2.2 2.5.3 3.7v.3c.8.2 3.7.3 4.4.3 0-.1.1-.2.1-.3.4-1.4.7-2.7 1.1-4.1.2-.7.5-1.5.9-2.1.4-.9 1.2-1.3 2.1-1.5.8-.1 1.7-.2 2.5-.2.9 0 1.7.1 2.6.2.9.2 1.6.6 2 1.4.1.2.2.4.3.5.3.7.5 1.4.7 2.1.3 1.2.7 2.4 1 3.6 0 .1.1.2.1.3.9 0 4-.2 4.4-.3.8-9.6 1.4-19.2 2-28.9-1-.1-2-.2-3-.2 0 .1 0 .1-.1.2l-1.2 5.4c-.6 2.7-1.3 5.3-2 7.9-.2.9-.5 1.7-.9 2.5-.8 1.5-2 2.4-3.7 2.6-.6.1-1.3.1-1.9.1-.9 0-1.9 0-2.8-.2-1.2-.2-2.1-.7-2.9-1.7-.4-.5-.6-1-.8-1.5-.4-.9-.6-1.9-.9-2.9-1-3.8-1.9-7.7-2.7-11.6-.1 0-.1-.3-.2-.6-1 0-2 .1-3 .2v2z"/></svg>
            </div>
            <span>Honda</span>
          </a>
          <a href="javascript:void(0);" class="portfolio-brands__item">
            <div class="portfolio-brands__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="74" height="50" viewBox="0 0 74 50">
                <path
                  d="M8.5 20.3c-1.5 2.3-2 4.8-1.2 7.4.7 2.1 2 3.8 3.7 5.3 2.2 1.9 4.7 3.3 7.4 4.4 5.2 2.1 10.7 3 16.2 3.2 2.7.1 5.4 0 8.1-.3 2.8-.3 5.6-.8 8.2-1.6 3.5-1 6.9-2.3 9.9-4.4 1.9-1.3 3.5-2.8 4.7-4.8 1.1-1.9 1.6-4 1.1-6.3-.4-1.9-1.3-3.4-2.6-4.8-1.9-2.1-4.2-3.5-6.7-4.7-3-1.4-6.1-2.4-9.3-3-2.2-.5-4.5-.8-6.8-.9-.5 0-1-.1-1.5-.1h-5c-.1 0-.2.1-.3.1-.9.1-1.7.1-2.6.2-2.7.3-5.4.7-8 1.4-3.3.6-6.8 1.9-9.9 3.9-2.1 1.3-4 2.8-5.4 5zm34.8 10.6c-.4 2.5-1.6 4.6-3.5 6.3-.7.6-1.6.9-2.4.9-.6.1-1.3.1-1.6.1-2.3 0-4.3-.3-6.4-.5-2.1-.3-4.2-.7-6.3-1.2-.7-.2-1.4-.4-2.1-.7-.6-.2-.6-.6-.1-1 4.4-3.6 9.5-5.9 14.9-7.2 1.4-.3 2.9-.6 4.4-.5 1.1.1 2.1.4 2.7 1.5.5.7.6 1.5.4 2.3zm14-11.6c.2-.5.5-1 .7-1.4.3-.6.6-.8 1.2-.4 2.9 1.4 4.6 3.7 5.1 6.9v.7c0 1.6-.6 3-1.5 4.3-1.3 1.7-3 3-4.8 4-3.2 1.8-6.6 2.9-10.1 3.6-.2 0-.4 0-.5-.1-.1-.2 0-.4.1-.6.5-.7.9-1.3 1.4-2 1.7-2.3 3.2-4.8 4.6-7.4 1.3-2.5 2.5-5.1 3.8-7.6zm-23.9-5.9c1.1-1.2 2.5-1.7 4-1.7 4-.1 7.8.4 11.7 1.3 1 .3 2.1.6 3.1.9.3.1.6.3.9.5.4.3.4.6.1.9-.2.2-.4.4-.7.6-4 2.5-8.3 4.6-12.7 6.1-1.7.6-3.4 1-5.2 1.1-.8 0-1.5-.1-2.3-.4-1.2-.5-1.5-1.5-1.5-3 .2-2.1.9-4.4 2.6-6.3zm-8.6-.1c.6-.2 1.2-.2 1.9-.2.5 0 .7.3.3.7-.9 1.2-1.8 2.3-2.6 3.5-3.1 4.3-5.8 8.7-7.5 13.7-.2.5-.4.9-.6 1.3-.3.6-.7.7-1.4.5-.8-.3-1.4-.8-1.9-1.3-1.3-1.2-2.4-2.6-3-4.3-.2-.7-.3-1.4-.5-2.1h.1c0-1.7.8-3.2 1.8-4.5 1.2-1.5 2.8-2.7 4.5-3.6 2.7-1.8 5.8-2.9 8.9-3.7z"
                  fill="#595b60"/>
              </svg>
            </div>
            <span>Hyundai</span>
          </a>
          <a href="javascript:void(0);" class="portfolio-brands__item">
            <div class="portfolio-brands__icon">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="74" height="50"
                   viewBox="0 0 74 50" xml:space="preserve"><path class="svg-path"
                                                                  d="M73.2 25c0-8-16.2-14.5-36.2-14.5S.8 17 .8 25 17 39.5 37 39.5 73.2 33 73.2 25zM37 38.2C19.1 38.2 4.4 32.3 4.4 25c0-6.8 12.6-12.4 28.8-13.2.1 0 .1.1.1.1l-3 16.2c0 .1 0 .1.1.2h.1c.7-.5 1.3-1.1 1.9-1.6 3-3 4.6-6.6 4.5-9.2v-.2c0-1.4-.9-2.7-2.1-3.3l-.1-.1.4-1.9c0-.1.1-.1.1-.1h1.7c17.9 0 32.6 5.9 32.6 13.2 0 7.2-14.6 13.1-32.5 13.1z"/>
                <path class="svg-path"
                      d="M44.8 14c-.1 0-.1 0 0 0 1.5 3.6.3 8.1-3 11.6 0 .1 0 .2.1.2 1.1.1 2.1.2 3.2.4 0 0 .1 0 .1.1l.2 1c0 .1-.1.1-.1.1-1.1-.3-1.9-.2-2 .2-.1.4.5 1 1.4 1.4 1.1.6 1.6 1.4 1.6 2.1 0 2-4.1 3.6-9.1 3.6-4.1 0-7.8-.4-11.1-1.2-.1 0-.1-.1-.1-.1l.2-1.3c0-.1.1-.1.1-.1 1.6.6 3.7.9 6 .9 2.7 0 5.1-.5 6.8-1.3 1.4-.7 2.3-1.4 2.3-2.4 0-.7-.5-1.4-1.3-1.8H40c-.6.5-1.3.9-2 1.4-2.4 1.4-5 2.1-7.4 2.3h-.1c-1 0-1.8-.9-1.8-1.8V29l2.7-15c0-.1-.1-.2-.1-.2-12.7 1.2-22 5.7-22 11.2 0 6.4 12.4 11.5 27.7 11.5 15.3 0 27.8-5.1 27.8-11.5-.1-5.2-8.5-9.6-20-11z"/></svg>
            </div>
            <span>Lada</span>
          </a>
          <a href="javascript:void(0);" class="portfolio-brands__item">
            <div class="portfolio-brands__icon">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="74" height="50"
                   viewBox="0 0 74 50" xml:space="preserve"><path class="svg-path"
                                                                  d="M37 43c20.1 0 36.5-8.1 36.5-18S57.1 7 37 7 .5 15.1.5 25 16.9 43 37 43zm0-31.7c18.5 0 33.6 6.1 33.6 13.7S55.5 38.7 37 38.7 3.4 32.6 3.4 25 18.5 11.3 37 11.3z"/>
                <path class="svg-path"
                      d="M49.9 33.5l3.6-11.9L57 33.5h4.9l-5-17.1h-7.6v.8h.8L45 33.5zm-35 0h4.9V26l5.5 7.1H31l-6.5-8.4 5.7-8h-5.7l-4.6 6.5v-6.4h-5.8v.7c.3 0 .6 0 .9.1v15.9h-.1zm20.3 0h4.9V16.8h-5.8v.7c.3 0 .6 0 .9.1v15.9z"/></svg>
            </div>
            <span>Kia</span>
          </a>
          <a href="javascript:void(0);" class="portfolio-brands__item">
            <div class="portfolio-brands__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="74" height="50" viewBox="0 0 74 50">
                <path
                  d="M55 13c-4.5-4.9-11.9-6-18-6-6.3 0-13.9 1.1-18.3 6.2-.1.1-.1.2-.2.3C16.3 16.2 15 19.9 15 25c0 15.5 12.5 18 22 18 9.6 0 22-2.5 22-18 0-5-1.3-8.8-3.5-11.4-.2-.3-.3-.4-.5-.6zm-32.3 3c2.9-4.6 8.6-5.8 14.3-5.8 5.8 0 11.2 1.1 14.2 5.6.1.1.1.2.2.3-5.1 3-10.9 3.1-14.4 10.8-3.8-7.4-9.6-7.5-14.6-10.4 0-.1.1-.3.3-.5zM37 39.7c-8.5.1-16.5-2.4-16.5-14.7 0-.9 0-1.8.1-2.6 0-.2.1-.3.1-.5 2.9 1 5.7 2 8.6 2.9 3.4 1.4 5.6 3.4 7.6 7.9 2-4.5 4.2-6.7 7.7-8.2 2.9-1 5.8-2.1 8.6-3.1 0 .1 0 .1.1.2.1 1 .2 2.2.2 3.4 0 12.3-8 14.8-16.5 14.7z"
                  fill="#595b60"/>
              </svg>
            </div>
            <span>Mazda</span>
          </a>
          <a href="javascript:void(0);" class="portfolio-brands__item">
            <div class="portfolio-brands__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="74" height="50" viewBox="0 0 74 50">
                <path
                  d="M37 42c16 0 29-7.6 29-17S53 8 37 8 8 15.6 8 25s13 17 29 17zm0-8.4c-1.6 0-3.4-3.5-3.4-8.7 1.1.1 2.3.1 3.4.1 1.2 0 2.3 0 3.5-.1-.1 5.2-1.9 8.7-3.5 8.7zm0-13.3c-1 0-2 0-3-.1.6-2.7 1.8-4.5 3-4.5s2.4 1.7 3 4.5c-1 0-2 .1-3 .1zm19.5-2.2c2.5 2.1 3.8 4.6 3.8 7.2 0 6.4-8.2 11.8-19.3 12.9 2.3-2.6 3.7-7.4 3.7-13v-.7c6.3-1.2 10.7-3.6 11.8-6.4zm-5-2.4c.1.1.1.3.1.4 0 .2-.1.5-.2.7-.8 1.2-3.4 2.3-7 2.9-.6-3.3-1.9-6-3.4-7.7 5.5.5 9.8 2 10.5 3.7zm-29 0c.6-1.7 5-3.2 10.6-3.7-1.6 1.7-2.8 4.4-3.4 7.7-3.6-.6-6.2-1.7-7-2.9-.1-.2-.2-.5-.2-.7v-.4zm-5 2.4c1.2 2.8 5.5 5.2 11.7 6.3v.7c0 5.6 1.4 10.4 3.7 13-11.1-1.1-19.3-6.5-19.3-12.9 0-2.5 1.4-5 3.9-7.1z"
                  fill="#595b60"/>
              </svg>
            </div>
            <span>Toyota</span>
          </a>
        </div>
        <div class="portfolio-brands__more">
          Смотрите ещё больше работ в <a href="portfolio.php"
                                         class="link underline"><span>портфолио по ремонту салона</span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Форма   -->
  <div class="feedback">
    <div class="row">
      <div class="feedback__grid">
        <div>
          <h2 class="h2_yellow">Рассчитате стоимость онлайн</h2>
          <p>
            Позвоните по телефону <a href="javascript:void(0);" class="link link_yellow phone">+7 (495) 154-63-97</a>
            или приложите фото повреждения. <br>
            Мы свяжемся с вами, сообщим стоимость и запишем на ремонт в удобное для вас время.
          </p>
          <form action=""
                method="POST"
                class="feedback__form"
          >
            <div class="feedback__form__half">
              <div class="form__group form_name input__wrapper">
                <input type="text" name="name" class="name input">
                <label class="input__label">Ваше имя</label>
              </div>
              <div class="form__group form_phone input__wrapper">
                <input type="text" name="phone" class="phone input">
                <label class="input__label">Номер телефона*</label>
              </div>
            </div>

            <div class="form__group form_text input__wrapper">
              <textarea name="text" class="text input" type="text"></textarea>
              <label class="input__label">
                Пожалуйста, опишите подробно Вашу проблему.
                <span>Чем детальнее описание, тем точнее предварительная цена услуг.</span>
              </label>
            </div>
            <div class="input__wrapper_file photos-input">
              <input class="input_file"
                     id="feedback__images"
                     type="file"
                     name="files[]"
                     accept="image/jpeg,image/png,image/jpg,image/bmp" multiple
                     data-js="file-input"
              >
              <label class="input__label_file" for="feedback__images">Прикрепить фото</label>
              <div class="input_file-fake">Файл не выбран...</div>
            </div>
            <div class="feedback__form__button">
              <button class="button button_tall button_orange" data-js="active-button" type="submit">
                <span>Получить расчёт</span>
              </button>
              <div>
                Нажимая кнопку «Получить расчёт», <br>
                Вы соглашаетесь c условиями <br>
                <a href="javascript:void(0);" class="link link_grey underline" target="_blank">
                  <span>Политики конфиденциальности.</span>
                </a>
              </div>
            </div>
          </form>
        </div>
        <div>
          <img src="assets/images/bgs/main-feedback.png" alt="" class="main-feedback-img">
        </div>
      </div>
    </div>
  </div>

  <!-- Детейлинг-центр -->
  <div class="videostory">
    <div class="white-bg"></div>
    <h2 class="row">Детейлинг-центр «AMD plus»</h2>
    <div class="row">
      <div class="videostory__info">
        <h3>Профессиональная реставрация и тюнинг</h3>
        <p>Мы известны лояльным подходом к клиенту и современными способами реставрации. Используем только инновационные
          технологии от проверенных мировых производителей. Опытная команда выполняет работу в срок и в точности по
          вашим пожеланиям. Предоставляем полный комплекс услуг: ремонт и перетяжка салона, детейлинг, реставрация авто,
          а также водного и воздушного транспорта.</p>
        <div class="block-number">
          <div class="block-number__number">9565</div>
          <div class="block-number__content">
            <div class="block-number__title">автомобилей</div>
            <div class="block-number__desc">отремонтировано в «AMD plus»</div>
          </div>
        </div>
      </div>
<!--      <div class="videostory__video video-tour__video">-->
<!--        <div class="videostory__image">-->
<!--          <img src="assets/images/bgs/main-video-tour.jpg" alt="">-->
<!--        </div>-->
<!--        <p>Видеоистория<br><span>Автоателье «AMD plus» глазами Google</span></p>-->
<!--        <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE' class="video-slider__play popupbox-video fancybox.iframe"-->
<!--           data-small-btn="true" data-fancybox data-width="900" data-height="506"><span></span></a>-->
<!--      </div>-->

      <div class="videostory__video ">
        <p class="video-text">Видеоистория<br><span>Автоателье «AMD plus» глазами Google</span></p>
        <div class="videostory__image  video_wrapper_full js-videoWrapper">
          <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen
                  data-src="https://www.youtube.com/embed/4QDbRuNXdoI?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
          <button class="videoPoster js-videoPoster">
          <img src="assets/images/bgs/main-video-tour.jpg" alt="">
            <a class="video-slider__play"><span></span></a>
          </button>
        </div>
      </div>

    </div>
  </div>

  <!-- Детейлинг -->
  <div class="image-gallery">
    <div class="row">
      <h2>Уютный детейлинг</h2>
      <h3>Эффект «как после покупки»</h3>
      <p>
        Секрет безупречного результата работы мастеров центров сети — многолетний опыт работы в сфере детейлинга,
        реставрации и тюнинга. А ещё — использование только проверенных профессиональных материалов и оборудования
        премиум-класса. Мы всегда гарантируем качественное выполнение работ и идеальный экстерьер вашего авто.
      </p>
    </div>
    <div class="row">
      <div class="gallery-slider-wrapper" data-js="gallery-slider-wrapper">
        <div class="gallery-slider" data-js="gallery-slider">
          <a href="assets/images/sliders/main-deteiling/main-deteiling-01.jpg" data-fancybox="gallery" class="item">
            <img src="assets/images/sliders/main-deteiling/main-deteiling-01.jpg" alt="">
          </a>
          <a href="assets/images/sliders/main-deteiling/main-deteiling-02.jpg" data-fancybox="gallery" class="item">
            <img src="assets/images/sliders/main-deteiling/main-deteiling-02.jpg" alt="">
          </a>
          <a href="assets/images/sliders/main-deteiling/main-deteiling-03.jpg" data-fancybox="gallery" class="item">
            <img src="assets/images/sliders/main-deteiling/main-deteiling-03.jpg" alt="">
          </a>
          <a href="assets/images/sliders/main-deteiling/main-deteiling-02.jpg" data-fancybox="gallery" class="item">
            <img src="assets/images/sliders/main-deteiling/main-deteiling-02.jpg" alt="">
          </a>
        </div>
        <div class="gallery-slider__navigator slider-navigator">
          <div>
            <div class="prev">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                   viewBox="0 0 8.5 14" xml:space="preserve"><path transform="rotate(134.999 4.347 9.857)"
                                                                   d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/></svg>
            </div>
            <a href="portfolio.php" class="slider__link">Ещё фото</a>
            <div class="next">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                   viewBox="0 0 8.5 14" xml:space="preserve"><path transform="rotate(134.999 4.347 9.857)"
                                                                   d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/></svg>
            </div>
          </div>
        </div>
      </div>
      <div class="cost-of__note main-cost-of__note-pad">
        <div class="cost-of__note__text">
          <p>
            Узнайте подробнее <a href="about.php" class="link link_strong underline"><span>о компании</span></a>.
            Посетите наши студии прямо сейчас, онлайн, с помощью
            <a href="video-tour.php" class="link link_strong underline"><span>3D тура.</span></a>
            <br>Приезжайте. Будем рады видеть вас в центрах современного детейлинга «AMD plus»
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="main-reviews row">
    <div class="faq__intro">
      <div>
        <h2><span>Независимые рейтинги</span></h2>
        <h3 class="h3_white"><span>Объективные отзывы и мнения</span></h3>
        <p>
          Хотите получить максимально полную информацию о наших услугах и сервисе от клиентов?<br>
          Изучите мнение о нас на независимых авторитетных интернет-ресурсах.
        </p>
      </div>
      <div></div>
    </div>
    <div class="main-reviews__rating">
      <div class="rating-block">
        <div class="rating__logo logo-zoon"></div>
        <p>Рейтинг</p>
        <div class="rating">
          <div class="reting__star"></div>
          <div class="reting__star"></div>
          <div class="reting__star"></div>
          <div class="reting__star"></div>
          <div class="reting__star"></div>
        </div>
      </div>
      <div class="rating-block">
        <div class="rating__logo logo-yandex"></div>
        <p>Рейтинг</p>
        <p class="rating">4 из 5</p>
      </div>
      <div class="rating-block">
        <div class="rating__logo logo-google"></div>
        <p>Рейтинг</p>
        <p class="rating">4,6 из 5</p>
      </div>
      <div class="rating-block">
        <div class="rating__logo logo-drive2"></div>
        <p>Нравится</p>
        <p class="rating">162 пользователям</p>
      </div>
      <div class="rating-block">
        <div class="rating__logo logo-avtoservice"></div>
        <p>Рейтинг</p>
        <p class="rating">4,8 из 5</p>
      </div>
      <div class="rating-block">
        <div class="rating__logo logo-wotzyvy"></div>
        <p>Рейтинг</p>
        <div class="rating">
          <div class="reting__star"></div>
          <div class="reting__star"></div>
          <div class="reting__star"></div>
          <div class="reting__star"></div>
          <div class="reting__star reting__star_grey"></div>
        </div>
      </div>
    </div>
    <div class="reviews">
      <h2><span>97%</span> наших клиентов<br>рекомендуют «AMD plus» друзьям и знакомым</h2>
      <h3>И вот что они говорят:</h3>
      <div class="reviews-slider-wrapper" data-js="reviews-slider-wrapper">
        <div class="reviews-slider" data-js="reviews-slider">
          <div class="item">
            <p class="review-item__title">Убрали все недостатки!</p>
            <div class="rating">
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star "></div>
            </div>
            <div class="review-item__body">
              Пробовал сам отполировать капот, ничего не вышло. В интернете прочитал, что в AMD делают полировку
              отдельных частей авто. Обратился за помощью. Все недостатки убрали, по деньгам вышло недорого. Спасибо! В
              следующий раз не буду экспериментировать, сразу поеду к вам.
            </div>
            <div class="review-item__top">
              <div class="review-item__photo">
                <img src="assets/images/photos/review-photo.jpg" alt="">
              </div>
              <div class="review-item__info">

                <div class="review-item__author">Денис Игоревич</div>
                <div class="review-item__date">9 сентября 2018 / Договор № AMD-33287</div>
              </div>
            </div>
          </div>
          <div class="item">
            <p class="review-item__title">Убрали все недостатки!</p>
            <div class="rating">
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
            </div>
            <div class="review-item__body">
              Пробовал сам отполировать капот, ничего не вышло. В интернете прочитал, что в AMD делают полировку
              отдельных частей авто. Обратился за помощью. Все недостатки убрали, по деньгам вышло недорого. Спасибо! В
              следующий раз не буду экспериментировать, сразу поеду к вам.
            </div>
            <div class="review-item__top">
              <div class="review-item__photo">
                <img src="assets/images/photos/review-photo-02.jpg" alt="">
              </div>
              <div class="review-item__info">

                <div class="review-item__author">Сергей Гусев</div>
                <div class="review-item__date">5 февраля 2018 / Договор № AMD-6181</div>
              </div>
            </div>
          </div>
        </div>
        <div class="reviews-slider__navigator slider-navigator_with-numbers" data-js="reviews-slider-navigator">
          <div>
            <div class="prev">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                   viewBox="0 0 8.5 14" xml:space="preserve"><path transform="rotate(134.999 4.347 9.857)"
                                                                   d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/></svg>
            </div>
            <div class="counter" data-js="reviews-slider-counter">
              <span class="active">1</span>
              <span>2</span>
            </div>
            <div class="next">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                   viewBox="0 0 8.5 14" xml:space="preserve"><path transform="rotate(134.999 4.347 9.857)"
                                                                   d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-brands__more">
      Посмотрите еще <a href="testimonials.php" class="link underline link_nowrap"><span>больше отзывов</span></a>
      или оставьте <a href="javascript:void(0);" class="link underline link_nowrap"><span>свой отзыв</span></a>.
    </div>
  </div>
  <!-- Консультация форма  -->
  <div class="feedback" data-js-scroll-target="consultation">
    <div class="row">
      <div class="feedback__grid">
        <div>
          <h2 class="h2_yellow">Обращайтесь!</h2>
          <p>
            Получите консультацию по телефону <a href="javascript:void(0);" class="link link_yellow">+7 (495)
              154-63-97</a> или оставьте свои контакты. <br>
            Наш менеджер свяжется с вами и ответит на все вопросы.
          </p>
          <form action=""
                method="POST"
                class="feedback__form"
          >
            <div class="feedback__form__half">
              <div class="form__group form_name input__wrapper">
                <input type="text" name="name" class="name input">
                <label class="input__label">Ваше имя</label>
              </div>
              <div class="form__group form_phone input__wrapper">
                <input type="text" name="phone" class="phone input">
                <label class="input__label">Номер телефона*</label>
              </div>
            </div>

            <div class="form__group form_text input__wrapper">
              <textarea name="text" class="text input" type="text"></textarea>
              <label class="input__label">
                Пожалуйста, опишите подробно Вашу проблему
              </label>
            </div>
            <div class="input__wrapper_file photos-input">
              <input class="input_file"
                     id="feedback__images"
                     type="file"
                     name="files[]"
                     accept="image/jpeg,image/png,image/jpg,image/bmp" multiple
                     data-js="file-input"
              >
              <label class="input__label_file" for="feedback__images">Прикрепить фото</label>
              <div class="input_file-fake">Файл не выбран...</div>
            </div>
            <div class="feedback__form__button">
              <button class="button button_tall button_orange" data-js="active-button" type="submit">
                <span>Жду звонка</span>
              </button>
              <div>
                Нажимая кнопку «Жду звонка», <br>
                Вы соглашаетесь c условиями <br>
                <a href="javascript:void(0);" class="link link_grey underline" target="_blank">
                  <span>Политики конфиденциальности.</span>
                </a>
              </div>
            </div>
          </form>
        </div>
        <div>
          <div class="feedback__photo">
            <!--            <img src="/assets/images/bgs/main-consult.png" alt="">-->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Мастреские  -->
  <div class="block-social">
    <div class="row">
      <div class="block-social__info">
        <h2>Наши мастерские</h2>
        <h3 class="h3_white">Контактная информация</h3>
        <p>Автоателье «AMD plus» приглашает вас за качественными услугами детейлинга в один из наших двух филиалов: на
          юго-западе и на востоке Москвы! Мы работаем ежедневно с 9:00 до 21:00 и будем рады видеть вас
          и ваш автомобиль у нас в гостях!</p>
        <div class="workshop-info">
          <div class="workshop-info__left-block">
            <p class="workshop-info__text address">ЮАО, Москва, Красного маяка, 16<br>м. Пражская</p>
            <p class="workshop-info__text phone">+7 (495) 153-74-13</p>
          </div>
          <div class="workshop-info__right-block">
            <p class="workshop-info__text address">ВАО, Москва, Золотая, 11<br>м. Электрозаводская</p>
            <p class="workshop-info__text email">info@amdplus.ru </p>
          </div>
        </div>
      </div>
      <div class="block-social__img"></div>
    </div>
  </div>

  <!-- Карта -->
  <div id="map" class="map"></div>
</div>
<div class="button-up">
  <span></span>
</div>
<!-- Footer -->
<?php include("includes/footer.php") ?>

<script src="assets/js/plugins/jquery-3.3.1.min.js"></script>
<script src="assets/js/plugins/slick.min.js"></script>
<script src="assets/js/plugins/jquery.fancybox.min.js"></script>
<script src="assets/js/plugins/jquery.maskedinput.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>
</html>