<?php get_header(); ?>
<main>
    <article class="InfoSingle">
        <?php 
            $args = ['en' => 'INFORMATION', 'ja' => 'お知らせ', 'not_h1' => true];
            get_template_part('parts/title/page', null, $args);
        ?>

        <div class="Base InfoSingle__wrap">
            <div class="Base__wrap">
                <div class="InfoSingle__back InfoSingle__back--top">
                    <a href="<?php echo esc_url( home_url('/') ); ?>information" class="InfoSingle__back__link">INFORMATION TOPへ</a>
                </div>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="InfoSingle__con">
                    <h1 class="InfoSingle__con__title"><?php the_title(); ?></h1>

                    <div class="InfoSingle__con__desc">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php endwhile; endif; ?>

                <div class="InfoSingle__back InfoSingle__back--bottom">
                    <a href="<?php echo esc_url( home_url('/') ); ?>information" class="InfoSingle__back__link">INFORMATION TOPへ</a>
                </div>
            </div>
        </div>

        <?php get_template_part('parts/contact/inner') ?>
    </article>
</main>
<?php get_footer(); ?>
