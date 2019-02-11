<div class="feedback">
  <div class="row">
    <div class="feedback__grid">
      <div>
        <h2 class="h2_yellow h2_large">Рассчитате стоимость онлайн</h2>
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
                        <textarea name="text" class="text input" type="text" placeholder="Пожалуйста, опишите подробно Вашу проблему.
Чем детальнее описание, тем точнее предварительная цена услуг."></textarea>
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
        <img src="assets/images/photos/feedback-man-1.png" alt="">
      </div>
    </div>
  </div>
</div>