<?php
    $wp_customize->add_panel('ga_setting',
        array(
            'priority' => 301,
            'title' => '🚀 Google Analytics',
        )
    );

    $wp_customize->add_section('ga_layout', array(
        'title' => 'GAタグ設置',
        'panel' => 'ga_setting',
    ));

    $wp_customize->add_setting('ga', array(
        'type' => 'option',
    ));

    $wp_customize->add_control('ga', array(
        'settings' => 'ga',
        'label' => 'Google Analyticsからコピペしてください',
        'section' => 'ga_layout',
        'type' => 'textarea',
    ));