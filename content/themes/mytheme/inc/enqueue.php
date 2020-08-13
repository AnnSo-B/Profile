<?php

// my custom theme scripts
if (!function_exists('mytheme_scripts')) {
  function mytheme_scripts()
  {
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
}
?>