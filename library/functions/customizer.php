<?php
    /**
     * カスタマイザーの設定用関数
     */
    function tact_customize_register( $wp_customize )
    {
        require_once('customizer/ga.php');
    }
    add_action( 'customize_register', 'tact_customize_register' );