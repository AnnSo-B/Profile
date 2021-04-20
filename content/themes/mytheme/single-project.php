<?php get_header(); ?>

<!-- on peut utiliser la boucle classique car post correspond au contexte soit ici les projets -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-parts/project-detail'); ?>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>