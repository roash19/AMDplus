$(document).ready(function () {

    // ШАПКА САЙТА
    let $header            = $('[data-js="header"]'),
        $main_menu         = $header.find('[data-js="header-menu"]'),
        $dropdown_links    = $main_menu.find('[data-js="dropdown-link"]'),
        $dropdowns_wrapper = $('[data-js="dropdowns-wrapper"]'),
        $dropdowns         = $dropdowns_wrapper.find('.dropdown'),
        $dropdowns_close   = $dropdowns_wrapper.find('.dropdown-close'),
        $submenus          = $dropdowns.find('.dropdown__submenu__list'),
        $submenu_item      = $submenus.find('li'),
        last_scroll_top    = 0;

    $(window).on('scroll', function () {
        onScroll();
    });

    // Сворачивает хедер при скролле
    function onScroll() {
        let scroll_top = $(window).scrollTop();
        if (scroll_top > 350 && scroll_top > last_scroll_top) {
            $header.addClass('header_small');
            $dropdowns_wrapper.addClass('header_small');
        } else {
            $header.removeClass('header_small');
            $dropdowns_wrapper.removeClass('header_small');
        }
        last_scroll_top = scroll_top;
    }

    // ВЫПАДАЮЩЕЕ МЕНЮ

    // Клик по пункту с выпадающим меню
    $dropdown_links.on('click', function (e) {
        let $current  = $(e.currentTarget),
            target    = $current.data('js-dropdown-target'),
            $dropdown = $dropdowns_wrapper.find('[data-js-dropdown="' + target + '"]');
        if ($current.is('.active')) {
            hideDropdown();
        } else {
            hideDropdown();
            showDropdown($current, $dropdown);
        }
    });

    // Клик по крестику в выпадающем
    $dropdowns_close.on('click', function (e) {
        hideDropdown();
    });

    // Клик по пункту меню с подменю в выпадающем
    $submenu_item.on('click', function (e) {
        let $current                  = $(e.currentTarget),
            index                     = $current.index(),
            $current_dropdown         = $current.closest('.dropdown'),
            $current_submenu_items    = $current_dropdown.find('.dropdown__submenu__list li'),
            $submenu_content          = $current_dropdown.find('.dropdown__links__grid'),
            $current_subnmenu_content = $current_dropdown.find('.dropdown__links__grid').eq(index);

        $current_submenu_items.removeClass('active');
        $current.addClass('active');

        $submenu_content.removeClass('flex shown');
        $current_subnmenu_content.addClass('flex');
        setTimeout(() => {
            $current_subnmenu_content.addClass('shown');
        }, 50);
    });

    $(window).on('resize orientationchange', function () {
        if ($(window).innerWidth() <= 767) {
            hideDropdown();
        }
    });


    //Показывает выпадающее меню
    function showDropdown($current, $dropdown) {
        $current.addClass('active');
        $dropdown.addClass('block');
        setTimeout(() => {
            $dropdown.addClass('shown');
        }, 50);

        $('html').css({
            'overflow-y': 'hidden',
            'padding-right': '17px',
        });

        if ($(window).innerWidth() > 1500) {
            $('.header-bottom').css({
                'padding-right': '17px',
            });
            $('.header-top').css({
                'padding-right': '17px',
            });
            $('.divider-colored').css({
                'padding-right': '17px',
            });
        } else {
            $('html').css({
                'padding-right': '0',
            });
        }

        $(window).trigger('header:dropdowns:show');
    }


    //Скрывает выпадающее меню
    function hideDropdown() {
        $dropdown_links.removeClass('active');
        $dropdowns.removeClass('shown block');
        $('html').css({
            'overflow-y': 'auto',
            'padding-right': '0',
        });

        if ($(window).innerWidth() > 1500) {
            $('.header-bottom').css({
                'padding-right': '0',
            });
            $('.header-top').css({
                'padding-right': '0',
            });
            $('.divider-colored').css({
                'padding-right': '0',
            });
        }
        $(window).trigger('header:dropdowns:hide');
    }

    //Закрытие меню по клику мимо
    $(document).mouseup(function (e) { // событие клика по веб-документу
        var div = $(".dropdowns-wrapper");
        var divMenu = $('.header-bottom');
        if (!div.is(e.target) && !divMenu.is(e.target) // если клик был не по нашему блоку
            && divMenu.has(e.target).length === 0 && div.has(e.target).length === 0) { // и не по его дочерним элементам
            hideDropdown();
        }
    });
    // !ВЫПАДАЮЩЕЕ МЕНЮ

    // ПОИСК
    let $search_wrapper = $('.header-bottom'),
        $search_form    = $search_wrapper.find('[data-js-header-menu="search-form"]'),
        $search_input   = $search_form.find('[data-js-header-menu="search-input"]'),
        $search_open    = $search_wrapper.find('[data-js-header-menu="search-link"]'),
        $search_close   = $search_wrapper.find('[data-js-header-menu="search-close"]');

    // Открытие поиска
    $search_open.on('click', function () {
        searchOpen();
    });

    // Закрытие поиска
    $search_close.on('click', function () {
        searchClose();
    });

    // Обработка при ресайзах
    $(window).on('resize orientationchange', function () {
        if ($(window).width() <= 767 && $search_wrapper.is('.header-bottom_with-search')) {
            $search_close.trigger('click');
        }
    });


    //Открытие поиска
    function searchOpen() {
        // Показываем поиск
        $search_wrapper.addClass('header-bottom_with-search');
        // Отправка формы, если вбит текст
        $search_open.on('click', function () {
            if ($search_input.val().trim()) {
                $search_form.submit();
            }
        });
    }


    //Закрытие поиска
    function searchClose() {
        // Скрываем поиск
        $search_wrapper.removeClass('header-bottom_with-search');
        // Биндим событие открытия поиска
        $search_open.on('click', function () {
            searchOpen();
        });
    }
    // !ПОИСК

    // МОБИЛЬНОЕ МЕНЮ
    let $header_mobile          = $('[data-js="header-mobile"]'),
        $header_button          = $header_mobile.find('[data-js="menu-button"]'),
        $mobile_menu            = $('[data-js="mobile-menu"]'),
        $mobile_menu_container  = $mobile_menu.find('.mobile-menu__container'),
        $mobile_with_submenus   = $mobile_menu.find('.has-submenu'),
        $mobile_submenus        = $mobile_menu.find('.mobile-menu__submenu'),
        $mobile_with_dropdown   = $mobile_menu.find('.has-dropdown'),
        $mobile_dropdowns       = $mobile_menu.find('.mobile-menu__dropdown'),
        $mobile_submenu_opener  = $mobile_menu.find('.mobile-menu__item__main'),
        $mobile_dropdown_opener = $mobile_menu.find('.mobile-menu__item_dropdown'),
        $mobile_back            = $mobile_menu.find('.mobile-menu__back'),
        mobile_container_height = null;

    $(window).on('load', function () {
        $mobile_menu_container.children().each((i, el) => {
            mobile_container_height += $(el).outerHeight(true, true);
        });
        if (! $mobile_submenus.is('.animated')) {
            $mobile_menu_container.addClass('dropdown-opened');
        } else {
            $mobile_menu_container.height(mobile_container_height);
        }
    });

    // Открытие меню второго уровня в мобильном
    $mobile_submenu_opener.on('click', function (e) {
        let $current       = $(e.currentTarget),
            $submenu       = $current.next('.mobile-menu__submenu'),
            submenu_height = $submenu.outerHeight(true);

        $mobile_menu_container.height(submenu_height);
        $submenu.addClass('shown');
        setTimeout(() => {
            $submenu.addClass('animated');
        }, 50);

        $mobile_with_dropdown.removeClass('opened');
        $mobile_dropdowns.removeClass('shown');
        $mobile_menu_container.removeClass('dropdown-opened');

    });

    // Закрытие меню второго уровня
    $mobile_back.on('click', function (e) {
        let $current       = $(e.currentTarget),
            $submenu       = $current.closest('.mobile-menu__submenu'),
            $prev_submenu  = $current.parent().parent().closest('.mobile-menu__submenu'),
            submenu_height = $prev_submenu.outerHeight(true);

        $mobile_menu_container.height(submenu_height);
        $submenu.removeClass('animated');
        setTimeout(() => {
            $submenu.addClass('shown');
        }, 200);
        if (! $mobile_submenus.is('.animated')) {
            $mobile_menu_container.addClass('dropdown-opened');
        }
    });

    // Открытие мобильного выпадающего меню
    $mobile_dropdown_opener.on('click', function (e) {
        let $current          = $(e.currentTarget),
            $dropdown_wrapper = $current.parent(),
            $dropdown         = $current.next('.mobile-menu__dropdown');

        if ($dropdown_wrapper.is('.opened')) {
            $dropdown_wrapper.removeClass('opened');
            $dropdown.removeClass('shown');
            setTimeout(() => {
                $mobile_menu_container.removeClass('dropdown-opened');
            }, 200);
        } else {
            $mobile_with_dropdown.removeClass('opened');
            $mobile_dropdowns.removeClass('shown');
            $dropdown_wrapper.addClass('opened');
            $mobile_menu_container.addClass('dropdown-opened');
            $dropdown.addClass('shown');
        }
    });

    // Открывает мобильное меню
    $header_button.on('click', function (e) {
        let $current = $(e.currentTarget);

        if ($current.is('.opened')) {
            hideMenu($current, $mobile_menu);
        } else {
            showMenu($current, $mobile_menu);
        }
    });

    //Показать мобильное меню
    function showMenu($current, $menu) {
        $current.addClass('opened');
        $menu.addClass('shown');
        setTimeout(() => {
            $menu.addClass('animated');
        }, 50);

        $('html').css({
            'overflow-y': 'hidden',
        });
    }

    //Скрыть мобильное меню
    function hideMenu($current, $menu) {
        $current.removeClass('opened');
        $menu.removeClass('animated');
        setTimeout(() => {
            $menu.addClass('shown');
        }, 200);

        $('html').css({
            'overflow-y': 'auto',
        });
    }
    // !МОБИЛЬНОЕ МЕНЮ
    // !ШАПКА САЙТА

    // БОЛЬШОЙ СЛАЙДЕР ПОРТФОЛИО
    $('[data-js="portfolio-slider-wrapper"]').each(function (i, el) {
        let $wrapper = $(el),
            $slider  = $wrapper.find('[data-js="portfolio-slider"]'),
            $text    = $wrapper.find('[data-js="portfolio-slider-text"]'),
            $next    = $wrapper.find('.next'),
            $prev    = $wrapper.find('.prev'),
            options  = {
                slidesToShow: 1,
                infinite: true,
                dots: false,
                arrows: false,
                touchThreshold: 10,
                asNavFor: $text,
            };

        $slider.slick(options);
        $next.on('click', function () {
            $slider.slick('slickNext');
        });

        $prev.on('click', function () {
            $slider.slick('slickPrev');
        });

        if ($text.length) {
            options_text = {
                slidesToShow: 1,
                infinite: true,
                dots: false,
                arrows: false,
                touchThreshold: 10,
                asNavFor: $slider,
            };
            $text.slick(options_text);
        }
    });
    // !БОЛЬШОЙ СЛАЙДЕР ПОРТФОЛИО

    // МАЛЕНЬКИЙ СЛАЙДЕР ПОРТФОЛИО
    $('[data-js="portfolio-slider-small-wrapper"]').each(function (i, el) {
        let $wrapper = $(el),
            $slider  = $wrapper.find('[data-js="portfolio-slider-small"]'),
            $next    = $wrapper.find('.next'),
            $prev    = $wrapper.find('.prev'),
            options  = {
                slidesToShow: 3,
                infinite: true,
                dots: false,
                arrows: false,
                touchThreshold: 10,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            };

        $slider.slick(options);
        $next.on('click', function () {
            $slider.slick('slickNext');
        });
        $prev.on('click', function () {
            $slider.slick('slickPrev');
        });
    });
    // !МАЛЕНЬКИЙ СЛАЙДЕР ПОРТФОЛИО

    // СЛАЙДЕР ВИДЕОГАЛЕРЕИ
    $('[data-js="video-slider-wrapper"]').each(function (i, el) {
        let $wrapper = $(el),
            $slider  = $wrapper.find('[data-js="video-slider"]'),
            $next    = $wrapper.find('.next'),
            $prev    = $wrapper.find('.prev'),
            options  = {
                slidesToShow: 1,
                infinite: true,
                dots: false,
                arrows: false,
                touchThreshold: 10,
                adaptiveHeight: true,
            };

        $slider.slick(options);

        $next.on('click', function () {
            $slider.slick('slickNext');
        });
        $prev.on('click', function () {
            $slider.slick('slickPrev');
        });
    });
    // !СЛАЙДЕР ВИДЕОГАЛЕРЕИ

    // СЛАЙДЕР ПРОФЕССИОНАЛЫ
    $('[data-js="professionals-slider-wrapper"]').each(function (i, el) {
        let $wrapper = $(el),
            $slider  = $wrapper.find('[data-js="professionals-slider"]'),
            $next    = $wrapper.find('.next'),
            $prev    = $wrapper.find('.prev'),
            options  = {
                slidesToShow: 1,
                infinite: true,
                dots: false,
                arrows: false,
                touchThreshold: 10,
                adaptiveHeight: true,
            };

        $slider.slick(options);

        $next.on('click', function () {
            $slider.slick('slickNext');
        });
        $prev.on('click', function () {
            $slider.slick('slickPrev');
        });
    });
    // !СЛАЙДЕР ПРОФЕССИОНАЛЫ

    // СЛАЙДЕР ФОТОГАЛЕРЕИ
    $('[data-js="gallery-slider-wrapper"]').each(function (i, el) {
        let $wrapper = $(el),
            $slider  = $wrapper.find('[data-js="gallery-slider"]'),
            $next    = $wrapper.find('.next'),
            $prev    = $wrapper.find('.prev'),
            options = {
                slidesToShow: 3,
                infinite: true,
                dots: false,
                arrows: false,
                touchThreshold: 10,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],

            };

        $slider.slick(options);

        $next.on('click', function () {
            $slider.slick('slickNext');
        });
        $prev.on('click', function () {
            $slider.slick('slickPrev');
        });

        let $slide = $slider.find('.slick-slide:not(.slick-clone)');
        $slide.find('[data-fancybox="gallery"]').fancybox({
            loop: true,
            buttons: [
                'close',
            ],
            protect: true,
            hideScrollbar: false,
        });
    });
    // !СЛАЙДЕР ФОТОГАЛЕРЕИ

    // СЛАЙДЕР ПАРТНЕРЫ
    $('[data-js="partners-wrapper"]').each(function (i, el) {
        let $wrapper = $(el),
            $slider  = $wrapper.find('[data-js="partners-slider"]'),
            $next    = $wrapper.find('.next'),
            $prev    = $wrapper.find('.prev'),
            options  = {
                slidesToShow: 4,
                infinite: true,
                dots: false,
                arrows: false,
                touchThreshold: 10,
                responsive: [
                    {
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 1023,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 550,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            };

        $slider.slick(options);

        $next.on('click', function () {
            $slider.slick('slickNext');
        });
        $prev.on('click', function () {
            $slider.slick('slickPrev');
        });

        let $slide = $slider.find('.slick-slide:not(.slick-clone)');
        $slide.find('[data-fancybox="partners"]').fancybox({
            loop: true,
            buttons: [
                'close',
            ],
            protect: true,
            hideScrollbar: false,
        });
    });
    // !СЛАЙДЕР ПАРТНЕРЫ


    // СЛАЙДЕР СТОИМОСТЬ
    $('[data-js="cost-of-slider-wrapper"]').each(function (i, el) {
        let $wrapper   = $(el),
            $slider    = $wrapper.find('[data-js="cost-of-slider"]'),
            $navigator = $wrapper.find('[data-js="cost-of-slider-navigator"]'),
            $next      = $wrapper.find('.next'),
            $prev      = $wrapper.find('.prev'),
            options    = {
                slidesToShow: 4,
                infinite: true,
                dots: false,
                arrows: false,
                touchThreshold: 10,
                autoplay: false,
                autoplaySpeed: 5000,
                responsive: [
                    {
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 1023,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 550,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            };

        $slider.on('init', (event, slick) => {
            navigationCheck($slider, $navigator, slick);
        });

        $slider.slick(options);

        $next.on('click', function () {
            $slider.slick('slickNext');
        });
        $prev.on('click', function () {
            $slider.slick('slickPrev');
        });
        $slider.on('afterChange', (event, slick, currentSlide) => {
            navigationCheck($slider, $navigator, slick)
        });
    });

    function navigationCheck($slider, $navigator, slick) {
        if ($slider.find('.item').length <= slick.options.slidesToShow) {
            $navigator.hide();
        } else {
            $navigator.show();
        }
    }
    // !СЛАЙДЕР СТОИМОСТЬ

    // СЛАЙДЕР ОТЗЫВОВ
    $('[data-js="reviews-slider-wrapper"]').each(function (i, el) {
        let $wrapper = $(el),
            $slider  = $wrapper.find('[data-js="reviews-slider"]'),
            $counter = $wrapper.find('[data-js="reviews-slider-counter"]'),
            $next    = $wrapper.find('.next'),
            $prev    = $wrapper.find('.prev'),
            options  = {
                slidesToShow: 1,
                infinite: true,
                dots: false,
                arrows: false,
                touchThreshold: 10,
            };

        $slider.slick(options);

        $next.on('click', function () {
            $slider.slick('slickNext');
        });
        $prev.on('click', function () {
            $slider.slick('slickPrev');
        });

        $slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
            $counter.find('span').removeClass('active');
            $counter.find('span').eq(nextSlide).addClass('active');
        });

        $counter.find('span').each((i, el) => {
            let $item = $(el);
            $item.on('click', function (e) {
                let $this = $(e.currentTarget);
                $this.addClass('active');
                $slider.slick('slickGoTo', parseInt($this.index()));
            });
        });
    });
    // !СЛАЙДЕР ОТЗЫВОВ

    // СЛАЙДЕР СПЕЦИАЛИСТОВ
    $('[data-js="specialists-slider-wrapper"]').each(function (i, el) {
        let $wrapper      = $(el),
            $slider_photo = $wrapper.find('[data-js="specialists-slider-photo"]'),
            $slider_desc  = $wrapper.find('[data-js="specialists-slider-desc"]'),
            $next         = $wrapper.find('.next'),
            $prev         = $wrapper.find('.prev'),
            options       = {
                slidesToShow: 1,
                infinite: true,
                dots: false,
                arrows: false,
                touchThreshold: 10,
                asNavFor: $slider_desc,
            };

        $slider_photo.slick(options);

        $next.on('click', function () {
            $slider_photo.slick('slickNext');
        });
        $prev.on('click', function () {
            $slider_photo.slick('slickPrev');
        });

        let options_desc = {
            slidesToShow: 1,
            infinite: true,
            dots: false,
            arrows: false,
            touchThreshold: 10,
            asNavFor: $slider_photo,
        };
        $slider_desc.slick(options_desc);
    });
    // !СЛАЙДЕР СПЕЦИАЛИСТОВ

    // СЛАЙДЕР СХЕМА ПРОЕЗДА
    $('[data-js="scheme-slider-wrapper"]').each(function (i, el) {
        let $wrapper = $(el),
            $slider  = $wrapper.find('[data-js="scheme-slider"]'),
            $next    = $wrapper.find('.next'),
            $prev    = $wrapper.find('.prev'),
            options  = {
                slidesToShow: 1,
                infinite: true,
                dots: false,
                arrows: false,
                touchThreshold: 10,

            };

        $slider.slick(options);

        $next.on('click', function () {
            $slider.slick('slickNext');
        });
        $prev.on('click', function () {
            $slider.slick('slickPrev');
        });
        let $slide = $slider.find('.slick-slide:not(.slick-clone)');
    });
    // !СЛАЙДЕР СХЕМА ПРОЕЗДА

    //СХЕМА ПРОЕЗДА ТАБЫ
    $('.scheme__tab-title').on('click', function () {
        $('.scheme__tab-title').removeClass('scheme__tab-title_active');
        $(this).addClass('scheme__tab-title_active');
        $('.gallery-slider').slick('setPosition');
    });

    $(".tab_item").not(":first").hide();
    $(".row .tab").click(function () {
        $(".row .tab").removeClass("active").eq($(this).index()).addClass("active");
        $(".tab_item").hide().eq($(this).index()).fadeIn();
        $('.gallery-slider').slick('setPosition');
    }).eq(0).addClass("active");


    // ВОПРОС_ОТВЕТ
    $(window).on('load resize orientationchange', function () {
        if ($(window).innerWidth() <= 900) {
            $('[data-js="faq-show-more"]').each((i, el) => {
                let $this        = $(el),
                    count        = $this.children().length,
                    first_height = $this.children().first().outerHeight(true);

                if (count > 1 && ! $this.parent().find('[data-js-faq="show-more"]').length) {
                    $this.after('<span data-js-faq="show-more" class="button button_simple button_regular faq__show-more"><span>Больше вопросов</span></span>');
                }

                $this.css({
                    'max-height': first_height,
                });

                $('[data-js-faq="show-more"]').on('click', function (e) {
                    let $current = $(e.currentTarget);
                    $this.addClass('shown');
                    if ($this.is('.shown')) {
                        $current.remove();
                    }
                });
            });
        } else {
            $('[data-js="faq-show-more"]').each((i, el) => {
                let $this = $(el);

                $this.removeClass('shown').css({
                    'max-height': 'none',
                });
                $this.parent().find('[data-js-faq="show-more"]').remove();
            });
        }
    });
    // !ВОПРОС_ОТВЕТ

    // ПОДЛОЖКА
    $(window).on('load resize orientationchange', function () {
        if ($(window).innerWidth() <= 1024) {
            $('[data-js="underlay"]').each((i, el) => {
                let $this             = $(el),
                    $underlay_wrapper = $this.find('.row').children().first(),
                    $content          = $this.parent().find('[data-js="underlay-content"]'),
                    $content_h2       = $content.find('h2'),
                    $content_h3       = $content.find('h3'),
                    h2_height         = $content_h2.outerHeight(true),
                    h3_height         = $content_h3.outerHeight(true);
                $underlay_wrapper.height(h2_height + h3_height + 4);
            });
        }
    });
    // !ПОДЛОЖКА

    // СВЕРНУТЫЙ ТЕКСТ
    $(window).on('load resize orientationchange', function () {
        if ($(window).innerWidth() <= 767) {
            $('[data-js="text-expandable"]').each((i, el) => {
                let $this = $(el);
                if (!$this.parent().find('[data-js="expand"]').length) {
                    $this.after('<span data-js="expand" class="text-expand"><span>Читать далее...</span></span>');
                }
                $(".text-expand").on('click', function () {
                    let $current = $(this.currentTarget);
                    $('[data-js="text-expandable"]').toggleClass('expanded');
                    if ($this.is('.expanded')) {
                        $(".text-expand").find('span').text('Свернуть');
                    } else {
                        $(".text-expand").find('span').text('Читать далее...');
                    }
                })
            });
        } else {
            $('[data-js="text-expandable"]').each((i, el) => {
                let $this = $(el);
                $this.parent().find('[data-js="expand"]').remove();
            });
        }
    });
    // !СВЕРНУТЫЙ ТЕКСТ


    //МОДАЛКИ
    $('.fancybox-modal').fancybox({
        'autoScale': false,
        'transitionIn': 'none',
        'showCloseButton': true,
        'transitionOut': 'none',
        'href': this.href,
        'type': 'ajax',
        'afterLoad': function () {
            $(".phone").mask("+7(999) 999-9999");
        }
    });

    // ПЛАВНЫЙ СКРОЛЛ ПО ЯКОРЯМ
    $('a[href^="#"]').bind("click", function(e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($(anchor.attr("href")).offset().top - 49) + 'px'
        }, 1000);
    });


    //Портфолио фильтер
    $('.portfolio-filter-button-down').on('click', function () {
        $('.portfolio-service').slideDown();
        $('.portfolio-filter-button-down').hide(300);

    });
    $('.portfolio-filter-button-up').on('click', function () {
        $('.portfolio-service').slideUp();
        $('.portfolio-filter-button-down').show(300);
    });


    //Фильтер магазин
    $(".filter").on('click', function () {
        $(".filter").removeClass('store-filter_active');
        $(this).addClass('store-filter_active');
    });

    //Кнопка на вверх
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 700) {
            $(".button-up").fadeIn();
        } else {
            $(".button-up").fadeOut();
        }
    });

    $(".button-up").click(function () {
        $('body,html').animate({scrollTop: 0}, 800);
    });


    //Полировка - графики сравнения
    if ($('div').hasClass('comparison')) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > $('.comparison').offset().top - 400) {
                $('.comparison__line-yellow').addClass('comparison-anim');
                $('.comparison__line-black').addClass('comparison-anim');
            }
        });
    }


    // Количество выбранных файлов
    $('input[type=file]').change(function () {
        if ($(this).val() != '') {
            $(this).next().next().text('Выбрано файлов: ' + $(this)[0].files.length);
        } else $(this).next().next().text('Выберите файлы');
    });


    //Видео
    $("a.popupbox-video").fancybox({});


    // Маска телефона
    $(".phone").mask("+7 (999) 999-99-99");


    //Отмена выделения текста при переключении слайдера
    $('.next,.prev').mouseover(function () {
        $('h2,h3,p,span,a,li,div').addClass('unselectable');
    });

    $('.next,.prev').mouseleave(function () {
        $('h2,h3,p,span,a,li,div').removeClass('unselectable');
    });


    // Активный пункт меню,медленно грузиться
    $(function () {
        $('a.header-menu__link').each(function () {
            var location = window.location.href;
            var link = this.href;
            var result = location.match(link);
            $(this).removeClass('active');
            if (result != null) {
                $(this).addClass('active');
            }
        });
    });


    //Свернутый текст - отзывы
    $(".review-text").each(function (index) {
        let h = $(this)[0].scrollHeight;
        if (h < 85) {
            $(this).next().css('display', 'none');
        }
    });

    $('.comment__more').click(function (e) {
        let h    = $(this).prev()[0].scrollHeight,
            text = $(this).prev();

        if (text.hasClass("review-text__hide")) {
            e.stopPropagation();
            text.animate({
                'height': h
            });
            $(this).html("Свернуть");
            text.removeClass("review-text__hide");
        } else {
            if ($(window).innerWidth() > 767) {
                text.animate({
                    'height': '70px'
                });
                $(this).html("Читать далее");
                text.addClass("review-text__hide");
            } else {
                text.animate({
                    'height': '80px'
                });
                $(this).html("Читать далее");
                text.addClass("review-text__hide");
            }
        }
    });


    //Видео с постером
    $(document).on('click','.js-videoPoster',function(e) {
        //отменяем стандартное действие button
        e.preventDefault();
        var poster = $(this);
        // ищем родителя ближайшего по классу
        var wrapper = poster.closest('.js-videoWrapper');
        videoPlay(wrapper);
    });

    //вопроизводим видео, при этом скрывая постер
    function videoPlay(wrapper) {
        let iframe = wrapper.find('.js-videoIframe');
        // Берем ссылку видео из data
        let src = iframe.data('src');
        // скрываем постер
        wrapper.addClass('videoWrapperActive');
        $('.video-text').css("opacity",0);
        // подставляем в src параметр из data
        iframe.attr('src',src);
    };

    //Размер контейнера под размер превью видео
    $(window).on('load resize orientationchange', function () {
        $(".video_wrapper_full").each(function (index) {
            let hVideo=$(this).find('img').css('height');
            $(this).css("height", hVideo);
        });

    });

    //Яндекс карта
    ymaps.ready(init);
    function init(){
        let zoom=0;
        if ($(window).innerWidth() > 767) {
            zoom = 11;
        } else {
            zoom = 10;
        }

        let myMap = new ymaps.Map("map", {
            center: [55.70, 37.64],
            zoom: zoom,

        });

        myMap.behaviors.disable('scrollZoom');

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        );

            myPlacemark_1 = new ymaps.Placemark([55.613539, 37.586598], {
                balloonContent: 'Москва, Красного маяка, 16 м. Пражская',
                iconCaption: 'Детейлинг-центр «AMD plus»'

            }, {
                iconLayout: 'default#imageWithContent',
                // Своё изображение иконки метки.
                iconImageHref: 'assets/images/icons/map-icon.png',
                // Размеры метки.
                iconImageSize: [37, 48],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-24, -24],
                // Смещение слоя с содержимым относительно слоя с картинкой.
                iconContentOffset: [15, 15],
                // Макет содержимого.
                iconContentLayout: MyIconContentLayout
            });

        myPlacemark_2 = new ymaps.Placemark([55.759724, 37.740228], {
            balloonContent: 'Россия, Москва, Золотая улица, 11',
            iconCaption: 'Детейлинг-центр «AMD plus»'

        }, {
            iconLayout: 'default#imageWithContent',
            iconImageHref: 'assets/images/icons/map-icon.png',
            iconImageSize: [37, 48],
            iconImageOffset: [-24, -24],
            iconContentOffset: [15, 15],
            iconContentLayout: MyIconContentLayout
        });

        myMap.geoObjects
        .add(myPlacemark_1)
        .add(myPlacemark_2);
    }


});

