<?php
  $redirectTo = wp_get_referer()
    ? wp_get_referer()
    : get_home_url();
?>

<article
  class="post post--single-project"
>
  <h2 class="post__title" style="color: black"><?php the_title(); ?></h2>
  <img src="<?php the_post_thumbnail_url() ?>" />
  <?php the_content(); ?>
  <a class="post__link" href="<?php 
    echo $redirectTo; 
  ?>">Retour à la page précédente</a>
</article>