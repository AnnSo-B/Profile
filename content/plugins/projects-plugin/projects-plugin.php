<?php

/*
 * plugin name: Projects plugin
 * description: ajout d'un custom post type gérant les projets
 * version: 1.0
 */

if (!defined('WPINC')) {
  die();
};

class Projects {
  public function __construct()
  {
    # code...
    // on attache l'instanciation de la classe au hook d'initialisation (on instancie la classe après celle-ci)
    add_action('init', [$this, 'register_cpt']);
  }

  /**
   * Pour déclarer le custom post type
   * https://wordpress.org/support/article/post-types/
   * 
   * @return void
   */
  public function register_cpt() {
    // les nomenclatures dans le BO
    // https://developer.wordpress.org/reference/functions/get_post_type_labels/
    $labels = [
      'name'                => 'Projets',
      'singular_name'       => 'Projet',
      'menu_name'           => 'Projets',
      'name_admin_bar'      => 'Projet',
      'add_new'             => 'Ajouter un projet',
      'add_new_item'        => 'Ajouter un nouveau projet',
      'new_item'            => 'Nouveau projet',
      'edit_item'           => 'Editer un projet',
      'view_item'           => 'Voir le projet',
      'all_items'           => 'Voir tous les projets',
      'search_items'        => 'Rechercher un projet',
      'not_found'           => 'Aucun projet toruvé',
      'not_found_in_trash'  => 'Aucun projet trouvé dans la corbeille',
    ];

    // les arguments 
    $args = [
      // minimum vital pour que ça s'affiche dans le BO
      'labels' => $labels, // ci-dessus
      'public' => true, // permettra l'affichage de l'entrée dans le menu du BO

      // options facultatives
      'hierarchical' => false, // determine si on aura une hiérarchie par exemple des projets qui auraient des sous-projets
      'menu_position' => 6, // détermine la position dans le menu
      'menu_icon'  => 'dashicons-art', // via les dash icons équivalent de fontawesome pour WP https://developer.wordpress.org/resource/dashicons/#buddicons-tracking
      'supports' => [
        'title',
        'editor', // pas guttenberg par défaut, il faut ajouter l'api de wordpress pour activer guttenberg
        'excerpt',
        'custom-fields',
        'thumbnail'
      ], // champs natifs supportés
      'show_in_rest' => true, // voir éditor ci-dessus - on recevra également les données via l'API
      'has_archive' => true, // permet de gérer le CPT dans les templates d'archives
      'rewrite' => [
        'slug' => 'projets'
      ] // permet la réécriture d'url par défaut ce serait /project/nom-du-projet --> ça deviendra ce qu'on indique ici : /projet/nom-du projet 
    ];

    // https://developer.wordpress.org/reference/functions/register_post_type/
    register_post_type('project', $args);
  }

  public function class_activate ()
  {
    // on active notre custop post type
    $this->register_cpt(); 

    // on réinitialise les permaliens pour activer les routes du plugin
    // https://developer.wordpress.org/reference/functions/flush_rewrite_rules/
    flush_rewrite_rules();
  }

  public function class_deactivate ()
  {
    // on réinitialise les permaliens pour desactiver les routes du plugin
    // https://developer.wordpress.org/reference/functions/flush_rewrite_rules/
    flush_rewrite_rules();
  }
};

// instanciation du plugin
$projects = new Projects();

// A EXECUTER HORS DU PLUGIN
// A l'activation du plugin
register_activation_hook(
  __FILE__, // notre fichier courant
  $projects, // l'instanciation de notre classe
  'class_activate' // la méthode que l'on souhaite exécuter 
);

// A la desactivation du plugin
register_deactivation_hook(__FILE__, $projects, 'class_deactivate');