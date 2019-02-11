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

<div class="content store">
  <!-- Шапка сайта -->
  <div class="page-header">
    <div class="page-header__wallpaper"
         style="background-image: url(assets/images/bgs/store_bg.jpg);">
    </div>
    <div class="page-header__container">
      <div class="row">
        <div class="page-header__breadcrumbs">
          <div class="breadcrumbs">
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">Главная</a>
            <i> / </i>
            <span class="breadcrumbs__link breadcrumbs__link_current">Магазин автохимии</span>
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
          <h1 class="h1 title">Магазин автохимии</h1>
          <p class="description">Фирменный магазин автомобильной химии сети детейлинг-центров «AMD plus» в Москве —
            широкий ассортимент качественных проверенных средств по уходу за авто по привлекательной цене. Изучайте
            ассортимент и выбирайте позиции, нужные вам!</p>
          <a href="#store" class="button video-tour__top-button"><span>Перейти к покупкам</span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Количество товаров -->
  <div class="square">
    <div class="white-bg"></div>
    <div class="row">
      <a href="" class="button video-tour__top-button block-number_button"><span>К покупкам</span></a>
      <div class="block-number">
        <div class="block-number__number">50+</div>
        <div class="block-number__content">
          <div class="block-number__title">товаров</div>
          <div class="block-number__desc">всегда в наличии</div>
        </div>
      </div>
      <img src="assets/images/store/store-top-img.jpg" alt="" class="square__img">
    </div>
  </div>

  <!-- Магазин -->
  <div class="shop" id="store">
    <div class="row">
      <h2>Фирменный магазин</h2>
      <h3>Высококачественная автохимия на выбор</h3>
      <p>В сети детейлинг-центров «AMD plus» открылся собственный магазин с большим ассортиментом автохимии. Теперь у
        нас в студии вы можете приобрести высококачественную автохимию по выгодной цене. Приезжайте в гости и выбирайте
        нужные вам средства!</p>
      <div class="store-filters">
        <p class="filter store-filter_active">Все товары</p>
        <p class="filter">Универсальные</p>
        <p class="filter">Для кузова</p>
        <p class="filter">Для дисков</p>
        <p class="filter">Для салона</p>
        <p class="filter">Для стёкол</p>
        <p class="filter">Инструменты</p>
      </div>
    </div>
    <div class="row">
      <a href="includes/modals/store.php" class="product__block fancybox.ajax fancybox-modal">
        <figure>
        <img src="assets/images/store/store-product-img-01.jpg" alt=""></figure>
        <p class="product__text">Очиститель смолы и гудрона</p>
        <p class="product__price">400 Р</p>
        <div href="includes/modals/store.php" class="button button_simple fancybox.ajax fancybox-modal">Купить</div>
      </a>
      <a href="includes/modals/store.php" class="product__block fancybox.ajax fancybox-modal">
        <figure><img src="assets/images/store/store-product-img-02.jpg" alt=""></figure>
        <p class="product__text">Очиститель кузова</p>
        <p class="product__price">400 Р</p>
        <div href="includes/modals/store.php" class="button button_simple fancybox.ajax fancybox-modal">Купить</div>
      </a>
      <a href="includes/modals/store.php" class="product__block fancybox.ajax fancybox-modal">
        <figure><img src="assets/images/store/store-product-img-03.jpg" alt=""></figure>
        <p class="product__text">Очиститель дисков</p>
        <p class="product__price">400 Р</p>
        <div href="includes/modals/store.php" class="button button_simple fancybox.ajax fancybox-modal">Купить</div>
      </a>
      <a href="includes/modals/store.php" class="product__block fancybox.ajax fancybox-modal">
        <figure><img src="assets/images/store/store-product-img-04.jpg" alt=""></figure>
        <p class="product__text">Универсальный очиститель салона</p>
        <p class="product__price">400 Р</p>
        <div href="includes/modals/store.php" class="button button_simple fancybox.ajax fancybox-modal">Купить</div>
      </a>
      <a href="includes/modals/store.php" class="product__block fancybox.ajax fancybox-modal">
        <figure><img src="assets/images/store/store-product-img-01.jpg" alt=""></figure>
        <p class="product__text">Очиститель смолы и гудрона</p>
        <p class="product__price">400 Р</p>
        <div href="includes/modals/store.php" class="button button_simple fancybox.ajax fancybox-modal">Купить</div>
      </a>
      <a href="includes/modals/store.php" class="product__block fancybox.ajax fancybox-modal">
        <figure><img src="assets/images/store/store-product-img-02.jpg" alt=""></figure>
        <p class="product__text">Очиститель смолы и гудрона</p>
        <p class="product__price">400 Р</p>
        <div href="includes/modals/store.php" class="button button_simple fancybox.ajax fancybox-modal">Купить</div>
      </a>
      <a href="includes/modals/store.php" class="product__block fancybox.ajax fancybox-modal">
        <figure><img src="assets/images/store/store-product-img-03.jpg" alt=""></figure>
        <p class="product__text">Очиститель смолы и гудрона</p>
        <p class="product__price">400 Р</p>
        <div href="includes/modals/store.php" class="button button_simple fancybox.ajax fancybox-modal">Купить</div>
      </a>
      <a href="includes/modals/store.php" class="product__block fancybox.ajax fancybox-modal">
        <figure><img src="assets/images/store/store-product-img-04.jpg" alt=""></figure>
        <p class="product__text">Очиститель смолы и гудрона</p>
        <p class="product__price">400 Р</p>
        <div href="includes/modals/store.php" class="button button_simple fancybox.ajax fancybox-modal">Купить</div>
      </a>
    </div>
  </div>

  <div class="store-quotation">
    <div class="row">
      <div class="video-tour-detailing__info">
        <div class="video-tour-detailing__image">
          <img src="assets/images/photos/spec-2.jpg" alt="">
        </div>
        <div class="video-tour-detailing__quotation">
          <p class="title">Правилный выбор</p>
          <p class="video-tour-detailing__text">
            Чтобы безошибочно подобрать необходимые средства из широкого ассортимента автохимии воспользуйтесь помощью
            профессионалов. Приезжайте в гости! Специалисты проконсультируют вас и помогут сделать правильный выбор.
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