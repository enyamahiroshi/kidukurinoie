<?php
//
//	H1タイトル
//
?>

<?php // ページ ---------------------------------------------------------------- ?>

<?php
//その他
if( is_page() ): ?>

	<h1 class="title_page"><?php the_title(); ?></h1>


<?php // アーカイブ ---------------------------------------------------------------- ?>

<?php
//カスタム投稿：施工事例のアーカイブ
elseif( is_post_type_archive('works') || is_tax('works') ): ?>

	<h1 class="title_page">施工事例一覧</h1>

<?php
//カスタム投稿：WEBクーポンのアーカイブ
elseif( is_post_type_archive('coupon') || is_tax('coupon') ): ?>

	<h1 class="title_page">WEBクーポン一覧</h1>

<?php
//カテゴリー：トピックス
elseif( is_archive( 'topics' ) ): ?>

	<h1 class="title_page">トピックス一覧</h1>

<?php
//カテゴリー：イベント
elseif( is_archive( 'event' ) ): ?>

	<h1 class="title_page">イベント</h1>

<?php
//その他
elseif( is_archive() ): ?>

	<h1 class="title_page"><?php the_title(); ?></h1>


<?php // カスタムポスト ---------------------------------------------------------------- ?>

<?php
//施工事例
elseif( ( get_post_type() == 'works') ): ?>

	<h1 class="title_page">施工事例</h1>


<?php // シングル ---------------------------------------------------------------- ?>

<?php
//カテゴリー トピックス に含まれる
elseif( in_category( 'topics' ) ): ?>

	<h1 class="title_page">トピックス</h1>

<?php
//カテゴリー イベント に含まれる
elseif( in_category( 'event' ) ): ?>

	<h1 class="title_page">イベント</h1>

<?php
//その他
elseif( is_single() ): ?>

	<h1 class="title_page">トピックス</h1>


<?php // 上記以外 ---------------------------------------------------------------- ?>
<?php else: ?>

	<h1 class="title_page"><?php the_title(); ?></h1>

<?php endif; ?>
