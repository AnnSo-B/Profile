<?php

/*
 plugin name: Redirect to plugin
 description: plugin de redirection
 version: 1.0
 */

// secure if you try to access this file from outside WP
if (!defined('WPINC')) {
  die();
};

function redirect_to() {
  // si je m'apprete à afficher un contenu de type article ou page
  // en utilisant les conditional tags
  // https://codex.wordpress.org/Conditional_Tags
  if (is_single() || is_page()) {
    //  on vérifie la présence et récupère notre custom field
    // on a décidé de créer un custom field grâce à ACF qui ne sera visible que sur les articles classés
    // on utilisera le type de champ lien vers page ou article qui retourne un id
    // https://developer.wordpress.org/reference/functions/get_post_meta/
    $post_id = get_post_meta(
      get_the_ID(), // id du contenu courant
      'redirection', // nom du custom field
      true // pour retourner la 1ère valeur uniquement
    );
    // echo '<pre style="color:black;">';
    // var_dump($custom_field);
    // echo '</pre>';

    // si le custom field n'est pas vide je vais vouloir rediriger
    if (!empty($post_id)) {
      // on redirige vers l'url renseignée
      // pour cela on la retraite car on reçoit l'id du post
      $post_url = get_permalink($post_id);
      // https://developer.wordpress.org/reference/functions/wp_redirect/
      // arg 2 : code http 302 par défaut : déplacer temporairement
      wp_redirect($post_url, 301);
      exit;
    };
  };
};

// https://developer.wordpress.org/reference/hooks/template_redirect/ 
add_action('template_redirect', 'redirect_to');