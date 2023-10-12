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
                                <h2 class="AboutSingle__title__text"><span class="AboutSingle__title__circle">BACKGROUND</span></h2>
                            </div>
                            <div class="AboutSingle__desc">
                                <div class="AboutSingle__msg">
                                    <h3 class="AboutSingle__msg__title">事業開始の経緯</h3>
                                    <p class="AboutSingle__msg__text">
                                        約30年にわたって国内広告代理店及び外資広告会社にて、IMC（Integrated Marketing Communication）とExperience Marketing領域で様々な業種のマーケティング戦略に携わってきましたが、昨今の社会環境の変化により、多くの企業は業務改革やマーケティングコストの見直しを迫られてきました。<br>
                                        前職時でもクライアント企業のビジネス変化を目の当たりしてきたことで、将来は、「デジタルを活用した業務効率化」が中小企業の成長の為には必要だと実感し、自身のマーケティングスキル、デジタルツール開発ノウハウを活かし、様々な企業の為に、社会環境変容に左右されないビジネス環境の構築を支援することを目的に会社設立に至りました。<br>
                                        そのため「テクノロジとマーケティング戦略で日本の未来創造の基盤となる豊かなコミュニケーション社会の発展に貢献する。」を弊社ミッションに掲げています。<br>

                                        もうひとつの理由は、国内賃金上昇率の停滞です。<br>
                                        ニュースで話題になった「海外で働く日本人すし職人の年収が1,000万円以上」とか、円安に振れたことや様々な企業で海外との賃金格差が生まれたことです。<br>
                                        この現状国内経済の景気後退局面への対策を最後の社会貢献として、人的資本経営の変革を実践すべく<br>
                                        <br>
                                        1. 若者・女性の賃金向上<br>
                                        2. 多様性及びグローバル視点の育成・強化<br>
                                        3. ビジネススキル・テクノロジに対応すべく「知識・経験」の提供＝ヤングビジネスマン、女性の自律性の向上<br>
                                        を念頭にしたビジネスを展開することも弊社ミッションとして展開してまいります。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="AboutSingle__section">
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
                                        社名TACTの由来は、指揮棒の「TAKT（ドイツ語）」と弊社のビジネススタイルとなる「Tactic」「Active & Agile」「Creative」「Technology」から発想した造語です。<br>
                                        様々な企業の成長戦略をサポートすることを念頭に、マーケティング戦略の立案から施策実行までをワンストップで遂行するとともに、メデイア・デジタル・イベントプロモーション・クリエイティブ・共創（ビジネスアライアンス）など、複数の異なる要素を統合的、横断的に連携できるソリューションの提供を事業の核としています。<br>
                                        弊社スタッフがカタリストとして、調和のとれたプロジェクトをリードし、多様な専門分野スタッフとリレーションを行いながら、より良いマーケティング支援を提供してまいります。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="AboutSingle__section">
                            <div class="AboutSingle__title">
                                <h2 class="AboutSingle__title__text"><span class="AboutSingle__title__circle">CORE VALUE</span></h2>
                            </div>
                            <div class="AboutSingle__desc">
                                <div class="AboutSingle__msg">
                                    <ul class="AboutSingle__msg__items">
                                        <li class="AboutSingle__msg__item">物事を様々な視点で多角的に考察し「それは重要か？」＝重要指向で考えよう。</li>
                                        <li class="AboutSingle__msg__item">創造的で、かつオープン・マインドで業務に取り組もう。</li>
                                        <li class="AboutSingle__msg__item">リスクを恐れず、遊び心持ってクリエイティビティを発揮しよう。</li>
                                        <li class="AboutSingle__msg__item">社会変化に対応できるよう、トレンドやテクノロジに敏感でいよう。</li>
                                        <li class="AboutSingle__msg__item">顧客・取引先・同僚へのリスペクトを忘れず、オープンで肯定的な姿勢を持とう。</li>
                                    </ul>
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
