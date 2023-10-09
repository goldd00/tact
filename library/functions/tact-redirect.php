<?php
function tact_redirect()
{
    global $wp_query;

    if ( is_attachment() ) {
		// 添付ファイルページ
        $wp_query->set_404();
        status_header(404);
	} else if ( is_author() ) {
		// 著者一覧ページ
        $wp_query->set_404();
        status_header(404);

	} else if ( is_search() ) {
		// 検索一覧ページ
        $wp_query->set_404();
        status_header(404);
	} else if ( is_date() ) {
		// 日付系一覧ページ
        $wp_query->set_404();
        status_header(404);
	}
}
add_action( 'template_redirect', 'tact_redirect' );