//Сторис
var initStories = function () {
    var header = document.getElementById("stories");

    var timeIndex = 0;
    var shifts = [35, 60, 60 * 3, 60 * 60 * 2, 60 * 60 * 25, 60 * 60 * 24 * 4, 60 * 60 * 24 * 10];
    var timestamp = function () {
        var now = new Date();
        var shift = shifts[timeIndex++] || 0;
        var date = new Date(now - shift * 1000);

        return date.getTime() / 1000;
    };

    var stories = new Zuck('stories', {
        backNative: true,
        previousTap: true,
        autoFullScreen: false,
        skin: 'Snapssenger',
        avatars: true,
        list: false,
        cubeEffect: true,
        localStorage: true,
        stories: [
            {
                id: "Stages",
                photo: "assets/images/stories/stories-preview-01.jpg",
                name: "Этапы",
                link: "",
                lastUpdated: timestamp(),
                items: [
                    Zuck.buildItem("Stages-1", "photo", 3, "assets/images/blog/blog-image-01.jpg", "assets/images/blog/blog-image-01.jpg", '', false, false, timestamp()),
                    Zuck.buildItem("Stages-2", "photo", 3, "assets/images/blog/blog-image-02.jpg", "assets/images/blog/blog-image-02.jpg", '', false, false, timestamp()),
                    Zuck.buildItem("Stages-3", "photo", 3, "assets/images/blog/blog-image-03.jpg", "assets/images/blog/blog-image-03.jpg", '', false, false, timestamp())
                ]
            },
            {
                id: "Opti-Coat",
                photo: "assets/images/stories/stories-preview-02.jpg",
                name: "Opti-Coat",
                link: "",
                lastUpdated: timestamp(),
                items: [
                    Zuck.buildItem("Opti-Coat-1", "photo", 3, "assets/images/blog/blog-image-04.jpg", "assets/images/blog/blog-image-04.jpg", '', false, false, timestamp()),
                    Zuck.buildItem("Opti-Coat-2", "photo", 3, "assets/images/blog/blog-image-05.jpg", "assets/images/blog/blog-image-05.jpg", '', false, false, timestamp()),
                ]
            },
            {
                id: "Coatings",
                photo: "assets/images/stories/stories-preview-03.jpg",
                name: "Покрытия",
                link: "",
                lastUpdated: timestamp(),
                items: [
                    Zuck.buildItem("Coatings-1", "photo", 3, "assets/images/blog/blog-image-06.jpg", "assets/images/blog/blog-image-06.jpg", '', false, false, timestamp()),
                    Zuck.buildItem("Coatings-2", "photo", 3, "assets/images/blog/blog-image-01.jpg", "assets/images/blog/blog-image-01.jpg", '', false, false, timestamp()),
                ]
            },
            {
                id: "Price",
                photo: "assets/images/stories/stories-preview-04.jpg",
                name: "Цены",
                link: "",
                lastUpdated: timestamp(),
                items: [
                    Zuck.buildItem("Price-1", "photo", 0, "assets/images/blog/blog-image-02.jpg", "assets/images/blog/blog-image-02.jpg", '', false, false, timestamp()),
                    Zuck.buildItem("Price-2", "photo", 3, "assets/images/blog/blog-image-03.jpg", "assets/images/blog/blog-image-03.jpg", '', false, false, timestamp()),
                ]
            },

        ]
    });
};

initStories();






