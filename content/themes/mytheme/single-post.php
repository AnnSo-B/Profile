<?php
  // article slug
  $articleSlug = basename(get_permalink());

  // custom loop to get posts
  $args = [
    'post-type' => 'post',
    'name' => $articleSlug
  ];

  // wp_query instanciatin
  $post = new WP_Query($args);

?>

<?php get_header(); ?>

  <?php if ($post) : $post->the_post(); ?>
    <?php get_template_part('template-parts/post-detail'); ?>
  <?php endif; ?>

<?php get_footer(); ?>