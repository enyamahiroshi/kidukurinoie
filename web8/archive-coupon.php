<?php get_header(); ?>

<?php /*
//
// 下層ページのベース。ここから各ページ.php にパーツをコピペして利用
//
*/ ?>
	
<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	
	<?php require_once("asset/h1_title.php"); //H1タイトル読込み ?>
	
	<div class="flexcont flex_4column flex_coupon">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
<?php //カスタムフィールドの値を読み込み(http://kotori-blog.com/wordpress/acf_output/)
//クーポン内容 フリー入力
$cfd_coupon_naiyo = get_field('cfd_coupon_naiyo'); 
//クーポン画像
$cfd_coupon_img = get_field('cfd_coupon_img');
$cfd_coupon_img_url = wp_get_attachment_image_src($cfd_coupon_img, 'medium');
?>
		<div class="flex_item">
			<a href="<?php the_permalink(); ?>">
				<h4 class="coupon_title"><i class="fa fa-bookmark"></i><?php the_title(); ?></h4>
				<?php if($cfd_coupon_img): ?>
				<div class="coupon_img">
					<img src="<? echo $cfd_coupon_img_url[0]; ?>" alt="<?php the_title(); ?><">
				</div>
				<?php endif; ?>
			</a>
		</div>
	<?php endwhile; endif; ?>
	</div>

		<?php
		//  ページナビ
		if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>
	
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
