<?php
/**
 * head内に出力されるメタタグを制御する関数
 * - titleタグのセパレータを変更
 * - ページごとのtitleタグを変更
 * - 検索結果ページのtitleタグを変更
 * - ページごとのdescription変更
 * - ogp設定
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

    if( is_front_page() ) {
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
    if( is_front_page() || is_category() || is_single() || is_page() || is_post_type_archive() ) {
        echo '<meta name="description" content="' . tact_meta_description() . '" />' ."\n";
    }
}

/**
 * ogp設定
 */
function tact_meta_ogp()
{
    if( is_front_page() || is_category() || is_single() || is_page() || is_post_type_archive() ) {
        $ogp_image        = imdir().'/common/ogp.png'; //アイキャッチ画像が登録されていない場合の画像URL
        $twitter_site     = '';
        $twitter_card     = 'summary_large_image';
        $facebook_app_id  = '';

        global $post;
        $ogp_ttl  = '';
        $ogp_desc = '';
        $ogp_url  = '';
        $ogp_img  = '';
        $insert   = '';
        if( is_singular() ) {
            setup_postdata($post);
            $ogp_ttl  = $post->post_title;
            $ogp_desc = mb_substr(get_the_excerpt(), 0, 100);
            $ogp_url  = get_permalink();
            wp_reset_postdata();
        } elseif ( is_front_page() || is_home() ) {
            $ogp_ttl  = get_bloginfo('name');
			$ogp_desc = get_bloginfo('description');
			$ogp_url  = home_url();
        } elseif ( is_post_type_archive('works') ) {
            $ogp_ttl  = 'WORKS | '.get_bloginfo('name');
            $ogp_desc = get_bloginfo('name').'のこれまでの仕事を掲載しています。';
            $ogp_url  = get_permalink();
        } elseif( is_post_type_archive('information') ) {
            $ogp_ttl  = 'INFORMATION | '.get_bloginfo('name');
            $ogp_desc = get_bloginfo('name').'のお知らせを掲載しています。';
            $ogp_url  = get_permalink();
        } elseif( is_post_type_archive('aboutus') ) {
            $ogp_ttl  = 'ABOUT US | '.get_bloginfo('name');
            $ogp_desc = get_bloginfo('name').'はテクノロジとマーケティング戦略で、日本の未来創造の基盤となる豊かなコミュニケーション社会の発展に貢献します。';
            $ogp_url  = get_permalink();
        } elseif( is_post_type_archive('services') ) {
            $ogp_ttl  = 'SERVICE | '.get_bloginfo('name');
            $ogp_desc = get_bloginfo('name').'は複数の異なる要素を統合的、横断的に連携できるソリューションの提供を事業の核としています。';
            $ogp_url  = get_permalink();
        }

        $ogp_type = ( is_front_page() || is_home() ) ? 'website' : 'article';
        if( is_singular() && has_post_thumbnail() ) {
            $ps_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
            $ogp_img  = $ps_thumb[0];
        } else {
            $ogp_img = imdir().'/common/ogp.png';
        }

        $insert .= '<meta property="og:title" content="'.esc_attr($ogp_ttl).'" />' . "\n";
		$insert .= '<meta property="og:description" content="'.esc_attr($ogp_desc).'" />' . "\n";
        $insert .= '<meta property="og:type" content="'.$ogp_type.'" />' . "\n";
        $insert .= '<meta property="og:url" content="'.esc_url($ogp_url).'" />' . "\n";
        $insert .= '<meta property="og:image" content="'.esc_url($ogp_img).'" />' . "\n";
        $insert .= '<meta property="og:site_name" content="'.esc_attr(get_bloginfo('name')).'" />' . "\n";
        $insert .= '<meta name="twitter:card" content="'.$twitter_card.'" />' . "\n";
        $insert .= '<meta name="twitter:site" content="'.$twitter_site.'" />' . "\n";
        $insert .= '<meta property="og:locale" content="ja_JP" />' . "\n";

        if ($facebook_app_id != "") {
            $insert .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
        }
        echo $insert;
    }
}
add_action('wp_head', 'tact_meta_ogp');