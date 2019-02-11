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

<div class="content video-tour">
  <!-- Шапка сайта -->
  <div class="page-header">
    <div class="page-header__wallpaper"
         style="background-image: url(assets/images/bgs/video-tour-top_bg.jpg);">
    </div>
    <div class="page-header__container">
      <div class="row">
        <div class="page-header__breadcrumbs">
          <div class="breadcrumbs">
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">Главная</a>
            <i> / </i>
            <span class="breadcrumbs__link breadcrumbs__link_current">3D Тур</span>
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
          <h1 class="h1 title">3D тур</h1>
          <p class="description">Виртуальный 3D тур — уникальная возможность побывать в одном из детейлинг-центров сети
            «AMD plus», не покидая дом или офис. Заходите в гости! Посетите зону оформления заказов, комнату отдыха,
            загляните в пошивочный цех.</p>
          <!--    Слайдер      -->
          <div class="video-slider-wrapper" data-js="video-slider-wrapper">
            <div class="video-slider" data-js="video-slider">
              <div class="item">
                <div class="video-slider__image">
                  <img src="assets/images/bgs/video-bg.jpg" alt="">
                </div>
                <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
                   class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
                   data-width="900" data-height="506"><span></span></a>
              </div>
              <div class="item">
                <div class="video-slider__image">
                  <img src="assets/images/bgs/video-bg.jpg" alt="">
                </div>
                <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
                   class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
                   data-width="900" data-height="506"><span></span></a>
              </div>
            </div>
            <div class="video-slider__navigator slider-navigator_with-bg" data-js="video-slider-navigator">
              <div>
                <div class="prev">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                       viewBox="0 0 8.5 14" xml:space="preserve"><path transform="rotate(134.999 4.347 9.857)"
                                                                       d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                    <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/></svg>
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
          <a href="includes/modals/online-appointment.php"
             class="button video-tour__top-button fancybox-modal fancybox.ajax"><span>Записаться</span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Площадь -->
  <div class="square">
    <div class="white-bg"></div>
    <div class="row">
      <div class="block-number">
        <div class="block-number__number">324</div>
        <div class="block-number__content">
          <div class="block-number__title">квадратных метра</div>
          <div class="block-number__desc">чистого профессионализма</div>
        </div>
      </div>
      <img src="assets/images/photos/amdplus-studio.png" alt="" class="square__img">
    </div>
  </div>

  <!-- Видео -->
  <div class="video-tour__video">
    <p>Посетить детейлинг-центр<br><span>по ул. Красного Маяка, 16</span></p>
    <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE' class="video-slider__play popupbox-video fancybox.iframe"
       data-small-btn="true" data-fancybox data-width="900" data-height="506"><span></span></a>
  </div>
  <!-- Видеоистория -->
  <div class="videostory">
    <div class="white-bg"></div>
    <div class="row">
      <div class="videostory__info">
        <h2 class="h2_large">Видеоистория</h2>
        <h3>Автоателье «AMD» глазами Google</h3>
        <p>Компания Google побывала в гостях у «AMD plus» в Москве
          и сняла небольшое видео про работу компании и её специалистов.
          Посмотрите историю про «AMD plus» глазами Google</p>
        <div class="video-block__youtube">
          Больше видео на нашем YouTube канале <a href="javascript:void(0);" class="video-block__youtube__link"
                                                  target="_blank">Подписаться</a>
        </div>
        <div class="block-number">
          <div class="block-number__number">4,6</div>
          <div class="block-number__content">
            <div class="block-number__title">наш рейтинг</div>
            <div class="block-number__desc">на независимой площадке Google</div>
          </div>
        </div>
      </div>
      <div class="videostory__video ">
        <div class="videostory__image  video_wrapper_full js-videoWrapper">
          <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/4QDbRuNXdoI?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
          <button class="videoPoster js-videoPoster">
            <img src="assets/images/photos/videostory-image.jpg" alt="">
            <a class="video-slider__play"><span></span></a>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!--  Уютный детейлинг-->
  <div class="video-tour-detailing">
    <div class="image-gallery">
      <div class="row">
        <h2 class="h2_large">Уютный детейлинг</h2>
        <h3>Автоателье «AMD plus» в деталях</h3>
        <p>
          «AMD plus» — это не только качественные услуги и безупречный сервис, но и приятный интерьер, теплая уютная
          атмосфера и вкусный чай с конфетами и печеньем. Специально для вас мы подготовили несколько фотографий нашей
          уютной мастерской.
        </p>
      </div>
      <div class="row">
        <div class="gallery-slider-wrapper" data-js="gallery-slider-wrapper">
          <div class="gallery-slider" data-js="gallery-slider">
            <a href="assets/images/sliders/video-tour-detailing/video-tour_detailing-01.jpg" data-fancybox="gallery"
               class="item">
              <img src="assets/images/sliders/video-tour-detailing/video-tour_detailing-01.jpg" alt="">
            </a>
            <a href="assets/images/sliders/video-tour-detailing/video-tour_detailing-02.jpg" data-fancybox="gallery"
               class="item">
              <img src="assets/images/sliders/video-tour-detailing/video-tour_detailing-02.jpg" alt="">
            </a>
            <a href="assets/images/sliders/video-tour-detailing/video-tour_detailing-03.jpg" data-fancybox="gallery"
               class="item">
              <img src="assets/images/sliders/video-tour-detailing/video-tour_detailing-03.jpg" alt="">
            </a>
            <a href="assets/images/sliders/video-tour-detailing/video-tour_detailing-02.jpg" data-fancybox="gallery"
               class="item">
              <img src="assets/images/sliders/video-tour-detailing/video-tour_detailing-02.jpg" alt="">
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
              <a href="#" class="slider__link">Ещё фото</a>
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
      <div class="row video-tour-detailing__info">
        <div class="video-tour-detailing__image">
          <img src="assets/images/photos/spec-2.jpg" alt="">
        </div>

        <div class="video-tour-detailing__quotation">
          <p class="title">Всегда рады помочь!</p>
          <p class="video-tour-detailing__text">
            Спасибо интерес к нашим услугам, качество которых подтверждено <a href=""
                                                                              class="link underline link_strong"><span>отзывами и рекомендациями</span></a>.<br>
            Выбирая автоателье «AMD plus» — вы выбираете неизменно высокое качество, искренний сервис и честные цены.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Вопросы  -->
  <?php include("includes/have-questions.php") ?>

  <!-- Соцсети  -->
  <?php include("includes/block-social.php") ?>
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