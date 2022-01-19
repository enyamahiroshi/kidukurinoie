<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="title_middle_wrap">
	<h2 class="title_middle">木を生かす　通気断熱WB工法</h2>
</div>

<div class="content_wrap_700">

	<p>
		弊社のモデルハウスは、通気断熱WB工法を取り入れました。<br />	室内の空気を身体で感じてみたかったのです。<br />本当に夏涼しく冬暖かい家なのだろうか。<br />そして木の調湿作用が生かされているのだろうか。<br />その答えを知りたかったのです。
	</p>

	<img src="<?php echo get_template_directory_uri(); ?>/img/wb/ph1.jpg" alt="モデルハウス内観1" class="ph_wb">

	<p>
		実際に一年を通して、外気との違いを感じています。<br />梅雨のシーズンはサラッとした空気、<br />暑い夏は確かに涼しい、<br />そして寒い冬は適度にあたたかい。
	</p>
	<p>
		「いい」と思いました。
	</p>

	<div class="another_link_area">
		<a class="another_link" href="<?php echo esc_html(home_url()); ?>/modelhouse"><i class="fa fa-chevron-circle-right"></i> 「木づくりの家　モデルハウス」へ</a>
	</div>

	<img src="<?php echo get_template_directory_uri(); ?>/img/wb/ph2.jpg" alt="モデルハウス内観2" class="ph_wb">

	<p>
		本来、木は通気性があり、呼吸できれば腐ることはありません。<br />木、本来が持つ強さと対応力です。<br />ならば、木の対応する力を生かすべきではないかと考えます。
	</p>
	<p>
木を生かした日本の伝統ある建築文化を取り入れながら、<br />さらに現代の新しい技術を組み合わせた工法が、<br />「通気断熱WB工法」なのです。
	</p>

</div>

<div class="content_wrap_700 about_wb_wrap">

	<h2 class="about_wb_title">通気断熱WB工法とは</h2>

	<h3 class="sub_title">呼吸する家（通気性）</h3>
	<p>
		木には最適な湿度を保つという調湿作用があります。湿度が高い時には湿気を吸収してため込み、室内の空気を調えます。そして晴れて乾燥した日に外気に放出します。この自然に湿度調節をすることに、さらに室内から発生する有害物質や臭いなども一緒に放出させることができればと考えました。透湿透過のある壁を通り、壁体内通気層へ排出され、家の外に抜けていく構造ができました。換気システムに頼らず、室内空間をきれいな空気にしてくれます。これが呼吸する家と言われる所以です。
	</p>

	<h3 class="sub_title">衣替えする家（断熱性）</h3>
	<p>
		人間は、暑い時は服を脱ぎ風通しよくして暑さをしのぎ、寒い時は服を重ね着して暖かさを保ちます。そして気管支呼吸と皮膚呼吸により、汗や体温を調節して健康を保持します。WB工法は家に同様な機能を持たせた工法なのです。<br />夏は「形状記憶式自動開閉装置」の換気口を開け、風通しの良い涼しい家にします。冬は換気口を閉じて気密性を上げ、断熱材の性能を生かして暖かい家にします。<br />この「形状記憶式自動開閉装置」は気温に反応して自動的に開閉（熱感知式形状記憶合金）します。人がセーターを着たり脱いだりするように、家がセーターを着たり脱いだりした状態を自然の営みの中でつくり、自ら対応していくシステム です。
	</p>

	<div class="about_wb_box">
		<img src="<?php echo get_template_directory_uri(); ?>/img/wb/ph3.png" alt="WB工法イメージ図">
		<a href="https://www.wb-house.jp/" class="btn-base btn-white" target="_blank">WB工法詳細はこちら（ウッドビルドのHPへ）</a>
	</div>

</div>

	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
