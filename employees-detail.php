<?

$params = array(
	"TITLE" => "Сотрудники",
	"BREADCRUMBS" => array(
		"Главная" => "index.php",
		"Пункт" => "index.php",
	),
	"BREADCRUMBS_TITLE" => 'О нас',
	"WITHOUT_HEADER" => false
);

$innerText = 'Лидерство в атомной энергетике во многом зависит от интеллектуального и технологического превосходства. Ежегодно Росатом наращивает объемы заказа на научно-исследовательские и опытно-конструкторские работы, увеличивает финансирование на эти цели, поэтому подход отраслевых заказчиков к формированию НИОКР должен соответствовать тенденциям времени и профессиональному уровню передовых международных практик. Чтобы увеличить эффективность заказа на НИОКР и повысить «прозрачность» формирования программ исследований и разработок Блок по управлению инновациями Госкорпорации «Росатом» реализует ряд мероприятий в области управления НИОКР.';

include 'header.php';

?>

	<div class="b-block b-block-inner">
		<div class="b-content-inner-wrap">
			<ul class="b-nav">
				<li><a href="#">Управление инновациями</a></li>
				<li><a href="#">Задать вопрос</a></li>
				<li class="active"><a href="#">Сотрудники</a></li>
				<li><a href="#">Фото- и видеоматериалы</a></li>
			</ul>
			<div class="b-content-inner">
				<div class="b-text b-inner-margin">
					<div class="b-employee">
						<div class="b-employee-img">
							<img src="i/employees-1.jpg">
						</div>
						<div class="b-employee-right">
							<div class="employee-top">
								<h1>Иванов Игорь Иванович</h1>
								<div class="post">Советник Блока по управлению инновациями  Госкорпорации «Росатом»</div>
								<div class="b-employee-mobile">
									
								</div>
							</div>
							<div class="employee-bottom">
								<h3>Контакты</h3>
								<div class="b-employee-contacts b-footer-contacts">
									<div class="b-footer-contacts-item">
										<a href="mailto:innovation@rosatom.ru" class="email">innovation@rosatom.ru</a>
									</div>
									<div class="b-footer-contacts-item">
										<a href="tel:+74955323278" class="phone">+7 (495) 532-32-78</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="b-employee-desktop">
						<div class="b-employee-text">
							<p>Уравнение времени мгновенно. По космогонической гипотезе Джеймса Джинса, сарос притягивает узел. Хотя хpонологи не увеpены, им кажется, что приливное трение выбирает астероидный дип-скай объект. Астероид, это удалось установить по характеру спектра, разрушаем. Аргумент перигелия, следуя пионерской работе Эдвина Хаббла, существенно колеблет нулевой меридиан. Декретное время, по определению, гасит Ганимед.</p>
						</div>
					</div>
					<form class="b-form b-form-white" action="" method="POST">
						<h3>Задайте вопрос</h3>
						<div class="b-form-content">
							<div class="b-input">
								<label for="label-name">ФИО<span class="required">*</span></label>
								<div class="input">
									<input id="label-name" type="text" name="name" required placeholder="ФИО">
									<div class="icon-clear"></div>
								</div>
							</div>
							<div class="b-input">
								<label for="label-email">E-mail<span class="required">*</span></label>
								<div class="input">
									<input id="label-email" type="text" name="email" required placeholder="Ваш email">
									<div class="icon-clear"></div>
								</div>
							</div>
							<div class="b-textarea">
								<label for="label-question">Ваш вопрос<span class="required">*</span></label>
								<div class="textarea">
									<textarea rows="10" id="label-question" name="" required placeholder="Вопрос"></textarea>
								</div>
							</div>
							<div class="b-checkbox">
								<input id="checkbox-agreement" type="checkbox" name="agreement" required>
								<label for="checkbox-agreement">
									<div class="b-checked icon-checked"></div>
									<p>Я принимаю <a href="#">условия пользовательского соглашения</a></p>
								</label>
							</div>
							<button class="b-btn b-btn-tr ajax">
								<span class="b-btn-content">Отправить</span>
								<div class="icon-arrow-right"></div>
								<div class="icon-arrow-right-bold"></div>
							</button>
						</div>
						<div class="b-success b-success-white">
							<div class="b-success-text">
								<div class="icon-checked"></div>
								<p>Ваше сообщение отправлено!</p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
<?include 'footer.php';?>
		