<?php
/**
 * 実績
 */ 

function create_works_type()
{
    register_post_type(
        'works',
        array(
            'label' => '実績',
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'menu_position' => 6,
            'rewrite' => array('with_front' => false),
            'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revisions',
            ),
        )
    );

    register_taxonomy(
        'works-cat',
        'works',
        array(
            'label' => 'カテゴリー',
            'hierarchical' => true,
            'public' => true,
            'show_in_rest' => true,
        )
    );

    register_taxonomy(
        'works-tag',
        'works',
        array(
            'label' => 'タグ',
            'hierarchical' => false,
            'public' => true,
            'show_in_rest' => true,
            'update_count_callback' => '_update_post_term_count',
        )
    );
}
add_action( 'init', 'create_works_type' );

function works_post_type_link( $link, $post ){
    if ( $post->post_type === 'works' ) {
      return home_url( '/works/' . $post->ID );
    } else {
      return $link;
    }
}
add_filter( 'post_type_link', 'works_post_type_link', 1, 2 );
  
function works_rewrite_rules_array( $rules ) {
    $new_rewrite_rules = array( 
        'works/([0-9]+)/?$' => 'index.php?post_type=works&p=$matches[1]',
    );
    return $new_rewrite_rules + $rules;
}
add_filter( 'rewrite_rules_array', 'works_rewrite_rules_array' );
