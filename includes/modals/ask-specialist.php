<div class="modal ask-specialist" data-js="modal" id="ask-specialist">

  <div class="modal__container ask-specialist__container">
    <div>
      <img src="assets/images/modals/ask-specialist.png" alt="" class="ask-specialist__image">
    </div>
    <div>
      <h4 class="modal__title">Спросите специалиста</h4>
      <div class="modal__description">
        <p>
          Задайте свой вопрос специалисту
          <nobr>«AMD plus»</nobr>
          <br>
          и получите ответ в ближайшее время.
        </p>
      </div>
      <form action="" data-js="ajax-form" method="post" class="modal__form ask-specialist__form">
        <div class="modal__form__half">
          <div class="form__group form_name input__wrapper">
            <input type="text" name="name" class="name input" placeholder="Имя">
            <!--                        <label class="input__label">Имя</label>-->
          </div>
          <div class="form__group form_phone input__wrapper">
            <input type="text" name="phone" class="phone input" placeholder="Номер телефона">
            <!--                        <label class="input__label">Номер телефона*</label>-->
          </div>
        </div>
        <div class="modal__form__wide">
          <div class="form__group form_email input__wrapper">
            <input type="email" name="email" class="email input" placeholder="Email">
            <!--                        <label class="input__label">-->
            <!--                            Email-->
            <!--                        </label>-->
          </div>
        </div>

        <div class="modal__form__wide">
          <div class="form__group form_text input__wrapper">
            <textarea name="text" class="text input" type="text" placeholder="Ваш вопрос"></textarea>
            <!--                        <label class="input__label">-->
            <!--                            Ваш вопрос-->
            <!--                        </label>-->
          </div>
        </div>
        <div class="modal__form__buttons">
          <button type="submit" class="button button_dark"><span>Отправить</span></button>
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
  </div>
</div>