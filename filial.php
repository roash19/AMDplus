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

<div class="content filial">
  <!-- Шапка сайта -->
  <div class="page-header">
    <div class="page-header__wallpaper"
         style="background-image: url(assets/images/bgs/filial_bg.jpg);">
    </div>
    <div class="page-header__container">
      <div class="row">
        <div class="page-header__breadcrumbs">
          <div class="breadcrumbs">
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">Главная</a>
            <i> / </i>
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">Контакты</a>
            <i> / </i>
            <span class="breadcrumbs__link breadcrumbs__link_current">«AMD plus» на ул. Красного маяка</span>
          </div>
          <div class="page-header__page-id">Страница 854</div>
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
          <h1 class="h1 title">«AMD plus» на ул. Красного маяка</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="filia__communication ">
    <div class="row">
      <div class="communication-info__feedback">
        <p class="communication__phone"><span class="communication_bold">+7 (495) 153-74-13 </span>
          <span class="dashed link">Вам перезвонить?</span></p>
        <p class="communication__address">117405, Москва, ул. Красного Маяка, 16, стр3</p>
        <p class="communication__metro">10 минут от станции метро «Пражская»</p>
        <p class="communication__email"><span class="communication_bold">info@amdplus.ru</span></p>
        <p class="communication__time"><span class="communication_bold">с 9:00 до 21:00</span> Ежедневно</p>
        <p class="communication__requisites"><span class="communication_bold">Реквизиты</span> Скачать <a href="" class="link underline">DOC</a>
          или <a href="" class="link underline">PDF</a></p>
      </div>
      <img src="assets/images/bgs/filial-communication.jpg" alt="" class="communication__img">
      <a href="javascript:void(0);" class="button button_dark button_large" data-js="ajax-link"><span>Записаться</span></a>
    </div>
  </div>
  <!-- Карта -->
  <div id="map" class="map"></div>
  <!-- Видео проезда-->
  <div class="videostory">
    <div class="white-bg"></div>
    <div class="row">
      <div class="videostory__info">
        <h2 class="h2_large">Видео проезда</h2>
        <h3>Как проехать до филиала ул. Красного Маяка</h3>
        <p>Посмотрите, как добраться до филиала «AMD plus »на ул. Красного Маяка со стороны Москвы. Специально для вас
          мы подготовили подробное видео проезда с указанием важных ориентиров. Забивайте маршрут и выезжайте. Ждём
          вас!</p>
        <div class="video-block__youtube">
          Подпишитесь на наш YouTube канал,
          чтобы не пропускать новые видео<a href="javascript:void(0);" class="video-block__youtube__link"
                                            target="_blank">Подписаться</a>
        </div>
      </div>
