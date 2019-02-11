<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#272727">
  <title>AMDPlus</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/fonts.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/plugins/jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/css/plugins/zuck.css">
  <link rel="stylesheet" href="assets/css/plugins/snapssenger.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!--Виджет для коментариев ВК -->
  <script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
  <script type="text/javascript">
      VK.init({apiId: 6830438, onlyWidgets: true});
  </script>
  <!--  Яндекс карты-->
  <script src="https://api-maps.yandex.ru/2.1/?apikey=766bc559-a3c3-4a3d-bc04-c4bc7d023920&lang=ru_RU"
          type="text/javascript">
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

<div class="content polishing">
  <!-- Шапка сайта -->
  <div class="page-header">
    <div class="page-header__wallpaper"
         style="background-image: url(assets/images/bgs/polishing_bg.jpg);">
    </div>
    <div class="page-header__container">
      <div class="row">
        <div class="page-header__breadcrumbs">
          <div class="breadcrumbs">
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">Главная</a>
            <i> / </i>
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">Услуги</a>
            <i> / </i>
            <span class="breadcrumbs__link breadcrumbs__link_current">Полировка кузова</span>
          </div>
          <div class="page-header__page-id">Страница 7</div>
        </div>
      </div>
      <div class="row">
        <!-- Заголовки страницы -->
        <div class="page-header__title">
          <a href="javascript:void(0);" class="page-return-mobile">
            <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                 viewBox="0 0 8.5 14" xml:space="preserve">
              <path transform="rotate(134.999 4.347 9.857)" d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
              <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/>
            </svg>
          </a>
          <h1 class="h1 title">Полировка кузова <span class="title_mobile">автомобиля</span></h1>
          <h2 class="slash">от <span class="h2_yellow">6</span> часов<span class="slash_mobile">/</span><span
              class="diagonal-line"></span></h2>
          <h2>от <span class="h2_yellow">1 500 Р</span></h2>
          <div id="stories"></div>
          <!--Video mobile-->
          <!--          <div class="videostory__video polishing-video-top_mobile">-->
          <!--            <div class="videostory__image">-->
          <!--              <img src="assets/images/photos/polishing-video.jpg" alt="">-->
          <!--            </div>-->
          <!--            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'-->
          <!--               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox-->
          <!--               data-width="900" data-height="506"><span></span></a>-->
          <!--          </div>-->
          <div class="videostory__video polishing-video-top_mobile">
            <div class="videostory__image  video_wrapper_full js-videoWrapper">
              <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen
                      data-src="https://www.youtube.com/embed/4QDbRuNXdoI?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
              <button class="videoPoster js-videoPoster">
                <img src="assets/images/photos/polishing-video.jpg" alt="">
                <a class="video-slider__play"><span></span></a>
              </button>
            </div>
          </div>
          <a href="" class="button polishing__top-button"><span>Хочу так же</span></a>
        </div>

        <div class="page-header__navigation">
          <a href="#types-polishing" class="link dashed link_white"
             data-js-scroll-to="portfolio"><span>Виды полировки</span></a>
          <a href="#polishing-comparison" class="link dashed link_white"
             data-js-scroll-to="prices"><span>Сравнение</span></a>
          <a href="#polishing-portfolio" class="link dashed link_white"
             data-js-scroll-to="reviews"><span>Портфолио</span></a>
          <a href="#polishing-price" class="link dashed link_white" data-js-scroll-to="offers"><span>Цены</span></a>
          <a href="#polishing-reviews" class="link dashed link_white"
             data-js-scroll-to="specialists"><span>Отзывы</span></a>
          <a href="#polishing-consultation" class="link dashed link_white" data-js-scroll-to="consultation"><span>Консультация</span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Как в день покупки -->
  <div class="polishing-video videostory ">
    <div class="white-bg"></div>
    <div class="row">
      <div class="videostory__info">
        <h2>Машина —<br>
          как в день покупки</h2>
        <p>Даже после нескольких лет активной эксплуатации
          ваш автомобиль снова будет выглядеть как новый.<br>
          Запишитесь на полировку и убедитесь сами. Эффективно боремся со всеми последствиями езды по отечественным
          дорогам:
        </p>
        <div class="service-about__list">
          <div>
            <span>Удаляем Царапины </span><br>
            сколы и мелкие повреждения
          </div>
          <div>
            <span>Устраняем Пятна</span><br>
            от липовых почек и птичьего помёта
          </div>
          <div>
            <span>ликвидируем Следы</span><br>
            воздействия соли и дорожных реагентов
          </div>
        </div>
      </div>
      <!--      <div class="videostory__video">-->
      <!--        <div class="videostory__image">-->
      <!--          <img src="assets/images/photos/polishing-video.jpg" alt="">-->
      <!--        </div>-->
      <!--        <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE' class="video-slider__play popupbox-video fancybox.iframe"-->
      <!--           data-small-btn="true" data-fancybox data-width="900" data-height="506"><span></span></a>-->
      <!--      </div>-->
      <div class="videostory__video ">
        <div class="videostory__image  video_wrapper_full js-videoWrapper">
          <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen
                  data-src="https://www.youtube.com/embed/4QDbRuNXdoI?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
          <button class="videoPoster js-videoPoster">
            <img src="assets/images/photos/polishing-video.jpg" alt="">
            <a class="video-slider__play"><span></span></a>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Виды полировки -->
  <div class="cost-of cost-of_other types-polishing " id="types-polishing">
    <div class="cost-of__underlay" data-js="underlay">
      <div class="row">
        <div></div>
        <div></div>
      </div>
    </div>
    <div class="row row_with-margin" data-js="underlay-content">
      <h2 class="h2_large">Все виды полировки в
        <nobr>AMD plus</nobr>
      </h2>
      <h3 class="h3_white">Защита и блеск кузова вашего автомобиля</h3>
      <p>В AMD plus можно заказать комплексную полировку автомобиля или локальную обработку отдельных элементов кузова.
        Полировать автомобиль проще, чем перекрасить. А при продаже такая машина будет стоить дороже.</p>
    </div>
    <div class="row main-deteiling">
      <div class="main-deteiling__left-block">
        <div>
          <a href="" class="main-deteiling__link">Абразивная <span class="polishing-price"><nobr>от 5 000 Р</nobr></span></a>
          <p class="main-deteiling__text">Удаление дефектов на авто с пробегом</p>
          <a href="" class="main-deteiling__link">Защитная <span class="polishing-price"><nobr>от 6 000 Р</nobr></span></a>
          <p class="main-deteiling__text">Защита кузова автомобиля от повреждений</p>
          <a href="" class="main-deteiling__link">Керамическая <span class="polishing-price"><nobr>от 15 000 Р</nobr></span></a>
          <p class="main-deteiling__text">Усиленная защита ЛКП с гарантией до 7 лет</p>
        </div>
        <div>
          <a href="" class="main-deteiling__link">Восстановительная <span class="polishing-price"><nobr>от 7 000 Р</nobr></span></a>
          <p class="main-deteiling__text">Удаление царапин и потёртостей на ЛКП</p>
          <a href="" class="main-deteiling__link">Экспресс <span class="polishing-price"><nobr>от 4 000 Р</nobr></span></a>
          <p class="main-deteiling__text">Преображение кузова за 5-6 часов</p>
          <a href="" class="main-deteiling__link">Локальная <span class="polishing-price"><nobr>от 2 000 Р</nobr></span></a>
          <p class="main-deteiling__text">Устранение дефектов на одном элементе</p>
        </div>
      </div>
      <div class="main-deteiling-right-block">
        <a href="" class="main-deteiling__link">Полировка фар</a>
        <a href="" class="main-deteiling__link">Полировка царапин</a>
        <a href="" class="main-deteiling__link">Полировка дисков</a>
        <a href="" class="main-deteiling__link">Полировка бампера</a>
        <a href="" class="main-deteiling__link">Полировка капота</a>
        <a href="" class="main-deteiling__link">Полировка двери</a>
      </div>
    </div>
  </div>
  <div class="polishing-view_bottom">
    <div class="row ">
      <div class="cost-of__note__text polishing-view">
        <p>
          Цена на полировку зависит от класса авто, особенностей ситуации, Ваших индивидуальных пожеланий и
          предпочтений.
          Чтобы получить <a href="" class="link link_strong dashed"><span>индивидуальную оценку стоимости</span></a>
          услуг, пожалуйста, проконсультируйтесь со специалистом.
        </p>
      </div>
    </div>
  </div>
  <!-- Сравнение -->
  <div class="comparison" id="polishing-comparison">
    <div class="row">
      <h2>Просто сравните</h2>
      <h3>Цены. Эффект обработки. Срок действия</h3>
    </div>
    <div class="row">
      <div class="comparison__left-block">
        <p>Восстановительная/ Абразивная полировка, <span class="strong">от 2 000 Р</span></p>
        <div>
          <div class="comparison-line-wrapper">
            <div class="comparison__line-yellow line-yellow_percent-01"></div>
          </div>
          <p class="comparison__percent">42%</p>
        </div>
        <div>
          <div class="comparison-line-wrapper">
            <div class="comparison__line-black line-black_percent-01"></div>
          </div>
          <p class="comparison__time">1 год</p></div>
        <p>Полировка «Жидкое стекло», <span class="strong"><nobr>от 2 000 Р</nobr></span></p>
        <div>
          <div class="comparison-line-wrapper">
            <div class="comparison__line-yellow line-yellow_percent-02"></div>
          </div>
          <p class="comparison__percent">57%</p></div>
        <div>
          <div class="comparison-line-wrapper">
            <div class="comparison__line-black line-black_percent-02"></div>
          </div>
          <p class="comparison__time">1 год</p></div>
        <p>Полимерное покрытие Opti-Seal, <span class="strong"><nobr>от 5 000 Р</nobr></span></p>
        <div>
          <div class="comparison-line-wrapper">
            <div class="comparison__line-yellow line-yellow_percent-03"></div>
          </div>
          <p class="comparison__percent">57%</p></div>
        <div>
          <div class="comparison-line-wrapper">
            <div class="comparison__line-black line-black_percent-03"></div>
          </div>
          <p class="comparison__time">2 года</p></div>
        <p>Гибридное покрытие Gloss-Coat, <span class="strong"><nobr>от 20 000 Р</nobr></span></p>
        <div>
          <div class="comparison-line-wrapper">
            <div class="comparison__line-yellow line-yellow_percent-04"></div>
          </div>
          <p class="comparison__percent">71%</p></div>
        <div>
          <div class="comparison-line-wrapper">
            <div class="comparison__line-black line-black_percent-04"></div>
          </div>
          <p class="comparison__time">2 года</p></div>
        <p>Керамическое покрытие Opti-Coat Pro, <span class="strong"><nobr>от 45 000 Р</nobr></span></p>
        <div>
          <div class="comparison-line-wrapper">
            <div class="comparison__line-yellow line-yellow_percent-05"></div>
          </div>
          <p class="comparison__percent">85%</p></div>
        <div>
          <div class="comparison-line-wrapper">
            <div class="comparison__line-black line-black_percent-05"></div>
          </div>
          <p class="comparison__time">5 лет</p></div>
        <p>Премиум покрытие Opti-Coat Pro+, <span class="strong"><nobr>от 75 000 Р</nobr></span></p>
        <div>
          <div class="comparison-line-wrapper">
            <div class="comparison__line-yellow line-yellow_percent-06"></div>
          </div>
          <p class="comparison__percent">100%</p></div>
        <div>
          <div class="comparison-line-wrapper">
            <div class="comparison__line-black line-black_percent-06"></div>
          </div>
          <p class="comparison__time">7 лет</p></div>
      </div>
      <div class="comparison__right-block">
        <div class="portfolio-brands__more">
          <p><span class="strong">WOW-эффект</span><br>
            Визуальный блеск, гладкость ЛКП, а также совокупность защитных
            и гидрофобных свойств.</p>
        </div>
        <div class="portfolio-brands__more">
          <p>
            <span class="strong">Срок службы</span><br>
            Время, в течение которого покрытие остается на кузове машины и сохраняет свои свойства.
          </p>
          <p class="comparison-text-bottom">Цена полировки зависит от класса автомобиля, степени повреждений ЛКП,
            выбранного материала и ваших
            предпочтений. Хотите заранее знать, сколько будет стоить реставрация вашей машины?
            <br>
            <br>
            <a href="" class="link link_strong dashed"><span>Пришлите нам фото</span></a>, мы сделаем предварительный
            расчет.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Персональный подход -->
  <div class="portfolio" id="polishing-portfolio">
    <div class="row">
      <h2>Портфолио</h2>
      <h3>По-разному полируем европейские и азиатские автомобили</h3>
      <p>
        Для покрытия кузова автопроизводители разных стран используют лак с различной твёрдости. Поэтому мастера AMD
        plus учитывают не только год выпуска, но и марку машины. К примеру,
        для обработки японского лака, мы нагреваем полировальную машину до температуры +65 градусов:
        только так можно добиться пластичности покрытия и убрать все мелкие царапины с ЛКП.
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
          <a href="javascript:void(0);" class="item">
            <div class="portfolio-slider-small__image-wrapper">
              <div class="portfolio-slider-small__image">
                <img src="assets/images/sliders/polishing/polishing-smal-slider-img-01.jpg" alt="" class="">
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
          <a href="javascript:void(0);" class="item">
            <div class="portfolio-slider-small__image-wrapper">
              <div class="portfolio-slider-small__image">
                <img src="assets/images/sliders/polishing/polishing-smal-slider-img-02.jpg" alt="" class="">
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
          <a href="javascript:void(0);" class="item">
            <div class="portfolio-slider-small__image-wrapper">
              <div class="portfolio-slider-small__image">
                <img src="assets/images/sliders/polishing/polishing-smal-slider-img-03.jpg" alt="" class="">
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
          <a href="javascript:void(0);" class="item">
            <div class="portfolio-slider-small__image-wrapper">
              <div class="portfolio-slider-small__image">
                <img src="assets/images/sliders/polishing/polishing-smal-slider-img-02.jpg" alt="" class="">
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
            <a href="" class="slider__link">Ещё работы</a>
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
          Смотрите ещё больше работ в <a href="javascript:void(0);" class="link underline"><span>портфолио по ремонту салона</span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Форма -->
  <div class="feedback">
    <div class="row">
      <div class="feedback__grid">
        <div>
          <h2 class="h2_yellow">Рассчитате стоимость онлайн</h2>
          <p>
            Позвоните по телефону <a href="tel:+7 (495) 154-63-97" class="link link_yellow phone">+7 (495) 154-63-97</a>
            или приложите фото повреждения. <br>
            Мы свяжемся с вами, сообщим стоимость и запишем на ремонт в удобное для вас время.
          </p>
          <form action=""
                method="POST"
                class="feedback__form"
          >
            <div class="feedback__form__half">
              <div class="form__group form_name input__wrapper form__group_pad-r">
                <input type="text" name="name" class="name input" placeholder="Имя">
              </div>
              <div class="form__group form_phone input__wrapper form__group_pad-l">
                <input type="text" name="phone" class="phone input" placeholder="Номер телефона*">
              </div>
            </div>
            <div class="form__group form_text input__wrapper ">
              <textarea name="text" class="text input" type="text"
                        placeholder="Пожалуйста, опишите подробно Вашу проблему"></textarea>
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
          <img src="assets/images/photos/polishing-man.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- Дефекты -->
  <div class="polishing-defect videostory ">
    <div class="white-bg"></div>
    <h2 class="row">Убираем дефекты без вреда для ЛКП</h2>
    <div class="row">
      <div class="videostory__info">
        <h2>Не маскируем, а удаляем</h2>
        <h3>Полируем составами на безвосковой матрице</h3>
        <p>Эффект полировки восковыми пастами недолговечен и обычно пропадает через несколько моек. Причина в том, что
          микроповреждения при такой обработке не удаляются полностью,
          а «забиваются» воском, который со временем вымывается.
          <br>
          <br>
          Мы бережно срезаем несколько микрон повреждённого слоя ЛКП вместе с царапинами. А затем полируем безвосковыми
          пастами и компенсируем удалённые микроны защитным покрытием. Поэтому WOW-эффект обработки длится не пару
          месяцев, а несколько лет. Приезжайте и оцените.
        </p>
        <div class="block-number">
          <div class="block-number__number">от 12</div>
          <div class="block-number__content">
            <div class="block-number__title">месяцев</div>
            <div class="block-number__desc">сохраняется WOW-эффект</div>
          </div>
        </div>
      </div>
      <!--      <div class="videostory__video">-->
      <!--        <div class="videostory__image">-->
      <!--          <img src="assets/images/photos/polishing-defect-img.jpg" alt="">-->
      <!--        </div>-->
      <!--        <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE' class="video-slider__play popupbox-video fancybox.iframe"-->
      <!--           data-small-btn="true" data-fancybox data-width="900" data-height="506"><span></span></a>-->
      <!--      </div>-->
      <div class="videostory__video ">
        <div class="videostory__image  video_wrapper_full js-videoWrapper">
          <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen
                  data-src="https://www.youtube.com/embed/4QDbRuNXdoI?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
          <button class="videoPoster js-videoPoster">
            <img src="assets/images/photos/polishing-defect-img.jpg" alt="">
            <a class="video-slider__play"><span></span></a>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Инновации -->
  <div class="innovation">
    <div class="row">
      <div class="innovation__left-block">
        <h2>Закрепляем эффект полировки</h2>
        <h3>Используем инновации в сфере полировки</h3>
        <p>Для каждого нового автомобиля обязательно используем новый полировальный диск, добиваясь идеального
          результата полировки.
          В работе используем только самые последние модели полировальных машин: орбитальные и экстцентриковые.
          <br>
          <br>
          <span class="strong">А ещё — работаем только с проверенными материалами:
          жидкими составами Optimum Polimer Technology (США).</span>
        </p>
        <p class="innovation-text_mobile"><span class="strong">Спреевая полировальная система
            Optimum Polyimer Technology
            не содержит филлеров, воска и силикона.</span>
          <br>
          <br>
          Поэтому позволяет не маскировать,
          а полностью удалять царапины
          с поверхности кузова. А значит — надолго обеспечить результат полировки.
        </p>
      </div>
      <div class="innovation__center-block">
        <img src="assets/images/photos/innovation-img-01.png" alt="">
        <img src="assets/images/photos/innovation-img-02.png" alt="" class="innovation-img-car">
        <p class="center-block__caption">Американский премиум</p>
        <p> Официальный представитель<br>
          Opti Coat в России</p>
        <a href="" class="button_simple button">Подробнее</a>
        <div class="innovation__center-block-after"></div>
        <div class="innovation__center-block-before"></div>
      </div>
      <div class="innovation__right-block">
        <p><span class="strong">Спреевая полировальная система
            Optimum Polyimer Technology
            не содержит филлеров, воска и силикона.</span>
          <br>
          <br>
          Поэтому позволяет не маскировать,
          а полностью удалять царапины
          с поверхности кузова. А значит — надолго обеспечить результат полировки.
        </p>
      </div>
    </div>
  </div>

  <!-- Контроль качества -->
  <div class="washing-steps">
    <div class="row">
      <h2>От мойки до нанесения защиты</h2>
      <h3>Контроль качества на каждом этапе полировки</h3>
      <p>Секрет качественной полировки — внимание к мелочам. Наши материалы позволяют быстро и эффективно удалять с
        поверхности кузова окислы, потёртости, царапины, голограммы и другие недостатки. И заставляет его сверкать как
        зеркало!
      </p>
    </div>
    <div class="row">
      <div class="portfolio-slider-wrapper" data-js="portfolio-slider-wrapper">
        <div class="portfolio-slider-text" data-js="portfolio-slider-text">
          <a href="javascript:void(0);" class="item">
            <div>
              <p class="steps">1 этап</p>
              <p class="steps__caption">Двухфазная мойка</p>
              <p class="steps__text">Бесконтактная мойка с применением специальной автохимии. На этом этапе мы убираем
                самые грубые загрязнения. Устраняем мелкие вкрапления, плёнки, нагары и дорожную грязь.
              </p>
            </div>
            <div>
              <div class="portfolio-slider__info portfolio-slider__time">~2,5 часа</div>
            </div>
          </a>
          <a href="javascript:void(0);" class="item">
            <div>
              <p class="steps">2 этап</p>
              <p class="steps__caption">Трехфазная мойка</p>
              <p class="steps__text">Бесконтактная мойка с применением специальной автохимии. На этом этапе мы убираем
                самые грубые загрязнения. Устраняем мелкие вкрапления, плёнки, нагары и дорожную грязь.
              </p>

            </div>
            <div>
              <div class="portfolio-slider__info portfolio-slider__time">2,5 часа</div>
            </div>
          </a>
        </div>
        <div class="portfolio-slider" data-js="portfolio-slider">
          <div class="item">
            <div class="portfolio-slider__image"
                 style="background-image: url(assets/images/photos/washing-steps-car.png);"></div>
          </div>
          <div class="item">
            <div class="portfolio-slider__image"
                 style="background-image: url(assets/images/photos/washing-steps-car.png);"></div>
          </div>
        </div>
        <div class="portfolio-slider__navigator slider-navigator">
          <div>
            <div class="prev">
              <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                   viewBox="0 0 8.5 14" xml:space="preserve"><path transform="rotate(134.999 4.347 9.857)"
                                                                   d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/></svg>
            </div>
            <div class="next">
              <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                   viewBox="0 0 8.5 14" xml:space="preserve"><path transform="rotate(134.999 4.347 9.857)"
                                                                   d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Стоимость -->
  <div class="cost-of polishing-price" data-js-scroll-target="prices" id="polishing-price">
    <div class="cost-of__underlay" data-js="underlay">
      <div class="row">
        <div></div>
        <div></div>
      </div>
    </div>
    <div class="row row_with-margin" data-js="underlay-content">
      <h2>Цены на полировку</h2>
      <h3 class="h3_white">Фиксируем стоимость работ после оценки</h3>
      <p>
        Отполировать автомобиль дешевле, чем реставрировать кузов после коррозии. Точная стоимость полировки своей
        машины зависит от класса машины и степени повреждений.
      </p>
    </div>
    <div class="row">
      <div class="cost-of__slider-wrapper" data-js="cost-of-slider-wrapper">
        <div class="cost-of__slider" data-js="cost-of-slider">
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/polishing/polishing-01.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Полировка кузова</div>
                <div class="cost-of-item__price">от 9 000 Р</div>
                <a href="includes/modals/price-list.php" class="link dashed link_white fancybox-modal fancybox.ajax"
                   data-js="ajax-link"><span>Подробнее о цене</span></a>
                <div class="cost-of-item__time">от 6 часов </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Записаться</span></a>

                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/polishing/polishing-02.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Экспресс полировка</div>
                <div class="cost-of-item__price">от 5 000 Р</div>
                <a href="includes/modals/price-list.php" class="link dashed link_white fancybox-modal fancybox.ajax"
                   data-js="ajax-link"><span>Подробнее о цене</span></a>
                <div class="cost-of-item__time">от 2 часов </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Записаться</span></a>

                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/polishing/polishing-03.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Полировка фар</div>
                <div class="cost-of-item__price">1 000 Р</div>
                <a href="includes/modals/price-list.php" class="link dashed link_white fancybox-modal fancybox.ajax"
                   data-js="ajax-link"><span>Подробнее о цене</span></a>
                <div class="cost-of-item__time">30 мин.</div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Записаться</span></a>

                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/polishing/polishing-04.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Локальная полировка</div>
                <div class="cost-of-item__price">от 2 500 Р</div>
                <a href="includes/modals/price-list.php" class="link dashed link_white fancybox-modal fancybox.ajax"
                   data-js="ajax-link"><span>Подробнее о цене</span></a>
                <div class="cost-of-item__time">от 1 часа </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Записаться</span></a>

                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/polishing/polishing-02.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Экспресс полировка</div>
                <div class="cost-of-item__price">от 5 000 Р</div>
                <a href="includes/modals/price-list.php" class="link dashed link_white fancybox-modal fancybox.ajax"
                   data-js="ajax-link"><span>Подробнее о цене</span></a>
                <div class="cost-of-item__time">от 2 часов </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Записаться</span></a>

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
            <a href="" class="slider__link">Ещё цены</a>
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

  <div class="cost-of__note">
    <div class="row">
      <div class="cost-of__note__text">
        <p>
          Цена на полировку зависит от класса авто, особенностей ситуации, ваших индивидуальных пожеланий и
          предпочтений.
          <a href="" class="link link_strong dashed"><span>Отправьте нам фото</span></a> — назовём примерную цену.
        </p>
      </div>
    </div>
  </div>

  <!-- Разделитель -->
  <?php include("includes/divider.php") ?>

  <!-- Отзывы  -->
  <div class="reviews-block" data-js-scroll-target="reviews" id="polishing-reviews">
    <div class="row">
      <h2>Нам доверяют, нас рекомендуют</h2>
      <h3>Отзывы клиентов о полировке в AMD plus</h3>
      <div class="reviews-block__grid">
        <div>
          <p>
            Спасибо, что выбираете нас и рекомендуете своим знакомым. Гордимся вашим доверием и стараемся стать ещё
            лучше. Будем рады узнать ваше мнение о полировке кузова в детейлинг-центрах сети.
          </p>
          <div class="block-number">
            <div class="block-number__number">97%</div>
            <div class="block-number__content">
              <div class="block-number__title">наших клиентов</div>
              <div class="block-number__desc">рекомендуют
                <nobr>«AMD plus»</nobr>
                <br>своим друзьям и знакомым
              </div>
            </div>
          </div>
          <div class="portfolio-brands__more">
            Посмотрите еще <a href="javascript:void(0);" class="link underline link_nowrap"><span>больше отзывов</span></a>
            или оставьте <a href="javascript:void(0);" class="link underline link_nowrap"><span>свой отзыв</span></a>.
          </div>
        </div>
        <div>
          <div class="reviews-slider-wrapper" data-js="reviews-slider-wrapper">
            <div class="reviews-slider" data-js="reviews-slider">
              <div class="item">
                <div class="review-item__top">
                  <div class="review-item__photo">
                    <img src="assets/images/photos/review-photo.jpg" alt="">
                  </div>
                  <div class="review-item__info">
                    <div class="review-item__title">Результатом очень доволен!</div>
                    <div class="review-item__author">Сергей Гусев</div>
                    <div class="review-item__date">5 февраля 2018 / Договор № AMD-6181</div>
                  </div>
                </div>
                <div class="review-item__body">
                  Здравствуйте, меня зовут Сергей Гусев, я автомобильный видеоблогер.
                  У меня проект по восстановлению BMW X5 в кузове е70. Салон автомобиля был в плохом состоянии.
                  Обод руля стерся, софт тач пластик облупился, боковина водительского сиденья промялась и потрескалась,
                  подлокотник водительской двери потёрся и треснул. Ребята из AMD Plus решили все эти проблемы!
                  Перешили руль, покрасили элементы с облупившимся софт тач пластиком, набили боковину сидушки и
                  покрасили сиденье,
                  полностью перешили подлокотник водительской двери! Все работы произвели качественно и быстро.
                  Результатом очень доволен!
                  Теперь в салон автомобиля приятно садиться!
                </div>
              </div>
              <div class="item">
                <div class="review-item__top">
                  <div class="review-item__photo">
                    <img src="assets/images/photos/review-photo.jpg" alt="">
                  </div>
                  <div class="review-item__info">
                    <div class="review-item__title">Результатом очень доволен!</div>
                    <div class="review-item__author">Сергей Гусев</div>
                    <div class="review-item__date">5 февраля 2018 / Договор № AMD-6181</div>
                  </div>
                </div>
                <div class="review-item__body">
                  Здравствуйте, меня зовут Сергей Гусев, я автомобильный видеоблогер.
                  У меня проект по восстановлению BMW X5 в кузове е70. Салон автомобиля был в плохом состоянии.
                  Обод руля стерся, софт тач пластик облупился, боковина водительского сиденья промялась и потрескалась,
                  подлокотник водительской двери потёрся и треснул. Ребята из AMD Plus решили все эти проблемы!
                  Перешили руль, покрасили элементы с облупившимся софт тач пластиком, набили боковину сидушки и
                  покрасили сиденье,
                  полностью перешили подлокотник водительской двери! Все работы произвели качественно и быстро.
                  Результатом очень доволен!
                  Теперь в салон автомобиля приятно садиться!
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
      </div>
    </div>
  </div>

  <!-- Форма Аудит -->
  <!--  --><?php //include("includes/form-audit.php") ?>

  <!-- Акции -->
  <!--  --><?php //include("includes/offers.php") ?>

  <!-- Специалисты -->
  <!--  --><?php //include("includes/specialists.php") ?>

  <!-- Вызов специалиста -->
  <!--  --><?php //include("includes/specialist-call.php") ?>

  <!-- Услуги детейлинга  -->
  <div class="cost-of cost-of_other polishing-deteiling-slider">
    <div class="cost-of__underlay" data-js="underlay">
      <div class="row">
        <div></div>
        <div></div>
      </div>
    </div>
    <div class="row row_with-margin" data-js="underlay-content">
      <h2>Услуги детейлинга</h2>
      <h3 class="h3_white">Восстановление и реставрация вашего авто</h3>
      <p>
        Автомобиль должен производить впечатление не только снаружи. Воспользуйтесь услугами защиты ЛКП и реставрации
        интерьера, и ваша машина точно будет выглядеть как новая. Посмотрите, на что способны мастера AMD plus, и
        приезжайте.
      </p>
    </div>
    <div class="row">
      <div class="cost-of__slider-wrapper" data-js="cost-of-slider-wrapper">
        <div class="cost-of__slider" data-js="cost-of-slider">
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/polishing/polishing-05.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Защитные покрытия</div>
                <div class="cost-of-item__price">от 2 000 Р</div>
                <div class="cost-of-item__time">от 2 часов </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Записаться</span></a>

                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/polishing/polishing-06.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Химчистка салона</div>
                <div class="cost-of-item__price">от 2 000 Р</div>
                <div class="cost-of-item__time">от 2 часов</div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Записаться</span></a>

                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/polishing/polishing-07.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Замена элементов салона</div>
                <div class="cost-of-item__price">от 5 000 Р</div>
                <div class="cost-of-item__time">от 3 часов</div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Записаться</span></a>

                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/polishing/polishing-08.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Покраска руля</div>
                <div class="cost-of-item__price">от 3 300 Р</div>
                <div class="cost-of-item__time">от 3 часов </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Записаться</span></a>

                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="mask"></div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/polishing/polishing-06.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Химчистка салона</div>
                <div class="cost-of-item__price">от 2 000 Р</div>
                <div class="cost-of-item__time">от 2 часов </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Записаться</span></a>

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
            <a href="#" class="slider__link">Ещё услуги</a>
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

  <div class="cost-of__note polishing-deteiling-slider__note">
    <div class="row">
      <div class="cost-of__note__text">
        <p>
          Цена на реставрацию, тюнинг и детейлинг зависит от класса авто, особенностей ситуации,
          Ваших индивидуальных пожеланий и предпочтений. Чтобы получить
          <a href="javascript:void(0);" class="link dashed link_strong"><span>индивидуальную оценку стоимости</span></a>
          услуг,
          пожалуйста, проконсультируйтесь со специалистом.
        </p>
      </div>
    </div>
  </div>

  <!-- Консультация форма  -->
  <div class="feedback polishing-consultation " data-js-scroll-target="consultation" id="polishing-consultation">
    <div class="row">
      <div class="feedback__grid">
        <div>
          <h2>Обращайтесь!</h2>
          <p>
            Получите консультацию по телефону <a href="tel:+7 (495) 154-63-97" class="link link_strong">+7 (495)
              154-63-97</a> или оставьте свои контакты. <br>
            Наш менеджер свяжется с вами и ответит на все вопросы.
          </p>
          <form action=""
                method="POST"
                class="feedback__form"
          >
            <div class="feedback__form__half">
              <div class="form__group form_name input__wrapper form__group_pad-r">
                <input type="text" name="name" class="name input" placeholder="Имя">
              </div>
              <div class="form__group form_phone input__wrapper form__group_pad-l">
                <input type="text" name="phone" class="phone input" placeholder="Номер телефона*">
              </div>
            </div>

            <div class="form__group form_text input__wrapper">
              <textarea name="text" class="text input" type="text"
                        placeholder="Пожалуйста, опишите подробно Вашу проблему"></textarea>
            </div>
            <div class="input__wrapper_file photos-input">
              <input class="input_file"
                     id="feedback__images_white"
                     type="file"
                     name="files[]"
                     accept="image/jpeg,image/png,image/jpg,image/bmp" multiple
                     data-js="file-input"
              >
              <label class="input__label_file" for="feedback__images_white">Прикрепить фото</label>
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
            <!--                        <img src="/assets/images/bgs/main-consult.png" alt="">-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="button-up">
  <span></span>
</div>

<!-- Footer -->
<?php include("includes/footer.php") ?>

<script src="assets/js/plugins/jquery-3.3.1.min.js"></script>
<script src="assets/js/plugins/slick.min.js"></script>
<script src="assets/js/plugins/jquery.fancybox.min.js"></script>
<script src="assets/js/plugins/zuck.min.js"></script>
<script src="assets/js/plugins/jquery.maskedinput.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>
</html>