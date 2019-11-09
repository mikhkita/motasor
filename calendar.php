<?

$params = array(
	"TITLE" => "Календарь событий",
	"BREADCRUMBS" => array(),
	"BREADCRUMBS_TITLE" => '',
	"WITHOUT_HEADER" => true,
);

include 'header.php';

?>

	<div class="b-calendar-page">
		<div class="b-block clearfix">
			<h1>Календарь событий</h1>
			<div class="b-calendar-page-left b-calendar-cont" data-url="calendar.php">
				<?
					$activeDateDPC = "3.12.2019";
					$eventDatesDPC_Raw = array("17.11.2019","25.11.2019","3.12.2019","9.01.2020");
					$eventDatesDPC = json_encode($eventDatesDPC_Raw);
				?>
				<script type="text/javascript">
					var activeDateDPC = '<?=$activeDateDPC?>';
					var eventDatesDPC = '<?=$eventDatesDPC?>';
				</script>
				<div class="b-calendar-months">

					<div class="b-month-list">

					</div>

				</div>
				<div class="datepicker-cont">
					<div class="datepicker-calendar show"></div>
					<div class="datepicker-calendar"></div>
				</div>
				
			</div>
			<div class="b-calendar-page-right">
				<h2>Все события</h2>
				<div class="b-news-gray">
					<div class="b-news-list b-flex-news clearfix">
						<a href="news-detail.php" class="b-news-item">
							<div class="date">29.6.2017</div>
							<p>На Ставрополье структура «Росатома» построит крупнейшую ветростанцию</p>
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
							<p>"Росатом" начал опытную эксплуатацию двухлазерного 3D-принтера</p>
							<span class="with-arrow block-bottom">
								<span class="text">Перейти</span>
							</span>
						</a>
						<a href="news-detail.php" class="b-news-item">
							<div class="date">29.6.2017</div>
							<p>На Ставрополье структура «Росатома» построит крупнейшую ветростанцию</p>
							<span class="with-arrow block-bottom">
								<span class="text">Перейти</span>
							</span>
						</a>
						<a href="news-detail.php" class="b-news-item">
							<div class="date">29.6.2017</div>
							<p>На Ставрополье структура «Росатома» построит крупнейшую ветростанцию</p>
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
							<p>"Росатом" начал опытную эксплуатацию двухлазерного 3D-принтера</p>
							<span class="with-arrow block-bottom">
								<span class="text">Перейти</span>
							</span>
						</a>
						<a href="news-detail.php" class="b-news-item">
							<div class="date">29.6.2017</div>
							<p>На Ставрополье структура «Росатома» построит крупнейшую ветростанцию</p>
							<span class="with-arrow block-bottom">
								<span class="text">Перейти</span>
							</span>
						</a>
						<a href="news-detail.php" class="b-news-item">
							<div class="date">29.6.2017</div>
							<p>На Ставрополье структура «Росатома» построит крупнейшую ветростанцию</p>
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
							<p>"Росатом" начал опытную эксплуатацию двухлазерного 3D-принтера</p>
							<span class="with-arrow block-bottom">
								<span class="text">Перейти</span>
							</span>
						</a>
						<a href="news-detail.php" class="b-news-item">
							<div class="date">29.6.2017</div>
							<p>На Ставрополье структура «Росатома» построит крупнейшую ветростанцию</p>
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
					<a href="#">15</a>
				</div>
			</div>
		</div>
	</div>	

<?include 'footer.php';?>
		