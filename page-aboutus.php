<?php get_header(); ?>
<main>
    <div class="AboutSingle">
        <?php 
            $args = ['en' => 'ABOUT US', 'ja' => 'TACTについて'];
            get_template_part('parts/title/page', null, $args);
        ?>
        <div class="AboutSingle__outer">
            <div class="AboutSingle__wrap Base">
                <div class="Base__wrap">
                    <section>
                        <div class="AboutSingle__section AboutSingle__section--notPd">
                            <div class="AboutSingle__title">
                                <h2 class="AboutSingle__title__text"><span class="AboutSingle__title__circle">MISSION</span></h2>
                            </div>
                            <div class="AboutSingle__desc">
                                <div class="AboutSingle__msg">
                                    <h3 class="AboutSingle__msg__title">テクノロジとマーケティング戦略で、<br>日本の未来創造の基盤となる豊かなコミュニケーション社会の発展に貢献する。</h3>
                                    <p class="AboutSingle__msg__text AboutSingle__msg__text--en">Through technology and marketing strategies, Contribute to the development of a rich communication society that will form the basis of Japan's future creation.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="AboutSingle__section">
                            <div class="AboutSingle__title">
                                <h2 class="AboutSingle__title__text"><span class="AboutSingle__title__circle">VISION</span></h2>
                            </div>
                            <div class="AboutSingle__desc">
                                <div class="AboutSingle__msg">
                                    <h3 class="AboutSingle__msg__title">ビジネスをオーケストレーションする<br>カタリスト集団。</h3>
                                    <p class="AboutSingle__msg__text">
                                        社名TACTの由来は、指揮棒の「TAKT（ドイツ語）」と戦術という意味の「Tactic」から発想しました。<br>
                                        様々な企業の成長戦略をサポートすることを念頭に、マーケティング戦略の立案から施策実行までをワンストップで遂行するとともに、メデイア・デジタル・イベントプロモーション・クリエイティブ・共創（ビジネスアライアンス）など、複数の異なる要素を統合的、横断的に連携できるソリューションの提供を事業の核としています。<br>
                                        弊社スタッフがカタリスト（catalyst＝触媒）として、Orchestration（=調和のとれたプロジェクトチーム）を以て多様な専門分野とリレーションを行い、より良いマーケティングサービスを構築してまいります。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="AboutSingle__section AboutSingle__section--notBdr">
                            <div class="AboutSingle__title">
                                <h2 class="AboutSingle__title__text"><span class="AboutSingle__title__circle">MEANING OF "TACT"</span></h2>
                            </div>
                            <div class="AboutSingle__desc">
                                <ul class="AboutSingle__items">
                                    <li class="AboutSingle__item">
                                        <div class="AboutSingle__intro">
                                            <p class="AboutSingle__intro__logo">
                                                <img src="<?php echo imdir(); ?>/common/logo.svg" class="AboutSingle__intro__logo__img" alt="">
                                            </p>
                                            <div class="AboutSingle__intro__contents">
                                                <ul class="AboutSingle__intro__items">
                                                    <li class="AboutSingle__intro__item">Tactic</li>
                                                    <li class="AboutSingle__intro__item">Agile</li>
                                                    <li class="AboutSingle__intro__item">Creative</li>
                                                    <li class="AboutSingle__intro__item">Technology</li>
                                                </ul>
                                                <p class="AboutSingle__intro__text">
                                                    <span>戦略</span>を<span>素早く</span><span>創造的な力</span>と<span>技術</span>で遂行する
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="AboutSingle__item">
                                        <div class="AboutSingle__intro">
                                            <p class="AboutSingle__intro__logo">
                                                <img src="<?php echo imdir(); ?>/common/logo.svg" class="AboutSingle__intro__logo__img" alt="">
                                            </p>
                                            <div class="AboutSingle__intro__contents">
                                                <p class="AboutSingle__intro__text">指揮棒のドイツ語である「TAKT」</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <div class="AboutSingle__wrap Base">
            <div class="Base__wrap">
                <?php get_template_part('parts/company/inner'); ?>
            </div>
        </div>
        <?php get_template_part('parts/contact/inner') ?>
    </div>
</main>
<?php get_footer(); ?>
