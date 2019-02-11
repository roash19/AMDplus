<div class="modal specialist-call-modal" data-js="modal">
  <div class="modal__container specialist-call-modal__container">
    <div>
      <img src="assets/images/modals/specialist-call.jpg" alt="" class="specialist-call-modal__image">
    </div>
    <div>
      <h4 class="modal__title">Закажите выезд мастера</h4>
      <div class="modal__description">
        <p>
          Оставьте свои контакты и желаемую дату посещения мастера.
          Мы свяжемся с вами в ближайшее время, чтобы уточнить детали и утвердить время визита.
        </p>
      </div>
      <form action="" data-js="ajax-form" method="post" class="modal__form specialist-call-modal__form">
        <div class="modal__form__half">
          <div class="form__group form_name input__wrapper">
            <input type="text" name="name" class="name input" placeholder="Имя">
            <!--                        <label class="input__label">Имя</label>-->
          </div>
          <div class="form__group form_phone input__wrapper">
            <input type="text" name="phone" class="phone input tel" placeholder="Номер телефона*">
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
          <div class="form__group form_text input__wrapper">
            <input type="text" name="date" class="date input" placeholder="Желаемая дата и время">
            <!--                        <label class="input__label">-->
            <!--                            Желаемая дата и время-->
            <!--                        </label>-->
          </div>
        </div>
        <p>
          <strong>Обратите внимание!</strong>
          Дата и время являются предварительными.
          Точную дату приезда Вам подберет менеджер во время звонка.
        </p>
        <div class="modal__form__buttons">
          <button type="submit" class="button button_dark"><span>Вызвать</span></button>
          <div>
            Нажимая кнопку «Вызвать», <br>
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