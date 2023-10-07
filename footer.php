        <footer>
            <div id="anchor_footer" class="Footer">
                <div class="Footer__wrap Base__wrap">
                    <div class="Footer__catch">
                        <img src="<?php echo imdir(); ?>/index/kv_catch_lg.svg" class="Footer__catch__img" alt="CONNECTING SPECIALTIES, TCCELERATE YOUR BUSINESS.">
                    </div>

                    <nav class="Footer__nav">
                        <ul class="Footer__nav__items">
                            <li class="Footer__nav__item">
                                <a href="<?php echo esc_url( home_url('/') ); ?>" class="Footer__nav__link js_info" data-type="link">TOP</a>
                            </li>
                            <li class="Footer__nav__item">
                                <a href="<?php echo esc_url( home_url('/') ); ?>aboutus" class="Footer__nav__link js_info" data-type="link">ABOUT US</a>
                            </li>
                            <li class="Footer__nav__item">
                                <a href="<?php echo esc_url( home_url('/') ); ?>services" class="Footer__nav__link js_info" data-type="link">SERVICES</a>
                            </li>
                            <li class="Footer__nav__item">
                                <a href="<?php echo esc_url( home_url('/') ); ?>works" class="Footer__nav__link js_info" data-type="link">WORKS</a>
                            </li>
                            <li class="Footer__nav__item">
                                <a href="<?php echo esc_url( home_url('/') ); ?>information" class="Footer__nav__link js_info" data-type="link">INFORMATION</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="Footer__info">
                        <div class="Footer__logo">
                            <h1 class="Footer__logo__title">
                                <a href="<?php echo esc_url( home_url('/') ); ?>" class="Footer__logo__link js_info" data-type="link">
                                    <img src="<?php echo imdir(); ?>/common/logo.svg" class="Footer__logo__title__img" alt="<?php bloginfo( 'name' ); ?>">
                                </a>
                            </h1>
                            <div class="Footer__logo__catch">
                                <p class="Footer__logo__catch__text">
                                    CONNECTING SPECIALTIES,<br>
                                    ACCELERATE YOUR BUSINESS.
                                </p>
                            </div>
                        <!-- /Footer__logo --></div>

                        <?php get_template_part('parts/button/contact') ?>
                    </div>

                    <div class="Footer__copy">
                        <svg width="322" height="282" viewBox="0 0 322 282" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="js_circlePath" opacity="0.1" d="M317.385 161.755C317.385 249.364 246.364 320.385 158.755 320.385C71.146 320.385 0.125 249.364 0.125 161.755C0.125 74.146 71.146 3.125 158.755 3.125C246.364 3.125 317.385 74.146 317.385 161.755Z" stroke="white" stroke-width="0.25"/>
                            <path class="js_circlePath" opacity="0.1" d="M318.385 161.755C318.385 249.364 247.364 320.385 159.755 320.385C72.146 320.385 1.125 249.364 1.125 161.755C1.125 74.146 72.146 3.125 159.755 3.125C247.364 3.125 318.385 74.146 318.385 161.755Z" stroke="white" stroke-width="0.25"/>
                            <path class="js_circlePath" opacity="0.1" d="M321.385 158.755C321.385 246.364 250.364 317.385 162.755 317.385C75.146 317.385 4.125 246.364 4.125 158.755C4.125 71.146 75.146 0.125 162.755 0.125C250.364 0.125 321.385 71.146 321.385 158.755Z" stroke="white" stroke-width="0.25"/>
                            <path class="js_circlePath" opacity="0.1" d="M317.385 158.755C317.385 246.364 246.364 317.385 158.755 317.385C71.146 317.385 0.125 246.364 0.125 158.755C0.125 71.146 71.146 0.125 158.755 0.125C246.364 0.125 317.385 71.146 317.385 158.755Z" stroke="white" stroke-width="0.25"/>
                            <circle class="js_circle" opacity="0.3" cx="161" cy="158" r="135.875" stroke="white" stroke-width="0.25"/>
                            <circle class="js_circle" opacity="0.3" cx="156" cy="159" r="135.875" stroke="white" stroke-width="0.25"/>
                            <circle class="js_circle" opacity="0.3" cx="160" cy="162" r="135.875" stroke="white" stroke-width="0.25"/>
                            <circle class="js_circle" opacity="0.3" cx="165" cy="162" r="135.875" stroke="white" stroke-width="0.25"/>
                        </svg>
                        <p class="Footer__copy__text"><small>&copy;<?php echo date( 'Y' ) ?> TACT Co., Ltd.</small></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>