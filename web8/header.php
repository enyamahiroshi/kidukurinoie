<!DOCTYPE html>
<html lang="ja" class="<?php echo $mode; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">

	<title><?php wp_title('&laquo;', true, 'right'); ?></title>

	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" media="all">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' media="all">
	<?php // フルスクリーン背景スライダー：http://vegas.jaysalvat.com/ ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vegas/vegas.min.css" media="all">
	<?php // スライダー（Slick）：http://kenwheeler.github.io/slick/ ?>
	<?php if(is_home()): ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick/slick.css" media="all">
	<?php endif; ?>
	<?php // サムネイル付スライダー：fotorama ?>
	<?php if( is_page("modelhouse") || ( get_post_type() == 'works') ): //モデルハウスページ、施工事例個別ページ ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fotorama/fotorama.css" media="all">
	<?php endif; ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" media="all">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php //HOMEメインビジュアル ?>
	<?php if(is_home()): ?>
	<div class="mainvisual_wrap">
		<div class="mv_logo_wrap">
			<div class="mv_logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/common/logo_large.png" alt="香り・艶・色を楽しむ 木づくりの家">
			</div>
		</div>
	</div>
	<?php endif; ?>

	<header>
		<div class="header_wrap">
			<div class="header_logo">
				<a href="<?php echo esc_html(home_url()); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo-navi.png" alt="木づくりの家"></a>
			</div>
		<?php if(!is_mobile()): ?>
			<?php // グローバルナビ（カスタムメニュー呼び出し）
			wp_nav_menu(array(
				'menu' => 'gnavi', // 呼び出すカスタムメニュー名
				'menu_id' => '', // ul 要素に適用するID : {メニューのスラッグ}-{連番}
				'menu_class' => 'gnavi', // ul 要素に適用するCSS クラス名 : menu
			)); ?>
		<?php endif; ?>
		<?php if(is_mobile()): ?>
			<?php //グローバルナビの開閉ボタン（http://www.malimami.com/6/） ?>
			<div class="swt_gnavi"><span class="swt_btn"></span><span class="swt_btn_txt">MENU</span></div>
			<?php // グローバルナビ（カスタムメニュー呼び出し）
			wp_nav_menu(array(
				'menu' => 'gnavi_sp', // 呼び出すカスタムメニュー名
				'menu_id' => '', // ul 要素に適用するID : {メニューのスラッグ}-{連番}
				'menu_class' => 'gnavi', // ul 要素に適用するCSS クラス名 : menu
			)); ?>
		<?php endif; ?>
		</div>
	</header>

	<div class="content_wrap">

		<?php if(!is_home()): ?>
		<?php //下層ページのメインビジュアル（bodyクラスにてページ毎背景を振り分ける）?>
		<div class="mainvisual_wrap">
			<?php require_once("asset/h1_title.php"); //H1タイトル読込み ?>
		</div>
		<?php endif; ?>

		<?php //メインコンテンツボックスここから ?>
		<div class="main_content">
