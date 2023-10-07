<div class="Header">
    <div class="Header__wrap">
        <div class="Header__logo">
            <?php if(is_front_page()): ?>
            <h1 class="Header__logo__title">
            <?php else: ?>
            <p class="Header__logo__title">
            <?php endif; ?>
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="Header__logo__link js_info" data-type="home">
                    <img src="<?php echo imdir(); ?>/common/logo.svg" class="Header__logo__title__img" alt="<?php bloginfo( 'name' ); ?>">
                </a>
            <?php if(is_front_page()): ?>
            </h1>
            <?php else: ?>
            </p>
            <?php endif; ?>

            <div class="Header__logo__catch">
                <p class="Header__logo__catch__text">
                    CONNECTING SPECIALTIES,<br>
                    ACCELERATE YOUR BUSINESS.
                </p>
            </div>
        <!-- /Header__logo --></div>

        <nav id="js_nav" class="Header__nav" aria-label="Breadcrumb">
            <ul class="Header__nav__items" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li class="Header__nav__item <?php if( is_front_page() ): ?>active<?php endif; ?>" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo esc_url( home_url('/') ); ?>" class="Header__nav__item__link js_info" data-type="link">
                        <span itemprop="name">TOP</span>
                        <meta itemprop="position" content="1" />
                    </a>
                </li>
                <li class="Header__nav__item <?php if( is_page('aboutus') ): ?>active<?php endif; ?>" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo esc_url( home_url('/') ); ?>aboutus" class="Header__nav__item__link js_info" data-type="link">
                        <span itemprop="name">ABOUT US</span>
                        <meta itemprop="position" content="2" />
                    </a>
                </li>
                <li class="Header__nav__item <?php if( is_page('services') ): ?>active<?php endif; ?>" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo esc_url( home_url('/') ); ?>services" class="Header__nav__item__link js_info" data-type="link">
                        <span itemprop="name">SERVICES</span>
                        <meta itemprop="position" content="3" />
                    </a>
                </li>
                <li class="Header__nav__item <?php if( is_post_type_archive('works') ): ?>active<?php endif; ?>" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo esc_url( home_url('/') ); ?>works" class="Header__nav__item__link js_info" data-type="link">
                        <span itemprop="name">WORKS</span>
                        <meta itemprop="position" content="4" />
                    </a>
                </li>
                <li class="Header__nav__item <?php if( is_post_type_archive('information') || is_singular('information') ): ?>active<?php endif; ?>" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo esc_url( home_url('/') ); ?>information" class="Header__nav__item__link js_info" data-type="link">
                        <span itemprop="name">INFORMATION</span>
                        <meta itemprop="position" content="5" />
                    </a>
                </li>
            </ul>

            <?php get_template_part('parts/button/contact') ?>
            <p class="Header__nav__copy">&copy;<?php echo date( 'Y' ) ?> TACT Co., Ltd.</p>
        <!-- /Header__nav --></nav>

        <div class="Header__contactBtn">
            <a href="mailto:yyamamoto@tact-japan.com?subject=&lt;お問い合わせ内容とご連絡先をお送りください&gt;" class="Header__contactBtn__link js_info" data-type="mail">
                <img src="<?php echo imdir(); ?>/common/icon_mail.svg" class="Header__contactBtn__img" alt="">
                <p class="Header__contactBtn__text">CONTACT</p>
            </a>
        <!-- /Header__contactBtn --></div>

        <div class="Header__menu">
            <button type="button" id="js_menuBtn" class="Header__menu__btn">
                <span class="Header__menu__btn__line"></span>
                <span id="js_menuText" class="Header__menu__btn__text">MENU</span>
            </button>
        </div>
    </div>
</div>