<!--      <div class="videostory__video">-->
<!--        <div class="videostory__image">-->
<!--          <img src="assets/images/bgs/video-directions.jpg" alt="">-->
<!--        </div>-->
<!--        <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE' class="video-slider__play popupbox-video fancybox.iframe"-->
<!--           data-small-btn="true" data-fancybox data-width="900" data-height="506"><span></span></a>-->
<!--      </div>-->

      <div class="videostory__video ">
        <div class="videostory__image  video_wrapper_full js-videoWrapper">
          <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen
                  data-src="https://www.youtube.com/embed/4QDbRuNXdoI?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
          <button class="videoPoster js-videoPoster">
            <img src="assets/images/bgs/video-directions.jpg" alt="">
            <a class="video-slider__play"><span></span></a>
          </button>
        </div>
      </div>



      <div class="video-block__youtube video-block__youtube_mobile">
        Подпишитесь на наш YouTube канал,
        чтобы не пропускать новые видео<a href="javascript:void(0);" class="video-block__youtube__link"
                                          target="_blank">Подписаться</a>
      </div>
    </div>
  </div>

  <!-- Схема проезда -->
  <div class="scheme">
    <div class="row">
      <h2>Схема проезда</h2>
      <h3>Интерактивный слайдер</h3>
      <p class="scheme__text">Чтобы вы могли максимально быстро найти детейлинг-центр «AMD plus» на ул. Красного маяка,
        мы подготовили для вас схему проезда и представили её в виде подробного интерактивного слайдера.
        <span class="scheme__text_mobile">Ознакомьтесь с ним, пожалуйста, выберите удобный маршрут и приезжайте в гости в наше уютное автоателье. Мы
          работаем для вас ежедневно с 9:00 до 21:00 и всегда рады вам помочь!</span></p>
    </div>
    <div class="row ">
      <div class="tabs">
        <span class="tab scheme__tab-title scheme__tab-title_active">Схема проезда с Варшавского шоссе</span>
        <span class="tab scheme__tab-title">Схема проезда с ул. Чертановска</span>
      </div>
      <div class="tab_content">
        <div class="tab_item">
          <div class="gallery-slider-wrapper" data-js="scheme-slider-wrapper">
            <div class="gallery-slider" data-js="scheme-slider">
              <img src="assets/images/sliders/scheme/scheme-slider-01.jpg" alt="">
              <img src="assets/images/sliders/scheme/scheme-slider-01.jpg" alt="">
              <img src="assets/images/sliders/scheme/scheme-slider-01.jpg" alt="">
              <img src="assets/images/sliders/scheme/scheme-slider-01.jpg" alt="">
            </div>
            <div class="gallery-slider__navigator slider-navigator">
              <div>
                <div class="prev">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                       viewBox="0 0 8.5 14" xml:space="preserve">
                <path transform="rotate(134.999 4.347 9.857)"
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
        </div>
        <div class="tab_item">
          <div class="gallery-slider-wrapper" data-js="scheme-slider-wrapper">
            <div class="gallery-slider" data-js="scheme-slider">
              <img src="assets/images/sliders/scheme/scheme-slider-01.jpg" alt="">
              <img src="assets/images/sliders/scheme/scheme-slider-01.jpg" alt="">
              <img src="assets/images/sliders/scheme/scheme-slider-01.jpg" alt="">
              <img src="assets/images/sliders/scheme/scheme-slider-01.jpg" alt="">
            </div>
            <div class="gallery-slider__navigator slider-navigator">
              <div>
                <div class="prev">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                       viewBox="0 0 8.5 14" xml:space="preserve">
                <path transform="rotate(134.999 4.347 9.857)"
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
        </div>
      </div>
    </div>
  </div>

  <!-- Вопросы  -->
  <?php include("includes/have-questions.php") ?>

  <!-- Соцсети  -->
  <?php include("includes/block-social.php") ?>

  <!-- Фотогалерея -->
  <?php include("includes/image-gallery.php") ?>

  <!-- Видеоистория -->
  <div class="videostory">
    <div class="white-bg"></div>
    <div class="row">
      <div class="videostory__info"><h2>Виртуальный 3D тур</h2>
        <h3>Посетите детейлинг-центр онлайн</h3>
        <p>Чтобы вы могли максимально быстро найти детейлинг-центр «AMD plus» на ул. Красного маяка, мы подготовили для
          вас
          схему проезда и представили её в виде подробного интерактивного слайдера. Ознакомьтесь с ним, пожалуйста,
          выберите удобный маршрут и приезжайте в гости в наше уютное автоателье. Мы работаем для вас ежедневно с 9:00
          до 21:00 и всегда рады вам помочь!</p>
        <div class="block-number">
          <div class="block-number__number">149</div>
          <div class="block-number__content">
            <div class="block-number__title">автовладельцев</div>
            <div class="block-number__desc">ежемесячно посещают наш сервис</div>
          </div>
        </div>
      </div>
<!--      <div class="videostory__video">-->
<!--        <div class="videostory__image">-->
<!--          <img src="assets/images/bgs/video-tour-filial__bg.jpg" alt="">-->
<!--        </div>-->
<!--        <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE' class="video-slider__play popupbox-video fancybox.iframe"-->
<!--           data-small-btn="true" data-fancybox data-width="900" data-height="506"><span></span></a>-->
<!--      </div>-->

      <div class="videostory__video ">
        <div class="videostory__image  video_wrapper_full js-videoWrapper">
          <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen
                  data-src="https://www.youtube.com/embed/4QDbRuNXdoI?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
          <button class="videoPoster js-videoPoster">
          <img src="assets/images/bgs/video-tour-filial__bg.jpg" alt="">
            <a class="video-slider__play"><span></span></a>
          </button>
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
<script src="assets/js/plugins/jquery.maskedinput.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>
</html>