  <div class="menu">
    <button class="button close-menu" aria-label="fermer le menu">
      <i class="fa fa-close" aria-hidden="true"></i>
    </button>
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
    <?php get_template_part('template-parts/social-nav'); ?>
  </div>