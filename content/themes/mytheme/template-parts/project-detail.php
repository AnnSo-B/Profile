<article
  class="post post--single-project"
>
  <h2 class="post__title" style="color: black"><?php the_title(); ?></h2>
  <img src="<?php the_post_thumbnail_url() ?>" />
  <?php the_content(); ?>
  <a class="post__link" href="<?php 
    // prefer https://developer.wordpress.org/reference/functions/get_home_url/ instead of home_url
    echo get_home_url(); 
  ?>">Retour à la page d'accueil</a>
</article>