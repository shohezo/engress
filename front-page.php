<?php get_header(); ?>
<?php
/* 
Template Name: フロントページ
*/
?>
<div class="ly_fv">
    <div class="bl_fv_copy">
        <h1 class="bl_fv_copy_main">TOEFL対策はEngress</h1>
        <p class="bl_fv_copy_sub">
            日本人へのTOEFL指導歴豊かな講師陣の<br />
            コーチング型TOEFLスクール
        </p>
        <a class="el_btn hp_round" href="#"><button>資料請求</button></a>
        <a href="#">お問い合わせ</a>
    </div>
</div>
<!-- イントロセクション -->
<section class="ly_section" id="intro">
    <div class="ly_inner">
        <h2 class="el_section_ttl">TOEFL学習で<br class="hp_sp-br">こんな悩み<br class="hp_sp-br">ありませんか？</h2>
        <ul class="bl_intro_list hp_flex hp_column">
            <li class="bl_intro_item">
                勉強の習慣が<br />身についていない
            </li>
            <li class="bl_intro_item">
                勉強しているはず<br />なのに点数が伸びない
            </li>
            <li class="bl_intro_item">
                正しい勉強方法が<br />わからない<i></i>
            </li>
        </ul>
        <div class="bl_intro_box">
            <div class="bl_intro_box_inner">
                <h2 class="bl_intro_box_ttl">
                    Engressは<br />
                    <span class="decorate">TOEFLに特化したスクールです</span>
                </h2>
                <p class="bl_intro_box_txt">
                    完全オーダーメイドで、<br class="hp_sp-br">１人１人の悩みに合わせた最適な指導で<br />
                    TOEFLの苦手分野を克服します。
                </p>
            </div>
        </div>
    </div>
</section>
<!-- フューチャーセクション -->
<div class="ly_section" id="feature">
    <div class="ly_inner">
        <h2 class="el_section_ttl">TOEFL対策に特化した<br class="hp_tb-br">Engress3つの強み</h2>
        <div class="bl_feature hp_flex hp_column">
            <div class="bl_feature_body">
                <span class="bl_feature_label">特長1</span>
                <h3 class="bl_feature_ttl">
                    TOEFLに最適化された<br />無駄のないカリキュラム
                </h3>
                <p class="bl_feature_txt">
                    TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                </p>
            </div>
            <figure class="bl_feature_img">
                <img src="<?php bloginfo('template_url');?>/img/feature01.jpg" alt="特長1の画像" />
            </figure>
        </div>
        <div class="bl_feature hp_flex hp_reverse hp_column">
            <div class="bl_feature_body">
                <span class="bl_feature_label">特長2</span>
                <h3 class="bl_feature_ttl">
                    日本人指導歴10年以上の<br />
                    経験豊富な講師陣
                </h3>
                <p class="bl_feature_txt">
                    Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
                </p>
            </div>
            <figure class="bl_feature_img">
                <img src="<?php bloginfo('template_url');?>/img/feature02.jpg" alt="特長2の画像" />
            </figure>
        </div>
        <div class="bl_feature hp_flex hp_column">
            <div class="bl_feature_body">
                <span class="bl_feature_label">特長3</span>
                <h3 class="bl_feature_ttl">平均3ヶ月でTOEFL iBT20点アップ</h3>
                <p class="bl_feature_txt">
                    Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
                </p>
            </div>
            <figure class="bl_feature_img">
                <img src="<?php bloginfo('template_url');?>/img/feature03.jpg" alt="特長3の画像" />
            </figure>
        </div>
    </div>
    <div class="el_plan">
        <h3>Engressの料金プランはこちら</h3>
        <a class="el_btn hp_round" href="<?php bloginfo('url');?>/price"><button>料金を見てみる</button></a>
    </div>
</div>
<!-- サクセスセクション -->
<div class="ly_section" id="success">
    <div class="ly_inner">
        <h2 class="el_section_ttl">TOEFL成功事例</h2>
        <div class="bl_success hp_flex hp_column_tb">
            <div class="bl_success_card">
                <p class="bl_success_lead">
                    <?php echo $cfs->get('outcome_1',2126); ?>
                </p>
                <figure class="bl_success_img">
                    <img src="<?php echo $cfs->get('image_1',2126); ?>" alt="モデル1の写真" />
                </figure>
                <div class="bl_success_body hp_flex">
                    <span class="bl_success_job"><?php echo $cfs->get('job_1',2126); ?></span>
                    <span class="bl_success_name"><?php echo $cfs->get('name_1',2126); ?></span>
                    <span class="bl_success_score"><?php echo $cfs->get('score_1',2126); ?></span>
                </div>
            </div>
            <div class="bl_success_card">
                <p class="bl_success_lead">
                    <?php echo $cfs->get('outcome_2',2126); ?>
                </p>
                <figure class="bl_success_img">
                    <img src="<?php echo $cfs->get('image_2',2126); ?>" alt="モデル1の写真" />
                </figure>
                <div class="bl_success_body hp_flex">
                    <span class="bl_success_job"><?php echo $cfs->get('job_2',2126); ?></span>
                    <span class="bl_success_name"><?php echo $cfs->get('name_2',2126); ?></span>
                    <span class="bl_success_score"><?php echo $cfs->get('score_2',2126); ?></span>
                </div>
            </div>
            <div class="bl_success_card">
                <p class="bl_success_lead">
                    <?php echo $cfs->get('outcome_3',2126); ?>
                </p>
                <figure class="bl_success_img">
                    <img src="<?php echo $cfs->get('image_3',2126); ?>" alt="モデル1の写真" />
                </figure>
                <div class="bl_success_body hp_flex">
                    <span class="bl_success_job"><?php echo $cfs->get('job_3',2126); ?></span>
                    <span class="bl_success_name"><?php echo $cfs->get('name_3',2126); ?></span>
                    <span class="bl_success_score"><?php echo $cfs->get('score_3',2126); ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- フローセクション -->
