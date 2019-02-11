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

  <!--Виджет для коментариев ВК -->
  <script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
  <script type="text/javascript">
      VK.init({apiId: 6830438, onlyWidgets: true});
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

<div class="content consultation">
  <!-- Шапка сайта -->
  <div class="page-header">
    <div class="page-header__wallpaper"
         style="background-image: url(assets/images/bgs/сonsultation_bg.jpg);">
    </div>
    <div class="page-header__container">
      <div class="row">
        <div class="page-header__breadcrumbs">
          <div class="breadcrumbs">
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">Главная</a>
            <i> / </i>
            <span class="breadcrumbs__link breadcrumbs__link_current">Консультация</span>
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
          <h1 class="h1 title">Консультация</h1>
          <p class="description">Воспользуйтесь уникальной возможностью — получите бесплатную консультацию специалиста и
            индивидуальный расчет стоимости услуг онлайн. Просто опишите свою ситуацию и получите оценку стоимости
            ремонта персонально для вашего автомобиля.</p>
          <img src="assets/images/photos/сonsultation-img.jpg" alt="" class="square__img square__img_mobile">
          <a href="includes/modals/cost-estimate.php" class="button video-tour__top-button fancybox-modal fancybox.ajax"><span>Рассчитать <span class="consultation-button_mobile">стоимость</span></span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Количество клиентов -->
  <div class="square">
    <div class="row">
      <div class="block-number">
        <div class="block-number__number">64%</div>
        <div class="block-number__content">
          <div class="block-number__title">наших клиентов</div>
          <div class="block-number__desc">пришли по рекомендации</div>
        </div>
      </div>
      <img src="assets/images/photos/сonsultation-img.jpg" alt="" class="square__img">
    </div>
  </div>

  <!-- Форма -->
  <?php include("includes/form-cost.php") ?>

  <!-- Оценка онлайн -->
  <div class="rating-online">
    <div class="row">
      <h2>Оценка ремонта онлайн</h2>
      <h3>Задайте вопрос через форму ВКонтакте</h3>
      <p>Узнайте стоимость услуг персонально для Вашего автомобиля! Просто задайте вопрос специалисту автоателье «AMD
        plus»через форму ВКонтакте, опишите ситуацию, если необходимо приложите фото проблем, и получите индивидуальную
        оценку ремонта онлайн.</p>
      <!-- Виджет для коментариев ВК -->
      <div id="vk_comments"></div>
      <script type="text/javascript">
          VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
      </script>
    </div>
  </div>

  <!-- Мобильная консультацция -->
  <?php include("includes/mobile-consultation.php") ?>
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