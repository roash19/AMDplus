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
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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

<div class="content services">
  <!-- Шапка сайта -->
  <div class="page-header">
    <div class="page-header__wallpaper"
         style="background-image: url(assets/images/bgs/top_bg.jpg);">
    </div>
    <div class="page-header__container">
      <div class="row">
        <div class="page-header__breadcrumbs">
          <div class="breadcrumbs">
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="index.php">Главная</a>
            <i> / </i>
            <a class="link breadcrumbs__link" href="javascript:void(0);">Полировка кузова</a>
            <i> / </i>
            <span class="breadcrumbs__link breadcrumbs__link_current">Ремонт салона</span>
          </div>
          <div class="page-header__page-id">Страница 11</div>
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
          <h1 class="h1">Ремонт салона</h1>
        </div>
      </div>
      <div class="row">
        <div class="page-header__navigation">
          <a href="#portfolio" class="link dashed link_white"><span>Портфолио</span></a>
          <a href="#prices" class="link dashed link_white"><span>Цены</span></a>
          <a href="#reviews" class="link dashed link_white"><span>Отзывы</span></a>
          <a href="#offers" class="link dashed link_white"><span>Акции</span></a>
          <a href="#specialists" class="link dashed link_white"><span>Специалисты</span></a>
          <a href="#consultation" class="link dashed link_white"><span>Консультация</span></a>
        </div>
      </div>
      <!-- Слайдер портфолио (большой) -->
      <div class="row">
        <div class="portfolio-slider-wrapper" data-js="portfolio-slider-wrapper">
          <div class="portfolio-slider-text" data-js="portfolio-slider-text">
            <a href="javascript:void(0);" class="item">
              <div>
                <span>
                    Чистка, <br>
                    локальная покраска
                    и кондиционирование
                    сиденья <strong>BMW 750 Individual</strong>
                </span>
              </div>
              <div>
                <div class="portfolio-slider__info portfolio-slider__price">5 000 Р</div>
                <div class="portfolio-slider__info portfolio-slider__time">2,5 часа</div>
              </div>
              <span href="javascript:void(0);" class="link underline link_nowrap"><span>Подробнее</span></span>
            </a>
            <a href="javascript:void(0);" class="item">
              <div>
                <span>
                    Чистка, <br>
                    локальная покраска
                    и кондиционирование
                    сиденья <strong>BMW 750 Individual</strong>
                </span>
              </div>
              <div>
                <div class="portfolio-slider__info portfolio-slider__price">5 000 Р</div>
                <div class="portfolio-slider__info portfolio-slider__time">2,5 часа</div>
              </div>
              <span href="javascript:void(0);" class="link underline link_nowrap"><span>Подробнее</span></span>
            </a>
          </div>
          <div class="portfolio-slider" data-js="portfolio-slider">
            <div class="item">
              <a href="">
                <div class="portfolio-slider__image"
                     style="background-image: url(assets/images/sliders/portfolio-big/portfolio_slider.jpg);">
                </div>
              </a>
            </div>
            <div class="item">
              <a href="">
                <div class="portfolio-slider__image"
                     style="background-image: url(assets/images/sliders/portfolio-big/portfolio_slider.jpg);">
                </div>
              </a>
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
              <a href="portfolio.php" class="slider__link">Ещё работы</a>
              <div class="next">
                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                     viewBox="0 0 8.5 14" xml:space="preserve">
                  <path transform="rotate(134.999 4.347 9.857)" d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                  <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/></svg>
              </div>
            </div>
          </div>
          <div class="portfolio-slider__button">
            <a href="javascript:void(0);" class="button button_dark button_large"
               data-js="ajax-link"><span>Хочу так же</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Об услуге -->
  <?php include("includes/service-about.php") ?>

  <!-- Стоимость -->
  <?php include("includes/cost-of.php") ?>

  <!-- Форма -->
  <?php include("includes/form-cost.php") ?>

  <!-- Портфолио (маленький слайдер) -->
  <?php include("includes/portfolio-small.php") ?>

  <!-- Разделитель -->
  <?php include("includes/divider.php") ?>

  <!-- Видеогалерея -->
  <?php include("includes/video-gallery.php") ?>

  <!-- Фотогалерея -->
  <?php include("includes/image-gallery.php") ?>

  <!-- Отзывы -->
  <?php include("includes/reviews.php") ?>

  <!-- Вопрос-ответ -->
  <?php include("includes/faq.php") ?>

  <!-- Акции -->
  <?php include("includes/offers.php") ?>

  <!-- Специалисты -->
  <?php include("includes/specialists.php") ?>

  <!-- Вопрос-ответ -->
  <?php include("includes/form-consultation.php") ?>

  <!-- Другие услуги -->
  <?php include("includes/service-other.php") ?>

  <!-- Форма Аудит -->
  <!--  --><?php //include("includes/form-audit.php") ?>

  <!-- Вызов специалиста -->
  <!--  --><?php //include("includes/specialist-call.php") ?>
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