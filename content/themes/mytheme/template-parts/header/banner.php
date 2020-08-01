      <section id="banner" class="banner">
        <div class="intro">
          <h1 class="intro__title">
            <?php the_title(); ?>
          </h1>
          <?php the_content(); ?>
        </div>
        <!-- <div class="action-links">
          <a href="#grid" class="action-link">En savoir plus</a>
          <a href="#footer" class="action-link">Contact</a>
        </div> -->
        <?php 
          // the menu is set in appearances / menu
          // this is the main menu attached from the backoffice to the action-links slot
          // https://developer.wordpress.org/reference/functions/wp_nav_menu/
          $actionLinks = wp_nav_menu([
            'theme-location'  => 'action-links',
            // 'menu'            => 3,
            'fallback_cb'     => false,
            'container'       => '', // no container
            'container_class' => '', // so no class
            'menu_class'      => 'action-links', // ul element css class
            'echo' => false
          ]);

          $actionLinks = str_replace(['menu-item'], ['action-link'], $actionLinks);

          echo $actionLinks;        
        ?>
      </section>