<?php

// my custom theme setup
if (!function_exists('mytheme_setup')) {
  function mytheme_setup() {
    // https://developer.wordpress.org/reference/functions/add_theme_support/
    // define the title tag in head
    // https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
    add_theme_support( 'title-tag' );

    // define new entry in article BO
    // thumbnails image
    // https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
    add_theme_support( 'post-thumbnails' );  

    // define the navigation menu position names
    // https://developer.wordpress.org/reference/functions/register_nav_menus/   
    // array as param 
    register_nav_menus([
      // name => description
      'action-links'  => 'liens bannière',
      'main-nav'      => 'menu principal',
      'social-nav'    => 'réseaux sociaux'
    ]);      
  };
};

?>