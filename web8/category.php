<?php
//  category.php
//  カテゴリー一覧汎用
get_header(); ?>


<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>

<?php require_once("asset/h1_title.php"); //H1タイトル読込み ?>

<?php //  ページナビ
if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>

<div class="entry_list_wrap">

	<ul class="entry_list">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<li class="entry_list_li">
				<a href="<?php the_permalink(); ?>" class="entry_list_box cf">
					<div class="entry_list_img"><?php the_post_thumbnail('medium'); ?></div>
					<div class="entry_list_txt_box">
						<?php /* <div class="entry_list_date"><?php echo date('Y.m.d', strtotime($post->post_date)); ?></div> */ ?>
						<h3 class="entry_list_title"><?php the_title(); ?></h3>
						<?php if(!is_mobile()): ?>
						<div class="entry_list_txt"><?php echo mb_substr(get_the_excerpt(), 0, 50); ?></div>
						<?php endif; ?>
					</div>
				</a>
			</li>
		<?php endwhile; endif; ?>
	</ul>

</div><?php //.entry_list_wrap ?>

<?php //  ページナビ
if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>


<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
