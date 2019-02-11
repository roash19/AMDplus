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

<div class="content testimonials">
  <!-- Шапка сайта -->
  <div class="page-header">
    <div class="page-header__wallpaper"
         style="background-image: url(assets/images/bgs/testimonials_bg.jpg);">
    </div>
    <div class="page-header__container">
      <div class="row">
        <div class="page-header__breadcrumbs">
          <div class="breadcrumbs">
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">Главная</a>
            <i> / </i>
            <span class="breadcrumbs__link breadcrumbs__link_current">Отзывы</span>
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
          <h1 class="h1 title">Отзывы</h1>
          <p class="description">Самая большая ценность для нас — это ваши отзывы. Вы не раз по достоинству оценили
            качество услуг, современные технологии реставрации и высокий уровень сервиса сети детейлинг-центров «AMD
            plus». Благодарим Вас за ваш выбор!
          </p>
<!--          <div class="videostory__video video-tour__video videostory__video_mobile">-->
<!--            <div class="videostory__image">-->
<!--              <img src="assets/images/bgs/main-video-tour.jpg" alt="">-->
<!--            </div>-->
<!--            <p>Видеоистория<br><span>Автоателье «AMD plus» глазами Google</span></p>-->
<!--            <a href='https://www.youtube.com/watch?v=5GBv5yiSUEE'-->
<!--               class="video-slider__play popupbox-video fancybox.iframe" data-small-btn="true" data-fancybox-->
<!--               data-width="900" data-height="506"><span></span></a>-->
<!--          </div>-->


          <div class="videostory__video videostory__video_mobile">
            <p class="video-text">Видеоистория<br><span>Автоателье «AMD plus» глазами Google</span></p>
            <div class="videostory__image  video_wrapper_full js-videoWrapper">
              <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen
                      data-src="https://www.youtube.com/embed/4QDbRuNXdoI?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
              <button class="videoPoster js-videoPoster">
                <img src="assets/images/bgs/main-video-tour.jpg" alt="">
                <a class="video-slider__play"><span></span></a>
              </button>
            </div>
          </div>
          <a href="" class="button video-tour__top-button"><span>Записаться</span></a>
        </div>
      </div>
    </div>
  </div>

  <!--  -->
  <div class="testimonials-percent">
    <div class="row">
      <div class="block-number">
        <div class="block-number__number">64%</div>
        <div class="block-number__content">
          <div class="block-number__title">наших клиентов</div>
          <div class="block-number__desc">пришли по рекомендации</div>
        </div>
      </div>
      <div class="videostory__video">
        <p class="video-text">Видеоистория<br><span>Автоателье «AMD plus» глазами Google</span></p>
        <div class="videostory__image  video_wrapper_full js-videoWrapper">
          <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen
                  data-src="https://www.youtube.com/embed/4QDbRuNXdoI?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
          <button class="videoPoster js-videoPoster">
            <img src="assets/images/bgs/main-video-tour.jpg" alt="">
            <a class="video-slider__play"><span></span></a>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- Ретинг -->
  <div class="main-reviews row">
    <div class="faq__intro">
      <div>
        <h2><span>Независимые рейтинги</span></h2>
        <h3 class="h3_white"><span>Объективные отзывы и мнения</span></h3>
        <p>
          Хотите получить максимально полную информацию о наших услугах и сервисе от клиентов?<br>
          Изучите мнение о нас на независимых авторитетных интернет-ресурсах.
        </p>
      </div>
      <div></div>
    </div>
    <div class="main-reviews__rating">
      <div class="rating-block">
        <div class="rating__logo logo-zoon"></div>
        <p>Рейтинг</p>
        <div class="rating">
          <div class="reting__star"></div>
          <div class="reting__star"></div>
          <div class="reting__star"></div>
          <div class="reting__star"></div>
          <div class="reting__star"></div>
        </div>
      </div>
      <div class="rating-block">
        <div class="rating__logo logo-yandex"></div>
        <p>Рейтинг</p>
        <p class="rating">4 из 5</p>
      </div>
      <div class="rating-block">
        <div class="rating__logo logo-google"></div>
        <p>Рейтинг</p>
        <p class="rating">4,6 из 5</p>
      </div>
      <div class="rating-block">
        <div class="rating__logo logo-drive2"></div>
        <p>Рейтинг</p>
        <p class="rating">162 пользователям</p>
      </div>
      <div class="rating-block">
        <div class="rating__logo logo-avtoservice"></div>
        <p>Рейтинг</p>
        <p class="rating">4,8 из 5</p>
      </div>
      <div class="rating-block">
        <div class="rating__logo logo-wotzyvy"></div>
        <p>Рейтинг</p>
        <div class="rating">
          <div class="reting__star"></div>
          <div class="reting__star"></div>
          <div class="reting__star"></div>
          <div class="reting__star"></div>
          <div class="reting__star reting__star_grey"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Оценка онлайн -->
  <div class="rating-online">
    <div class="row">
      <h2>Отзывы и рекомендации</h2>
      <h3>Спасибо, что выбираете нас</h3>
      <p>Лучшая награда для команды «AMD plus» — это теплые отзывы наших довольных клиентов, автомобили которых мы
        сделали чуть лучше, комфортнее, красивее и индивидуальнее! Мы искренне признательны вам за то, что вы выбираете
        нас и рекомендуете наши услуги своим друзьям и знакомым! Спасибо вам!</p>
      <!-- Виджет для коментариев ВК -->
      <div id="vk_comments"></div>
      <script type="text/javascript">
          VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
      </script>
    </div>
  </div>

  <!-- Форма -->
  <?php include("includes/form-resume.php") ?>

  <!-- Партнеры -->
  <div class="partners">
    <div class="row">
      <h2>Наши партнёры</h2>
      <h3>Принимаем благодарности от клиентов</h3>
      <p>Сеть «AMD plus» знаменита сотрудничеством с корпоративными клиентами: дилерами автомобильных брендов,
        крупными компаниями с автопарком, вертолётными и яхт-клубами. Предлагаем ознакомиться с их рекомендациями
        и благодарностями в наш адрес. Большое спасибо за искреннюю оценку наших услуг!</p>
    </div>
    <div class="row">
      <div class="gallery-slider-wrapper" data-js="partners-wrapper">
        <div class="gallery-slider" data-js="partners-slider">
          <a href="assets/images/photos/partners-img-01.jpg" data-fancybox="partners" class="item">
            <img src="assets/images/photos/partners-img-01.jpg" alt="">
          </a>
          <a href="assets/images/photos/partners-img-02.jpg" data-fancybox="partners" class="item">
            <img src="assets/images/photos/partners-img-02.jpg" alt="">
          </a>
          <a href="assets/images/photos/partners-img-03.jpg" data-fancybox="partners" class="item">
            <img src="assets/images/photos/partners-img-03.jpg" alt="">
          </a>
          <a href="assets/images/photos/partners-img-04.jpg" data-fancybox="partners" class="item">
            <img src="assets/images/photos/partners-img-04.jpg" alt="">
          </a>
          <a href="assets/images/photos/partners-img-02.jpg" data-fancybox="partners" class="item">
            <img src="assets/images/photos/partners-img-02.jpg" alt="">
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
            <a href="#" class="slider__link">Ещё партнеры</a>
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

  <!-- Отзывы -->
  <div class="comment">
    <div class="row">
      <div class="faq__intro">
        <div>
          <h2><span>Отзывы постоянных клиентов</span></h2>
          <h3 class="h3_white"><span>Самое ценное, что у нас есть</span></h3>
          <p>
            Благодарим Вас за искренние отзывы об услугах и сервисе автоателье «AMD plus». Ваше мнение для нас очень
            важно! Оно помогает нам совершенствоваться и становиться еще лучше для Вас. Спасибо Вам за то, что выбираете
            нас снова и снова и рекомендуете знакомым и друзьям!
          </p>
        </div>
        <div></div>
      </div>
      <div class="comment-block">
        <div class="review-item__photo">
          <img src="assets/images/photos/review-photo.jpg" alt="">
        </div>
        <div class="review-item__text">
          <div class="review-item__top">
            <div class="review-item__info">
              <div class="review-item__title">Результатом очень доволен!</div>
              <div class="review-item__author">Сергей Гусев</div>
              <div class="review-item__date">5 февраля 2018 / Договор № AMD-6181</div>
            </div>
            <div class="rating">
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star reting__star_grey"></div>
            </div>
          </div>
          <div class="review-item__body">
            <p class="review-text review-text__hide">Здравствуйте, меня зовут Сергей Гусев, я автомобильный видеоблогер.
              У меня проект по восстановлению BMW X5 в кузове е70. Салон автомобиля был в плохом состоянии.
              Обод руля стерся, софт тач пластик облупился, боковина водительского сиденья промялась и потрескалась,
              подлокотник водительской двери потёрся и треснул. Ребята из AMD Plus решили все эти проблемы!
              Перешили руль Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis in odio quidem ullam
                ut. Atque delectus facere fugit id neque nulla quod recusandae repudiandae soluta ut. Asperiores at aut
                beatae deleniti ducimus eligendi enim et expedita impedit iste non, quaerat quos temporibus ut, vel
                veritatis voluptates voluptatibus. Ab accusantium animi asperiores assumenda culpa deleniti dolorem
                explicabo, fuga fugit impedit ipsa ipsum itaque laboriosam maiores minima molestias nihil, nostrum
                numquam, officiis omnis possimus quas quia quibusdam quo saepe sapiente sed sunt suscipit tempora vel
                veniam veritatis voluptate voluptatibus. Quam quia rerum tempora ullam. Mollitia obcaecati similique
                ullam vel. Nemo, nobis, perferendis?</p>
            <p class="comment__more">Читать далее</p>
          </div>
        </div>
      </div>
      <div class="comment-block">
        <div class="review-item__photo">
          <img src="assets/images/photos/review-photo-03.jpg" alt="">
        </div>
        <div class="review-item__text">
          <div class="review-item__top">
            <div class="review-item__info">
              <div class="review-item__title">Сделали качественно, замечаний нет.</div>
              <div class="review-item__author">Алексей</div>
              <div class="review-item__date">18 апреля 2017 / Договор № AMD-03783</div>
            </div>
            <div class="rating">
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star reting__star_grey"></div>
            </div>
          </div>
          <div class="review-item__body">
            <p class="review-text review-text__hide">Была порвана седлушка комбинированного салона Мерседес-Бенц c180 w204 рестайлинг.Сделали качественно, замечаний нет.</p>
            <p class="comment__more">Читать далее</p>
          </div>
        </div>
    </div>
      <div class="comment-block">
        <div class="review-item__photo">
          <img src="assets/images/photos/review-photo-04.jpg" alt="">
        </div>
        <div class="review-item__text">
          <div class="review-item__top">
            <div class="review-item__info">
              <div class="review-item__title">Спасибо «AMD plus»</div>
              <div class="review-item__author">Кирилл Николаев</div>
              <div class="review-item__date">16 марта 2016 / Договор № AMD-00576</div>
            </div>
            <div class="rating">
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star reting__star_grey"></div>
            </div>
          </div>
          <div class="review-item__body">
            <p  class="review-text review-text__hide">Обратился в компанию случайно, понравился сайт, а далее все оправдало ожидание. Последние 10 лет только новые машины. Но в прошлом год, после авто, машинку, которую эксплуатировал около 8 лет, страховая признала "тотально убитой", страховка небольшая, да еще "кризис". Купил 120 "Прадик" 2006 года. Все хорошо, но видно, что "жизнь потрепала". Привык к чистоте и ухоженности, а тут</p>
            <p class="comment__more">Читать далее</p>
          </div>
        </div>
      </div>
      <div class="comment-block">
        <div class="review-item__photo">
          <img src="assets/images/photos/review-photo-05.jpg" alt="">
        </div>
        <div class="review-item__text">
          <div class="review-item__top">
            <div class="review-item__info">
              <div class="review-item__title">Спасибо, в следующий раз снова обращусь к Вам!</div>
              <div class="review-item__author">Алла Захарова</div>
              <div class="review-item__date">26 ноября 2015 / Договор № AMD-38246</div>
            </div>
            <div class="rating">
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star reting__star_grey"></div>
            </div>
          </div>
          <div class="review-item__body">
            <p class="review-text review-text__hide">В автоателье «AMD plus» заказывала для своей машинки комплексную химчистку и ароматизацию салона.
              Результат
              порадовал: салон ухоженный, чистенький, свежий. Разводы на обшивке, которые не получалось убрать самой,
              исчезли! Стоимость химчистки приемлемая. Спасибо, в следующий раз снова обращусь к Вам!</p>
            <p class="comment__more">Читать далее</p>
          </div>
        </div>
      </div>
      <div class="comment-block">
        <div class="review-item__photo review-item__photo_preview">
          <img src="assets/images/photos/review-photo-06.jpg" alt="">
          <a href="assets/images/photos/otsiv-photo.jpg" data-fancybox="img" data-small-btn="true" class="review__preview">
            <img src="assets/images/icons/review-mini.png" alt="">
         </a>
        </div>
        <div class="review-item__text">
          <div class="review-item__top">
            <div class="review-item__info">
              <div class="review-item__title">Рекомендую!</div>
              <div class="review-item__author">Василий Говоров</div>
              <div class="review-item__date">5 октября 2015 / Договор № AMD-103455 октября 201 / Договор № AMD-10345</div>
            </div>
            <div class="rating">
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star"></div>
              <div class="reting__star reting__star_grey"></div>
            </div>
          </div>
          <div class="review-item__body">
            <p class="review-text review-text__hide">Всегда стараюсь подчеркивать свою индивидуальность. В автостудии AMD plus производил комплекс работ по
              тюнингу
              рулевого колеса: изменение геометрии, перетяжка кожей, установка подогрева. Теперь у моего любимого
              автомобиля
              совершенно новый кожаный руль с подогревом. Рекомендую!</p>
            <p class="comment__more">Читать далее</p>
          </div>
        </div>
      </div>
    </div>
    <a href="javascript:void(0);" class="button button_simple button_dark articles__button"><span>Показать больше отзывов</span></a>
    <!--  Отзывы адаптив  -->
    <div class="row comment-slider_mobile">
      <div class="reviews-block__grid">
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
                    <div class="rating">
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                    </div>
                  </div>
                </div>
                <div class="review-item__body">
                  <p class="">Здравствуйте, меня зовут Сергей Гусев, я автомобильный видеоблогер.
                    У меня проект по восстановлению BMW X5 в кузове е70. Салон автомобиля был в плохом состоянии.
                    Обод руля стерся, софт тач пластик облупился, боковина водительского сиденья промялась и потрескалась,
                    подлокотник водительской двери потёрся и треснул. Ребята из AMD Plus решили все эти проблемы!
                    Перешили руль Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis in odio quidem ullam
                    ut. Atque delectus facere fugit id neque nulla quod recusandae repudiandae soluta ut. Asperiores at aut
                    beatae deleniti ducimus eligendi enim et expedita impedit iste non, quaerat quos temporibus ut, vel
                    veritatis voluptates voluptatibus. Ab accusantium animi asperiores assumenda culpa deleniti</p>
