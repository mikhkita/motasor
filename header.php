<?

// $arPage = explode('/', $_SERVER['REQUEST_URI']);
// $isMain = ($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index.php");
$version = 5;
setcookie('isFirstTime', 'Y', time() + (86400 * 30), "/");

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
	<link rel="stylesheet" href="css/plugins.min.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css?<?=$version?>" type="text/css">

	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
	<a class="up b-go" href=".b-header" data-duration="200" data-offset="0"></a>
	
	<? if(!isset($_COOKIE['isFirstTime'])):?>
	<div class="b-cookies-block">
		<div class="b-cookies-text">Текст файлов куки Согласие на обработку персональных данных» – текст является ссылкой на одноимённую страницу. Ссылка на Портал независимой оценки качества условий оказания услуг медицинскими организациями. </div>
		<a href="#" class="b-btn close-cookie b-btn-tr with-arrow">Принять</a>
	</div>
	<? endif;?>

	<div class="b b-header">
		<div class="b-header-top clearfix">
			<div class="b-block">
				<a href="index.php" class="b-header-logo"></a>
				<div class="b-header-top-right">
					<div class="b-header-search">
						<a href="#" class="b-header-search-btn icon-search"></a>
						<form action="search.php" method="GET" class="b-header-search-form">
							<button class="icon-search hide"></button>
							<input type="text" name="q" placeholder="Поиск" class="b-header-search-input">
						</form>
					</div>
					<span class="b-soc-text">Мы в соцсетях:</span>
					<div class="b-soc">
						<a href="//vk.com" class="icon-vk" target="_blank">Вконтакте</a>
						<a href="//facebook.com" class="icon-facebook" target="_blank">Facebook</a>
					</div>
					<a href="#b-popup-auth" class="b-header-community b-header-community-mobile fancy">Присоединиться к cообществу</a>
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
			<div class="b-menu-mobile-window" id="b-menu-mobile-window">
				<div class="b-menu-mobile-list-cont">
					<ul class="b-menu-mobile-list">

					</ul> 
					<div class="b-menu-search">
						<form action="search.php" method="GET" class="b-menu-search-form">
							<button class="icon-search"></button>
							<input type="text" name="q" class="b-menu-search-input">
						</form>
					</div>
				</div>
				<div class="slide-cont-list">
					
				</div>
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
						<div class="b-section-menu">
							<div class="b-parent-item">
								<a href="#" class="main-item">О нас</a>
								<ul>
									<li><a href="#">Фото- и видеоматериалы</a></li>
								</ul>
							</div>
							<div class="b-parent-item">
								<a href="#" class="main-item">Контент</a>
								<ul>
									<li><a href="#">Научные достижения</a></li>
									<li>
										<a href="#">Нормативная документация</a>
										<ul>
											<li><a href="#">Программа инновационного развития</a></li>
										</ul>
									</li>
									<li><a href="#">Портал НТИ</a></li>
									<li><a href="#">Единый отраслевой тематический план</a></li>
								</ul>
							</div>
						</div>
						<div class="b-section-menu">
							<div class="b-parent-item">
								<a href="#" class="main-item">РИД</a>
								<ul>
									<li><a href="#">ИС УПРИД </a></li>
									<li><a href="#">Портфели</a></li>
								</ul>
							</div>
							<div class="b-parent-item">
								<a href="news.php" class="main-item">Новости</a>
							</div>
							<div class="b-parent-item">
								<a href="#" class="main-item">Опросы</a>
							</div>
							<div class="b-parent-item">
								<a href="#" class="main-item">Контакты</a>
								<ul>
									<li><a href="#">Задать вопрос</a>
									<li><a href="#">Портфели</a></li>
								</ul>
							</div>
						</div>
						<div class="b-section-menu two-col">
							<div class="b-parent-item">
								<a href="#" class="main-item">Сообщества</a>
								<ul>
									<li><a href="#">Инновационная вертикаль</a></li>
									<li>
										<a href="#">Мероприятия</a>
										<ul>
											<li><a href="#">Прорыв</a></li>
											<li><a href="#">УИР</a></li>
											<li><a href="#">Школа инновационного лидера </a></li>
										</ul>
									</li>
									<li>
										<a href="#">Конкурсы</a>
										<ul>
											<li><a href="#">Конкурс аванпроектов </a></li>
											<li><a href="#">Инновационный лидер</a></li>
											<li><a href="#">Премия молодым ученым</a></li>
										</ul>
									</li>
									<li><a href="#">Alumni</a></li>
									<li>
										<a href="#">Экспертиза </a>
										<ul>
											<li><a href="#">База экспертов</a></li>
											<li><a href="#">Цифровая платформа экспертизы </a></li>
											<li><a href="#">Стать экспертом Росатома</a></li>
										</ul>
									</li>
									<li><a href="#">Научно-технический совет</a></li>
									<li>
										<a href="#">Тематические группы </a>
										<ul>
											<li><a href="#">ЕОТП</a></li>
											<li><a href="#">Аванпроекты</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="b b-content">
		<? if (!isset($isMain)): ?>
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
