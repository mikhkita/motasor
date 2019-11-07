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
							<label for="label-name">ФИО</label>
							<div class="input">
								<input id="label-name" type="text" name="name" placeholder="Иванов Иван Иванович">
								<div class="icon-clear"></div>
							</div>
						</div>
						<div class="b-select b-select-chosen">
							<label for="label-field">Сфера вашей экспертизы</label>
							<div class="select">
								<select id="label-field" class="select-experts" name="field">
									<option value="scientific-expert" data-block=".scientific-fields">Научный эксперт</option>
									<option value="tech-expert" data-block=".tech-fields">Технологический эксперт</option>
									<option value="business-expert" data-block=".business-fields">Бизнес эксперт</option>
								</select>
							</div>
						</div>

						<div class="scientific-fields form-toggle-blocks">
							<div class="b-select b-select-chosen">
								<label for="label-degree">Ученая степень, ученое звание</label>
								<div class="select">
									<select id="label-degree" name="degree">
										<option value="">Научный эксперт </option>
										<option value="">Научный эксперт 2</option>
										<option value="">Научный эксперт 3</option>
									</select>
								</div>
							</div>
							<div class="b-input">
								<label for="label-index">Индекс цитирования</label>
								<div class="input">
									<input id="label-index" type="text" name="" placeholder="7564">
									<div class="icon-clear"></div>
								</div>
							</div>
							<div class="b-input">
								<label for="label-experience-science">Опыт работы научно-исследовательской деятельности</label>
								<div class="input">
									<input id="label-experience-science" type="text" name="" placeholder="7 лет">
									<div class="icon-clear"></div>
								</div>
							</div>
							<!-- <div class="b-textarea">
								<label for="label-experience-science">Опыт работы научно-исследовательской деятельности</label>
								<div class="textarea">
									<textarea row="1" id="label-experience-science" name="" ></textarea>
								</div>
							</div> -->
						</div>
						<div class="tech-fields form-toggle-blocks hide">
							<div class="b-select b-select-chosen">
								<label for="label-experience">Стаж работы на управленческих должностях</label>
								<div class="select">
									<select id="label-experience" name="">
										<option value="">9 лет </option>
										<option value="">8 лет </option>
										<option value="">7 лет </option>
									</select>
								</div>
							</div>
							<div class="b-input">
								<label for="label-post">Уровень должности</label>
								<div class="input">
									<input id="label-post" type="text" name="" placeholder="Исполнительный директор">
									<div class="icon-clear"></div>
								</div>
							</div>
							<div class="b-input">
								<label for="label-academic-degree">Ученая степень</label>
								<div class="input">
									<input id="label-academic-degree" type="text" name="" placeholder="Кандидат наук">
									<div class="icon-clear"></div>
								</div>
							</div>
						</div>
						<div class="business-fields form-toggle-blocks hide">
							<div class="b-select b-select-chosen">
								<label for="label-experience-managerial">Стаж работы на управленческих должностях</label>
								<div class="select">
									<select id="label-experience-managerial" name="">
										<option value="">9 лет </option>
										<option value="">8 лет </option>
										<option value="">7 лет </option>
									</select>
								</div>
							</div>
							<div class="b-input">
								<label for="label-commercial">Опыт коммерциализации научно-технических разработок, запуска инвестиционных/инновационных проектов в качестве руководителя проекта</label>
								<div class="input">
									<input id="label-commercial" type="text" name="" placeholder="17 лет">
									<div class="icon-clear"></div>
								</div>
							</div>
							<div class="b-input">
								<label for="label-budget">Бюджет инвестиционных/инновационных проектов</label>
								<div class="input">
									<input id="label-budget" type="text" name="" class="divide" placeholder="27 000 000 000">
									<div class="icon-clear"></div>
								</div>
							</div>
							<div class="b-input">
								<label for="label-academic-degree-2">Ученая степень</label>
								<div class="input">
									<input id="label-academic-degree-2" type="text" name="" placeholder="Кандидат наук">
									<div class="icon-clear"></div>
								</div>
							</div>
						</div>

						<h3>Ваши контакты</h3>
						<div class="b-input">
							<label for="label-phone">Телефон</label>
							<div class="input">
								<input id="label-phone" type="text" name="phone" required placeholder="+ 7 (999) 999 99 99">
								<div class="icon-clear"></div>
							</div>
						</div>
						<div class="b-input">
							<label for="label-email">E-mail</label>
							<div class="input">
								<input id="label-email" type="text" name="email" required placeholder="email@email.ru">
								<div class="icon-clear"></div>
							</div>
						</div>
						<div class="b-checkbox">
							<input id="checkbox-agreement" type="checkbox" name="agreement" required>
							<label for="checkbox-agreement">
								<div class="b-checked icon-checked"></div>
								<p>Я принимаю условия <a href="#">пользовательского соглашения</a></p>
							</label>
						</div>
						<button class="b-btn b-btn-white-border ajax">
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
						<label for="label-name-2">ФИО</label>
						<div class="input">
							<input id="label-name-2" type="text" name="" placeholder="Иванов Иван Иванович">
							<div class="icon-clear"></div>
						</div>
					</div>

					<h3>Ваши контакты</h3>
					<div class="b-input">
						<label for="label-phone-2">Телефон</label>
						<div class="input">
							<input id="label-phone-2" type="text" name="phone" required placeholder="+ 7 (999) 999 99 99">
							<div class="icon-clear"></div>
						</div>
					</div>
					<div class="b-input">
						<label for="label-email-2">E-mail</label>
						<div class="input">
							<input id="label-email-2" type="text" name="email" required placeholder="email@email.ru">
							<div class="icon-clear"></div>
						</div>
					</div>
					<div class="b-checkbox">
						<input id="checkbox-agreement-2" type="checkbox" name="agreement" required>
						<label for="checkbox-agreement-2">
							<div class="b-checked icon-checked"></div>
							<p>Я принимаю условия <a href="#">пользовательского соглашения</a></p>
						</label>
					</div>
					<button class="b-btn b-btn-white-border ajax">
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
						<label for="label-name-3">ФИО</label>
						<div class="input">
							<input id="label-name-3" type="text" name="" placeholder="Иванов Иван Иванович">
							<div class="icon-clear"></div>
						</div>
					</div>
					<div class="b-select b-select-chosen">
						<label for="label-list">Выпадающий список</label>
						<div class="select">
							<select id="label-list" class="" name="">
								<option value="">Пункт 1</option>
								<option value="">Пункт 2</option>
								<option value="">Пункт 3</option>
								<option value="">Пункт 4</option>
							</select>
						</div>
					</div>
					<div class="b-checkbox-list">
						<p>Список с чекбоксами</p>
						<div class="b-checkbox">
							<input id="checkbox-1" type="checkbox" name="">
							<label for="checkbox-1">
								<div class="b-checked icon-checked"></div>
								<p>Работники инновационных служб</p>
							</label>
						</div>
						<div class="b-checkbox">
							<input id="checkbox-2" type="checkbox" name="">
							<label for="checkbox-2">
								<div class="b-checked icon-checked"></div>
								<p>Служб управления интеллектуальной собственностью</p>
							</label>
						</div>
						<div class="b-checkbox">
							<input id="checkbox-3" type="checkbox" name="">
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
									<a id="pickfiles" class="plup-button b-btn b-btn-white-border" href="javascript:;">
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
									<a class="plup-button b-btn b-btn-white-border pickfiles-more" href="javascript:;">
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
							<p>Я принимаю условия <a href="#">пользовательского соглашения</a></p>
						</label>
					</div>
					<button class="b-btn b-btn-white-border ajax">
						<span class="b-btn-content">Отправить</span>
						<div class="icon-arrow-right"></div>
						<div class="icon-arrow-right-bold"></div>
					</button>
				</div>
			</form>
		</div>
<?include 'footer.php';?>
		