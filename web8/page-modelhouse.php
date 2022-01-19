<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="title_middle_wrap">
	<h2 class="title_middle">木づくりの家 モデルハウス</h2>
</div>

<div class="content_wrap_modelhouse">

	<p>
		夏涼しく冬暖かい「通気断熱ＷＢ工法」を取り入れたモデルハウスです。<br />
		室内の空気と香りと木の色を感じてください。<br />
		素足で歩いて、木の心地よさを体感してください。
	</p>

	<?php // サムネイル付スライダー：fotorama ?>
	<div class="thumb_slider_wrap">
		<div class="fotorama" <?php //http://fotorama.io/customize/ ?>
			data-max-width="100%"<?php //横幅MAX ?>
		  data-minwidth="100%"<?php //横幅MIN ?>
			data-max-height="700px"<?php //高さMAX ?>
			data-transition="slide"<?php //アニメーションスタイル slide|crossfade ?>
			data-autoplay="true"<?php //自動スクロール ?>
			data-autoplay="800"<?php //自動スクロール1秒 ?>
			data-transitionduration="800"<?php //アニメーション3秒ゆっくりスクロール ?>
			data-arrows="true"<?php //矢印消去 ?>
			data-click="true"<?php //クリックでスクロール ?>
			data-swipe="true"<?php //スワイプでスクロール ?>
			data-loop="true"<?php //画像をループさせる ?>
			data-nav="thumbs"<?php //サムネイルを並べる ?>
			data-thumbwidth="134"<?php //サムネイルwidth ?>
			data-thumbheight="90"<?php //サムネイルheight ?>
			data-navposition="bottom"<?php //ナビゲーション位置 ?>
		>
			<a href="<?php echo get_template_directory_uri(); ?>/img/modelhouse/slide_1.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/modelhouse/slide_1_thumb.jpg">
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/img/modelhouse/slide_2.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/modelhouse/slide_2_thumb.jpg">
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/img/modelhouse/slide_3.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/modelhouse/slide_3_thumb.jpg">
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/img/modelhouse/slide_4.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/modelhouse/slide_4_thumb.jpg">
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/img/modelhouse/slide_5.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/modelhouse/slide_5_thumb.jpg">
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/img/modelhouse/slide_6.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/modelhouse/slide_6_thumb.jpg">
			</a>
		</div>
	</div>

	<?php // モデルハウス概要 ?>
	<div class="box_border1 box_modelhouse_gaiyo">
		<em class="modelhouse_gaiyo_title">モデルハウス建物概要</em>
		<ul class="inline_list1">
			<li>木造軸組　2階建て</li>
			<li>通気断熱ＷＢ工法</li>
			<li>延床面積：1階91.30㎡,  2階51.78㎡ / 計143.08㎡</li>
			<li>天然乾燥による長野県産材</li>
			<li>太陽光発電システム</li>
			<li>薪ストーブ</li>
		</ul>
		<em class="modelhouse_gaiyo_title">所在地</em>
		<div class="modelhouse_address">
			長野県北安曇郡松川村5728（TEL.0261-62-2140）
		</div>
	</div>

	<?php // ページ内アンカーリンク ?>
	<div class="anchor_link_area">
		<a class="anchor_link" href="#modelhouse_tour_wrap"><i class="fa fa-chevron-circle-down"></i>モデルハウス見学希望の方はこちらから</a>
	</div>

	<?php // モデルハウス内観説明 ?>
	<div class="float_box float_box_left cf">
		<h3 class="float_txt_title">建前</h3>
		<div class="floatimg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/modelhouse/ph_tatemae.jpg" alt="建前" class="floatimg_img">
		</div>
		<div class="float_txt">
			<p class="float_txt_txt">
				桧の柱を使用。<br />
				桧は香りよく、また防虫効果があります。
			</p>
		</div>
	</div>

	<div class="float_box float_box_right cf">
		<h3 class="float_txt_title">吹き抜け</h3>
		<div class="floatimg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/modelhouse/ph_fukinuke.jpg" alt="吹き抜け" class="floatimg_img">
		</div>
		<div class="float_txt">
			<p class="float_txt_txt">
				登り梁は赤松。6ｍの化粧梁を使用。<br />
				吹き抜けのリビングに映えます。<br />
				階段は、ケヤキ。<br />
				太陽の光が踏み板からこぼれます。<br />
				１階の壁板は杉の赤みだけで揃えました。
			</p>
		</div>
	</div>

	<div class="float_box float_box_left cf">
		<h3 class="float_txt_title">テーブルカウンター</h3>
		<div class="floatimg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/modelhouse/ph_table.jpg" alt="テーブルカウンター" class="floatimg_img">
		</div>
		<div class="float_txt">
			<p class="float_txt_txt">
				ケヤキのテーブルとカウンター。<br />
				ケヤキは木目が美しい。<br />
				造作材としては最高級とされます。
			</p>
		</div>
</div>

</div>

<?php // モデルハウスの見学をご希望の方 ?>
<div id="modelhouse_tour_wrap">
	<h2 class="modelhouse_tour_title">モデルハウスの見学をご希望の方</h2>
	<div class="modelhouse_toure_box">
		<h4 class="modelhouse_toure_box_title">観て、触れて、感じてください</h4>
		<p>モデルハウスはオープンハウスです。<br />いつでもご覧いただけます。<br />知りたいこと、悩んでいることなどありましたら、お気軽にご相談ください。</p>
		<a href="<?php echo esc_html(home_url()); ?>/contact" class="btn-base btn-white-noline">モデルハウスの見学希望</a>
		<p>または、TEL.0261-62-2140 まで</p>
	</div>
</div>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
