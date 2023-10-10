<?php
/**
 * 各種CSS、JSファイルの読み込み関数
 */ 

// 基本的なスタイルの読み込み
if( !function_exists('tact_wp_enqueue_scripts') ) {
    function tact_wp_enqueue_scripts()
    {
        global $wp;
        if(!is_admin() || defined('IFRAME_REQUEST')) {
            $theme_ver = wp_get_theme('tact')->Version;
            $read_minified_css = get_option('read_minified_css');
            $style_css = 'style.css';

            wp_enqueue_style(
                'tact-style',
                get_template_directory_uri() . '/dist/css/'.$style_css.'?upd='. date('YmdHis'), array(), '', 'all'
            );

            wp_enqueue_script(
                'tact-script',
                get_template_directory_uri() . '/dist/js/script.js?upd='. date('YmdHis'), array(), '', 'all'
            );
        }
    }
}

add_action('wp_enqueue_scripts', 'tact_wp_enqueue_scripts', 1);

function add_defer($tag, $handle)
{
    if( $handle !== 'tact-script' ) {
        return $tag;
    }

    return str_replace(' src=', ' defer src=', $tag);
}
add_filter('script_loader_tag', 'add_defer', 10, 2);