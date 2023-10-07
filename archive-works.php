<?php get_header(); ?>
<main>
    <div class="WorksArc">
        <?php 
            $args = ['en' => 'WORKS', 'ja' => 'これまでのTACTの仕事'];
            get_template_part('parts/title/page', null, $args);
        ?>

        <?php if(have_posts()): ?>
        <div class="Base WorksArc__wrap">
            <div class="Base__wrap">
                <ul class="WorksArc__items">
                    <?php while(have_posts()): the_post(); ?>
                    <li id="post_<?php the_id(); ?>" class="WorksArc__item">
                        <div class="WorksArc__item__wrap">
                            <div class="WorksArc__tmb">
                                <?php if(has_post_thumbnail()): ?>
                                <img src="<?php echo the_post_thumbnail_url( 'medium' ); ?>" class="WorksArc__tmb__img" alt="">
                                <?php else: ?>
                                <img src="<?php echo imdir(); ?>/common/no_picture.png" class="WorksArc__tmb__img" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="WorksArc__info">
                                <h2 class="WorksArc__info__title"><?php the_title(); ?></h2>

                                <?php
                                    $categories = get_the_terms( $post->ID , 'works-cat' );
                                    if($categories):
                                ?>
                                <ul class="WorksArc__info__tag">
                                    <?php
                                        foreach( $categories as $category ):
                                    ?>
                                    <li class="WorksArc__info__tag__item"><?php echo $category->name; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                            <div class="WorksArc__desc">
                                <?php if(!empty(get_the_content())): ?>
                                <div class="WorksArc__desc__text">
                                    <?php echo the_content(); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
        <?php endif; ?>

        <?php get_template_part('parts/contact/inner') ?>
    </div>
</main>
<?php get_footer(); ?>