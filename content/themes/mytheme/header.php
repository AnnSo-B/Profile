<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta <?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>

  <?php get_template_part('template-parts/header/menu'); ?>

  <div class="wrapper">
    <header
      id="header"
      <!-- https://codex.wordpress.org/Conditional_Tags
        use the background image only in front-page
      -->
      <?php if(is_front_page()) : ?>
      class="header"
        <?php if (the_post_thumbnail_url() !== '') : ?>
          style="background-image: url('<?php the_post_thumbnail_url(); ?>');"
      <?php endif; endif; ?>
    >
      <?php get_template_part('template-parts/header/header-menu'); ?>
      <?php 
        // settings --> reading --> home page = static and home = "Hello je suis..." page and articles page = "Article" page 
        // classic loop we'll now be used only for the "Hello je suis..." page
        // we'll need a custom loop to get posts' data
      ?>
      <?php if(is_front_page()) : ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php get_template_part('template-parts/header/banner'); ?>
        <?php endwhile; endif; ?>
      <?php endif; ?>
    </header>
    <main class="main">