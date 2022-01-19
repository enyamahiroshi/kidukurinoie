<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="title_middle_wrap">
	<h2 class="title_middle">アクセス</h2>
</div>

<div class="content_wrap_700">

	<p>
		高橋林業株式会社<br />
		〒399-8501　長野県北安曇郡松川村5728
	</p>

	<?php // Google map ?>
	<div class="access_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12841.129994345853!2d137.8635143!3d36.4265512!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x764091d8582d227!2z6auY5qmL5p6X5qWt77yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1464866305224" width="700" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<div class="title_middle_wrap">
		<h2 class="title_middle">会社情報</h2>
	</div>

	<?php // 会社情報 ?>
	<table class="line_table">
		<tr>
			<th>会社名</th>
			<td>高橋林業株式会社</td>
		</tr>
		<tr>
			<th>所在地</th>
			<td>〒399-8501　長野県北安曇郡松川村5728</td>
		</tr>
		<tr>
			<th>TEL</th>
			<td>0261-62-2140</td>
		</tr>
		<tr>
			<th>FAX</th>
			<td>0261-62-0111</td>
		</tr>
		<tr>
			<th>e-mail</th>
			<td><a href="mailto:info@kizukurinoie.jp">info@kizukurinoie.jp</a></td>
		</tr>
		<tr>
			<th>代表取締役</th>
			<td>高橋　平和</td>
		</tr>
		<tr>
			<th>事業内容</th>
			<td>
				木材製材業<br />
				一般建築業 … 建築工事業　長野県知事許可（般-29）第2453号<br />
				一級建築士事務所　T.F.C Design … 県知事登録（北安）D第95121号<br />
				住宅リフォーム業<br />
				宅地建物取引業 … 長野県知事（５）第4466号
			</td>
		</tr>
		<tr>
			<th>所属</th>
			<td>
				JIO [㈱日本住宅保証検査機構]A3100239<br />
				通気断熱WB工法友の会 会員
			</td>
		</tr>
	</table>


	<div class="title_middle_wrap">
		<h2 class="title_middle">沿革</h2>
	</div>

	<?php // 沿革 ?>
	<table class="bg_table">
		<tr>
			<th>昭和9年</th>
			<td>高橋木材店として創業</td>
		</tr>
		<tr>
			<th>昭和42年</th>
			<td>高橋林業株式会社として改組<br />県産材を主とする国産材を充実させ、家造りの真髄を追及</td>
		</tr>
		<tr>
			<th>平成10年</th>
			<td>宅地建物取引業免許県知事登録</td>
		</tr>
		<tr>
			<th>平成11年</th>
			<td>一級建築士事務所開設</td>
		</tr>
		<tr>
			<th>平成23年</th>
			<td>北安曇地域にモデルハウスを建築</td>
		</tr>
		<tr>
			<th>平成26年</th>
			<td>高橋一級建築士事務所を「T.F.C Design」に改名</td>
		</tr>
	</table>

</div>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
