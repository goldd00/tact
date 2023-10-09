<?php get_header(); ?>
<main>
    <article class="InfoSingle">
        <?php 
            $args = ['en' => '404 Page Not Found', 'ja' => 'ページが見つかりません。', 'not_h1' => true];
            get_template_part('parts/title/page', null, $args);
        ?>
        <div class="Base InfoSingle__wrap">
            <div class="Base__wrap">
                <div class="InfoSingle__back InfoSingle__back--top">
                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="InfoSingle__back__link">PAGE TOPへ</a>
                </div>

                <div class="InfoSingle__con">
                    <div class="InfoSingle__con__desc">
                        <p>お探しのページは見つかりませんでした。</p>
                    </div>
                </div>

                <div class="InfoSingle__back InfoSingle__back--bottom">
                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="InfoSingle__back__link">PAGE TOPへ</a>
                </div>
            </div>
        </div>
    </article>
</main>
<?php get_footer(); ?>