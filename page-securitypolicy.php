<?php get_header(); ?>
<main>
    <article class="SecuritySingle">
        <?php 
            $args = ['en' => 'SECURITY POLICY', 'ja' => '情報セキュリティ基本方針'];
            get_template_part('parts/title/page', null, $args);
        ?>

        <div class="Base">
            <div class="Base__wrap">
                <div class="SecuritySingle__wrap">
                    <h2 class="SecuritySingle__title">情報セキュリティ基本方針</h2>
                    <p class="SecuritySingle__head">
                        株式会社Tact（以下、当社）は、お客様からお預かりした情報資産を事故・災害・犯罪などの脅威から守り、<br>
                        お客様ならびに社会の信頼に応えるべく、以下の方針に基づき全社で情報セキュリティに取り組みます。
                    </p>
                    <ol class="SecuritySingle__items">
                        <li class="SecuritySingle__item">
                            <h3 class="SecuritySingle__item__title">1.経営者の責任</h3>
                            当社は、経営者主導で組織的かつ継続的に情報セキュリティの改善・向上に努めます。
                        </li>
                        <li class="SecuritySingle__item">
                            <h3 class="SecuritySingle__item__title">2.社内体制の整備</h3>
                            当社は、情報セキュリティの維持及び改善のために組織を設置し、情報セキュリティ対策を社内の正式な規則として定めます。
                        </li>
                        <li class="SecuritySingle__item">
                            <h3 class="SecuritySingle__item__title">3.従業員の取組み</h3>
                            当社の従業員は、情報セキュリティのために必要とされる知識、技術を習得し、情報セキュリティへの取り組みを確かなものにします。
                        </li>
                        <li class="SecuritySingle__item">
                            <h3 class="SecuritySingle__item__title">4.法令及び契約上の要求事項の遵守</h3>
                            当社は、情報セキュリティに関わる法令、規制、規範、契約上の義務を遵守するとともに、お客様の期待に応えます。
                        </li>
                        <li class="SecuritySingle__item">
                            <h3 class="SecuritySingle__item__title">5.違反及び事故への対応</h3>
                            当社は、情報セキュリティに関わる法令違反、契約違反及び事故が発生した場合には適切に対処し、再発防止に努めます。
                        </li>
                    </ol>
                    <p class="SecuritySingle__btm">
                        制定日:2023年10月1日<br>
                        株式会社Tact<br>
                        代表取締役社長 山本嘉一
                    </p>
                </div>
            </div>
        </div>
    </article>
</main>
<?php get_footer(); ?>