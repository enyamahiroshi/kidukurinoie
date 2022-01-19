<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="title_middle_wrap">
	<h2 class="title_middle">お問合せありがとうございました</h2>
</div>

<div class="content_wrap_700">
	<p>
		ご入力いただいたメールアドレス宛にメールが自動返信されます。<br />
		しばらくお待ちいただいてもメールが届かない場合は、<br />
		メールアドレスが間違っている可能性があります。<br />
		大変お手数ではございますが、<br />
		再度フォームをご入力いただくか下記まで直接お問合せください。
	</p>
	<dl class="num_list">
	 	<dd class="num_list_txt">
			木づくりの家（高橋林業株式会社）<br />
			〒399-8501　長野県北安曇郡松川村5728<br />
			TEL.0261-62-2140<br />
			FAX.0261-62-0111<br />
			e-mail : <a href="mailto:info@kizukurinoie.jp">info@kizukurinoie.jp</a></dd>
	</dl>
</div>

	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
