	</div> <!-- b-content -->
	<div class="b-footer">
		<div class="b-footer-top clearfix">
			<div class="b-block">
				<a href="/" class="b-footer-logo"></a>
				<div class="b-footer-carry"></div>
				<ul class="b-footer-menu-mobile">
					<li><a href="#">О нас</a></li>
					<li><a href="#">Контент</a></li>
					<li><a href="#">РИД</a></li>
					<li><a href="#">Новости</a></li>
					<li><a href="#">Опросы</a></li>
					<li><a href="#">Контакты</a></li>
					<li><a href="#">Сообщества</a></li>
				</ul>
				<div class="b-footer-contacts">
					<div class="b-footer-contacts-item">
						<a href="mailto:innovation@rosatom.ru" class="email">innovation@rosatom.ru</a>
					</div>
					<div class="b-footer-contacts-item">
						<a href="tel:+74955323278" class="phone">+7 (495) 532-32-78</a>
					</div>
				</div>
			</div>
		</div>
		<div class="b-footer-menu">
			<div class="b-block clearfix">
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
		<div class="b-footer-search b-gray">
			<div class="b-block">
				<form action="search.php" method="GET" class="b-footer-search-form">
					<div class="b-input">
						<div class="input">
							<button class="icon-search"></button>
							<input type="text" name="q" class="input-search" placeholder="Поиск">
							<div class="icon-clear"></div>
						</div>
					</div>
				</form>
				<div class="b-footer-soc">
					<span class="b-soc-text">Мы в соцсетях:</span>
					<div class="b-soc">
						<a href="//vk.com" class="icon-vk" target="_blank">Вконтакте</a>
						<a href="//facebook.com" class="icon-facebook" target="_blank">Facebook</a>
					</div>
				</div>
			</div>
		</div>
		<div class="b-footer-bottom">
			<div class="b-block">
				© 2014-2019. Блок по управлению инновациями Госкорпорации «Росатом»
			</div>
		</div>
	</div>
	
	<div style="display:none;">

		<div class="b-popup b-popup-auth" id="b-popup-auth">
			<h2>Авторизация</h2>
			<p class="subtitle">Войдите с помошью социальных сетей</p>
			<div class="b-popup-auth-soc">
				<a href="//vk.com" class="auth-soc auth-soc-vk" target="_blank">
					<span class="icon-vk"></span>
					<span class="auth-soc-text">Вконтакте</span>
				</a>
				<a href="//facebook.com" class="auth-soc auth-soc-facebook" target="_blank">
					<span class="icon-facebook"></span>
					<span class="auth-soc-text">Facebook</span>
				</a>
			</div>
			<form action="send/auth.php" method="POST" class="b-form-auth">
				<div class="b-popup-auth-or"><span>или</span><div class="line"></div></div>
				<div class="b-popup-auth-wrong hide"></div>
				<div class="b-input">
					<label for="label-auth-login">Логин</label>
					<div class="input">
						<input id="label-auth-login" placeholder="Логин" type="text" name="login" required>
						<div class="icon-clear"></div>
					</div>
				</div>
				<div class="b-input">
					<label for="label-auth-password">Пароль</label>
					<div class="input">
						<input id="label-auth-password" placeholder="Пароль" type="password" name="password" required>
						<div class="icon-clear"></div>
					</div>
				</div>
				<div class="b-checkbox">
					<input id="checkbox-stay" type="checkbox" name="">
					<label for="checkbox-stay">
						<div class="b-checked icon-checked"></div>
						<p>Оставаться в системе</p>
					</label>
				</div>
				<div class="clearfix">
					<button class="b-btn b-btn-tr ajax">
						<span class="b-btn-content">Войти</span>
						<div class="icon-arrow-right"></div>
						<div class="icon-arrow-right-bold"></div>
					</button>
					<a href="#b-popup-forgot" class="forgot fancy">Забыли пароль?</a>
				</div>
				<p class="register">Нет аккаунта? <a href="#b-popup-register" class="fancy">Зарегистрируйтесь</a></p>
			</form>
		</div>

		<div class="b-popup b-popup-register" id="b-popup-register">
			<h2>Регистрация</h2>
			<form action="send/registration.php" method="POST" class="b-form-register">
				<div class="b-popup-auth-wrong hide"></div>
				<div class="b-input">
					<label for="label-reg-name">Имя</label>
					<div class="input">
						<input id="label-reg-name" type="text" name="name" placeholder="Ваше имя">
						<div class="icon-clear"></div>
					</div>
				</div>
				<div class="b-input">
					<label for="label-reg-surname">Фамилия</label>
					<div class="input">
						<input id="label-reg-surname" type="text" name="surname" placeholder="Ваша фамилия">
						<div class="icon-clear"></div>
					</div>
				</div>
				<div class="b-input">
					<label for="label-reg-login">Логин<span class="required">*</span></label>
					<div class="input">
						<input id="label-reg-login" type="text" name="login" required placeholder="Логин">
						<div class="icon-clear"></div>
					</div>
				</div>
				<div class="b-input">
					<label for="label-reg-password">Пароль<span class="required">*</span></label>
					<div class="input">
						<input id="label-reg-password" type="password" name="password" required placeholder="Пароль">
						<div class="icon-clear"></div>
					</div>
				</div>
				<div class="b-input">
					<label for="label-reg-password-conf">Подтверждение пароля<span class="required">*</span></label>
					<div class="input">
						<input id="label-reg-password-conf" type="password" name="password-confirmation" required placeholder="Пароль">
						<div class="icon-clear"></div>
					</div>
				</div>
				<div class="b-input">
					<label for="label-reg-email">E-mail<span class="required">*</span></label>
					<div class="input">
						<input id="label-reg-email" type="text" name="email" required placeholder="E-mail">
						<div class="icon-clear"></div>
					</div>
				</div>
				<div class="b-input captcha">
					<label for="label-reg-captcha">Код с картинки<span class="required">*</span></label>
					<div class="input">
						<input id="label-reg-captcha" type="text" name="captcha" required placeholder="Код">
						<div class="icon-clear"></div>
					</div>
					<img src="i/captcha.jpg">
				</div>

				<div class="form-after">
					<p><span class="required">*</span>Обязательные поля</p>
					<p>Пароль должен быть не менее 6 символов длиной.</p>
				</div>
				
				<div class="b-checkbox">
					<input id="checkbox-agree" type="checkbox" name="agree" required>
					<label for="checkbox-agree">
						<div class="b-checked icon-checked"></div>
						<p>Нажимая на кнопку отправки формы, Я принимаю <a href="#">«Пользовательское соглашение»</a> и <a href="#">«Правила рассмотрения жалоб»</a></p>
					</label>
				</div>
				<button class="b-btn b-btn-tr ajax">
					<span class="b-btn-content">Регистрация</span>
					<div class="icon-arrow-right"></div>
					<div class="icon-arrow-right-bold"></div>
				</button>
				<p class="register">Уже есть аккаунт? <a href="#b-popup-auth" class="fancy">Авторизируйтесь</a></p>
			</form>
		</div>

		<div class="b-popup b-popup-forgot" id="b-popup-forgot">
			<h2>Восстановление пароля</h2>
			<div class="subtitle">
				<p>Если вы забыли пароль, введите логин или E-Mail.</p>
				<p>Контрольная строка для смены пароля, а также ваши регистрационные данные, будут высланы вам по E-Mail.</p>
			</div>
			<form action="send/forgot.php" method="POST" class="b-form-forgot">
				<div class="b-popup-auth-wrong hide">Введите логин или E-Mail</div>
				<div class="b-input">
					<label for="label-forgot-login">Логин</label>
					<div class="input">
						<input id="label-forgot-login" type="text" name="login" placeholder="Логин">
						<div class="icon-clear"></div>
					</div>
				</div>
				<div class="b-popup-auth-or"><span>или</span><div class="line"></div></div>
				<div class="b-input">
					<label for="label-forgot-email">E-mail</label>
					<div class="input">
						<input id="label-forgot-email" type="text" name="email" placeholder="E-mail">
						<div class="icon-clear"></div>
					</div>
				</div>
				<div class="b-input captcha">
					<label for="label-forgot-captcha">Код с картинки</label>
					<div class="input">
						<input id="label-forgot-captcha" type="text" name="captcha" required placeholder="Код">
						<div class="icon-clear"></div>
					</div>
					<img src="i/captcha.jpg">
				</div>
				<button class="b-btn b-btn-tr ajax">
					<span class="b-btn-content">Выслать</span>
					<div class="icon-arrow-right"></div>
					<div class="icon-arrow-right-bold"></div>
				</button>
				<p class="register">Уже есть аккаунт? <a href="#b-popup-auth" class="fancy">Авторизируйтесь</a></p>
			</form>
		</div>

		<div class="b-thanks b-popup" id="b-text-popup-result">
			<h2>Регистрация</h2>
			<p class="b-thanks-result">Вы были успешно зарегистрированы.</p>
			<p class="b-thanks-msg">На указанный в форме e-mail было выслано письмо с информацией о подтверждении регистрации.</p>
		</div>

		<div class="b-thanks b-popup" id="b-text-popup-error">
			<h2>Регистрация</h2>
			<p class="b-thanks-result error">Произошла ошибка</p>
			<p class="b-thanks-msg">Пожалуйста, пройдите процесс регистрации заново.</p>
		</div>

		<a href="#b-text-popup-result" class="b-success-link fancy" style="display:none;"></a>
		<div class="b-thanks b-popup" id="b-popup-error">
			<h2>Ошибка отправки!</h2>
			<p>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</p>
		</div>

	</div>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="js/jquery.touch.min.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/plupload.full.min.js"></script>
	<script type="text/javascript" src="js/autosize.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/imask.min.js"></script>
	<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="js/swipe.js"></script>
	<script type="text/javascript" src="js/datepicker.min.js"></script>
	<script type="text/javascript" src="js/KitSend.min.js?<?=$version?>"></script>
	<script type="text/javascript" src="js/main.min.js?<?=$version?>"></script>

</body>
</html>