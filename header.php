<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo_meta_description_tag(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Red+Hat+Display:wght@300;400;500;700&display=swap" rel="stylesheet">

    <?php wp_head(); // 削除禁止 ?>

    <?php if(is_front_page()): ?>
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Corporation",
                "name": "<?php bloginfo( 'name' ); ?>",
                "description": "<?php echo get_bloginfo( 'description' ); ?>",
                "logo": "<?php echo imdir(); ?>/common/logo.svg",
                "url": "<?php echo home_url('/'); ?>",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "渋谷区恵比寿南1-1-1 ヒューマックス恵比寿ビル8F",
                    "addressLocality": "東京都",
                    "postalCode": "1500002",
                    "addressCountry": "日本"
                }
            }
        </script>
    <?php endif; ?>
</head>
<body <?php body_class() ?> id="js_hidden">
    <?php wp_body_open(); ?>
    <div class="Wrap">
        <svg id="js_mouseTrail" class="MouseTrail"></svg>
        <div id="js_mouseInfo" class="MouseInfo" area-hidden="true"></div>
        <div id="js_gradientBg" class="Gradientbg" area-hidden="true">
            <div class="Gradientbg__wrap">
                <span class="Gradientbg__topLeft"></span>
                <span class="Gradientbg__bottomRight"></span>
            </div>
        </div>
        <header id="anchor_top">
            <?php get_template_part('parts/header/inner') ?>
        </header>
