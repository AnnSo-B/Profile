<?php get_header(); ?>

<section id="posts" class="posts">
  <?php 
    // custom loop to get posts
    $args = [
      'post-type'         => 'post', // we want to get the post elements - https://developer.wordpress.org/reference/classes/wp_query/#post-type-parameters
      'posts_per_page'    => 6, // we want the 6 last posts to begin with https://developer.wordpress.org/reference/classes/wp_query/#pagination-parameters 
      'order'             => 'ASC', // https://developer.wordpress.org/reference/classes/wp_query/#order-orderby-parameters - by default by date
      'category__not_in'  => 2 // we don't want the article from the "competence" - take a look at the url when hover category name in BO to get its id https://developer.wordpress.org/reference/classes/wp_query/#category-parameters
    ];

   // wp_query instanciation
   $posts = new WP_Query($args);
  ?>
  <?php if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); ?>
    <?php get_template_part('template-parts/front-page/post-excerpt') ;?>
  <?php endwhile; endif; ?>
</section>

<section id="grid" class="grid">
  <?php 
    // custom loop to get posts
    $args = [
      'post-type'         => 'post', // we want to get the post elements - https://developer.wordpress.org/reference/classes/wp_query/#post-type-parameters
      'posts_per_page'    => 6, // we want the 6 last posts to begin with https://developer.wordpress.org/reference/classes/wp_query/#pagination-parameters 
      'order'             => 'ASC', // https://developer.wordpress.org/reference/classes/wp_query/#order-orderby-parameters - by default by date
      'category_name'     => 'competences' // we don't want the article from the "competence" - take a look at the url when hover category name in BO to get its id https://developer.wordpress.org/reference/classes/wp_query/#category-parameters
    ];

   // wp_query instanciation
   $skills = new WP_Query($args);
  ?>
  <?php if ($skills->have_posts()) : while ($skills->have_posts()) : $skills->the_post(); ?>
    <?php get_template_part('template-parts/front-page/grid') ;?>
  <?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>