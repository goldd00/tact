<?php
/**
 * head内に出力されるメタタグを制御する関数
 * - titleタグのセパレータを変更
 * - ページごとのtitleタグを変更
 * - 検索結果ページのtitleタグを変更
 */

/**
 * titleタグのセパレータを変更
 */
if( !function_exists('tact_document_title_separator') ) {
    function tact_document_title_separator($sep) {
        $sep = '|';
        return $sep;
    }
}

// ページごとのtitleタグを変更
if( !function_exists('tact_document_title_parts') ) {

    function tact_document_title_parts($title) {
        // トップページのキャッチコピーを削除
        if( isset($title['tagline']) ) {
            unset($title['tagline']);
        }

        if( is_post_type_archive('information') ){
            $title['title'] = 'INFORMATION';
        }

        if( is_post_type_archive('works') ){
            $title['title'] = 'WORKS';
        }

        // 検索ページのtitleタグを変更
        if( is_search() ) {
            $title['title'] = '「'.get_search_query_var().'」の検索結果';
        }
        return $title;
    }
}

add_theme_support( 'title-tag' );
add_filter('document_title_separator', 'tact_document_title_separator');
add_filter('document_title_parts', 'tact_document_title_parts');