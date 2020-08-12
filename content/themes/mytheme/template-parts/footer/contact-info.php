        <address class="contact-info">
          <?php if (get_theme_mod('mytheme_contact_mail')) : ?>
            <div class="contact-info__item">
              <i class="fa fa-envelope contact-info__item__icon" aria-hidden="true"></i>
              <h4 class="contact-info__item__title">Email</h4>
              <a href="mailto:kaplan@oprofile.ocl" class="contact-info__item__value">
                <?php echo get_theme_mod('mytheme_contact_mail'); ?>
              </a>
            </div>
          <?php endif; ?>
          <?php if (get_theme_mod('mytheme_contact_phone')) : ?>
            <div class="contact-info__item">
              <i class="fa fa-phone contact-info__item__icon" aria-hidden="true"></i>
              <h4 class="contact-info__item__title">Téléphone</h4>
              <a href="tel:<?php echo get_theme_mod('mytheme_contact_mail'); ?>" class="contact-info__item__value">
              <?php echo get_theme_mod('mytheme_contact_phone'); ?>
              </a>
            </div>
          <?php endif; ?>
          <div class="contact-info__item">
            <i class="fa fa-home contact-info__item__icon" aria-hidden="true"></i>
            <h4 class="contact-info__item__title">Adresse</h4>
            <p class="contact-info__item__value">223 allée de la gare<br>44000 Nantes</p>
          </div>
        </address>