        <?php 
          // the menu is set in appearances / menu
          // this is the main menu attached from the backoffice to the social-nav slot
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