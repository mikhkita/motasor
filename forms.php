<?include 'header.php';?>
		<div class="b-block">
			<br>
			<br>
			<form class="b-form" action="" method="POST">
				<h2 class="b-title">Стать экспертом Росатома</h2>
				<div class="b-form-content">
					<div class="b-input">
						<p>ФИО</p>
						<div class="input">
							<input type="text" name="" placeholder="Иванов Иван Иванович">
							<div class="icon-clear"></div>
						</div>
					</div>
					<div class="b-select b-select-chosen">
						<p>Сфера вашей экспертизы</p>
						<div class="select">
							<select class="select-experts" name="">
								<option value="scientific-expert" data-block=".scientific-fields">Научный эксперт</option>
								<option value="tech-expert" data-block=".tech-fields">Технологический эксперт</option>
								<option value="business-expert" data-block=".business-fields">Бизнес эксперт</option>
							</select>
						</div>
					</div>

					<div class="scientific-fields form-toggle-blocks">
						<div class="b-select b-select-chosen">
							<p>Ученая степень, ученое звание</p>
							<div class="select">
								<select name="">
									<option value="">Научный эксперт </option>
									<option value="">Научный эксперт 2</option>
									<option value="">Научный эксперт 3</option>
								</select>
							</div>
						</div>
						<div class="b-input">
							<p>Индекс цитирования</p>
							<div class="input">
								<input type="text" name="">
								<div class="icon-clear"></div>
							</div>
						</div>
						<div class="b-input">
							<p>Опыт работы научно-исследовательской деятельности</p>
							<div class="input">
								<input type="text" name="">
								<div class="icon-clear"></div>
							</div>
						</div>
					</div>
					<div class="tech-fields form-toggle-blocks hide">
						<div class="b-select b-select-chosen">
							<p>Стаж работы на управленческих должностях</p>
							<div class="select">
								<select name="">
									<option value="">9 лет </option>
									<option value="">8 лет </option>
									<option value="">7 лет </option>
								</select>
							</div>
						</div>
						<div class="b-input">
							<p>Уровень должности</p>
							<div class="input">
								<input type="text" name="">
								<div class="icon-clear"></div>
							</div>
						</div>
						<div class="b-input">
							<p>Ученая степень</p>
							<div class="input">
								<input type="text" name="">
								<div class="icon-clear"></div>
							</div>
						</div>
					</div>
					<div class="business-fields form-toggle-blocks hide">
						<div class="b-select b-select-chosen">
							<p>Стаж работы на управленческих должностях</p>
							<div class="select">
								<select name="">
									<option value="">9 лет </option>
									<option value="">8 лет </option>
									<option value="">7 лет </option>
								</select>
							</div>
						</div>
						<div class="b-input">
							<p>Опыт коммерциализации научно-технических разработок, запуска инвестиционных/инновационных проектов в качестве руководителя проекта</p>
							<div class="input">
								<input type="text" name="">
								<div class="icon-clear"></div>
							</div>
						</div>
						<div class="b-input">
							<p>Бюджет инвестиционных/инновационных проектов</p>
							<div class="input">
								<input type="text" name="" class="divide">
								<div class="icon-clear"></div>
							</div>
						</div>
						<div class="b-input">
							<p>Ученая степень</p>
							<div class="input">
								<input type="text" name="">
								<div class="icon-clear"></div>
							</div>
						</div>
					</div>

					<h3>Ваши контакты</h3>
					<div class="b-input">
						<p>Телефон</p>
						<div class="input">
							<input type="text" name="phone" required>
							<div class="icon-clear"></div>
						</div>
					</div>
					<div class="b-input">
						<p>E-mail</p>
						<div class="input">
							<input type="text" name="email" required>
							<div class="icon-clear"></div>
						</div>
					</div>
					<div class="b-checkbox">
						<input id="checkbox-agreement-1" type="checkbox" name="agreement" required>
						<label for="checkbox-agreement-1">
							<div class="b-checked icon-checked"></div>
							<p>Я принимаю условия <a href="#">пользовательского соглашения</a></p>
						</label>
					</div>
					<a href="#" class="b-btn b-btn-white-border ajax">
						<span class="b-btn-content">Отправить</span>
						<div class="icon-arrow-right"></div>
						<div class="icon-arrow-right-bold"></div>
					</a>
				</div>
			</form>
			<br>
			<br>
			<form class="b-form" action="" method="POST">
				<h2 class="b-title">Регистрация на мероприятие</h2>
				<div class="b-form-content">
					<div class="b-input">
						<p>ФИО</p>
						<div class="input">
							<input type="text" name="" placeholder="Иванов Иван Иванович">
							<div class="icon-clear"></div>
						</div>
					</div>

					<h3>Ваши контакты</h3>
					<div class="b-input">
						<p>Телефон</p>
						<div class="input">
							<input type="text" name="phone" required>
							<div class="icon-clear"></div>
						</div>
					</div>
					<div class="b-input">
						<p>E-mail</p>
						<div class="input">
							<input type="text" name="email" required>
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
					<a href="#" class="b-btn b-btn-white-border ajax">
						<span class="b-btn-content">Отправить</span>
						<div class="icon-arrow-right"></div>
						<div class="icon-arrow-right-bold"></div>
					</a>
				</div>
			</form>
			<br>
			<br>
			<form class="b-form" action="" method="POST">
				<h2 class="b-title">Заголовок</h2>
				<div class="b-form-content">
					<div class="b-input">
						<p>ФИО</p>
						<div class="input">
							<input type="text" name="" placeholder="Иванов Иван Иванович">
							<div class="icon-clear"></div>
						</div>
					</div>
					<div class="b-select b-select-chosen">
						<p>Выпадающий список</p>
						<div class="select">
							<select class="" name="">
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
						<div class="b-file-field">
							<div class="icon-file"></div>
							<div class="plup-actions" id="plup-actions">
								<input id="plup-photo-file" type="hidden" name="FILE">
								<p>Перетащите файл<br>  или выберите его на своем компьютере</p>
								<a id="plup-button" class="plup-button b-btn b-btn-white-border" href="javascript:;">
									<div class="add-file">
										<span class="name">Выбрать файл</span>
									</div>
									<div class="success-file" style="display: none;">
										<span class="name">Файл загружен</span>
									</div>
									<div class="icon-arrow-right"></div>
									<div class="icon-arrow-right-bold"></div>
								</a>
								<small>Максимальный размер файла 10 Мб</small>
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
					<a href="#" class="b-btn b-btn-white-border ajax">
						<span class="b-btn-content">Отправить</span>
						<div class="icon-arrow-right"></div>
						<div class="icon-arrow-right-bold"></div>
					</a>
				</div>
			</form>
		</div>
<?include 'footer.php';?>
		