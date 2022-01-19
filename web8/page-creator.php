<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php // 髙橋平和さん ?>
<div class="creater_wrap">
	<img src="<?php echo get_template_directory_uri(); ?>/img/creator/ph_tsukurite1.jpg" alt="代表取締役 高橋平和（たかはしひらかず）" class="ph_creator">
	<h2 class="title_creator">「どんな家に住みたい？」</h2>
	<p>
		シンプルに自分自身に問いかけます。<br />家を造る第一歩はここから始まるのでしょう。<br />その心の内の夢と希望を図面に一緒におこしていきましょう。<br />語り合い、一緒に創造します。<br />いろいろな思いを、自分スタイルのアイデアを、創ります。<br />皆様の「家を造る」を、ともに創りたい。
	</p>
	<p>
		そして<br />「家を建てる」、<br />これは建て主と“創り手”の共同作業です。<br />そのために、<br />お互い信頼し合えるパートナーでありたい。
	</p>
	<p>
		いい家を建てたい者同士、<br />ともに感動し合える家づくりをしませんか。
	</p>
	<div class="crator_name">
		高橋　平和<span class="creator_kana">たかはし　ひらかず</span>
	</div>
	<div class="creator_katagaki">
		木づくりの家　代表取締役<br />［一級建築士 / 一級施工管理技士］
	</div>
	<div class="creator_ext_box">
		<p>
			1965年生まれ。<br />長野県松本深志高等学校を卒業後、芝浦工業大学工学部建築工学科に進む。<br />その後、株式会社大林組に入社。ビル建築を主に現場施工管理にたずさわる。<br />1996年、家業を継ぐため長野県に帰郷。
		</p>
		<p>
			趣味：ゴルフ、サッカー観戦、スポーツ全般にOK
		</p>
	</div>
</div>

<?php // 髙橋てるみさん ?>
<div class="creater_wrap">
	<img src="<?php echo get_template_directory_uri(); ?>/img/creator/ph_tsukurite2.jpg" alt="経理・雑務 高橋てるみ（たかはしてるみ）" class="ph_creator">
	<p class="creator_txt">
		新しい出会いにいつも驚きと感動があります。<br />出会いの数だけ、新しい発見があります。<br />皆様の家づくりのお手伝いを<br />陰ながらサポートさせていただきます。
	</p>
	<div class="crator_name">
		高橋　てるみ<span class="creator_kana">たかはし　てるみ</span>
	</div>
	<div class="creator_katagaki">
		経理・雑務<br />［宅地建物取引士 / 建設業経理事務士二級］<br />中学校・高等学校教諭一種免許（英語）
	</div>
	<div class="creator_ext_box">
		<p>
			1967年生まれ、千葉県船橋市出身。<br />千葉県立船橋東高等学校を卒業後、美術大学の進学をあきらめ、明治学院大学文学部英文学科に進む。その後千葉県佐倉市にて中学校の教職に就く。<br />縁あって長野県出身の人と結婚。それを機に長野県へ移住。
		</p>
		<p>
			趣味：英単語、スコーン作り<br />もう一度行くなら、プリンスエドワード島<br />ロザリアンには程遠い、バラ愛好家
		</p>
	</div>
</div>

	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
