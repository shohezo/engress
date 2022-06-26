<?php get_header(); ?>
<?php
/* 
Template Name: 料金体系ページ
*/
?>
<div class="ly_section">
    <div class="ly_inner">
        <h2 class="el_section_ttl"><?php the_title(); ?></h2>
        <div class="bl_system">
            <div class="bl_system_body hp_flex hp_column_tb">
                <span>入会金 39,800円</span>
                <img src="<?php bloginfo('template_url');?>/img/sum.png" alt="">
                <span>月額費用</span>
            </div>
            <p>Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
        </div>
    </div>
</div>
<div class="ly_section">
    <div class="ly_inner">
        <h2 class="el_section_ttl">料金表</h2>
        <!-- 料金表 -->
        <div class="bl_price_scroll js-scrollable">
            <ul class="bl_priceUnit hp_flex">
                <li class="bl_price">
                    <div class="bl_price_header">
                        <p class="bl_price_ttl">基礎プラン</p>
                    </div>
                    <!-- /.bl_price_header -->
                    <div class="bl_price_body">
                        <p class="bl_price_price">
                            <?php echo CFS()->get('basic_price'); ?>円〜<br>
                            <span class="bl_price_annot">*月額（税抜価格）</span>
                        </p>
                        <dl class="bl_price_features">
                            <ul class="bl_price_features_list">
                                <li class="bl_price_features_item">カリキュラム作成</li>
                                <li class="bl_price_features_item">TOEFL学習サポート</li>
                                <li class="bl_price_features_item">週一回のビデオMTG</li>

                            </ul>
                        </dl>
                    </div>
                    <!-- /.bl_price_body -->
                </li>
                <!-- /.bl_price -->
                <li class="bl_price">
                    <div class="bl_price_header">
                        <p class="bl_price_ttl">演習プラン</p>
                    </div>
                    <!-- /.bl_price_header -->
                    <div class="bl_price_body">
                        <p class="bl_price_price">
                            <?php echo CFS()->get('exercise_price'); ?>円〜<br>
                            <span class="bl_price_annot">*月額（税抜価格）</span>
                        </p>
                        <dl class="bl_price_features">
                            <ul class="bl_price_features_list">
                                <li class="bl_price_features_item">カリキュラム作成</li>
                                <li class="bl_price_features_item">TOEFL学習サポート</li>
                                <li class="bl_price_features_item">週一回のビデオMTG</li>

                            </ul>
                        </dl>
                    </div>
                    <!-- /.bl_price_body -->
                </li>
                <!-- /.bl_price -->
                <li class="bl_price">
                    <div class="bl_price_header__subColor">
                        <p class="bl_price_ttl">おすすめ<br>志望校対策プラン</p>
                    </div>
                    <!-- /.bl_price_header -->
                    <div class="bl_price_body">
                        <p class="bl_price_price__subColor">
                            <?php echo CFS()->get('recommend_price'); ?>円〜<br>
                            <span class="bl_price_annot">*月額（税抜価格）</span>
                        </p>
                        <dl class="bl_price_features">
                            <ul class="bl_price_features_list">
                                <li class="bl_price_features_item">カリキュラム作成</li>
                                <li class="bl_price_features_item">TOEFL学習サポート</li>
                                <li class="bl_price_features_item">週一回のビデオMTG</li>

                            </ul>
                        </dl>
                    </div>
                    <!-- /.bl_price_body -->
                </li>
                <!-- /.bl_price -->
                <li class="bl_price">
                    <div class="bl_price_header">
                        <p class="bl_price_ttl">フレックスプラン</p>
                    </div>
                    <!-- /.bl_price_header -->
                    <div class="bl_price_body">
                        <p class="bl_price_price">
                            <?php echo CFS()->get('flex_price'); ?>円〜<br>
                            <span class="bl_price_annot">*月額（税抜価格）</span>
                        </p>
                        <dl class="bl_price_features">
                            <ul class="bl_price_features_list">
                                <li class="bl_price_features_item">カリキュラム作成</li>
                                <li class="bl_price_features_item">TOEFL学習サポート</li>
                                <li class="bl_price_features_item">週一回のビデオMTG</li>

                            </ul>
                        </dl>
                    </div>
                    <!-- /.bl_price_body -->
                </li>
                <!-- /.bl_price -->
            </ul>
        </div>
        <!-- /.bl_priceUnit -->
    </div>
</div>
<?php get_footer(); ?>