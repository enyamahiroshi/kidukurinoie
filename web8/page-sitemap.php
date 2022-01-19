<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<ul class="sitemap_list">
		<li class="sitemap_li">
			<a href="<?php echo esc_html(home_url()); ?>/">
				<i class="fa fa-caret-square-o-right"></i>HOME
			</a>
		</li>
		<li class="sitemap_li">
			<a href="<?php echo esc_html(home_url()); ?>/creator">
				<i class="fa fa-caret-square-o-right"></i>創り手より
			</a>
		</li>
		<li class="sitemap_li">
			<a href="<?php echo esc_html(home_url()); ?>/modelhouse">
				<i class="fa fa-caret-square-o-right"></i>モデルハウス
			</a>
		</li>
		<li class="sitemap_li">
			<a href="<?php echo esc_html(home_url()); ?>/aboutkizukurinoie">
				<i class="fa fa-caret-square-o-right"></i>木づくりの家とは
			</a>
		</li>
		<li class="sitemap_li">
			<a href="<?php echo esc_html(home_url()); ?>/works">
				<i class="fa fa-caret-square-o-right"></i>施工事例
			</a>
		</li>
		<li class="sitemap_li">
			<a href="<?php echo esc_html(home_url()); ?>/contact">
				<i class="fa fa-caret-square-o-right"></i>お問合せ・資料請求
			</a>
		</li>
		<li class="sitemap_li">
			<a href="<?php echo esc_html(home_url()); ?>/company">
				<i class="fa fa-caret-square-o-right"></i>会社概要
			</a>
		</li>
		<li class="sitemap_li">
			<a href="<?php echo esc_html(home_url()); ?>/category/topics">
				<i class="fa fa-caret-square-o-right"></i>トピックス
			</a>
		</li>
		<li class="sitemap_li">
			<a href="<?php echo esc_html(home_url()); ?>/privacypolicy">
				<i class="fa fa-caret-square-o-right"></i>プライバシーポリシー
			</a>
		</li>
	</ul>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
