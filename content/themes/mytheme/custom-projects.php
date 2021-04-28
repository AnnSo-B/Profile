<?php
/*
Template Name: Liste des projets
*/
?>

<?php get_header(); ?>

<div class="page">
  <?php if (have_posts()): while(have_posts()): the_post(); ?>
    <?php get_template_part('template-parts/projects/banner-projects'); ?>    
  <?php endwhile; endif; ?>

  <section class="grid project--grid">
    <?php 
      // custom loop to get projects
      $args = [   
        'post_type' => 'project',
        // we want to get the project elements - name given when register_post_type('project', $args); in projects-plugin.php - https://developer.wordpress.org/reference/classes/wp_query/#post-type-parameters
      ];

    // wp_query instanciation
    $projects = new WP_Query($args);
    ?>
    <?php if ($projects->have_posts()) : while ($projects->have_posts()) : $projects->the_post(); ?>
    <?php get_template_part('template-parts/projects/projects-grid'); ?>   
    <?php endwhile; endif; ?>

  </section>
</div>

<?php get_footer(); ?>