<div class="ly_section" id="flow">
    <div class="ly_inner">
        <h2 class="el_section_ttl">ご利用の流れ</h2>
        <div class="bl_flow">
            <table>
                <tr class="bl_flow_row hp_flex">
                    <th class="bl_flow_number">01</th>
                    <th class="bl_flow_summary">お問い合わせ</th>
                    <td class="bl_flow_detail">まずはフォームまたはお電話からお申し込みください。</td>
                </tr>
                <tr class="bl_flow_row hp_flex">
                    <th class="bl_flow_number">02</th>
                    <th class="bl_flow_summary">ヒアリング</th>
                    <td class="bl_flow_detail">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</td>
                </tr>
                <tr class="bl_flow_row hp_flex">
                    <th class="bl_flow_number">03</th>
                    <th class="bl_flow_summary">学習プランの提供</th>
                    <td class="bl_flow_detail">目標達成のために最適な学習プランをご提案致します。</td>
                </tr>
                <tr class="bl_flow_row hp_flex">
                    <th class="bl_flow_number">04</th>
                    <th class="bl_flow_summary">ご入会</th>
                    <td class="bl_flow_detail">お申込み完了後、レッスンがスタートします。</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- クエスチョンセクション -->
<div class="ly_section">
    <div class="ly_inner">
        <h2 class="el_section_ttl">よくある質問</h2>
        <div class="bl_faq">
            <div class="bl_faq_list">
                <div class="bl_faq_list_header open">
                    <p>Engressはサラリーマンでも学習を続けられるでしょうか？</p>
                    <div class="el_faq_icon">
                    </div>
                </div>
                <div class="bl_faq_list_inner">
                    <p>
                        Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。 </p>
                </div>
            </div>
            <div class="bl_faq_list">
                <div class="bl_faq_list_header">
                    <p>教材はオリジナルのものを使用しているのでしょうか？</p>
                    <div class="el_faq_icon">
                    </div>
                </div>
                <div class="bl_faq_list_inner">
                    <p>
                        教材はEngressオリジナルのものを使用しています。</p>
                </div>
            </div>
            <div class="bl_faq_list">
                <div class="bl_faq_list_header">
                    <p>講師に日本人はいますか？</p>
                    <div class="el_faq_icon">
                    </div>
                </div>
                <div class="bl_faq_list_inner">
                    <p>
                        日本人講師も在籍しています。</p>
                </div>
            </div>
            <div class="bl_faq_list">
                <div class="bl_faq_list_header">
                    <p>TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</p>
                    <div class="el_faq_icon">
                    </div>
                </div>
                <div class="bl_faq_list_inner">
                    <p>
                        TOEFLE対策専門のため、それ以外のサポートは行っておりません。</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ブログセクション -->
<div class="ly_section" id="blog">
    <div class="ly_inner hp_flex hp_column">
        <ul class="bl_blog_list">
            <h2 class="el_section_ttl">ブログ</h2>
            <!-- メインループ始まり -->
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <a class="bl_blog_card" href="<?php the_permalink();?>">
                <li class="bl_blog_item hp_flex">
                    <div class="bl_blog_thumbnail">
                        <?php the_post_thumbnail();?>
                    </div>
                    <div class="bl_blog_body">
                        <p class="bl_blog_ttl"><?php the_title(); ?></p>
                        <p class="bl_blog_date"><?php echo get_the_date('Y.m.d'); ?></p>
                    </div>
                    <?php the_category(); ?>
                </li>
            </a>
            <?php endwhile;endif; ?>
        </ul>
        <!-- メインループ終わり -->
        <div class="bl_news">
            <h2 class="el_section_ttl">お知らせ</h2>
            <?php
				$args = array(//サブクエリで新しくクエリを定義。パラメータで取得するデータを操作できる
					'post_type' => 'news', // 投稿タイプスラッグ
					'posts_per_page' => 3 //1ページに表示する件数の設定
				);
				$the_query = new WP_Query($args); // データベースを検索して引っ張ってくる情報を作成（$args)で必要な情報を配列にして渡している）。WP_queryというクラス（設計図）にどんな情報をとってくるか配列いれて$the_queryというオブジェクトを生成している。			
			?>
            <!-- サブループ始まり -->
            <ul class="bl_news_item">
                <?php if($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
                <a href="<?php the_permalink() ;?>">
                    <li class="bl_news_list">
                        <p class="bl_news_date"><?php echo get_the_date('Y.m.d'); ?></p>
                        <p class="bl_news_ttl"><?php the_title(); ?></p>
                    </li>
                </a>
                <?php endwhile; ?>
                <!-- サブループ終わり -->
            </ul>
            <?php wp_reset_postdata(); ?>
            <!-- 新しく定義したクエリをリセットする必要がある -->
            <?php else: ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>