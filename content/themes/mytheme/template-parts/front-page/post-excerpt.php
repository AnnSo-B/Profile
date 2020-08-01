        <article
          class="post"
          <?php if (the_post_thumbnail_url() !== ''); ?>
            style="background-image: url('<?php the_post_thumbnail_url(); ?>');"
          <?php ?>
        >
          <h2 class="post__title"><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
        </article>