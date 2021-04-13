<article
  class="post post--single"
  <?php if (the_post_thumbnail_url() !== ''); ?>
    style="background-image: url('<?php the_post_thumbnail_url(); ?>');"
  <?php ?>
>
  <h2 class="post__title" style="color: black"><?php the_title(); ?></h2>
  <?php the_content(); ?>
  <a class="post__link" href="<?php 
    // prefer https://developer.wordpress.org/reference/functions/get_home_url/ instead of home_url
    echo get_home_url(); 
  ?>">Retour à la page d'accueil</a>
</article>