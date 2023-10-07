<?php
/**
 * まとめ用関数
 * - Google Analyticsの設置
 */ 

/**
 * Google Analyticsの設置
 */ 
function add_GA_code()
{
    if( get_option('ga') ) {
        echo get_option('ga');
    }
}
add_action('wp_head', 'add_GA_code');