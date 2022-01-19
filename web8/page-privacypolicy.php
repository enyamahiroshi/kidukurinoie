<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="title_middle_wrap">
	<h2 class="title_middle">個人情報保護方針</h2>
</div>

<div class="content_wrap_700">

	<p>
		高橋林業株式会社（以下、当社）は、お客様の個人情報を適正に保護することを重視し、本プライバシーポリシーに基づき個人情報の保護に努めてまいります。
	</p>

	<?php // PPリスト ?>
	<dl class="num_list">
		<dt class="num_list_title">利用目的の明示</dt>
		<dd class="num_list_txt">
			<p>当社は、Webサイトの一部のコンテンツ（お問い合わせ）においてお客様の個人情報をご提供いただく場合があります。その場合は、ご提供いただく個人情報の利用目的をあらかじめ明示し、お客様の同意の上で、適切な範囲内でご提供いただきます。</p>
		</dd>
		<dt class="num_list_title">個人情報の利用について</dt>
		<dd class="num_list_txt">
			<p>当社は、取得等の際に示した利用目的の範囲内で、かつ業務の遂行上必要な限度内で、個人情報を利用します。個人情報の取扱いを第三者に委託する場合は、当 該第三者に秘密を厳守するよう契約を締結し、その責任の所在を明確にし、個人情報の安全管理のために必要かつ適切な監督を行います。</p>
		</dd>
		<dt class="num_list_title">個人情報の第三者提供について</dt>
		<dd class="num_list_txt">
			<p>当社は、原則として以下に定める場合を除き、個人情報を第三者に提供しません。<br />
			※お客様の同意がある場合<br />
			※個人情報保護法その他法令に定めのある場合</p>
		</dd>
		<dt class="num_list_title">個人情報の管理について</dt>
		<dd class="num_list_txt">
			<p>当社は、取得した個人情報について適切な安全措置を講じることにより、お客様の個人情報の漏洩、紛失、毀損またはお客様の個人情報への不正なアクセスを防止することに努めます。</p>
		</dd>
		<dt class="num_list_title">個人情報の開示、訂正、利用停止、消去について</dt>
		<dd class="num_list_txt">
			<p> 当社は、お客様がご自身の個人情報について、開示・訂正・利用停止・消去を申し出られた場合は速やかに対応します。</p>
		</dd>
		<dt class="num_list_title">個人情報保護関連規程の制定・実施・改善</dt>
		<dd class="num_list_txt">
			<p>当社は、上記の方針を徹底するため、これを全職員並びに関係者に周知・実施し、本プライバシーポリシーの内容を継続的に見直し、改善に努めます。</p>
		</dd>
		<dt class="num_list_title num_list_stop_count">お問合せ先</dt>
		<dd class="num_list_txt">
			<p>高橋林業株式会社<br />
			〒399-8501　長野県北安曇郡松川村5728<br />
			TEL.0261-62-2140<br />
			FAX.0261-62-0111<br />
			e-mail : <a href="mailto:info@kizukurinoie.jp">info@kizukurinoie.jp</a></p>
		</dd>
	</dl>

</div>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
