<?php

// https://codex.wordpress.org/Theme_Customization_API
if (!function_exists('mytheme_customize_register')) {
  function mytheme_customize_register( $wp_customize ) {
    //All our sections, settings, and controls will be added here

    // first we create a panel (an entry in the custom menu) - we won't see the result until the setting / control is created
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/
    $wp_customize->add_panel(
      'mytheme_panel', // panel id
      [
        'priority'    => 1, // order in the menu
        'title'       => 'Gestion de mon thème personnalisé', // display in BO
        'description' => 'Personnalisation de mon thème' // display in BO
        // can also define required "capability" for the panel
      ]
    );

    // then we create the section
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
    $wp_customize->add_section(
      'mytheme_contact_info', // section id
      [
        'priority'    => 1, // order in the menu
        'title'       => 'Informations de contact', // display in BO
        'description' => 'Gestion des informations de contact dans le footer', // display in BO - can be hidden behind a help icon by using "description_hidden" key in this array
        // can also define required "capability" for the section
        'panel'       => 'mytheme_panel' // associated panel
      ]
      );

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
          'section' => 'mytheme_contact_info', // associated section
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
          'section' => 'mytheme_contact_info', // associated section
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
          'section' => 'mytheme_contact_info', // associated section
          'label' => 'Adresse', // display in BO
          'description' => 'Adresse affichée dans le footer' // display in BO
        ]
      );
  }
}

add_action( 'customize_register', 'mytheme_customize_register' );

?>