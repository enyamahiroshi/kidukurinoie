<?php get_header(); ?>

<?php /* リード */ ?>
<div class="lead">
	<p class="lead_txt">
		「人も木も生きている」<br />
		木づくりの家は<br />
		自然との共生をめざします。
	</p>
	<a class="btn-base btn-white" href="<?php echo esc_html(home_url()); ?>/aboutkizukurinoie">木づくりの家とは</a>
</div>

<?php /* 創り手より・モデルハウス */ ?>
<div class="two_link_wrap">
	<a href="<?php echo esc_html(home_url()); ?>/creator" class="two_link">
		<img src="<?php echo get_template_directory_uri(); ?>/img/home/ph-tukuriteyori.jpg" alt="創り手より" class="two_link_img">
		<span class="two_link_link">創り手より</span>
	</a>
	<a href="<?php echo esc_html(home_url()); ?>/modelhouse" class="two_link">
		<img src="<?php echo get_template_directory_uri(); ?>/img/home/ph-modelhouse.jpg" alt="モデルハウス" class="two_link_img">
		<span class="two_link_link">モデルハウス</span>
	</a>
</div>

<?php /* 施工事例 */ ?>
<div class="works_wrap">
	<h2 class="works_title">施工事例</h2>
	<div class="works_slider_wrap">
		<ul class="works_slider_list">
			<?php $args = array(
					'numberposts' => 10, //表示（取得）する記事の数
					'post_type' => 'works' //投稿タイプの指定
			);
			$the_query = get_posts($args);
			if($the_query) : foreach($the_query as $post) : setup_postdata( $post ); ?>
			<li class="works_list_li">
				<div class="works_list_img"><?php the_post_thumbnail('medium'); ?></div>
				<a href="<?php the_permalink(); ?>" class="works_list_link">
					<div class="works_list_title"><?php the_title(); ?></div>
				</a>
			</li>
			<?php endforeach; ?>
			<?php endif;
			wp_reset_postdata(); //クエリのリセット ?>
		</ul>
	</div>
	<a href="<?php echo esc_html(home_url()); ?>/works" class="btn-base btn-white">施工事例一覧</a>
</div>

<?php /* ZEHについて */ ?>
<div class="parallax_wrap zeh_wrap">
	<div class="zeh_box">
		<h3 class="zeh_title">ZEH（ゼッチ）について</h3>
		<p class="zeh_txt">木づくりの家は、ZEHビルダーとして「ネット・ゼロ・エネルギー・ハウス」の普及に取り組んでいます。</p>
		<a href="<?php echo esc_html(home_url()); ?>/zeh" class="btn-base btn-white-noline">弊社のZEH取組みについて</a>
	</div>
</div>

<?php /* トピックス */ ?>
<?php require_once('asset/entry_slider_slick.php'); ?>

<?php /* ナガブロ読込み */ ?>
<?php require_once('asset/include_feed.php'); ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
