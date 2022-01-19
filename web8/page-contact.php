<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="title_middle_wrap">
	<h2 class="title_middle">ご相談、資料請求はこちらから</h2>
</div>

<div class="content_wrap_700">
	<p>
		お問合せやご相談の方は「お問合せ」にチェックし内容をご記入ください。<br />
		1週間以内にご連絡さしあげます。<br />
		資料をご希望のお客様は「資料請求」にチェックを入れ、<br />
		下記フォームに必要事項をご記入ください。<br />
		後日、資料をお送りいたします。
	</p>

	<?php the_content(); ?>
</div>

	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
