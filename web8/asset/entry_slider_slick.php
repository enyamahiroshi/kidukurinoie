<?php
/*
// jquery Slick を使用してエントリーをスワイプ表示 : http://kenwheeler.github.io/slick/
// header.php - css , footer.php - jquery
*/
?>

<div class="entry-slider-wrap">
	<h3 class="entry_header">
		トピックス<a class="show_all_entries" href="<?php echo esc_url(home_url('/')); ?>category/topics">一覧を見る<i class="fa fa-angle-right"></i></a>
	</h3>
	<ul class="entry-slider">
		<?php
		// 記事取得ループ
		global $post;
		$args = array(
			'posts_per_page' => 10, // 取得する記事数
			'post_type' => 'post', // ポストタイプ
			'category_name' => 'topics' // カテゴリー名
		);
		$items = get_posts( $args );
		foreach( $items as $post ) : setup_postdata($post);
		?>
		<li class="entry-slider-li">
			<a href="<?php the_permalink() ?>" class="entry-slider-box cf">
				<div class="entry-slider-img"><?php the_post_thumbnail('medium'); ?></div>
				<div class="entry-slider-txt-box">
					<?php /* <div class="entry-slider-date"><?php the_time('Y.m.d') ?> </div> */ ?>
					<h3 class="entry-slider-title"><?php the_title(); ?></h3>
					<div class="entry-slider-txt"><?php echo mb_substr(get_the_excerpt(), 0, 36); ?>…</div>
				</div>
			</a>
		</li>
		<?php endforeach; wp_reset_postdata(); ?>
	</ul>
</div>
