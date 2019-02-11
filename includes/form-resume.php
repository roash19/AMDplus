<div class="feedback form-resume">
  <div class="row">
    <div class="feedback__grid">
      <div>
        <h2 class="h2_yellow">Оставьте ваш отзыв</h2>
        <p>
          Пусть другие узнают о ваших впечалениях от посещения автоателье «AMD plus»
        </p>
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
            <textarea name="text" class="text input" type="text" placeholder="Ваш отзыв"></textarea>
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
            <div class="reviewStars-input">
              <input id="star-4" type="radio" name="reviewStars"/>
              <label title="gorgeous" for="star-4"></label>
              <input id="star-3" type="radio" name="reviewStars"/>
              <label title="good" for="star-3"></label>
              <input id="star-2" type="radio" name="reviewStars"/>
              <label title="regular" for="star-2"></label>
              <input id="star-1" type="radio" name="reviewStars"/>
              <label title="poor" for="star-1"></label>
              <input id="star-0" type="radio" name="reviewStars"/>
              <label title="bad" for="star-0"></label>
            </div>
          </div>
          <div class="feedback__form__button">
            <button class="button button_tall button_orange" data-js="active-button" type="submit">
              <span>Опубликовать <span class="button_mobile">отзыв</span></span>
            </button>
            <div>
              Нажимая кнопку «Опубликовать отзыв», <br>
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