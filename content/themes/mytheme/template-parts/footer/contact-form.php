 <!-- USING CONTACT FORM 7 This :  -->
 <!-- <form action="#" class="contact-form">
          <div class="user-info">
            <div class="field">
              <label class="field__label" for="name">Nom</label>
              <input class="field__input" type="text" id="name" name="name">
            </div>
            <div class="field">
              <label class="field__label" for="email">Email</label>
              <input class="field__input" type="email" id="email" name="email">
            </div>
          </div>
          <div class="field">
            <label class="field__label" for="message">Message</label>
            <textarea class="field__input" name="message" id="message" cols="30" rows="5"></textarea>
          </div>
          <button class="contact-form__button" type="submit">Envoyer</button>
        </form> -->
<!-- becomes this in WP backoffice CF7 extensions : 
  <div class="user-info">
    <div class="field">
      <label class="field__label" for="name">Nom</label>
      [text* your-name]
    </div>
    <div class="field">
      <label class="field__label"for="email">Email</label>
      [email* your-email]
    </div>
  </div>
  <div class="field">
    <label class="field__label" for="message">Message</label>
    [textarea your-message]
  </div>
  [submit class=contact-form__button "Envoyer"]
-->
<!-- issues with the class on submit button 
  https://contactform7.com/submit-button/ 
-->
<!-- and it's displayed this way thanks to the shortcode -->
<div class="contact-form">
  <?php
    echo do_shortcode( '[contact-form-7 id="47" title="Contact form 1" your-email="Email@par-défaut.shortcode"]' );
  ?>
</div>
