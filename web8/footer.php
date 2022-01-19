
		</div><?php //.main_content ?>

		<footer>
			<div class="footer-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/img/common/logo_large.png" alt="木づくりの家" class="footer-logo">
				<div class="footer-info">
					<p class="footer-add">長野県北安曇郡松川村5728</p>
					<p class="footer-tel tel-link"><a href="tel:0261622140" class="">TEL.<span class="footer-tel-num">0261-62-2140</span></a></p>
				</div>
				<a class="btn-base btn-green" href="<?php echo esc_html(home_url()); ?>/contact">お問合せ・資料請求</a>
				<a class="btn-instagram" href="http://" target="_blank" rel="noopener noreferrer">
					<img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-instagram.png" alt="Instagram" class="icon">
				</a>
				<?php // フッターナビ（カスタムメニュー呼び出し）
				wp_nav_menu(array(
					'menu' => 'fnavi', // 呼び出すカスタムメニュー名
					'menu_id' => '', // ul 要素に適用するID : {メニューのスラッグ}-{連番}
					'menu_class' => 'fnavi', // ul 要素に適用するCSS クラス名 : menu
				)); ?>
				<span class="footer-copyright">&copy; KIZUKURINOIE All Rights Reserved.</span>
			</div>
		</footer>

	</div><?php //.content_wrap ?>



<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo-1.4.3.1-min.js"></script>

<?php // フルスクリーン背景スライダー（VEGAS）：http://vegas.jaysalvat.com/ ?>
<?php if(is_home()): ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.backstretch.min.js"></script>
<script>
jQuery(function($){
	$(".mainvisual_wrap").backstretch([
		"<?php echo get_template_directory_uri(); ?>/img/mv/mv1.jpg"
	  , "<?php echo get_template_directory_uri(); ?>/img/mv/mv2.jpg"
	  , "<?php echo get_template_directory_uri(); ?>/img/mv/mv3.jpg"
	  , "<?php echo get_template_directory_uri(); ?>/img/mv/mv5.jpg"
	], {duration: 3000, fade: 1200});
});
</script>
<?php endif; ?>

<?php // スライダー（Slick）：http://kenwheeler.github.io/slick/ ?>
<?php if(is_home()): ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick/slick.min.js"></script>
<?php // ここに書くと、スマホのみで表示・実行されます
if(is_mobile()) { ?>
<script>
jQuery(function($){
	$('.entry-slider').slick({});
});
</script>
<?php } else { // こに書くと、タブレット＆PCのみで表示・実行されます ?>
<script>
jQuery(function($){
	$('.entry-slider').slick({
	  infinite: true,
	  slidesToShow: 2,
	  slidesToScroll: 2
	});
});
</script>
<?php } ?>
<?php endif; ?>

<?php // 横に流れるスライダー：https://github.com/woodroots/infiniteslide ?>
<?php if(is_home()): ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/infiniteslide-master/infiniteslide.js"></script>
<?php // ここに書くと、スマホのみで表示・実行されます
if(is_mobile()) { ?>
	<script type="text/javascript">
	jQuery(function($){
		$('.works_slider_wrap').infiniteslide({
			'height': 120,
			'speed': 20,
			'direction' : 'left',
			'pauseonhover': false //マウスオーバーでストップ
		});
	});
	</script>
<?php } else { // こに書くと、タブレット＆PCのみで表示・実行されます ?>
	<script type="text/javascript">
	jQuery(function($){
		$('.works_slider_wrap').infiniteslide({
			'height': 226,
			'speed': 25,
			'direction' : 'left',
			'pauseonhover': true
		});
	});
	</script>
<?php } ?>
<?php endif; ?>

<?php // サムネイル付スライダー：fotorama ?>
<?php if( is_page("modelhouse") || ( get_post_type() == 'works') ): //モデルハウスページ、施工事例個別ページ ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/fotorama.js"></script>
<?php endif; ?>

<?php // 共通js ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

</body>
</html>
