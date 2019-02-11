<div class="modal cost-estimate-modal" data-js="modal">
  <div class="modal__container cost-estimate-modal__container">
    <div>
      <img src="assets/images/modals/cost-estimate.jpg" alt="" class="cost-estimate-modal__image">
    </div>
    <div>
      <h4 class="modal__title">Оценка стоимости онлайн</h4>
      <div class="modal__description">
        <p>
          Приложите фото повреждения или подробно опишите проблему.
          Менеджер свяжется с вами в ближайшее время, сообщит стоимость и запишет на ремонт.
        </p>
      </div>
      <form action="" data-js="ajax-form" method="post" class="modal__form cost-estimate-modal__form">
        <div class="modal__form__half">
          <div class="form__group form_name input__wrapper">
            <input type="text" name="name" class="name input" placeholder="Имя">
            <!--                        <label class="input__label">Имя</label>-->
          </div>
          <div class="form__group form_phone input__wrapper">
            <input type="text" name="phone" class="phone input" placeholder="Номер телефона*">
            <!--                        <label class="input__label">Номер телефона*</label>-->
          </div>
        </div>
        <div class="modal__form__wide">
          <div class="form__group form_text input__wrapper">
            <textarea name="text" class="text input" type="text"
                      placeholder="Пожалуйста, опишите подробно проблему"></textarea>
            <!--                        <label class="input__label">-->
            <!--                            Пожалуйста, опишите подробно проблему-->
            <!--                        </label>-->
          </div>
        </div>
        <div class="modal__form__wide">
          <div class="input__wrapper_file photos-input">
            <input class="input_file"
                   id="feedback__images-modal"
                   type="file"
                   name="files[]"
                   accept="image/jpeg,image/png,image/jpg,image/bmp" multiple
                   data-js="file-input"
            >
            <label class="input__label_file" for="feedback__images-modal">Прикрепить фото</label>
            <div class="input_file-fake">Файл не выбран...</div>
          </div>
        </div>
        <div class="modal__form__buttons">
          <button type="submit" class="button button_dark"><span>Рассчитать</span></button>
          <div>
            Нажимая кнопку «Рассчитать», <br>
            Вы соглашаетесь c условиями <br>
            <a href="javascript:void(0);" class="link link_grey underline" target="_blank">
              <span>Политики конфиденциальности.</span>
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>