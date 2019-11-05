<div class="b-calendar-page-right">
	<?
		$dateParts = explode(".", $_GET["date"]);
		$months = array(
			"01" => "января",
			"02" => "февраля",
			"03" => "марта",
			"04" => "апреля",
			"05" => "мая",
			"06" => "июня",
			"07" => "июля",
			"08" => "августа",
			"09" => "сентября",
			"10" => "октября",
			"11" => "ноября",
			"12" => "декабря",
		);
	?>
	<h2>События <?=$dateParts[0]?> <?=$months[$dateParts[1]]?></h2>
	<div class="b-news-gray">
		<div class="b-news-list clearfix">
			<a href="news-detail.php" class="b-news-item">
				<div class="date">29.6.2017</div>
				<p>Более 700 специалистов прошли обучение в школах МАГАТЭ по управлению ядерными знаниями</p>
				<span class="with-arrow block-bottom">
					<span class="text">Перейти</span>
				</span>
			</a>
			<a href="news-detail.php" class="b-news-item">
				<div class="date">29.6.2017</div>
				<p>Более 700 специалистов прошли обучение в школах МАГАТЭ по управлению ядерными знаниями</p>
				<span class="with-arrow block-bottom">
					<span class="text">Перейти</span>
				</span>
			</a>
			<a href="news-detail.php" class="b-news-item">
				<div class="date">29.6.2017</div>
				<p>Более 700 специалистов прошли обучение в школах МАГАТЭ по управлению ядерными знаниями</p>
				<span class="with-arrow block-bottom">
					<span class="text">Перейти</span>
				</span>
			</a>
			<a href="news-detail.php" class="b-news-item">
				<div class="date">29.6.2017</div>
				<p>Более 700 специалистов прошли обучение в школах МАГАТЭ по управлению ядерными знаниями</p>
				<span class="with-arrow block-bottom">
					<span class="text">Перейти</span>
				</span>
			</a>
			<a href="news-detail.php" class="b-news-item">
				<div class="date">29.6.2017</div>
				<p>Более 700 специалистов прошли обучение в школах МАГАТЭ по управлению ядерными знаниями</p>
				<span class="with-arrow block-bottom">
					<span class="text">Перейти</span>
				</span>
			</a>
		</div>
	</div>
	<div class="b-page-nav">
		<a href="#" class="active">1</a>
		<a href="#">2</a>
		<a href="#">3</a>
		<a href="#" class="more">...</a>
		<a href="#">10</a>
	</div>
</div>
		