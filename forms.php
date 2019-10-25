<?include 'header.php';?>
		<div class="b-block">
			<br>
			<br>
			<form class="b-form" action="" method="POST">
				<h2 class="b-title">Стать экспертом Росатома</h2>
				<div class="b-input">
					<p>ФИО</p>
					<div class="input">
						<input type="text" name="" placeholder="Иванов Иван Иванович">
						<div class="icon-clear"></div>
					</div>
				</div>
				<div class="b-select">
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
					<div class="b-select">
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
					<div class="b-select">
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
					<div class="b-select">
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
						<input type="text" name="email">
						<div class="icon-clear"></div>
					</div>
				</div>
				<div class="b-checkbox">
					<input id="checkbox-agreement" type="checkbox" name="agreement" required>
					<label for="checkbox-agreement">
						<div class="b-checked icon-checked"></div>
						<p>Я принимаю условия пользовательского соглашения</p>
					</label>
				</div>
				<a href="#" class="b-btn b-btn-white-border ajax">
					<span class="b-btn-content">Отправить</span>
					<div class="icon-arrow-right"></div>
					<div class="icon-arrow-right-bold"></div>
				</a>
			</form>
		</div>
<?include 'footer.php';?>
		