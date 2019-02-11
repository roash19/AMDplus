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

<div class="content portfolio-main">
  <!-- Шапка сайта -->
  <div class="page-header">
    <div class="page-header__wallpaper"
         style="background-image: url(assets/images/bgs/portfolio_bg.jpg);">
    </div>
    <div class="page-header__container">
      <div class="row">
        <div class="page-header__breadcrumbs">
          <div class="breadcrumbs">
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">Главная</a>
            <i> / </i>
            <span class="breadcrumbs__link breadcrumbs__link_current">Портфолио</span>
          </div>
          <div class="page-header__page-id">Страница 742</div>
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
          <h1 class="h1 title">Портфолио</h1>
          <p class="description">Нам есть, что показать и чем удивить даже самых тонких ценителей автомобильной эстетики
            и комфорта. Представляем вашему вниманию фотографии работ сети детейлинг-центров «AMD plus», которые мы
            бережно собираем для вас с первого дня открытия.
          </p>
          <a href="" class="button video-tour__top-button"><span>Записаться</span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Преимущества -->
  <div class="master-call-advantages">
    <div class="white-bg"></div>
    <div class="row">
      <div class="service-about__list">
        <div>
          <span>Устраняем </span><br>
          с обивки кресел дефекты <br>
          и возвращаем ей насыщенный цвет
        </div>
        <div>
          <span>Удаляем</span><br>
          прожоги на кожаных, тканевых <br>
          и пластиковых элементах салона авто
        </div>
        <div>
          <span>Красим</span><br>
          и устраняем царапины, потертости <br>
          и другие повреждения на руле
        </div>
      </div>
