<?php 

// my custom theme scripts
if (!function_exists('mytheme_scripts')) {
  function mytheme_scripts() {
    //* CSS
    // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
    wp_enqueue_style(
      'theme-css', // stylesheet name
      get_theme_file_uri('public/css/style.css'), // full path to steelsheet
      [],// dependencies --> nothing here, we took care of  it while integration
      '20200731', // file version
      'all' // all media for the same reason
    );

    //* JS
    // https://developer.wordpress.org/reference/functions/wp_enqueue_script
    wp_enqueue_script(
      'theme-script', // script name
      get_theme_file_uri('public/js/app.js'), // full path to js file
      [], // dependencies --> nothing here
      '20200731', // file version
      'true' // to enqueue the script at the end of the body
    );
  };

  // add custom function to hook
  add_action(
    'wp_enqueue_scripts', // https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/ - in previous wp_enqueue_style doc we can see in the exemple that this is the used hook by the community
    'mytheme_scripts'
  );

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
        'action-links' => 'liens bannière'
      ]);      
    };
  };

  // add custom function to hook
  add_action(
    // https://developer.wordpress.org/reference/hooks/after_setup_theme/
    'after_setup_theme',
    'mytheme_setup'
  );
}

?>