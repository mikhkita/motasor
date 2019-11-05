<?

$arPage = explode('/', $_SERVER['REQUEST_URI']);
$isMain = (end($arPage) == 'index.php') ? true : false;

?>
<!DOCTYPE html>
<html>
<head>
	<title><?echo isset($params['TITLE']) ? $params['TITLE'] : "Росатом";?></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
	<meta name="format-detection" content="telephone=no">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css">
	<link rel="stylesheet" href="css/slick.css" type="text/css">
	<link rel="stylesheet" href="css/chosen.min.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">

	<link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1440px)" href="css/layout-tablet.css">
	<link rel="stylesheet" media="screen and (min-width: 240px) and (max-width: 767px)" href="css/layout-mobile.css">

	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
	<div class="b b-header">
		<div class="b-header-top clearfix">
			<div class="b-block">
				<a href="index.php" class="b-header-logo"></a>
				<div class="b-header-top-right">
					<div class="b-header-search">
						<a href="#" class="b-header-search-btn icon-search"></a>
						<form action="search.php" method="GET" class="b-header-search-form">
							<input type="text" name="" placeholder="Поиск" class="b-header-search-input">
							<input type="submit" value="Поиск" style="display:none;">
						</form>
					</div>
					<span class="b-soc-text">Мы в соцсетях:</span>
					<div class="b-soc">
						<a href="//vk.com" class="icon-vk" target="_blank">Вконтакте</a>
						<a href="//facebook.com" class="icon-facebook" target="_blank">Facebook</a>
					</div>
					<a href="#b-popup-auth" class="b-header-community fancy">Присоединиться к cообществу</a>
				</div>
				<div class="b-menu-mobile">
					<div class="b-btn-menu b-btn-menu-mobile">
						<div class="icon-menu"></div>
						<span>Меню</span>
					</div>
				</div>
			</div>
		</div>
		<div class="b-menu-mobile-cont">
			<div class="b-menu-mobile-window">
				<ul class="b-menu-mobile-list">
					<li>
						<a href="#">О нас</a>
						<ul class="open-section" data-depth="1">
							<li>
								<a href="#">Фото- и видеоматериалы</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Контент</a>
						<ul class="open-section" data-depth="1">
							<li><a href="#">Научные достижения</a></li>
							<li>
								<a href="#">Нормативная документация</a>
								<ul class="open-section" data-depth="2">
									<li><a href="#">Программа инновационного развития</a></li>
								</ul>
							</li>
							<li><a href="#">Портал НТИ</a></li>
							<li><a href="#">Единый отраслевой тематический план</a></li>
						</ul>
					</li>
					<li>
						<a href="#">РИД</a>
						<ul class="open-section" data-depth="1">
							<li><a href="#">ИС УПРИД </a></li>
							<li><a href="#">Портфели</a></li>
						</ul>
					</li>
					<li>
						<a href="news.php">Новости</a>
					</li>
					<li>
						<a href="#">Опросы</a>
					</li>
					<li>
						<a href="#">Контакты</a>
						<ul class="open-section" data-depth="1">
							<li><a href="#">Задать вопрос </a></li>
							<li><a href="#">Портфели</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Сообщества</a>
						<ul class="open-section" data-depth="1">
							<li><a href="#">Инновационная вертикаль</a></li>
							<li>
								<a href="#">Мероприятия</a>
								<ul class="open-section" data-depth="2">
									<li><a href="#">Прорыв </a></li>
									<li><a href="#">УИР </a></li>
									<li><a href="#">Школа инновационного  лидера </a></li>
								</ul>
							</li>
							<li>
								<a href="#">Конкурсы</a>
								<ul class="open-section" data-depth="2">
									<li><a href="#">Конкурс аванпроектов </a></li>
									<li><a href="#">Инновационный лидер </a></li>
									<li><a href="#">Премия молодым ученым</a></li>
								</ul>
							</li>
						</ul>

					</li>
				</ul>
				<div class="slide-cont sub-section-slide"></div>
				<div class="slide-cont sub-sub-section-slide"></div>
				<div class="community">
					<a href="#b-popup-auth" class="b-header-community fancy">Присоединиться к cообществу</a>
				</div>
			</div>
		</div>
		<div class="b-header-menu-cont">
			<div class="b-header-menu">
				<div class="b-block">
					<div class="b-btn-menu b-btn-menu-desktop">
						<div class="icon-menu"></div>
						<span>Меню</span>
					</div>
					<div class="b-menu-list-wrap">
						<ul class="b-menu-list clearfix">
							<li><a href="#">О нас</a></li>
							<li><a href="news.php">Новости</a></li>
							<li><a href="#">Мероприятия</a></li>
							<li><a href="#">Сообщества</a></li>
							<li><a href="#">Рид</a></li>
							<li><a href="#">Контакты</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="b-header-menu-window-cont">
				<div class="b-header-menu-window clearfix">
					<div class="b-block">
						<ul class="menu-window-item">
							<ul class="section">
								<li><a href="#" class="bold">О нас</a></li>
								<li>
									<ul class="sub-section">
										<li><a href="#">Фото- и видеоматериалы</a></li>
									</ul>
								</li>
							</ul>
							<ul class="section">
								<li><a href="#" class="bold">Контент</a></li>
								<li>
									<ul class="sub-section">
										<li><a href="#">Научные достижения</a></li>
										<li><a href="#">Нормативная документация</a></li>
										<li>
											<ul class="sub-sub-section">
												<li><a href="#">Программа инновационного развития</a></li>
											</ul>
										</li>
										<li><a href="#">Портал НТИ</a></li>
										<li><a href="#">Единый отраслевой тематический план</a></li>
									</ul>
								</li>
							</ul>
						</ul>
						<ul class="menu-window-item">
							<ul class="section">
								<li><a href="#" class="bold">РИД</a></li>
								<li>
									<ul class="sub-section">
										<li><a href="#">ИС УПРИД </a></li>
										<li><a href="#">Портфели</a></li>
									</ul>
								</li>
							</ul>
							<ul class="section">
								<li><a href="news.php" class="bold">Новости</a></li>
							</ul>
							<ul class="section">
								<li><a href="#" class="bold">Опросы</a></li>
							</ul>
							<ul class="section">
								<li><a href="#" class="bold">Контакты</a></li>
								<li>
									<ul class="sub-section">
										<li><a href="#">Задать вопрос</a></li>
										<li><a href="#">Портфели</a></li>
									</ul>
								</li>
							</ul>

						</ul>
						<ul class="menu-window-item">
							<ul class="section">
								<li><a href="#" class="bold">Сообщества</a></li>
								<li>
									<ul class="sub-section">
										<li><a href="#">Инновационная вертикаль</a></li>
										<li><a href="#">Мероприятия</a></li>
										<li>
											<ul class="sub-sub-section">
												<li><a href="#">Прорыв</a></li>
												<li><a href="#">УИР</a></li>
												<li><a href="#">Школа инновационного<br> лидера </a></li>
											</ul>
										</li>
										<li><a href="#">Конкурсы</a></li>
										<li>
											<ul class="sub-sub-section">
												<li><a href="#">Конкурс аванпроектов </a></li>
												<li><a href="#">Инновационный лидер</a></li>
												<li><a href="#">Премия молодым ученым</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</ul>
						<ul class="menu-window-item">
							<li>
								<ul class="section">
									<li><a href="#">Alumni</a></li>
									<li><a href="#">Экспертиза </a></li>
									<li>
										<ul class="sub-sub-section">
											<li><a href="#">База экспертов</a></li>
											<li><a href="#">Цифровая платформа экспертизы </a></li>
											<li><a href="#">Стать экспертом Росатома</a></li>
										</ul>
									</li>
									<li><a href="#">Научно-технический совет</a></li>
									<li><a href="#">Тематические группы </a></li>
									<li>
										<ul class="sub-sub-section">
											<li><a href="#">ЕОТП</a></li>
											<li><a href="#">Аванпроекты</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>

					</div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="b b-content">
		<? if (!$isMain): ?>
			<div class="b-nav-mobile">
				<div class="main-section">
					<a href="#">Инновационная вертикаль</a>
					<span class="icon-select"></span>
				</div>
				<ul class="items">
					<li>
						<a href="#">АО «Наука и инновации»</a>
						<ul>
							<li><a href="#">АО «ВНИИХТ»</a></li>
							<li><a href="#">АО «Гиредмет»</a></li>
							<li><a href="#">АО «ГНЦ НИИАР»</a></li>
							<li><a href="#">АО «ГНЦ РФ - ФЭИ им. А.И.Лейпунского»</a></li>
							<li><a href="#">АО «ГНЦ РФ ТРИНИТИ»</a></li>
							<li><a href="#">АО «НИИграфит»</a></li>
							<li><a href="#">АО «НИИП» г. Лыткарино</a></li>
							<li><a href="#">АО «НТЦ «ЯФИ»</a></li>
							<li><a href="#">АО «Радиевый институт им. В.Г. Хлопина»</a></li>
							<li><a href="#">ФГУП «НИИ НПО «Луч»</a></li>
							<li><a href="#">АО «ИРМ»</a></li>
							<li><a href="#">АО "НИИЭФА им. Д.В. Ефремова"</a></li>
						</ul>
					</li>
					<li><a href="#">АО «Концерн Росэнергоатом»</a></li>
					<li><a href="#">АО «АТОМПРОЕКТ»</a></li>
					<li><a href="#">АО «Атомэнергомаш»</a></li>
					<li><a href="#">Дивизион ЗСЖЦ (АО ФЦЯРБ)</a></li>
					<li><a href="#">АО ИК «АСЭ» (АО «НИАЭП»)</a></li>
					<li><a href="#">Урановый холдинг «АРМЗ»</a></li>
				</ul>
			</div>
			<? if (!$params['WITHOUT_HEADER']): ?>
				<div class="b-header-inner">
					<picture>
						<img src="i/bg.jpg">
					</picture>
					<div class="b-block">
						<div class="b-header-inner-left">
							<? if( isset($params["BREADCRUMBS"]) ): ?>
								<ul class="b-breadcrumbs clearfix">
									<? foreach ($params["BREADCRUMBS"] as $title => $url): ?>
										<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?=$url?>" title="<?=$title?>" itemprop="url"><span itemprop="title"><?=$title?></span></a></li>
									<? endforeach; ?>
									<li><span><?=($params["BREADCRUMBS_TITLE"])?$params["BREADCRUMBS_TITLE"]:$params["TITLE"]?></span></li>
								</ul>
							<?endif;?>
							<h2><?=($params["BREADCRUMBS_TITLE"])?$params["BREADCRUMBS_TITLE"]:$params["TITLE"]?></h2>
						</div>
						<? if ($innerText): ?>
							<div class="b-header-inner-right"><?=$innerText?></div>
						<? endif; ?>
						<div class="b-header-show-more">
							<span class="text-open">Развернуть</span>
							<span class="text-close">Свернуть</span>
							<span class="icon-select"></span>
						</div>
					</div>
				</div>
			<? endif; ?>
		<? endif ?>
