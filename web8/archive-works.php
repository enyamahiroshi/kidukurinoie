<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>

	<?php require_once("asset/h1_title.php"); //H1タイトル読込み ?>

<div class="archive_wrap">

	<?php //  ページナビ
	if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>

	<ul class="works_list">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<li class="works_list_li">
			<div class="works_list_img"><?php the_post_thumbnail('medium'); ?></div>
			<a href="<?php the_permalink(); ?>" class="works_list_link">
				<div class="works_list_title"><?php the_title(); ?></div>
			</a>
		</li>
		<?php endwhile; endif; ?>
	</ul>

	<?php //  ページナビ
	if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>

</div>


<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
