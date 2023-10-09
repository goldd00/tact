<?php
/**
 * head内に出力されるメタタグを制御する関数
 * - titleタグのセパレータを変更
 * - ページごとのtitleタグを変更
 * - 検索結果ページのtitleタグを変更
 * - ページごとのdescription変更
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

/**
 * ページごとのタイトルを変更
 */
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

/**
 * ページごとのdescriptionを変更
 */
function tact_meta_description()
{
    global $post;
    $description = "";

    if( is_home() ) {
        $description = get_bloginfo( 'description' );
    }elseif( is_single() ) {
      if ( $post->post_excerpt ) {
        $description = $post->post_excerpt;
      } else {
        $description = strip_tags($post->post_content);
        $description = str_replace("\n", "", $description);
        $description = str_replace("\r", "", $description);
        $description = mb_substr($description, 0, 100) . "...";
      }
    }elseif( is_post_type_archive('works') ) {
        $description = get_bloginfo('name').'のこれまでの仕事を掲載しています。';
    }elseif( is_post_type_archive('information') ) {
        $description = get_bloginfo('name').'のお知らせを掲載しています。';
    }elseif( is_page('aboutus') ) {
        $description = get_bloginfo('name').'はテクノロジとマーケティング戦略で、日本の未来創造の基盤となる豊かなコミュニケーション社会の発展に貢献します。';
    }elseif( is_page('services') ) {
        $description = get_bloginfo('name').'は複数の異なる要素を統合的、横断的に連携できるソリューションの提供を事業の核としています。';
    }

    return $description;
}

function echo_meta_description_tag()
{
    if( is_home() || is_category() || is_single() || is_page() || is_post_type_archive() ) {
        echo '<meta name="description" content="' . tact_meta_description() . '" />' ."\n";
    }
}