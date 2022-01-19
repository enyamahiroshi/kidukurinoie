<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="title_middle_wrap">
	<h2 class="title_middle">木づくりの家　4つの特徴</h2>
</div>

<div class="content_wrap_800">

	<?php // 4つの特徴 ?>
	<div class="float_box float_box_left cf">
		<div class="tokucho_title"><span class="tokucho_num">1</span><span class="tokucho_title_title">長野県産材を使用</span></div>
		<div class="floatimg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/aboutkizukurinoie/ph_tokucho1.jpg" alt="長野県産材を使用" class="floatimg_img">
		</div>
		<div class="float_txt">
			<p class="float_txt_txt">
				地元の木はすばらしい。年輪が蜜で強度・耐久性に優れ、色艶も良く、構造材・造作材ともに良質なものばかりです。木材は生き物。生まれ育った環境で使用するのが一番です。その県産材を原木から吟味し、製材するところから家づくりを始めます。
			</p>
		</div>
	</div>

	<div class="float_box float_box_right cf">
		<div class="tokucho_title"><span class="tokucho_num">2</span><span class="tokucho_title_title">天然乾燥</span></div>
		<div class="floatimg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/aboutkizukurinoie/ph_tokucho2.jpg" alt="天然乾燥" class="floatimg_img">
		</div>
		<div class="float_txt">
			<p class="float_txt_txt">
				天然乾燥の木材は粘り強く、木本来の色合い・艶・香りがすばらしい。<br />
				歳月をかけてその気候・風土に合った方法で乾燥させた木材を、適材適所に使用すれば、おのずから家は長い生命力を持つことになります。これは人工乾燥では得られないものです。
			</p>
		</div>
	</div>

	<div class="float_box float_box_left cf">
		<div class="tokucho_title"><span class="tokucho_num">3</span><span class="tokucho_title_title">木を生かす</span></div>
		<div class="floatimg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/aboutkizukurinoie/ph_tokucho3.jpg" alt="木を生かす" class="floatimg_img">
		</div>
		<div class="float_txt">
			<p class="float_txt_txt">
				桧・松・杉・けやき・栗、それぞれにいい味わいがあります。けやきの一枚板のテーブルには存在感があります。赤松の梁は吹き抜けの空間を支え、その強度を誇っています。桧は、柱・床板・腰壁板・カウンター、木肌が美しく品があります。
			</p>
		</div>
	</div>

	<div class="float_box float_box_right cf">
		<div class="tokucho_title"><span class="tokucho_num">4</span><span class="tokucho_title_title">通気断熱WB工法</span></div>
		<div class="floatimg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/aboutkizukurinoie/ph_tokucho4.jpg" alt="通気断熱WB工法" class="floatimg_img">
		</div>
		<div class="float_txt">
			<p class="float_txt_txt">
				「呼吸する家」、それは健康的な住まいです。<br />
				「衣替えする家」、それは夏涼しく冬暖かい快適な空間です。<br />
				WB工法は木を生かす工法です。
			</p>
			<p class="float_txt_txt">
				<a class="anchor_link" href="<?php echo esc_url(home_url()); ?>/wb"><i class="fa fa-chevron-circle-right"></i>通気断熱WEB工法へ</a>
			</p>
		</div>
	</div>

</div>

<?php // 私たちの想い ?>
<div class="content_wrap_550">

	<div class="title_middle_wrap">
		<h2 class="title_middle">私たちの想い</h2>
	</div>
	<div class="content_aboutme">
		<h2 class="title_small">共同作業</h2>
		<p>
			「家を建てる」ことは建て主と造り手の共同作業だと考えます。<br />
			だから、<br />
			<strong>ともに理想を語り合いましょう。<br />
			ともに意見をぶつけ合いましょう。<br />
			ともに感動し合える家づくりをしましょう。</strong>
		</p>
		<img src="<?php echo get_template_directory_uri(); ?>/img/aboutkizukurinoie/ph_omoi1.jpg" alt="共同作業" class="tokucho_img">
	</div>
	
	<div class="content_aboutme">
		<h2 class="title_small">創意</h2>
		<p>
			一枚の白い紙に、間取りを手描きしていくところから始まります。<br />
			思いのままに、描いていきます。<br />
			一番に大切だと思うことは何か、<br />
			次に必要なものは何か、<br />
			自分にあったオリジナルなデザイン性まで一緒に話し合い、考えます。<br />
			考えをめぐらせて新しい方法や手段を見い出しながら、設計していきます。<br />
			創り手として、一棟一棟が特別な家になります。
		</p>
		<img src="<?php echo get_template_directory_uri(); ?>/img/aboutkizukurinoie/ph_omoi2.jpg" alt="創意創意" class="tokucho_img">
	</div>

	<div class="content_aboutme">
		<h2 class="title_small">伝統技術から新しい技術まで</h2>
		<p>
			今日、環境問題が懸念される中、<br />
			家づくりにおいてはゼロエネルギー住宅が注目されています。<br />
			<strong>「一番適した住まいの在り方」</strong>を、<br />
			新しい技術を取り入れながら、日々探究しています。
		</p>
		<p class="small_txt">
			※ちなみに、木材の天然乾燥は自然エネルギーを利用した最もエコな技術と言えます。
		</p>
		<img src="<?php echo get_template_directory_uri(); ?>/img/aboutkizukurinoie/ph_omoi3.jpg" alt="伝統技術から新しい技術まで" class="tokucho_img">
	</div>

</div>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
