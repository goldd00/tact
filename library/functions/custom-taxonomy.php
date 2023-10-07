<?php
/**
 * カスタムタクソノミーの設定用関数
 * - カスタム分類を説明順にソート
 */

/**
 * カスタム分類を説明順にソート
 */
if( !function_exists('tact_get_terms_orderby') ) {
    function tact_get_terms_orderby( $orderby, $args ) {
        if( $args['orderby'] == 'description' ) {
            $orderby = 'tt.description';
        }
        return $orderby;
    }
}
add_filter( 'get_terms_orderby', 'tact_get_terms_orderby', 10, 2 );