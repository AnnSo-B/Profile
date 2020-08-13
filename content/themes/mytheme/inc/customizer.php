<?php

// required files
require 'customizer/footer.php';
require 'customizer/home.php';

// https://codex.wordpress.org/Theme_Customization_API
if (!function_exists('mytheme_customize_register')) {
  function mytheme_customize_register( $wp_customize ) {
    //All our sections, settings, and controls will be added here
    //* first we create a panel (an entry in the custom menu) - we won't see the result until the setting / control is created
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

    //* FOOTER RELATED
    //* then we create the section
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
    $wp_customize->add_section(
      'mytheme_footer', // section id
      [
        'priority'    => 2, // order in the menu
        'title'       => 'Gestion du footer', // display in BO
        'description' => 'Gestion des informations dans le footer', // display in BO - can be hidden behind a help icon by using "description_hidden" key in this array
        // can also define required "capability" for the section
        'panel'       => 'mytheme_panel' // associated panel
      ]
    );

    //* settings / controls
    customized_footer($wp_customize);

    //* HOME RELATED
    //* then we create the section
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
    $wp_customize->add_section(
      'mytheme_home', // section id
      [
        'priority'    => 1, // order in the menu
        'title'       => 'Gestion de la home', // display in BO
        'description' => 'Gestion de l\'affichage de la home', // display in BO - can be hidden behind a help icon by using "description_hidden" key in this array
        // can also define required "capability" for the section
        'panel'       => 'mytheme_panel' // associated panel
      ]
    );

    //* settings / controls
    customized_home($wp_customize);
  }
}

add_action( 'customize_register', 'mytheme_customize_register' );

?>