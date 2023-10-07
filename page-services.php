<?php get_header(); ?>
<main>
    <article class="ServicesArc">
        <?php 
            $args = ['en' => 'SERVICES', 'ja' => '私たちが提供するもの'];
            get_template_part('parts/title/page', null, $args);
        ?>

        <div class="Base">
            <div class="Base__wrap">
                <?php get_template_part('parts/services/cards'); ?>
            </div>
        </div>

        <?php
            $args = ['link' => 'works', 'text' => 'WORKS'];
            get_template_part('parts/button/more', null, $args);
        ?>
        <?php get_template_part('parts/contact/inner') ?>
    </article>
</main>
<?php get_footer(); ?>