<?php
/**
 * canonical設置
 */ 

function add_canonical()
{
    if( is_home() || is_front_page() ) {
		$canonical = home_url('/');
	} elseif ( is_post_type_archive() ) {
		$canonical = get_post_type_archive_link( get_query_var('post_type') );
	} elseif ( is_tax() ) {
		$canonical = get_term_link(get_queried_object()->term_id);
	} elseif ( is_category() ) {
		$canonical = get_category_link( get_query_var('cat') );
	} else if(is_tag()){
		$canonical = get_tag_link(get_queried_object()->term_id);
	} elseif ( is_search() ) {
		$canonical = get_search_link();
	} elseif ( is_page() || is_single() ) {
		$canonical = get_permalink();
	} else{
		$canonical = home_url('/');
	}
    echo '<link rel="canonical" href="'.$canonical.'">'."\n";
}

remove_action('wp_head', 'rel_canonical');
add_action( 'wp_head', 'add_canonical' );