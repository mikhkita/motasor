<?

$params = array(
	"TITLE" => "Формы",
	"BREADCRUMBS" => array(),
	"BREADCRUMBS_TITLE" => '',
	"WITHOUT_HEADER" => true,
);

include 'header.php';?>
		<div class="b-block">
			<br>
			<br>
			<form class="b-form" action="" method="POST">
					<h2>Стать экспертом Росатома</h2>
					<div class="b-form-content">
						<div class="b-input">
							<label for="label-name">ФИО<span class="required">*</span></label>
							<div class="input">
								<input id="label-name" type="text" name="name" required placeholder="Иванов Иван Иванович">
								<div class="icon-clear"></div>
							</div>
						</div>
						<div class="b-select b-select-chosen">
							<label for="label-field">Сфера вашей экспертизы<span class="required">*</span></label>
							<div class="select">
								<select id="label-field" class="select-experts" required name="field">
									<option value="scientific-expert" data-block=".scientific-fields">Научный эксперт</option>
									<option value="tech-expert" data-block=".tech-fields">Технологический эксперт</option>
									<option value="business-expert" data-block=".business-fields">Бизнес эксперт</option>
								</select>
							</div>
						</div>

						<div class="scientific-fields form-toggle-blocks">
							<div class="b-select b-select-chosen">
								<label for="label-degree">Ученая степень, ученое звание<span class="required">*</span></label>
								<div class="select">
									<select id="label-degree" name="degree">
										<option value="">Научный эксперт </option>
										<option value="">Научный эксперт 2</option>
										<option value="">Научный эксперт 3</option>
									</select>
								</div>
							</div>
							<div class="b-input">
								<label for="label-index">Индекс цитирования<span class="required">*</span></label>
								<div class="input">
									<input id="label-index" type="text" name="index" required placeholder="7564">
									<div class="icon-clear"></div>
								</div>
							</div>
							<div class="b-textarea">
								<label for="label-experience-science">Опыт работы научно-исследовательской деятельности<span class="required">*</span></label>
								<div class="textarea">
									<textarea rows="1" id="label-experience-science" name="experience-science" required placeholder="7 лет"></textarea>
								</div>
							</div>
						</div>
						<div class="tech-fields form-toggle-blocks hide">
							<div class="b-select b-select-chosen">
								<label for="label-experience">Стаж работы на управленческих должностях<span class="required">*</span></label>
								<div class="select">
									<select id="label-experience" required name="experience">
										<option value="">9 лет </option>
										<option value="">8 лет </option>
										<option value="">7 лет </option>
									</select>
								</div>
							</div>
							<div class="b-input">
								<label for="label-post">Уровень должности<span class="required">*</span></label>
								<div class="input">
									<input id="label-post" type="text" name="post" required placeholder="Исполнительный директор">
									<div class="icon-clear"></div>
								</div>
							</div>
							<div class="b-input">
								<label for="label-academic-degree">Ученая степень<span class="required">*</span></label>
								<div class="input">
									<input id="label-academic-degree" type="text" name="academic-degree" required placeholder="Кандидат наук">
									<div class="icon-clear"></div>
								</div>
							</div>
						</div>
						<div class="business-fields form-toggle-blocks hide">
							<div class="b-select b-select-chosen">
								<label for="label-experience-managerial">Стаж работы на управленческих должностях<span class="required">*</span></label>
								<div class="select">
									<select id="label-experience-managerial" name="experience-managerial" required>
										<option value="9 лет">9 лет </option>
										<option value="8 лет">8 лет </option>
										<option value="7 лет">7 лет </option>
									</select>
								</div>
							</div>
							<div class="b-textarea">
								<label for="label-commercial">Опыт коммерциализации научно-технических разработок, запуска инвестиционных/инновационных проектов в качестве руководителя проекта<span class="required">*</span></label>
								<div class="textarea">
									<textarea rows="1" id="label-commercial" name="commercial" required placeholder="17 лет"></textarea>
								</div>
							</div>
							<div class="b-input">
								<label for="label-budget">Бюджет инвестиционных/инновационных проектов<span class="required">*</span></label>
								<div class="input">
									<input id="label-budget" type="text" name="budget" class="divide" required placeholder="27 000 000 000">
									<div class="icon-clear"></div>
								</div>
							</div>
							<div class="b-input">
								<label for="label-academic-degree-2">Ученая степень<span class="required">*</span></label>
								<div class="input">
									<input id="label-academic-degree-2" type="text" name="academic-degree-2" required placeholder="Кандидат наук">
									<div class="icon-clear"></div>
								</div>
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
			<br>
			<br>
			<form class="b-form" action="" method="POST">
				<h2>Регистрация на мероприятие</h2>
				<div class="b-form-content">
					<div class="b-input">
						<label for="label-name-2">ФИО<span class="required">*</span></label>
						<div class="input">
							<input id="label-name-2" type="text" name="name" required placeholder="Иванов Иван Иванович">
							<div class="icon-clear"></div>
						</div>
					</div>

					<h3>Ваши контакты</h3>
					<div class="b-input">
						<label for="label-phone-2">Телефон<span class="required">*</span></label>
						<div class="input">
							<input id="label-phone-2" type="text" name="phone" required placeholder="+ 7 (999) 999 99 99">
							<div class="icon-clear"></div>
						</div>
					</div>
					<div class="b-input">
						<label for="label-email-2">E-mail<span class="required">*</span></label>
						<div class="input">
							<input id="label-email-2" type="text" name="email" required placeholder="email@email.ru">
							<div class="icon-clear"></div>
						</div>
					</div>
					<div class="b-checkbox">
						<input id="checkbox-agreement-2" type="checkbox" name="agreement" required>
						<label for="checkbox-agreement-2">
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
			<br>
			<br>
			<form class="b-form" action="" method="POST" data-file-action="addFile.php">
				<h2>Заголовок</h2>
				<div class="b-form-content">
					<div class="b-input">
						<label for="label-name-3">ФИО<span class="required">*</span></label>
						<div class="input">
							<input id="label-name-3" type="text" name="name" required placeholder="Иванов Иван Иванович">
							<div class="icon-clear"></div>
						</div>
					</div>
					<div class="b-select b-select-chosen">
						<label for="label-list">Выпадающий список<span class="required">*</span></label>
						<div class="select">
							<select id="label-list" class="" name="list" required>
								<option value="p1">Пункт 1</option>
								<option value="p2">Пункт 2</option>
								<option value="p3">Пункт 3</option>
								<option value="p4">Пункт 4</option>
							</select>
						</div>
					</div>
					<div class="b-checkbox-list">
						<p>Список с чекбоксами</p>
						<div class="b-checkbox">
							<input id="checkbox-1" type="checkbox" name="checkbox-1">
							<label for="checkbox-1">
								<div class="b-checked icon-checked"></div>
								<p>Работники инновационных служб</p>
							</label>
						</div>
						<div class="b-checkbox">
							<input id="checkbox-2" type="checkbox" name="checkbox-2">
							<label for="checkbox-2">
								<div class="b-checked icon-checked"></div>
								<p>Служб управления интеллектуальной собственностью</p>
							</label>
						</div>
						<div class="b-checkbox">
							<input id="checkbox-3" type="checkbox" name="checkbox-3">
							<label for="checkbox-3">
								<div class="b-checked icon-checked"></div>
								<p>Работники спасательных служб</p>
							</label>
						</div>
					</div>
					<div class="b-file">
						<p>Загрузите файл</p>
						<div class="b-file-field" id="plup-actions">
							<div class="icon-file"></div>
							<div class="plup-actions">
								<div class="plup-add">
									<p>Перетащите файл<br>  или выберите его на своем компьютере</p>
									<a id="pickfiles" class="plup-button b-btn b-btn-tr" href="javascript:;">
										<div class="add-file">
											<span class="name">Выбрать файл</span>
										</div>
										<div class="icon-arrow-right"></div>
										<div class="icon-arrow-right-bold"></div>
									</a>
									<small>Максимальный размер файла 10 Мб</small>
								</div>
								<div class="plup-loading hide">
									<div class="b-plup-preloader"><div></div><div></div><div></div><div></div></div>
									<div class="b-plup-complete"></div>
									<div class="b-plup-loading-cont">
										<div class="b-plup-loading-text"><span class="b-load-text">Загружается</span> <span class="b-plup-count"></span>:</div>
										<div id="b-plup-files-list" class="b-plup-files-list"></div>
									</div>
									<a class="plup-button b-btn b-btn-tr pickfiles-more" href="#">
										<div class="add-file">
											<span class="name">Загрузить ещё</span>
										</div>
										<div class="icon-arrow-right"></div>
										<div class="icon-arrow-right-bold"></div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="b-checkbox">
						<input id="checkbox-agreement-3" type="checkbox" name="agreement" required>
						<label for="checkbox-agreement-3">
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
			<br>
			<br>
			<form class="b-form b-accordeon-form" action="" method="POST">
				<h2>Задайте вопрос</h2>
				<a href="#" class="b-accordeon-head">Задать вопрос<div class="icon-select"></div></a>
				<div class="b-accordeon-body">
					<div class="b-form-content">
						<div class="b-input">
							<label for="label-name-4">ФИО<span class="required">*</span></label>
							<div class="input">
								<input id="label-name-4" type="text" name="name" required placeholder="Иванов Иван Иванович">
								<div class="icon-clear"></div>
							</div>
						</div>

						<h3>Ваши контакты</h3>
						<div class="b-input">
							<label for="label-phone-4">Телефон<span class="required">*</span></label>
							<div class="input">
								<input id="label-phone-4" type="text" name="phone" required placeholder="+ 7 (999) 999 99 99">
								<div class="icon-clear"></div>
							</div>
						</div>
						<div class="b-input">
							<label for="label-email-4">E-mail<span class="required">*</span></label>
							<div class="input">
								<input id="label-email-4" type="text" name="email" required placeholder="email@email.ru">
								<div class="icon-clear"></div>
							</div>
						</div>

						<h3>Ваш вопрос</h3>
						<div class="b-textarea">
							<label for="label-question">Вопрос<span class="required">*</span></label>
							<div class="textarea">
								<textarea rows="10" id="label-question" name="question" required placeholder="Ваш вопрос"></textarea>
							</div>
						</div>
						<div class="b-checkbox">
							<input id="checkbox-agreement-4" type="checkbox" name="agreement" required>
							<label for="checkbox-agreement-4">
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
				</div>
			</form>
		</div>
<?include 'footer.php';?>
		