<?php
/**
 * 画像pathを短く修正
 */ 

if( !function_exists('imdir') ) {
    function imdir()
    {
        return esc_url( get_template_directory_uri().'/src/img' );    
    }
}