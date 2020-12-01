<?php

/*
 plugin name: Admin plugin
 description: change Pages dashboard
 version: 1.0 
 */

// secure if you try to access this file from outside WP
if (!defined('WPINC')) {
  die();
};

// https://developer.wordpress.org/reference/hooks/manage_post-post_type_posts_custom_column/#description

function set_custom_edit_book_columns($columns) {
  unset( $columns['author'] );
  $columns['book_author'] = __( 'Author', 'your_text_domain' );
  $columns['publisher'] = __( 'Publisher', 'your_text_domain' );

  return $columns;
}

function custom_book_column( $column, $post_id ) {
  switch ( $column ) {

      case 'book_author' :
          $terms = get_the_term_list( $post_id , 'author' , '' , ',' , '' );
          if ( is_string( $terms ) )
              echo $terms;
          else
              _e( 'Unable to get author(s)', 'your_text_domain' );
          break;

      case 'publisher' :
          echo get_post_meta( $post_id , 'publisher' , true ); 
          break;
  }
}

add_filter( 'manage_page_posts_columns', 'set_custom_edit_book_columns' );
add_action( 'manage_page_posts_custom_column' , 'custom_book_column', 10, 2 );