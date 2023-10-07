<?php get_header(); ?>
<main>
    <div class="Index">
        <section>
            <div class="Kv Base">
                <div class="Kv__wrap Base__wrap">
                    <div class="Kv__catch">
                        <h2 class="Kv__catch__title">
                            <picture>
                                <source srcset="<?php echo imdir(); ?>/index/kv_catch_lg.svg" media="(min-width: 768px)">
                                <img src="<?php echo imdir(); ?>/index/kv_catch_sm.svg" class="Kv__catch__img" alt="CONNECTING SPECIALTIES, TCCELERATE YOUR BUSINESS.">
                            </picture>
                        </h2>
                        <p class="Kv__catch__text">専門分野をつなげ、ビジネスを加速させる。</p>
                    </div>
                    <div class="Kv__scroll">
                        <div class="Kv__scroll__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="100" fill="none">
                                <path stroke="#fff" d="M5 0v100" opacity=".3"/>
                                <rect width="8" height="8" class="Kv__scroll__icon__rect" x="1" y="0" fill="#fff" rx="4"/>
                                <rect width="9" height="9" class="Kv__scroll__icon__base" x=".5" y="0" stroke="#fff" rx="4.5"/>
                            </svg>
                        </div>
                        <p class="Kv__scroll__text">Scroll to<br> Exproll</p>
                    </div>
                    <div class="Kv__logo">
                        <svg class="Kv__logo__svg" width="1006" height="915" viewBox="0 0 1006 915" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M651.976 49.5968C634.35 29.5908 616.467 9.4562 590.221 0H581.087C561.853 3.79535 546.221 13.9592 532.262 27.4037C510.069 48.8249 491.864 73.3981 475.01 98.9363C403.542 207.522 343.459 322.54 286.851 439.295C226.769 563.062 178.137 691.525 135.101 822.11C127.958 843.81 121.133 865.606 114.313 887.385C111.429 896.596 108.545 905.803 105.639 915C107.955 913.392 109.113 911.462 110.142 909.403C132.082 864.619 153.925 819.781 175.769 774.94C225.34 673.185 274.917 571.416 325.641 470.237C380.448 360.815 442.524 255.382 510.519 153.551C527.566 128.012 547.122 104.018 566.742 80.2812C576.777 68.1232 583.338 68.4449 593.952 80.2812C606.754 94.6263 619.169 109.486 629.976 125.375C677.578 195.428 717.204 270.048 755.544 345.441C820.065 472.295 872.042 604.296 918.744 738.548C919.319 740.152 919.711 741.809 920.171 743.753C920.43 744.85 920.711 746.039 921.06 747.361C919.419 746.587 917.916 745.901 916.506 745.258C913.938 744.086 911.682 743.057 909.481 741.894C899.536 736.673 889.638 731.345 879.738 726.016C858.897 714.798 838.045 703.574 816.72 693.326C720.742 647.332 621.485 609.378 521.069 574.448C469.992 556.694 418.273 540.547 366.553 524.658C358.336 522.118 355.272 520.526 353.186 521.365C350.994 522.247 349.882 525.815 345.003 533.793C341.571 539.381 338.289 545.06 334.932 550.87C333.381 553.554 331.814 556.265 330.208 559.009C331.533 559.434 332.674 559.811 333.701 560.15C335.318 560.684 336.655 561.125 337.992 561.518C396.787 578.308 454.296 598.893 511.098 621.407C652.877 677.501 788.801 745.946 924.469 815.163C945.247 825.777 966.411 835.684 987.703 845.268C998.189 850.029 1003.01 847.07 1004.56 835.491C1005.46 828.672 1005.72 821.531 1004.56 814.777C1004.3 813.239 1004.03 811.701 1003.77 810.161C1000.83 792.761 997.861 775.248 993.428 758.169C975.031 686.893 949.107 618.191 922.153 549.875C876.995 435.371 828.041 322.54 766.287 215.756C732.579 157.41 696.684 100.416 651.976 49.5968ZM208.828 505.25C210.121 502.548 211.467 499.735 212.861 496.74L212.797 496.675C140.106 492.751 69.4741 496.547 0 514.816C1.02925 515.523 2.05849 515.652 3.08774 515.652C14.6765 516.036 26.2605 516.393 37.8411 516.748C68.8797 517.702 99.8935 518.656 130.907 520.155C147.136 520.969 163.284 522.99 179.416 525.009C183.682 525.543 187.947 526.076 192.212 526.588C197.101 527.167 199.609 526.009 201.475 521.377C203.651 516.067 206.122 510.903 208.828 505.25Z" fill="white"/>
                        </svg>
                    </div>
                    <?php
                        global $post;
                        $args = array(
                            'posts_per_page' => 1,
                            'post_type'=> 'information'
                        );
                        $myposts = get_posts( $args );
                        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <div class="Kv__info">
                        <a href="<?php the_permalink(); ?>" class="Kv__info__item js_info" data-type="link">
                            <div class="Kv__info__item__desc">
                                <h2 class="Kv__info__item__title">INFORMATION</h2>
                                <div class="Kv__info__contents">
                                    <time itemprop="datepublished" datetime="<?php the_time('Y-m-d'); ?>" class="Kv__info__contents__publish"><?php the_time('y.m.d'); ?></time>
                                    <h3 class="Kv__info__contents__title"><?php the_title(); ?></h3>
                                </div>
                            </div>
                            <div class="Kv__info__item__icon"><img src="<?php echo imdir(); ?>/common/icon_arrow.svg" class="Kv__info__item__icon__img" alt=""></div>
                        </a>
                    </div>
                    <?php
                        endforeach;
                        wp_reset_postdata();
                    ?>
                </div>
            <!-- /Kv --></div>
        </section>

        <section>
            <div class="About Base">
                <div class="About__wrap Base__wrap">
                    <div id="anchor_about" class="Title Anchor">
                        <h2 class="Title__text">ABOUT <span class="Title__text__br">TACT</span></h2>
                        <p class="Title__ja">TACTについて</p>
                    </div>

                    <ul id="anchor_origin" class="About__items Anchor">
                        <li class="About__item">
                            <div class="About__intro">
                                <p class="About__intro__logo">
                                    <img src="<?php echo imdir(); ?>/common/logo.svg" class="About__intro__logo__img" alt="">
                                </p>
                                <div class="About__intro__contents">
                                    <ul class="About__intro__items">
                                        <li class="About__intro__item">Tactic</li>
                                        <li class="About__intro__item">Agile</li>
                                        <li class="About__intro__item">Creative</li>
                                        <li class="About__intro__item">Technology</li>
                                    </ul>
                                    <p class="About__intro__text">
                                        <span>戦略</span>を<span>素早く</span><span>創造的な力</span>と<span>技術</span>で遂行する
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="About__item">
                            <div class="About__intro">
                                <p class="About__intro__logo">
                                    <img src="<?php echo imdir(); ?>/common/logo.svg" class="About__intro__logo__img" alt="">
                                </p>
                                <div class="About__intro__contents">
                                    <p class="About__intro__text">指揮棒のドイツ語である「TAKT」</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <?php get_template_part('parts/animate/marquee') ?>

                    <div class="About__msg">
                        <div class="About__msg__wrap">
                            <h3 id="anchor_vision" class="About__msg__title Anchor">
                                ビジネスをオーケスト<wbr>レーションする<br>
                                カタリスト集団。
                            </h3>
                            <p class="About__msg__text">
                                様々な企業の成長戦略をサポートすることを念頭に、<br>
                                マーケティング戦略の立案から施策実行までをワンストップで遂行するとともに、メデイア・デジタル・イベントプロモーション・クリエイティブ・共創（ビジネスアライアンス）など、複数の異なる要素を統合的、横断的に連携できるソリューションの提供を事業の核としています。<br>
                                弊社スタッフがカタリスト（catalyst=触媒）として、Orchestration（=調和のとれたプロジェクトチーム）を以て多様な専門分野とリレーションを行い、より良いマーケティングサービスを構築してまいります。
                            </p>
                            <?php
                                $args = ['link' => 'aboutus'];
                                get_template_part('parts/button/more', null, $args);
                            ?>
                        </div>
                    </div>
                </div>
            <!-- About --></div>
        </section>

        <section>
            <div class="Services">
                <div class="Services__wrap">
                    <div class="Base">
                        <div class="Base__wrap">
                            <div id="anchor_whatwedo" class="Title Title--right Anchor">
                                <h2 class="Title__text">WHAT<span class="Title__text__br"> WE DO</span></h2>
                                <p class="Title__ja">私たちが提供するもの</p>
                            </div>

                            <p class="Services__catch">複数の異なる要素を統合的、横断的に連携できるソリューションの提供を事業の核としています。</p>

                            <?php get_template_part('parts/services/cards'); ?>

                            <?php
                                $args = ['link' => 'services'];
                                get_template_part('parts/button/more', null, $args);
                            ?>
                            <?php get_template_part('parts/animate/marquee', null, ['type' => 2]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="Decoration" area-hidden="true">
            <img src="<?php echo imdir(); ?>/common/logo_mark.svg" class="Decoration__img" alt="">
        </div>

        <section>
            <div class="Works">
                <figure id="js_worksTmb" class="Works__picture">
                    <div class="Works__picture__wrap">
                        <img src="<?php echo imdir(); ?>/common/no_picture.png" class="Works__picture__img" id="js_worksTmbImg" alt="">
                    </div>
                </figure>
                <div id="anchor_works" class="Works__wrap Anchor">
                    <div class="Base">
                        <div class="Base__wrap">
                            <div class="Title">
                                <h2 class="Title__text">WORKS</h2>
                                <p class="Title__ja">これまでのTACTの仕事</p>
                            </div>
                    
                            <ol class="Works__items">
                            <?php
                                global $post;
                                $args = array(
                                    'posts_per_page' => 5,
                                    'post_type'=> 'works'
                                );
                                $myposts = get_posts( $args );
                                foreach ( $myposts as $post ) : setup_postdata( $post );
                                    if(has_post_thumbnail()) {
                                        $image = get_the_post_thumbnail_url( get_the_ID(), 'medium' );;
                                    } else {
                                        $image = imdir() . '/common/no_picture.png';
                                    }
                                ?>
                                <li class="Works__item js_worksHover" data-src="<?php echo $image; ?>">
                                    <a href="<?php echo esc_url( home_url('/') ); ?>works/#post_<?php the_id(); ?>" class="Works__item__wrap">
                                        <div class="Works__item__tmb">
                                            <img src="<?php echo $image; ?>" class="Works__item__tmb__img" alt="">
                                        </div>
                                        <div class="Works__item__info">
                                            <h3 class="Works__item__info__title"><?php the_title(); ?></h3>
                                            <?php
                                                $categories = get_the_terms( $post->ID , 'works-cat' );
                                                if($categories):
                                            ?>
                                            <ul class="Works__item__info__tag">
                                                <?php
                                                    foreach( $categories as $category ):
                                                ?>
                                                <li class="Works__item__info__tag__item"><?php echo $category->name; ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <?php endif; ?>
                                        </div>
                                        <div class="Works__item__desc">
                                            <?php if(!empty(get_the_content())): ?>
                                            <p class="Works__item__desc__text">
                                                <?php echo get_the_content(); ?>
                                            </p>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </li>
                                <?php
                                    endforeach;
                                    wp_reset_postdata();
                                ?>
                            </ol>

                            <?php
                                $args = ['link' => 'works'];
                                get_template_part('parts/button/more', null, $args);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="Company">
            <?php get_template_part('parts/animate/marquee', null, ['type' => 2]) ?>
            <div class="Base">
                <div class="Base__wrap">
                    <section>
                        <div class="Info">
                            <div class="Info__wrap">
                                <div id="anchor_information" class="Title Title--small Anchor">
                                    <h2 class="Title__text">INFORMATION</h2>
                                    <p class="Title__ja">お知らせ</p>
                                </div>
                                <ul class="Info__items">
                                    <?php
                                        global $post;
                                        $args = array(
                                            'posts_per_page' => 5,
                                            'post_type'=> 'information'
                                        );
                                        $myposts = get_posts( $args );
                                        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                                        <li class="Info__item">
                                            <a href="<?php the_permalink(); ?>" class="Info__item__link js_info" data-type="link">
                                                <div class="Info__item__date">
                                                    <time class="Info__item__date__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('y.m.d'); ?></time>
                                                </div>
                                                <div class="Info__item__desc">
                                                    <p class="Info__item__desc__text"><?php the_title(); ?></p>
                                                </div>
                                                <div class="Info__item__icon">
                                                    <img src="<?php echo imdir(); ?>/common/icon_arrow.svg" class="Info__item__icon__img" alt="">
                                                </div>
                                            </a>
                                        </li>
                                    <?php
                                        endforeach;
                                        wp_reset_postdata();
                                    ?>
                                </ul>
                                <?php
                                    $args = ['link' => 'information'];
                                    get_template_part('parts/button/more', null, $args);
                                ?>
                            </div>
                        </div>
                    </section>

                    <section>
                        <?php get_template_part('parts/company/inner'); ?>
                    </section>
                </div>
            </div>
        </div>

        <?php get_template_part('parts/contact/inner') ?>

        <div class="StickyBar" area-hidden="true">
            <div class="StickyBar__wrap">
                <div class="StickyBar__wave">
                    <?php
                        $label = [
                            'TOP',
                            'ABOUT TACT',
                            '社名の由来',
                            'VISION',
                            'WHAT WE DO',
                            '企業支援事業',
                            'マーケティング事業',
                            '広告戦略事業',
                            'コンテンツ制作事業',
                            'デジタルエクスペリエンス事業',
                            'エンターテインメント事業',
                            'WORKS',
                            'INFOMATION',
                            'COMPANY PROFILE',
                            'CONTACT',
                            'FOOTER'
                        ];
                        $anchor = [
                            'top',
                            'about',
                            'origin',
                            'vision',
                            'whatwedo',
                            'corporate',
                            'marketing',
                            'advertising',
                            'production',
                            'digital',
                            'entertainment',
                            'works',
                            'information',
                            'company',
                            'contact',
                            'footer'
                        ];
                        $labelCount = 0;
                    ?>
                    <?php for($i = 0; $i < 32; $i++): ?>
                        <?php if($i % 2 == 0): ?>
                        <a href="#anchor_<?php echo $anchor[$labelCount]; ?>" class="StickyBar__btn js_info" data-type="down">
                            <p class="StickyBar__label"><?php echo $label[$labelCount++]; ?></p>
                        <?php endif; ?>
                            <i class="StickyBar__icon" style="animation-delay: <?php echo -3000 + ($i * 100); ?>ms" area-hidden="true"></i>
                        <?php if($i % 2 != 0): ?>
                        </a>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
                <div class="StickyBar__copy">
                    <p class="StickyBar__copy__text"><small>©︎2023 TACT Co., Ltd.</small></p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>