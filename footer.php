		<div class="b-footer">
			<div class="b-footer-top clearfix">
				<div class="b-block">
					<a href="/" class="b-footer-logo"></a>
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
						<a href="mailto:innovation@rosatom.ru" class="email">innovation@rosatom.ru</a><br>
						<a href="tel:+74955323278" class="phone">+7 (495) 532-32-78</a>
					</div>
				</div>
			</div>
			<div class="b-footer-menu">
				<div class="b-block clearfix">
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
								<li><a href="#" class="bold">Новости</a></li>
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
			<div class="b-footer-search b-gray">
				<div class="b-block">
					<div class="b-input">
						<div class="input">
							<div class="icon-search"></div>
							<input type="text" name="">
							<div class="icon-clear"></div>
						</div>
					</div>
					<span class="b-soc-text">Мы в соцсетях:</span>
					<div class="b-soc">
						<a href="//vk.com" class="icon-vk" target="_blank">Вконтакте</a>
						<a href="//facebook.com" class="icon-facebook" target="_blank">Facebook</a>
					</div>
				</div>
			</div>
			<div class="b-footer-bottom">
				<div class="b-block">
					© 2014-2019. Блок по управлению инновациями Госкорпорации «Росатом»
				</div>
			</div>
		</div>
	</div> <!-- b-content -->
	
	<div style="display:none;">
		<a href="#b-popup-error" class="b-error-link fancy" style="display:none;"></a>
		<div class="b-popup" id="b-popup-1">
			<h3>Оставьте заявку</h3>
			<h4>и наши специалисты<br>свяжутся с Вами в ближайшее время</h4>
			<form action="kitsend.php" data-goal="CALLBACK" method="POST" id="b-form-1">
				<div class="b-popup-form">
					<label for="name">Введите Ваше имя</label>
					<input type="text" id="name" name="name" required/>
					<label for="tel">Введите Ваш номер телефона</label>
					<input type="text" id="tel" name="phone" required/>
					<label for="tel">Введите Ваш E-mail</label>
					<input type="text" id="tel" name="email" required/>
					<input type="hidden" name="subject" value="Заказ"/>
					<input type="submit" style="display:none;">
					<a href="#" class="b-btn b-blue-btn ajax">Заказать</a>
					<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
				</div>
			</form>
		</div>
		<div class="b-thanks b-popup" id="b-popup-success">
			<h3>Спасибо!</h3>
			<h4>Ваша заявка успешно отправлена.<br/>Наш менеджер свяжется с Вами в течение часа.</h4>
			<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
		</div>
		<div class="b-thanks b-popup" id="b-popup-error">
			<h3>Ошибка отправки!</h3>
			<h4>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</h4>
			<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false&key=AIzaSyD6Sy5r7sWQAelSn-4mu2JtVptFkEQ03YI"></script>
	<script type="text/javascript" src="js/jquery.touch.min.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/slick.js"></script>
	<script type="text/javascript" src="js/mask.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>