<!--                  <p class="comment__more">Читать далее</p>-->
                </div>
              </div>
              <div class="item">
                <div class="review-item__top">
                  <div class="review-item__photo">
                    <img src="assets/images/photos/review-photo-03.jpg" alt="">
                  </div>
                  <div class="review-item__info">
                    <div class="review-item__title">Сделали качественно, замечаний нет.</div>
                    <div class="review-item__author">Алексей</div>
                    <div class="review-item__date">18 апреля 2017 / Договор № AMD-03783</div>
                    <div class="rating">
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                    </div>
                  </div>
                </div>
                <div class="review-item__body">
                  <p class="">Была порвана седлушка комбинированного салона Мерседес-Бенц c180 w204 рестайлинг.Сделали качественно, замечаний нет.</p>
<!--                  <p class="comment__more">Читать далее</p>-->
                </div>
              </div>

              <div class="item">
                <div class="review-item__top">
                  <div class="review-item__photo">
                    <img src="assets/images/photos/review-photo-04.jpg" alt="">
                  </div>
                  <div class="review-item__info">
                    <div class="review-item__title">Спасибо «AMD plus»</div>
                    <div class="review-item__author">Кирилл Николаев</div>
                    <div class="review-item__date">16 марта 2016 / Договор № AMD-00576</div>
                    <div class="rating">
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                    </div>
                  </div>
                </div>
                <div class="review-item__body">
                  <p  class="">Обратился в компанию случайно, понравился сайт, а далее все оправдало ожидание. Последние 10 лет только новые машины. Но в прошлом год, после авто, машинку, которую эксплуатировал около 8 лет, страховая признала "тотально убитой", страховка небольшая, да еще "кризис". Купил 120 "Прадик" 2006 года. Все хорошо, но видно, что "жизнь потрепала". Привык к чистоте и ухоженности, а тут</p>
