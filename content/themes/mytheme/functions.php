<?php 

  // custom enqueue function
  require 'inc/enqueue.php';

  // custom theme setup function
  require 'inc/theme-setup.php';

  // add custom function to hook
  add_action(
    // https://developer.wordpress.org/reference/hooks/after_setup_theme/
    'after_setup_theme',
    'mytheme_setup'
  );

?>