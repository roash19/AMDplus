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

<div class="content vacancy">
  <!-- Шапка сайта -->
  <div class="page-header">
    <div class="page-header__wallpaper"
         style="background-image: url(assets/images/bgs/vacancy_bg.jpg);">
    </div>
    <div class="page-header__container">
      <div class="row">
        <div class="page-header__breadcrumbs">
          <div class="breadcrumbs">
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">Главная</a>
            <i> / </i>
            <a class="link breadcrumbs__link breadcrumbs__link_home" href="/">О компании</a>
            <i> / </i>
            <span class="breadcrumbs__link breadcrumbs__link_current">Вакансии</span>
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
          <h1 class="h1 title">Вакансии</h1>
          <p class="description blog_description">Работа в сети детейлинг-центров «AMD plus» в Москве — уникальная
            возможность заниматься любимым делом, непрерывно совершенствоваться в профессиональной сфере и получать
            высокий стабильный доход. Добро пожаловать в нашу лучшую команду специалистов!
          </p>
          <a href="" class="button video-tour__top-button"><span>Отправить резюме</span></a>
        </div>
      </div>
    </div>
  </div>
  <!--Профессионалы-->
  <div class="professionals-wrapper">
    <div class="white-bg"></div>
    <div class="professionals">
      <div class="row">
        <div class="professionals__info"><h2>Профессионалы</h2>
          <h3>Наша лучшая команда специалистов</h3>
          <p>Отменное качество работ, искренний сервис и довольные результатом клиенты — всё это есть в нашей сети
            детейлинг-центров благодаря высококвалифицированным профессионалам своего дела. Наш коллектив ответственно и
            смело подходит к каждой задаче, благодаря чему наши услуги — современные и высокотехнологичные.
            <br>
            <br>
            Без преувеличения можно сказать, что сейчас у нас работает лучшая команда экспертов! Сотрудники «AMD plus»
            непрерывно совершенствуются и развиваются, постоянно повышают уровень знаний и опыта. Любовь к работе изо
            дня
            в день помогает нам становиться сильнее и успешнее в сфере реставрации и тюнинга. Присоединяйтесь!
          </p>
        </div>
        <div class="professionals-slider-wrapper" data-js="professionals-slider-wrapper">
          <div class="professionals-slider" data-js="professionals-slider">
            <div class="item">
              <div class="professionals-slider__image">
                <img src="assets/images/photos/professionals-img.jpg" alt="">
              </div>
            </div>
            <div class="item">
              <div class="professionals-slider__image">
                <img src="assets/images/photos/professionals-img.jpg" alt="">
              </div>
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
  </div>

  <!--Открытые вакансии-->
  <div class="cost-of" data-js-scroll-target="prices">
    <div class="cost-of__underlay" data-js="underlay">
      <div class="row">
        <div></div>
        <div></div>
      </div>
    </div>
    <div class="row row_with-margin" data-js="underlay-content">
      <h2>Открытые вакансии</h2>
      <h3 class="h3_white">Присоединяйтесь к нам</h3>
      <p>
        В настоящее время у нас открыты интересные и перспективные вакансии. Пожалуйста, ознакомьтесь с ними ниже. Если
        вакансия заинтересовала, нажмите на ссылку, чтобы узнать подробности.
        Возможно, мы ищем именно вас!
      </p>
    </div>
    <div class="row">
      <div class="cost-of__slider-wrapper" data-js="cost-of-slider-wrapper">
        <div class="cost-of__slider" data-js="cost-of-slider">
          <div class="item">
            <div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/vacancy/vacancy-01.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Мастер<br>
                  по пошиву и перетяжке автомобильных салонов
                </div>
                <div class="cost-of-item__info">
                  <p>Опыт работы — <span class="conditions">1-3 года</span><br>
                    Зарплата — <span class="conditions">от 40 000 до 130 000 Р</span></p>
                </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Откликнуться</span></a>
                  <a href="javascript:void(0);" class="link dashed link_white"
                     data-js="ajax-link"><span>Подробнее</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/vacancy/vacancy-02.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Полировщик</div>
                <div class="cost-of-item__info">
                  <p>Опыт работы — <span class="conditions">1-3 года</span><br>
                    Зарплата — <span class="conditions">от 40 000 до 130 000 Р</span></p>
                </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Откликнуться</span></a>
                  <a href="javascript:void(0);" class="link dashed link_white"
                     data-js="ajax-link"><span>Подробнее</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/vacancy/vacancy-03.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Старший мастер-приемщик
                </div>
                <div class="cost-of-item__info">
                  <p>Опыт работы — <span class="conditions">1-3 года</span><br>
                    Зарплата — <span class="conditions">от 40 000 до 130 000 Р</span></p>
                </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Откликнуться</span></a>
                  <a href="javascript:void(0);" class="link dashed link_white"><span>Подробнее</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/vacancy/vacancy-04.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Менеджер по продажам</div>
                <div class="cost-of-item__info">
                  <p>Опыт работы — <span class="conditions">1-3 года</span><br>
                    Зарплата — <span class="conditions">от 40 000 до 130 000 Р</span></p>
                </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Откликнуться</span></a>
                  <a href="javascript:void(0);" class="link dashed link_white"><span>Подробнее</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div>
              <div class="cost-of-item__bg"
                   style="background-image: url(assets/images/sliders/vacancy/vacancy-02.png)"></div>
              <div class="cost-of-item__content">
                <div class="cost-of-item__title">Полировщик</div>
                <div class="cost-of-item__info">
                  <p>Опыт работы — <span class="conditions">1-3 года</span><br>
                    Зарплата — <span class="conditions">от 40 000 до 130 000 Р</span></p>
                </div>
                <div class="cost-of-item__buttons">
                  <a href="javascript:void(0);" class="button button_small"><span>Откликнуться</span></a>
                  <a href="javascript:void(0);" class="link dashed link_white"><span>Подробнее</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cost-of__slider__navigator slider-navigator" data-js="cost-of-slider-navigator">
          <div>
            <div class="prev">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="9" height="14"
                   viewBox="0 0 8.5 14" xml:space="preserve"><path transform="rotate(134.999 4.347 9.857)"
                                                                   d="M-.6 8.9h9.9v1.9H-.6z" fill="#272727"/>
                <path transform="rotate(-134.999 4.347 4.201)" d="M-.6 3.3h9.9v1.9H-.6z" fill="#272727"/></svg>
            </div>
            <a href="#" class="slider__link">Ещё вакансии</a>
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

  <div class="cost-of__note">
    <div class="row">
      <div class="cost-of__note__text">
        <p>
          Вакансии актуальны на 26 ноября 2018 года.<br>
          Подразумевают полную занятость, сменный график на полный рабочий день.
        </p>
      </div>
    </div>
  </div>
  <!-- Форма -->
  <div class="feedback form-resume">
    <div class="row">
      <div class="feedback__grid">
        <div>
          <h2 class="h2_yellow">Отправьте своё резюме</h2>
          <p>
            Если вы хотите работать у нас, но нужной вакансии нет — отправьте нам своё резюме. Мы обязательно его
            рассмотрим в течение нескольких дней и в случае заинтересованности свяжемся с вами в ближайшее время. </p>
          <form action=""
                method="POST"
                class="feedback__form"
          >
            <div class="feedback__form__half">
              <div class="form__group form_name input__wrapper">
                <input type="text" name="name" class="name input" placeholder="Имя">
              </div>
              <div class="form__group form_phone input__wrapper">
                <input type="text" name="phone" class="phone input" placeholder="Номер телефона*">
              </div>
              <div class="form__group form_contract input__wrapper">
                <input type="text" name="contract" class="contract input" placeholder="Номер договора*">
              </div>
            </div>

            <div class="form__group form_text input__wrapper">
              <textarea name="text" class="text input" type="text" placeholder="О себе"></textarea>
            </div>
            <div class="input__wrapper_file photos-input">
              <input class="input_file"
                     id="feedback__images"
                     type="file"
                     name="files[]"
                     accept="image/jpeg,image/png,image/jpg,image/bmp" multiple
                     data-js="file-input"
              >
              <label class="input__label_file" for="feedback__images">Прикрепить резюме</label>
              <div class="input_file-fake">Файл не выбран...</div>
            </div>
            <div class="feedback__form__button">
              <button class="button button_tall button_orange" data-js="active-button" type="submit">
                <span>Отправить</span>
              </button>
              <div>
                Нажимая кнопку «Отправить», <br>
                Вы соглашаетесь c условиями <br>
                <a href="javascript:void(0);" class="link link_grey underline" target="_blank">
                  <span>Политики конфиденциальности.</span>
                </a>
              </div>
            </div>
          </form>
        </div>
        <div>
          <!--          <img src="assets/images/bgs/main-feedback.png" alt="">-->
        </div>
      </div>
    </div>
  </div>
  <!--  Преимущества работы -->
  <div class="vacancy-benefits">
    <div class="row">
      <h2>Приходите в «AMD plus»!</h2>
      <h3>Преимущества работы у нас</h3>
      <p>Карьера в достойной компании — это реальность! У нас вы получите стабильный доход, комфортное место работы и,
        конечно же, признание. Мы ценим и уважаем своих сотрудников и предоставляем им лучшие условия. Наш дружный
        коллектив ждёт вас!</p>
      <div class="vacancy-benefits__body">
        <div class="benefits-block benefits-block_01">
          <div class="benefits-block-img"></div>
          <div class="benefits__title">Команда профессионалов</div>
          <div class="benefits__text">Работа среди первоклассных опытных мастеров и крутых специалистов</div>
        </div>
        <div class="benefits-block benefits-block_02">
          <div class="benefits-block-img"></div>
          <div class="benefits__title">Конкурентная зарплата</div>
          <div class="benefits__text">Обеспечиваем высокий и стабильный доход с перспективой роста</div>
        </div>
        <div class="benefits-block benefits-block_03">
          <div class="benefits-block-img"></div>
          <div class="benefits__title">Удобное рабочее место</div>
          <div class="benefits__text">Для наших сотрудников только комфортные условия труда и отдыха</div>
        </div>
        <div class="benefits-block benefits-block_04">
          <div class="benefits-block-img"></div>
          <div class="benefits__title">Достойные условия труда</div>
          <div class="benefits__text">Корпоративное обучение и тренинги,
            спецодежда и инструменты
          </div>
        </div>
      </div>
    </div>
  </div>
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