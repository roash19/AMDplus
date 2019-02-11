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

<div class="content video">
  <!-- Шапка сайта -->
  <div class="page-header">
    <div class="page-header__wallpaper"
         style="background-image: url(assets/images/bgs/video-top_bg.jpg);">
    </div>
    <div class="page-header__container">
      <div class="row">
        <div class="page-header__breadcrumbs">
          <div class="breadcrumbs">
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">Главная</a>
            <i> / </i>
            <span class="breadcrumbs__link breadcrumbs__link_current">Видео</span>
          </div>
          <div class="page-header__page-id">Страница 2</div>
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
          <h1 class="h1 title">Видеогалерея</h1>
          <p class="description blog_description">Видеогалерея сети детейлинг-центров «AMD plus» — все полезные видео об
            услугах и продукции компании, собранные для вас в одном разделе. Смотрите видео и получайте информацию об
            уникальных услугах реставрации, тюнинга и детейлинга.
          </p>
          <a href="" class="button video-tour__top-button"><span>Записаться</span></a>
        </div>
      </div>
    </div>
  </div>

  <!--Профессионалы-->
  <div class="professionals">
    <div class="white-bg"></div>
    <div class="row">
      <div class="professionals__info">
        <a href="" class="button video-tour__top-button video-tour__top-button_mobile"><span>Записаться</span></a>
        <div class="video-block__youtube">
          Подпишитесь на наш YouTube канал,<br>
          чтобы не пропускать новые видео<br>
          <a href="javascript:void(0);" class="video-block__youtube__link" target="_blank">Подписаться</a>
        </div>
      </div>
      <div class="professionals-slider-wrapper" data-js="professionals-slider-wrapper">
        <div class="professionals-slider" data-js="professionals-slider">
          <div class="item">
            <div class="professionals-slider__image">
              <img src="assets/images/photos/video-slider-img.jpg" alt="">
            </div>
            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
               data-width="900" data-height="506"><span></span></a>
          </div>
          <div class="item">
            <div class="professionals-slider__image">
              <img src="assets/images/photos/video-slider-img.jpg" alt="">
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
    </div>
  </div>

  <!-- Наши видео -->
  <div class="articles">
    <div class="row">
      <h2>Наши видео</h2>
      <h3>Все видеоролики «AMD plus»</h3>
      <p class="articles__text">Мы собрали в одном разделе все полезные видеообзоры и информационные видеоролики сети
        детейлинг-центров «AMD plus», которые для вас регулярно готовят мастера студии.
        Смотрите видео, и узнавайте больше интересного об услугах и продукции ↓</p>
    </div>
    <div class="row">
      <div class="articles__block">
        <figure>
          <div class="videostory__video">
            <div class="videostory__image">
              <img src="assets/images/video/video-img-01.jpg" alt="">
            </div>
            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
               data-width="900" data-height="506"><span></span></a>
          </div>
        </figure>
        <div class="articles__title">Экономьте до 15% с новым партнёром «AMD Plus»</div>
      </div>
      <div class="articles__block">
        <figure>
          <div class="videostory__video">
            <div class="videostory__image">
              <img src="assets/images/video/video-img-02.jpg" alt="">
            </div>
            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
               data-width="900" data-height="506"><span></span></a>
          </div>
        </figure>
        <div class="articles__title">Консервация мотоцикла в «AMD Plus»</div>
      </div>
      <div class="articles__block">
        <figure>
          <div class="videostory__video">
            <div class="videostory__image">
              <img src="assets/images/video/video-img-03.jpg" alt="">
            </div>
            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
               data-width="900" data-height="506"><span></span></a>
          </div>
        </figure>
        <div class="articles__title">Нам доверяют! Сеть детейлинг-центров «AMD Plus»...</div>
      </div>
      <div class="articles__block">
        <figure>
          <div class="videostory__video">
            <div class="videostory__image">
              <img src="assets/images/video/video-img-04.jpg" alt="">
            </div>
            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
               data-width="900" data-height="506"><span></span></a>
          </div>
        </figure>
        <div class="articles__title">Реставрация Jaguar XK8 в «AMD Plus»</div>
      </div>
      <div class="articles__block">
        <figure>
          <div class="videostory__video">
            <div class="videostory__image">
              <img src="assets/images/video/video-img-05.jpg" alt="">
            </div>
            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
               data-width="900" data-height="506"><span></span></a>
          </div>
        </figure>
        <div class="articles__title">Водоотталкивающая защита от «AMD Plus»</div>
      </div>
      <div class="articles__block">
        <figure>
          <div class="videostory__video">
            <div class="videostory__image">
              <img src="assets/images/video/video-img-06.jpg" alt="">
            </div>
            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
               data-width="900" data-height="506"><span></span></a>
          </div>
        </figure>
        <div class="articles__title">Результат подготовки к осенне-зимней эксплуатации...</div>
      </div>
      <div class="articles__block">
        <figure>
          <div class="videostory__video">
            <div class="videostory__image">
              <img src="assets/images/video/video-img-07.jpg" alt="">
            </div>
            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
               data-width="900" data-height="506"><span></span></a>
          </div>
        </figure>
        <div class="articles__title">Подготовка к осенне-зимней эксплуатации авто...</div>
      </div>
      <div class="articles__block">
        <figure>
          <div class="videostory__video">
            <div class="videostory__image">
              <img src="assets/images/video/video-img-08.jpg" alt="">
            </div>
            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
               data-width="900" data-height="506"><span></span></a>
          </div>
        </figure>
        <div class="articles__title">Озонирование салона авто в «AMD Plus»</div>
      </div>
      <div class="articles__block">
        <figure>
          <div class="videostory__video">
            <div class="videostory__image">
              <img src="assets/images/video/video-img-09.jpg" alt="">
            </div>
            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
               data-width="900" data-height="506"><span></span></a>
          </div>
        </figure>
        <div class="articles__title">Устранение вмятин без покраски в «AMD Plus»</div>
      </div>
      <div class="articles__block">
        <figure>
          <div class="videostory__video">
            <div class="videostory__image">
              <img src="assets/images/video/video-img-10.jpg" alt="">
            </div>
            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
               data-width="900" data-height="506"><span></span></a>
          </div>
        </figure>
        <div class="articles__title">Ремонт прожога в «AMD Plus»</div>
      </div>
      <div class="articles__block">
        <figure>
          <div class="videostory__video">
            <div class="videostory__image">
              <img src="assets/images/video/video-img-11.jpg" alt="">
            </div>
            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
               data-width="900" data-height="506"><span></span></a>
          </div>
        </figure>
        <div class="articles__title">Комплекс услуг для Skoda в детейлинг-центре «AMD ...</div>
      </div>
      <div class="articles__block">
        <figure>
          <div class="videostory__video">
            <div class="videostory__image">
              <img src="assets/images/video/video-img-12.jpg" alt="">
            </div>
            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'
               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox
               data-width="900" data-height="506"><span></span></a>
          </div>
        </figure>
        <div class="articles__title">После реставрации Cadillac Eldorado 1960 в «AMD ...</div>
      </div>
    </div>
    <a href="javascript:void(0);" class="button button_simple button_dark articles__button"><span>Показать больше видео</span></a>
  </div>

  <!-- Вопросы  -->
  <?php include("includes/have-questions.php") ?>

  <!-- Специалисты -->
  <?php include("includes/specialists.php") ?>

  <!-- Вызов специалиста -->
  <?php include("includes/specialist-call.php") ?>
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