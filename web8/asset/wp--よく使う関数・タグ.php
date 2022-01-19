<!-- ==========================================
//  全ページ共通
// ============================================ -->

<?php $args = array(
		'numberposts' => 5,                //表示（取得）する記事の数
		'post_type' => 'post-type-name'    //投稿タイプの指定
);
$customPosts = get_posts($args);
if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
<?php else : //記事が無い場合 ?>
		<li><p>記事はまだありません。</p></li>
<?php endif;
wp_reset_postdata(); //クエリのリセット ?>
