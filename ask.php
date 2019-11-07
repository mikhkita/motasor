<?

$params = array(
	"TITLE" => "Задать вопрос",
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
				<li class="active"><a href="#">Задать вопрос</a></li>
				<li><a href="#">Сотрудники</a></li>
				<li><a href="#">Фото- и видеоматериалы</a></li>
			</ul>
			<div class="b-content-inner">
				<div class="b-text b-inner-margin">
					<h1>Задайте вопрос</h1>
					<p>Росатом — высокотехнологичный лидер мировой ядерной энергетики. Для повышения конкурентоспособности Госкорпорация усиливает свой научно-технический потенциал. Ее дивизионы являются активными заказчиками на инновации. Новые достижения в науке и технике реализуются в перспективных отраслевых проектах в России и за рубежом, являются неотъемлемыми составляющими при выполнении государственных заказов</p>
				
					<form class="b-form b-question-form" action="send/question.php" method="POST">
						<h2>Задайте вопрос</h2>
						<div class="b-form-content">
							<div class="b-input">
								<label for="label-name">ФИО<span class="required">*</span></label>
								<div class="input">
									<input id="label-name" type="text" name="name" required placeholder="Иванов Иван Иванович">
									<div class="icon-clear"></div>
								</div>
							</div>
							<h3>Ваши контакты</h3>
							<div class="b-input">
								<label for="label-phone">Телефон<span class="required">*</span></label>
								<div class="input">
									<input id="label-phone" type="text" name="phone" required placeholder="+ 7 (999) 999 99 99">
									<div class="icon-clear"></div>
								</div>
							</div>
							<div class="b-input">
								<label for="label-email">E-mail<span class="required">*</span></label>
								<div class="input">
									<input id="label-email" type="text" name="email" required placeholder="email@email.ru">
									<div class="icon-clear"></div>
								</div>
							</div>
							<h3>Ваш вопрос</h3>
							<div class="b-textarea">
								<label for="label-question">Вопрос<span class="required">*</span></label>
								<div class="textarea">
									<textarea rows="10" id="label-question" name="" required placeholder="Ваш вопрос"></textarea>
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
					</form>
					<div class="b-success">
						<h2>Успешно!</h2>
						<div class="b-success-text">
							<div class="icon-checked"></div>
							<p>Ваше сообщение отправлено!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?include 'footer.php';?>
		