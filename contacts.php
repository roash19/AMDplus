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

  <!--  Яндекс карты-->
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

<div class="content contacts">
  <!-- Шапка сайта -->
  <div class="page-header">
    <div class="page-header__wallpaper"
         style="background-image: url(assets/images/bgs/contacts__bg.jpg);">
    </div>

    <div class="page-header__container">
      <div class="row">
        <div class="page-header__breadcrumbs">
          <div class="breadcrumbs">
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">Главная</a>
            <i> / </i>
            <span class="breadcrumbs__link breadcrumbs__link_current">Контакты </span>
          </div>
          <div class="page-header__page-id">Страница 8</div>
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
          <h1 class="h1 title">Контакты</h1>
          <p class="description">Автоателье «AMD plus» приглашает вас за качественными услугами детейлинга в один из
            наших двух филиалов: на юго-западе и на востоке Москвы! Мы работаем ежедневно с 9:00 до 21:00 и будем рады
            видеть вас и ваш автомобиль у нас в гостях!</p>
        </div>
      </div>
    </div>
  </div>

  <div class="communication">
    <div class="row address">
      <div class="address__block">
        <img src="assets/images/bgs/address__bg-01.jpg" alt="" class="address__img">
        <p class="address__title">ЮАО<br>Детейлинг-центр «AMD plus»</p>
        <p class="address__text">Москва, Красного маяка, 16<br>м. Пражская</p>
        <a href="" class="address__link"></a>
      </div>
      <div class="address__block">
        <img src="assets/images/bgs/address__bg-02.jpg" alt="" class="address__img">
        <p class="address__title">ВАО<br>Детейлинг-центр «AMD plus»</p>
        <p class="address__text">Москва, Золотая, 11<br>м. Электрозаводская</p>
        <a href="" class="address__link"></a>
      </div>
    </div>
    <div class="row">
      <h2 class="communication__title h2_large">Доверяйте профессионалам студии «AMD plus»</h2>
      <div class="communication-info">
        <p class="communication-info__text">Хотите получить высочайший уровень сервиса и почувствовать индивидуальный
          подход? Обращайтесь к настоящим специалистам своего дела: «AMD plus» — студия детейлинга рядом с вами! Вы
          можете приехать в любой ближайший к вам филиал и неизменно получить услуги высогого уровня. Мы вернём
          автомобилю идеальный вид! Свяжитесь с нами удобным для вас способом.</p>
        <div class="communication-info__img"></div>
        <div class="communication-info__feedback">
          <a href="tel:+7 (495) 154-63-97" class="communication__phone"><span class="communication_bold">+7 (495) 153-74-13 </span>
            <span class="dashed link">Вам перезвонить?</span></a>
          <a href="mailto:info@amdplus.ru" class="communication__email"><span class="communication_bold">info@amdplus.ru</span></a>
          <p class="communication__time"><span class="communication_bold">с 9:00 до 21:00</span> Ежедневно</p>
          <p class="communication__requisites"><span class="communication_bold">Реквизиты</span> Скачать <a href="" class="link underline">DOC</a> или <a href="" class="link underline">PDF</a></p>
        </div>
      </div>
    </div>
  </div>


    <div id="map" class="map"></div>



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