<!--      <div class="videostory__video">-->
<!--        <div class="videostory__image">-->
<!--          <img src="assets/images/photos/portfolio-vedeo-img.jpg" alt="">-->
<!--        </div>-->
<!--        <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE' class="video-slider__play popupbox-video fancybox.iframe"-->
<!--           data-small-btn="true" data-fancybox data-width="900" data-height="506"><span></span></a>-->
<!--      </div>-->
      <div class="videostory__video ">
        <div class="videostory__image  video_wrapper_full js-videoWrapper">
          <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen
                  data-src="https://www.youtube.com/embed/4QDbRuNXdoI?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
          <button class="videoPoster js-videoPoster">
                      <img src="assets/images/photos/portfolio-vedeo-img.jpg" alt="">
            <a class="video-slider__play"><span></span></a>
          </button>
        </div>
      </div>
      <a href="" class="button video-tour__top-button portfolio-main-top-button_mobile "><span>Записаться</span></a>
    </div>
    <div class="button button_simple portfolio-filter-button-down"><span class="qwe">Показать фильтр по услугам</span>
    </div>
  </div>

  <div class="portfolio-service">
    <h2 class="row">Портфолио по услугам</h2>
    <div class="row">
      <ul class="service__list">
        <a href="" class="service__name link">Ремонт салона</a>
        <li class="service__item">
          <a href="" class="service__link link"><span>Ремонт сидений</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Ремонт торпеды</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Ремонт прожогов</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Ремонт царапин</span> </a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Покраска салона</span> </a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Покраска сидений</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Покраска руля</span></a>
        </li>
      </ul>
      <ul class="service__list">
        <a href="" class="service__name link">Перетяжка</a>
        <li class="service__item">
          <a href="" class="service__link link"><span>Перетяжка руля</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Перетяжка сидений</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Перетяжка потолка</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Перетяжка дверей</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Перетяжка торпеды</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Перетяжка подлокотника</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Перетяжка ручки КПП</span></a>
        </li>
      </ul>
      <ul class="service__list">
        <a href="" class="service__name link"">Химчистка</a>
        <li class="service__item">
          <a href="" class="service__link link"><span>Комплексная химчистка </span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Химчистка полов</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Химчистка сидений </span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Химчистка потолка</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Химчистка обивки</span></a>
        </li>
      </ul>
      <ul class="service__list">
        <a href="" class="service__name link">Полировка</a>
        <li class="service__item">
          <a href="" class="service__link link"><span>Полировка кузова</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Полировка фар</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Защитные покрытия</span></a>
        </li>
        <li class="service__item">
          <a href="" class="service__link link"><span>Жидкое стекло</span></a>
        </li>
      </ul>
      <div class="other-servise">
        <a href="" class="service__name link service__name_mobile">Реставрация ретро авто</a>
        <a href="" class="service__name link service__name_mobile">Мотоциклы</a>
        <a href="" class="service__name link service__name_mobile">Яхты и катеры</a>
        <a href="" class="service__name link service__name_mobile">Вертолёты и самолёты</a>
        <a href="" class="service__name link service__name_mobile">Кожаная мебель</a>
        <a href="" class="service__name link service__name_mobile">Изделия из кожи</a>
      </div>
      <a class="button button_simple portfolio-filter-button-up"><span>Скрыть фильтр по услугам</span></a>
    </div>
  </div>

  <!-- Наши работы -->
  <div class="work">
    <div class="row">
      <div class="faq__intro">
        <div>
          <h2><span>Посмотрите наши работы</span></h2>
          <h3 class="h3_white"><span>97% клиентов рекомендуют нас друзьям и знакомым</span></h3>
          <p>
            Хотите узнать, как в сети детейлинг-центров «AMD plus» проходит процесс реставрации, тюнинга и детейлинга?
            Интересно увидеть финальный результат работы специалистов и сравнить фото до и после? Тогда специально для
            вас наше большое портфолио ↓
          </p>
        </div>
        <div></div>
      </div>
    </div>
    <div class="row portfolio-body">
      <a href="" class="articles__block">
        <figure><img src="assets/images/portfolio-page/portfolio-page-img-01.png" alt=""></figure>
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
      <a href="" class="articles__block">
        <figure><img src="assets/images/portfolio-page/portfolio-page-img-02.png" alt=""></figure>
        <div class="portfolio-slider-small__content">
          <div class="portfolio-slider-small__title">
            Ремонт сиденья Toyota Camry
          </div>
          <div class="portfolio-slider-small__info">
            <div class="portfolio-slider-small__price">7 500 Р</div>
            <div class="portfolio-slider-small__time">4 часа</div>
          </div>
        </div>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/portfolio-page/portfolio-page-img-03.png" alt=""></figure>
        <div class="portfolio-slider-small__content">
          <div class="portfolio-slider-small__title">
            Ремонт сиденья после срабатывания AirBag
            VOLVO S-80
          </div>
          <div class="portfolio-slider-small__info">
            <div class="portfolio-slider-small__price">4 000 Р</div>
            <div class="portfolio-slider-small__time">1,5 часа</div>
          </div>
        </div>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/portfolio-page/portfolio-page-img-04.png" alt=""></figure>
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
      <a href="" class="articles__block">
        <figure><img src="assets/images/portfolio-page/portfolio-page-img-05.png" alt=""></figure>
        <div class="portfolio-slider-small__content">
          <div class="portfolio-slider-small__title">
            Ремонт сиденья Toyota Camry
          </div>
          <div class="portfolio-slider-small__info">
            <div class="portfolio-slider-small__price">7 500 Р</div>
            <div class="portfolio-slider-small__time">4 часа</div>
          </div>
        </div>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/portfolio-page/portfolio-page-img-06.png" alt=""></figure>
        <div class="portfolio-slider-small__content">
          <div class="portfolio-slider-small__title">
            Ремонт сиденья после срабатывания AirBag
            VOLVO S-80
          </div>
          <div class="portfolio-slider-small__info">
            <div class="portfolio-slider-small__price">4 000 Р</div>
            <div class="portfolio-slider-small__time">1,5 часа</div>
          </div>
        </div>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/portfolio-page/portfolio-page-img-07.png" alt=""></figure>
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
      <a href="" class="articles__block">
        <figure><img src="assets/images/portfolio-page/portfolio-page-img-08.png" alt=""></figure>
        <div class="portfolio-slider-small__content">
          <div class="portfolio-slider-small__title">
            Ремонт сиденья Toyota Camry
          </div>
          <div class="portfolio-slider-small__info">
            <div class="portfolio-slider-small__price">7 500 Р</div>
            <div class="portfolio-slider-small__time">4 часа</div>
          </div>
        </div>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/portfolio-page/portfolio-page-img-09.png" alt=""></figure>
        <div class="portfolio-slider-small__content">
          <div class="portfolio-slider-small__title">
            Ремонт сиденья после срабатывания AirBag
            VOLVO S-80
          </div>
          <div class="portfolio-slider-small__info">
            <div class="portfolio-slider-small__price">4 000 Р</div>
            <div class="portfolio-slider-small__time">1,5 часа</div>
          </div>
        </div>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/portfolio-page/portfolio-page-img-10.png" alt=""></figure>
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
      <a href="" class="articles__block">
        <figure><img src="assets/images/portfolio-page/portfolio-page-img-11.png" alt=""></figure>
        <div class="portfolio-slider-small__content">
          <div class="portfolio-slider-small__title">
            Ремонт сиденья Toyota Camry
          </div>
          <div class="portfolio-slider-small__info">
            <div class="portfolio-slider-small__price">7 500 Р</div>
            <div class="portfolio-slider-small__time">4 часа</div>
          </div>
        </div>
      </a>
      <a href="" class="articles__block">
        <figure><img src="assets/images/portfolio-page/portfolio-page-img-12.png" alt=""></figure>
        <div class="portfolio-slider-small__content">
          <div class="portfolio-slider-small__title">
            Ремонт сиденья после срабатывания AirBag
            VOLVO S-80
          </div>
          <div class="portfolio-slider-small__info">
            <div class="portfolio-slider-small__price">4 000 Р</div>
            <div class="portfolio-slider-small__time">1,5 часа</div>
          </div>
        </div>
      </a>
    </div>
    <a href="javascript:void(0);" class="button button_simple button_dark articles__button"><span>Показать больше</span></a>
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
            <div class="form__group form_text input__wrapper">
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
          <img src="assets/images/photos/portfolio-form-man.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- Соцсети  -->
  <div class="block-social">
    <div class="row">
      <div class="block-social__info">
        <h2>Давайте дружить</h2>
        <h3 class="h3_white">Подписывайтесь на нас в соцсетях</h3>
        <p>Присоелиняйтесь к нам в социальных сетях и будьте всегда в курсе всех новинок и новостей. Учавствуйте в
          конкурсах, пользуйтесь скидками для подписчиков и получайте подарки.</p>
        <div class="dropdown-socials socials">
          <a href="javascript:void(0);" target="_blank" class="fb" rel="nofollow">
            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="20" viewBox="0 0 8.9 19.3">
              <path d="M8.5 9.6H5.9v9.7h-4V9.6H0V6.2h1.9V4c0-1.6.7-4 4-4h3v3.3H6.8c-.4 0-.8.2-.8.9v2h3l-.5 3.4z"
                    fill="#f7ce40"/>
            </svg>
          </a>
          <a href="javascript:void(0);" target="_blank" class="vk" rel="nofollow">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewBox="0 0 19.4 11">
              <path
                d="M9.5 11h1.2s.3 0 .5-.2.2-.5.2-.5 0-1.6.7-1.8c.7-.2 1.6 1.5 2.6 2.2.7.5 1.3.4 1.3.4h2.6s1.4-.1.7-1.1c-.1-.1-.4-.8-1.9-2.2-1.6-1.5-1.4-1.3.5-3.9 1.2-1.6 1.7-2.6 1.5-3-.1-.4-1-.3-1-.3h-2.9s-.2 0-.4.1-.3.3-.3.3-.5 1.2-1.1 2.3c-1.3 2.2-1.8 2.3-2 2.2-.5-.3-.4-1.3-.4-2 0-2.1.3-3-.6-3.3-.3-.1-.6-.2-1.4-.2-1 0-1.9 0-2.4.2-.3.2-.6.6-.4.6.2 0 .6.1.9.4.3.4.3 1.3.3 1.3s.2 2.5-.4 2.8c-.5.3-1-.2-2.2-2.2-.6-1-1-2.2-1-2.2S4 .8 3.8.7C3.7.5 3.4.5 3.4.5H.6S.2.5 0 .7c-.1.2 0 .5 0 .5s2.2 5.1 4.6 7.6C6.9 11.2 9.5 11 9.5 11z"
                fill="#f7ce40"/>
            </svg>
          </a>
          <a href="javascript:void(0);" target="_blank" class="ok" rel="nofollow">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="11" height="19"
                 viewBox="0 0 11 19" xml:space="preserve"><path
                d="M4.6 13.4c-1.4-.2-2.7-.5-3.8-1.4-.1-.1-.3-.2-.4-.3-.5-.5-.5-1-.1-1.6.3-.5.9-.6 1.4-.3.1 0 .2 0 .3.1 2 1.5 4.8 1.5 6.9.1.2-.2.4-.3.7-.4.5-.1.9.1 1.2.5.3.5.3 1-.1 1.4-.6.6-1.2 1-2 1.3-.7.3-1.5.4-2.3.5.1.1.2.2.2.3 1.1 1.1 2.1 2.2 3.2 3.3.4.4.4.8.2 1.3-.1.5-.6.8-1.1.8-.3 0-.5-.2-.7-.4-.8-.8-1.6-1.6-2.4-2.5-.2-.2-.3-.2-.5 0-.8.9-1.6 1.7-2.4 2.5-.5.4-.9.5-1.3.3-.5-.2-.7-.7-.7-1.2 0-.3.2-.6.4-.8 1-1.1 2.1-2.2 3.1-3.2 0-.1.1-.2.2-.3z"/>
              <path
                d="M5.5 9.6C3 9.6.9 7.4.9 4.8.9 2.1 3 0 5.5 0c2.6 0 4.6 2.2 4.6 4.9 0 2.6-2.1 4.7-4.6 4.7zm2.3-4.8c0-1.3-1-2.3-2.3-2.3-1.3 0-2.3 1.1-2.3 2.4 0 1.3 1 2.3 2.3 2.3 1.3 0 2.3-1.1 2.3-2.4z"/></svg>
          </a>
          <a href="javascript:void(0);" target="_blank" class="ig" rel="nofollow">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="19" height="19"
                 viewBox="0 0 19.3 19.3" xml:space="preserve"><path
                d="M14.3 0H5C2.2 0 0 2.2 0 5v9.4c0 2.7 2.2 5 5 5h9.4c2.7 0 5-2.2 5-5V5c-.1-2.8-2.3-5-5.1-5zm2.9 14.3c0 1.6-1.3 2.9-2.9 2.9H5c-1.6 0-2.9-1.3-2.9-2.9V5c0-1.6 1.3-2.9 2.9-2.9h9.4c1.6 0 2.9 1.3 2.9 2.9v9.3z"/>
              <path
                d="M9.6 4.7c-2.7 0-4.9 2.2-4.9 4.9s2.2 4.9 4.9 4.9 4.9-2.2 4.9-4.9-2.1-4.9-4.9-4.9zm0 7.8c-1.6 0-2.9-1.3-2.9-2.9C6.7 8 8 6.7 9.6 6.7s2.9 1.3 2.9 2.9c0 1.6-1.3 2.9-2.9 2.9z"/>
              <circle cx="14.8" cy="4.2" r="1.2"/></svg>
          </a>
          <a href="javascript:void(0);" target="_blank" class="yt" rel="nofollow">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="13" viewBox="0 0 18 13">
              <path
                d="M17.6 2c-.2-.8-.8-1.4-1.6-1.6C14.6 0 9 0 9 0S3.4 0 2 .4C1.2.6.6 1.2.4 2 0 3.5 0 6.5 0 6.5s0 3 .4 4.5c.2.8.8 1.4 1.6 1.6 1.4.4 7 .4 7 .4s5.6 0 7-.4c.8-.2 1.4-.8 1.6-1.6.4-1.5.4-4.5.4-4.5s0-3-.4-4.5zM7.2 9.3V3.7l4.7 2.8-4.7 2.8z"
                fill="#ffd031"/>
            </svg>
          </a>
          <a href="javascript:void(0);" target="_blank" class="d2" rel="nofollow">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 17.4 17">
              <path
                d="M0 .2h4.1C6.7.2 8 1.7 8 4.3v8.5C8 15.5 6.7 17 4.1 17H0V.2zm2.6 2.4v12h1.5c.8 0 1.3-.4 1.3-1.6V4.2c0-1.2-.5-1.6-1.3-1.6H2.6zm10.8-.2c-.8 0-1.3.5-1.3 1.7v1.8H9.6V4.2C9.6 1.5 11 0 13.5 0s3.9 1.5 3.9 4.2c0 5.3-5.2 7.2-5.2 10v.4h4.9V17H9.6v-2.1c0-4.9 5.2-5.8 5.2-10.6 0-1.5-.5-1.9-1.4-1.9z"
                fill="#ffd031"/>
            </svg>
          </a>
        </div>
        <div class="portfolio-brands__more">
          Чтобы получить скидку — не забудьте подтвердить свою подписку на наши группы. Быть нашим подписчиком — полезно
          и выгодно, убедитесь сами!
        </div>
      </div>
      <div class="block-social__img">
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