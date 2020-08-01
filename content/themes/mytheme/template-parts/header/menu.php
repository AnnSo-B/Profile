  <div class="menu">
    <button class="button close-menu" aria-label="fermer le menu">
      <i class="fa fa-close" aria-hidden="true"></i>
    </button>
        <!-- <nav class="main-nav">
      <ul>
        <li class="main-nav__item">
          <a href="#">
            Homepage
          </a>
        </li>
        <li class="main-nav__item">
          <a href="#">
            Blog
          </a>
        </li>
        <li class="main-nav__item">
          <a href="#">
            Projets
          </a>
        </li>
        <li class="main-nav__item">
          <a href="#">
            Exemple
          </a>
        </li>
        <li class="main-nav__item">
          <a href="#">
            Contact
          </a>
        </li>
      </ul>
    </nav> -->
    <?php 
      // the menu is set in appearances / menu
      // this is the main menu attached from the backoffice to the main-menu slot
      // https://developer.wordpress.org/reference/functions/wp_nav_menu/
      $mainNav = wp_nav_menu([
        'theme-location'  => 'main-nav',
        'menu'            => 4,
        'fallback_cb'     => false,
        'container'       => 'nav', // change the container tag div -> nav
        'container_class' => 'main-nav', // nav css class
        'menu_class'      => '', // ul element css class
        'echo'            => false
      ]);

      $mainNav = str_replace('menu-item', 'main-nav__item', $mainNav);

      echo $mainNav;
    ?>
    <ul class="social-nav">
      <li class="social-nav__item">
        <a href="#">
          <i class="fa fa-twitter" aria-hidden="true" aria-label="twitter"></i>
        </a>
      </li>
      <li class="social-nav__item">
        <a href="#">
          <i class="fa fa-facebook" aria-hidden="true" aria-label="facebook"></i>
        </a>
      </li>
      <li class="social-nav__item">
        <a href="#">
          <i class="fa fa-google" aria-hidden="true" aria-label="google"></i>
        </a>
      </li>
      <li class="social-nav__item">
        <a href="#">
          <i class="fa fa-instagram" aria-hidden="true" aria-label="instagram"></i>
        </a>
      </li>
      <li class="social-nav__item">
        <a href="#">
          <i class="fa fa-github" aria-hidden="true" aria-label="github"></i>
        </a>
      </li>
    </ul>
  </div>