<!--                  <p class="comment__more">Читать далее</p>-->
                </div>
              </div>
              <div class="item">
                <div class="review-item__top">
                  <div class="review-item__photo">
                    <img src="assets/images/photos/review-photo-05.jpg" alt="">
                  </div>
                  <div class="review-item__info">
                    <div class="review-item__title">Спасибо, в следующий раз снова обращусь к Вам!</div>
                    <div class="review-item__author">Алла Захарова</div>
                    <div class="review-item__date">26 ноября 2015 / Договор № AMD-38246</div>
                    <div class="rating">
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                    </div>
                  </div>
                </div>
                <div class="review-item__body">
                  <p class="">В автоателье «AMD plus» заказывала для своей машинки комплексную химчистку и ароматизацию салона.
                    Результат
                    порадовал: салон ухоженный, чистенький, свежий. Разводы на обшивке, которые не получалось убрать самой,
                    исчезли! Стоимость химчистки приемлемая. Спасибо, в следующий раз снова обращусь к Вам!</p>
<!--                  <p class="comment__more">Читать далее</p>-->
                </div>
              </div>
              <div class="item">
                <div class="review-item__top">
                  <div class="review-item__photo">
                    <img src="assets/images/photos/review-photo-06.jpg" alt="">
                  </div>
                  <div class="review-item__info">
                    <div class="review-item__title">Рекомендую!</div>
                    <div class="review-item__author">Василий Говоров</div>
                    <div class="review-item__date">5 октября 2015 / Договор № AMD-103455 октября 201 / Договор № AMD-10345</div>
                    <div class="rating">
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                      <div class="reting__star"></div>
                    </div>
                  </div>
                </div>
                <div class="review-item__body">
                  <p class="">Всегда стараюсь подчеркивать свою индивидуальность. В автостудии AMD plus производил комплекс работ по
                    тюнингу
                    рулевого колеса: изменение геометрии, перетяжка кожей, установка подогрева. Теперь у моего любимого
                    автомобиля
                    совершенно новый кожаный руль с подогревом. Рекомендую!</p>
<!--                  <p class="comment__more">Читать далее</p>-->
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
                  <span>3</span>
                  <span>4</span>
                  <span>5</span>

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
  <!--Написать директору-->
  <div class="write-director">
    <div class="row">
      <h2 class="h2_yellow">Написать директору</h2>
      <p>Для улучшения качества сервиса - вы можете написать свои замечания и пожелания руководству. Гарантируем быструю
        обратную связь и оперативную реакцию.</p>
      <a href="includes/modals/write-director.php" class="button button_dark fancybox-modal fancybox.ajax">Написать директору</a>
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