<?php
/**
 * 投稿をお知らせに変更
 */ 


function create_information_type()
{
    register_post_type(
        'information',
        array(
            'label' => 'お知らせ',
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'menu_position' => 5,
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
        'information-cat',
        'information',
        array(
            'label' => 'カテゴリー',
            'hierarchical' => true,
            'public' => true,
            'show_in_rest' => true,
        )
    );

    register_taxonomy(
        'information-tag',
        'information',
        array(
            'label' => 'タグ',
            'hierarchical' => false,
            'public' => true,
            'show_in_rest' => true,
            'update_count_callback' => '_update_post_term_count',
        )
    );
}
add_action( 'init', 'create_information_type' );

function information_post_type_link( $link, $post ){
    if ( $post->post_type === 'information' ) {
        return home_url( '/information/' . $post->ID );
    } else {
        return $link;
    }
}
add_filter( 'post_type_link', 'information_post_type_link', 1, 2 );

function information_rewrite_rules_array( $rules ) {
    $new_rewrite_rules = array( 
        'information/([0-9]+)/?$' => 'index.php?post_type=information&p=$matches[1]',
    );
    return $new_rewrite_rules + $rules;
}
add_filter( 'rewrite_rules_array', 'information_rewrite_rules_array' );