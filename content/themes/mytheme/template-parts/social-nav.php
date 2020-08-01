        <?php 
          // the menu is set in appearances / menu
          // this is the main menu attached from the backoffice to the action-links slot
          // https://developer.wordpress.org/reference/functions/wp_nav_menu/
          $actionLinks = wp_nav_menu([
            'theme-location'  => 'social-nav',
            'menu'            => 5,
            'fallback_cb'     => false,
            'container'       => '', // no container
            'container_class' => '', // so no class
            'menu_class'      => 'social-nav', // ul element css class
            'echo' => false
          ]);

          // replace li tag class
          $actionLinks = str_replace(['menu-item'], ['social-nav__item'], $actionLinks);

          echo $actionLinks;        
        ?>
        <!-- <ul class="social-nav">
          <li class="social-nav__item">
            <a href="#">
              <i class="fa fa-twitter" aria-label="twitter"></i>
            </a>
          </li>
          <li class="social-nav__item">
            <a href="#">
              <i class="fa fa-facebook" aria-label="facebook"></i>
            </a>
          </li>
          <li class="social-nav__item">
            <a href="#">
              <i class="fa fa-google" aria-label="google"></i>
            </a>
          </li>
          <li class="social-nav__item">
            <a href="#">
              <i class="fa fa-instagram" aria-label="instagram"></i>
            </a>
          </li>
          <li class="social-nav__item">
            <a href="#">
              <i class="fa fa-github" aria-label="github"></i>
            </a>
          </li>
        </ul> -->