        <article
          class="post"
          <?php if (the_post_thumbnail_url() !== ''); ?>
            style="background-image: url('<?php the_post_thumbnail_url(); ?>');"
          <?php ?>
        >
          <h2 class="post__title"><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
          <a class="post__link" href="<?php the_permalink(); ?>">Lire la suite</a>
        </article>