<?php

// create a function that we'll be called in customizer.php
if(!function_exists('customized_home')) {
  function customized_home($wp_customize) {

    //* customized the displayed post according to their category
    // then we create setting / control couple for email address
    // setting
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
    $wp_customize->add_setting(
      'mytheme_home_post_category', // setting id
      [
        'default' => 'a-la-une' // input default value
        // can also define required "capability" for the setting
      ]
    );

    // array that'll contain the select's option use in choices key of add_control 
    // we'll need to retrieve caegories created in BO :
    // https://developer.wordpress.org/reference/functions/get_categories/
    // var_dump(get_categories());
    // we get objects of categories - it has a slug property or a name property that we'll use to create a new array for the options
    $categoryList =  get_categories();
    foreach ($categoryList as $category) {
      $choices[$category->slug] = $category->name;
    };

    // control
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
    $wp_customize->add_control(
      'mytheme_home_post_category', // setting id
      [
        'type' => 'select', // input type
        'choices' => $choices, // goes with type = select
        'section' => 'mytheme_home', // associated section
        'label' => 'Adresse email', // display in BO
        'description' => 'Adresse email affichée dans le footer' // display in BO
        // can also define required "capability" for the control
        // "choices" in case of a radio or select type controls
        // "input_attrs" which is an array that contains a list of custom attributes for input
      ]
    );
  }
}

?>