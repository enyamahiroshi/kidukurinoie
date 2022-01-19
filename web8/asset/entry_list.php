<div class="entry-list-wrap">
  <h3 class="entry_header">
		トピックス<a class="show_all_entries" href="<?php echo esc_url(home_url('/')); ?>category/topics">一覧を見る<i class="fa fa-angle-right"></i></a>
	</h3>
	<ul class="entry-list">
		<?php
		// 記事取得ループ
		global $post;
		$args = array(
			'posts_per_page' => 4, // 取得する記事数
			'post_type' => 'post', // ポストタイプ
			'category_name' => 'topics' // カテゴリー名
		);
		$items = get_posts( $args );
		foreach( $items as $post ) : setup_postdata($post);
		?>
		<li class="entry-list-block">
			<a href="<?php the_permalink() ?>" class="entry-list-box">
				<div class="entry-list-img"><?php the_post_thumbnail('medium'); ?></div>
				<div class="entry-list-txt-box">
					<h3 class="entry-list-title"><?php the_title(); ?></h3>
					<div class="entry-list-txt"><?php echo mb_substr(get_the_excerpt(), 0, 36); ?>…</div>
				</div>
			</a>
		</li>
		<?php endforeach; wp_reset_postdata(); ?>
	</ul>
</div>