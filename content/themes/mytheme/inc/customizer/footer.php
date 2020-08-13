<?php

// create a function that we'll be called in customizer.php
if(!function_exists('customized_footer')) {
  function customized_footer($wp_customize) {

    // then we create setting / control couple for email address
    // setting
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
    $wp_customize->add_setting(
      'mytheme_contact_mail', // setting id
      [
        'default' => 'mail@mail.fr' // input default value
        // can also define required "capability" for the setting
      ]
    );
    // control
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
    $wp_customize->add_control(
      'mytheme_contact_mail', // setting id
      [
        'type' => 'email', // input type
        'section' => 'mytheme_footer', // associated section
        'label' => 'Adresse email', // display in BO
        'description' => 'Adresse email affichée dans le footer' // display in BO
        // can also define required "capability" for the control
        // "choices" in case of a radio or select type controls
        // "input_attrs" which is an array that contains a list of custom attributes for input
      ]
    );

    // then we create setting / control
    // setting
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
    $wp_customize->add_setting(
      'mytheme_contact_phone', // setting id
      [
        'default' => '+33 6 00 00 00 00' // input default value
      ]
    );
    // control
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
    $wp_customize->add_control(
      'mytheme_contact_phone', // setting id
      [
        'type' => 'phone', // input type
        'section' => 'mytheme_footer', // associated section
        'label' => 'Téléphone', // display in BO
        'description' => 'Numéro de téléphone affiché dans le footer' // display in BO
      ]
    );

    // then we create setting / control
    // setting
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
    $wp_customize->add_setting(
      'mytheme_contact_address', // setting id
      [
        'default' => '00 Rue des nuages
        75 000 PARIS' // input default value
      ]
    );
    // control
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
    $wp_customize->add_control(
      'mytheme_contact_address', // setting id
      [
        'type' => 'textarea', // input type
        'section' => 'mytheme_footer', // associated section
        'label' => 'Adresse', // display in BO
        'description' => 'Adresse affichée dans le footer' // display in BO
      ]
    );
  }
}

?>