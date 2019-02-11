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

<div class="content blog">
  <!-- Шапка сайта -->
  <div class="page-header">
    <div class="page-header__wallpaper"
         style="background-image: url(assets/images/bgs/blog_bg.jpg);">
    </div>
    <div class="page-header__container">
      <div class="row">
        <div class="page-header__breadcrumbs">
          <div class="breadcrumbs">
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">Главная</a>
            <i> / </i>
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">О компании</a>
            <i> / </i>
            <span class="breadcrumbs__link breadcrumbs__link_current">Блог</span>
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
          <h1 class="h1 title">Полезные статьи</h1>
          <p class="description blog_description">Специально для Вас автоателье «AMD plus» подготовило интересные
            информационные материалы о реставрации и тюнинге, а также полезные советы и рекомендации по уходу за
            автомобилем в виде цикла тематических статей.<br> Подпишитесь на рассылку и не попускайте новые статьи.</p>
          <a href="includes/modals/modal-mailing.php" class="button video-tour__top-button fancybox-modal fancybox.ajax"><span>Подписаться</span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Полезные статьи -->
  <div class="articles">
    <div class="row">
      <a href="" class="articles__block">
        <figure><img src="assets/images/blog/blog-image-09.jpg" alt=""></figure>
        <p class="articles__title">Где сделать абразивную полировку кузова</p>
        <p class="articles__text">Суть, этапы и цены</p>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/blog/blog-image-04.jpg" alt=""></figure>
        <p class="articles__title">Где можно отполировать фары в Москве</p>
        <p class="articles__text">Зачем это делать и сколько стоит</p>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/blog/blog-image-05.jpg" alt=""></figure>
        <p class="articles__title">Предпродажная подготовка в Москве</p>
        <p class="articles__text">Зачем это делать и сколько стоит</p>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/blog/blog-image-01.jpg" alt=""></figure>
        <p class="articles__title">Всё, что вы хотели узнать о химчистке</p>
        <p class="articles__text">Суть, этапы и цены</p>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/blog/blog-image-02.jpg" alt=""></figure>
        <p class="articles__title">Особенности ухода за авто после детейлинга</p>
        <p class="articles__text">Как сохранить кузов в идеальном состоянии</p>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/blog/blog-image-03.jpg" alt=""></figure>
        <p class="articles__title">Керамическое покрытие Opti-Coat Pro</p>
        <p class="articles__text">Кузов автомобиля под надёжной защитой</p>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/blog/blog-image-06.jpg" alt=""></figure>
        <p class="articles__title">Детейлинг — что это?</p>
        <p class="articles__text">Особенности и преимущества услуг детейлинга</p>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/blog/blog-image-07.jpg" alt=""></figure>
        <p class="articles__title">Выбираем шов для перетяжки</p>
        <p class="articles__text">Декоративное оформление элементов салона</p>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/blog/blog-image-08.jpg" alt=""></figure>
        <p class="articles__title">Выбираем шов для перетяжки</p>
        <p class="articles__text">Декоративное оформление элементов салона</p>
      </a>
    </div>
    <a href="javascript:void(0);" class="button button_simple button_dark articles__button"><span>Показать больше</span></a>
  </div>

  <!-- Рассылка -->
  <?php include("includes/mailing.php") ?>

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