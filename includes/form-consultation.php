<div class="feedback feedback-form-consultation" data-js-scroll-target="consultation" id="consultation">
  <div class="row">
    <div class="feedback__grid">
      <div>
        <h2 class="h2_yellow h2_large">Ответим через 10 минут</h2>
        <p>
          Получите консультацию по телефону <a href="tel:+7 (495) 154-63-97" class="link link_yellow">+7 (495)
            154-63-97</a> или оставьте свои контакты. <br>
          Наш менеджер свяжется с вами и ответит на все вопросы.
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
                   id="feedback__images-consultation"
                   type="file"
                   name="files[]"
                   accept="image/jpeg,image/png,image/jpg,image/bmp" multiple
                   data-js="file-input"
            >
            <label class="input__label_file" for="feedback__images-consultation">Прикрепить фото</label>
            <div class="input_file-fake">Файл не выбран...</div>
          </div>
          <div class="feedback__form__button">
            <button class="button button_tall button_orange" data-js="active-button" type="submit">
              <span>Жду звонка</span>
            </button>
            <div>
              Нажимая кнопку «Жду звонка», <br>
              Вы соглашаетесь c условиями <br>
              <a href="javascript:void(0);" class="link link_grey underline" target="_blank">
                <span>Политики конфиденциальности.</span>
              </a>
            </div>
          </div>
        </form>
      </div>
      <div>
        <div class="feedback__photo">
          <img src="assets/images/photos/consult-man.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>