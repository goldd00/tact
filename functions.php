<?php

    require_once 'library/functions/tact-functions.php';
    require_once 'library/functions/tact-style-scripts.php';
    require_once 'library/functions/tact-image.php';
    require_once 'library/functions/head.php';
    require_once 'library/functions/tact-canonical.php';
    require_once 'library/functions/custom-taxonomy.php';
    require_once 'library/functions/tact-information.php';
    require_once 'library/functions/tact-works.php';

    if( is_user_logged_in() ) {
        require_once 'library/functions/customizer.php';
    }

    function tact_after_setup()
    {
        // SETUP 1) headの不要タグを削除
        add_action('init', 'tact_head_cleanup');
        add_filter('use_block_editor_for_post', '__return_false');
        add_theme_support('html5', array( 'style', 'script')); // html5では不要なtype属性削除

        tact_theme_support();
    }
    add_action('after_setup_theme', 'tact_after_setup');

    /**
     * テーマサポート
     */
    function tact_theme_support()
    {
        add_theme_support( 'post-thumbnails' );
    }

    /**
     * headの不要タグ削除
     */
    function tact_head_cleanup()
    {
        // Windows Live Writer用リンク削除
        remove_action('wp_head', 'wlwmanifest_link');

        // WPバージョン表示削除
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head','rest_output_link_wp_head');

        // 絵文字用JS・CSSを非表示にする
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');

        // EditURIを非表示にする
        remove_action('wp_head', 'rsd_link');
    }

    // 投稿一覧削除
    function remove_menus()
    {
        remove_menu_page( 'edit.php' );
    } 
    add_action('admin_menu', 'remove_menus', 999);
