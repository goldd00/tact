<?php get_header(); ?>
<main>
    <div class="InfoArc">
        <?php 
            $args = ['en' => 'INFORMATION', 'ja' => 'お知らせ'];
            get_template_part('parts/title/page', null, $args);
        ?>

        <div class="Base InfoArc__wrap">
            <div class="Base__wrap">
                <?php if(have_posts()): ?>
                <ul class="InfoArc__items">
                    <?php while(have_posts()): the_post(); ?>
                    <li class="InfoArc__item js_info" data-type="link">
                        <a href="<?php the_permalink(); ?>" class="InfoArc__item__link">
                            <div class="InfoArc__item__date">
                                <time class="InfoArc__item__date__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('y.m.d'); ?></time>
                            </div>
                            <div class="InfoArc__item__desc">
                                <p class="InfoArc__item__desc__text"><?php the_title(); ?></p>
                            </div>
                            <div class="InfoArc__item__icon">
                                <img src="<?php echo imdir(); ?>/common/icon_arrow.svg" class="InfoArc__item__icon__img" alt="">
                            </div>
                        </a>
                    </li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>

        <?php get_template_part('parts/contact/inner') ?>
    </div>
</main>
<?php get_footer(); ?>