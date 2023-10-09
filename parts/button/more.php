<div class="MoreBtn js_moreBtn">
    <?php if(isset($args['link'])): ?>
        <a href="<?php echo esc_url( home_url('/') ); ?><?php echo $args['link']; ?>" class="MoreBtn__link js_info" data-type="link">
    <?php else: ?>
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="MoreBtn__link js_info" data-type="link">
    <?php endif; ?>
        <?php if(isset($args['text'])): ?>
        <span class="MoreBtn__link__text"><?php echo $args['text']; ?></span>
        <?php else: ?>
        <span class="MoreBtn__link__text">LEAN MORE</span>
        <?php endif; ?>

        <span class="MoreBtn__link__icon"><img src="<?php echo imdir(); ?>/common/icon_arrow.svg" class="MoreBtn__link__icon__img" alt=""></span>
    </a>
</div>
