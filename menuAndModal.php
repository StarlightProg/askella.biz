		<div id="contactUs" class="zatemnenie">
			<a class="bgPopup" href="#header"></a>
			<div class="window">
				<a href="#header"><img src="img/main/closeWindow.svg" class="imgClose"></a>
				<p class="window__title">Заполните форму</p>
				<p class="window__text">Наши специалисты свяжутся с Вами  по телефону в течение 15-ти минут</p>
				<form enctype="multipart/form-data" method="POST" name="contactModalMod" action="php/Modal.php">
					<input type="hidden" name="modal" value="contactModal" />
					<input type="text" id="uname" name="name" class="text__input" placeholder="Ваше имя">
					<input type="tel" id="utel__head" name="telephone" class="text__input" placeholder="Номер телефона" required>
					<div class="flex__row window__radio">
						<div class="flex__row">
							<input type="radio" id="organisation" name="person__type" value="Организация" checked>
							<label for="organisation">Организация</label>
							<!-- <p class="radio__text">Организация</p> -->
						</div>
						<div class="flex__row second__radio">
							<input type="radio" id="private__person" name="person__type" value="Частное лицо">
							<label for="private__person">Частное лицо</label>
							<!-- <p class="radio__text">Частное лицо</p> -->
						</div>
					</div>
					<!-- <div class="flex__row window__radio">
						<div class="flex__row">
							<input type="radio" id="organisation" name="person__type" value="Организация" checked>
							<label for="organisation">Организация</label>
						</div>
						<div class="flex__row second__radio">
							<input type="radio" id="private__person" name="person__type" value="Частное лицо">
							<label for="private__person">Частное лицо</label>
						</div>
					</div> -->
					<textarea id="umessage" name="message" class="message__input" placeholder="Сообщение"></textarea>
					<div class="flex__row file__window">
						<div class="input__wrapper">
						   <input type="file" id="file__input" name="file[]" class="file__input" multiple>
						   <label for="file__input" class="label__file__input">
						   	  <div class="label__flex">
						      	<img src="img/main/plus.svg">
						      	<span class="input__file-button-text">Прикрепить документ</span>
						      </div>
						   </label>
						</div>
						<p class="file__text">Файлы не больше 8МБ</p>
					</div>
					<div class="flex__row submit__window">
						<div class="input__wrapper">
						   <input  type="submit" id="submit__input__with__tel__head" name="submit" class="submit__input">
						   <label onclick="submitHead()"  for="submit__input__with__tel" class="label__file__submit">
						      <span class="submit__file-button-text">ОСТАВИТЬ ЗАЯВКУ</span>
						   </label>
						</div>
						
						<p class="privacyData">Нажимая на кнопку, вы соглашаетесь <a href="confidentPolicy"><span style="color: #2573CF;">с политикой обработки персональных данных.</span></a></p>
					</div>
				</form>
  			</div>
		</div>

		<div id="suggestProject" class="zatemnenie">
			<a class="bgPopup" href="#header"></a>
			<div class="window">
				<a href="#header"><img src="img/main/closeWindow.svg" class="imgClose"></a>
				<p class="window__title">Заполните форму</p>
				<p class="window__text">Наши специалисты свяжутся с Вами в течение 15-ти минут</p>
				<form enctype="multipart/form-data" method="POST" name="suggestModalMod" action="php/Modal.php">
					<input type="hidden" name="modal" value="suggestModal" />
					<div class="grid__row">
						<input type="tel" id="utel__sugg" name="telephone" class="text__input" placeholder="Телефон" required>
						<input type="email" id="uname" name="email" class="text__input" placeholder="Email">
					</div>
					<input type="text" id="uname" name="name" class="text__input" placeholder="ФИО">
					<div class="flex__row window__radio">
						<div class="flex__row">
							<input type="radio" id="organisation2" name="person__type" value="Организация" checked>
							<label for="organisation2">Организация</label>
						</div>
						<div class="flex__row second__radio">
							<input type="radio" id="private__person2" name="person__type" value="Частное лицо">
							<label for="private__person2">Частное лицо</label>
						</div>
					</div>
					<textarea id="umessage" name="message" class="message__input" placeholder="Сообщение"></textarea>
					<div class="flex__row file__window">
						<div class="input__wrapper">
						   <input type="file" id="file__input" name="file[]" class="file__input" multiple>
						   <label for="file__input" class="label__file__input">
						   	  <div class="label__flex">
						      	<img src="img/main/plus.svg">
						      	<span class="input__file-button-text">Прикрепить документ</span>
						      </div>
						   </label>
						</div>
						<p class="file__text">Файлы не больше 8МБ</p>
					</div>
					<div class="flex__row submit__window">
							<div class="input__wrapper">
							   <input  type="submit" id="submit__input__with__tel__sugg" name="submit" class="submit__input">
							   <label onclick="submitSugg()" for="submit__input__with__tel" id="submit__label__with__tel__sugg" class="label__file__submit">
							      <span class="submit__file-button-text">ОСТАВИТЬ ЗАЯВКУ</span>
							   </label>
							</div>
						<p class="privacyData">Нажимая на кнопку, вы соглашаетесь <a href="confidentPolicy"><span style="color: #2573CF;">с политикой обработки персональных данных.</span></a></p>
					</div>
				</form>
  			</div>
		</div>

		<div id="hotline" class="zatemnenie">
			<a class="bgPopup" href="#header"></a>
			<div class="window">
				<a href="#header"><img src="img/main/closeWindow.svg" class="imgClose"></a>
				<p class="window__title">Горячая линия</p>
				<p class="window__text">Это канал приема обращений о неисполнении или ненадлежащем исполнении сотрудниками ЕПК «Аскелла» или его дочерних и зависимых компаний своих обязанностей, уставов, других внутренних документов, требований законодательства и т. п. <br><br> Вы можете сообщить о возможных злоупотреблениях, мошеннических, коррупционных действиях, упущениях и недостатках анонимно, наши специалисты ответят Вам в течение 15-ти минут:</p>
				<div class="div__text__messageSite"><p class="text__messageSite">Офформить сообщение на сайте</p></div>
				<form enctype="multipart/form-data" method="POST" name="hotlineMod" action="php/hotlineModal.php">
					<textarea id="umessage" name="message" class="message__input" placeholder="Сообщение"></textarea>
					<div class="flex__row file__window">
						<div class="input__wrapper">
							<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
						   <input type="file" id="file__input" name="file__file[]" class="file__input" multiple>
						   <label for="file__input" class="label__file__input">
						   	  <div class="label__flex">
						      	<img src="img/main/plus.svg">
						      	<span class="input__file-button-text">Прикрепить документ</span>
						      </div>
						   </label>
						</div>
						<p class="file__text">Файлы не больше 8МБ</p>
					</div>
					<div class="flex__row submit__window">
						<a href="#thanks">
							
							<div class="input__wrapper">
							   <input type="submit" id="submit__input" name="submit" class="submit__input">
							   <label for="submit__input" class="label__file__submit">
							      <span class="submit__file-button-text">ОТПРАВИТЬ</span>
							   </label>
							</div>
						</a>
						<p class="privacyData">Нажимая на кнопку, вы соглашаетесь <a href="confidentPolicy"><span style="color: #2573CF;">с политикой обработки персональных данных.</span></a></p>
					</div>
					<p style="margin-top: 55px">Ваши сообщения в конфиденциальном порядке будут фиксироваться уполномоченными сотрудниками ЕПК  «Аскелла» для последующего анализа и проверки.
						<br><br>
					С более подробной информацией о целях и возможностях «Единой горячей линии» вы можете ознакомиться в  Положении «Программа оповещения о недостатках «Единая горячая линия» ЕПК Аскелла.
					</p>

				</form>
  			</div>
  		</div>

  		<div id="callcenter" class="zatemnenie">
			<a class="bgPopup" href="#header"></a>
			<div class="window">
				<a href="#header"><img src="img/main/closeWindow.svg" class="imgClose"></a>
				<p class="window__title">Справочная служба</p>
				<p class="window__text">Это канал приема обращений о уточнение любой информации о ЕПК АСКЕЛЛА  и работе компании,  дочерних и зависимых компаний обязанностей, уставов, других внутренних документов, требований законодательства и т. п.
<br><br>
Оставьте сообщение, наши специалисты свяжутся с Вами в течение дня.</p>
<div class="div__text__messageSite"><p class="text__messageSite">Офформить сообщение на сайте</p></div>
				<form enctype="multipart/form-data" method="POST" name="hotlineMod" action="php/hotlineModal.php">
					<textarea id="umessage" name="message" class="message__input" placeholder="Сообщение"></textarea>
					<div class="flex__row file__window">
						<div class="input__wrapper">
							<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
						   <input type="file" id="file__input" name="file__file[]" class="file__input" multiple>
						   <label for="file__input" class="label__file__input">
						   	  <div class="label__flex">
						      	<img src="img/main/plus.svg">
						      	<span class="input__file-button-text">Прикрепить документ</span>
						      </div>
						   </label>
						</div>
						<p class="file__text">Файлы не больше 8МБ</p>
					</div>
					<div class="flex__row submit__window">
						<a href="#thanks">
							
							<div class="input__wrapper">
							   <input type="submit" id="submit__input" name="submit" class="submit__input">
							   <label for="submit__input" class="label__file__submit">
							      <span class="submit__file-button-text">ОТПРАВИТЬ</span>
							   </label>
							</div>
						</a>
						<p class="privacyData">Нажимая на кнопку, вы соглашаетесь <a href="confidentPolicy"><span style="color: #2573CF;">с политикой обработки персональных данных.</span></a></p>
					</div>
					<p style="margin-top: 25px">Ваши сообщения в конфиденциальном порядке будут фиксироваться уполномоченными сотрудниками ЕПК  «Аскелла» для последующего анализа и проверки.
						<br><br>
					С более подробной информацией о целях и возможностях «Единой горячей линии» вы можете ознакомиться в  Положении «Программа оповещения о недостатках «Единая горячая линия» ЕПК Аскелла.
					</p>

				</form>
  			</div>
  		</div>

  		<div id="siteerror" class="zatemnenie">
			<a class="bgPopup" href="#header"></a>
			<div class="window">
				<a href="#header"><img src="img/main/closeWindow.svg" class="imgClose"></a>
				<p class="window__title">Сообщение о ошибке на сайте</p>
				<p class="window__text">Опишите ошибку, которые Вы заметели, укажите рассположение ошибки на сайте</p>
<div class="div__text__messageSite"><p class="text__messageSite">Офформить сообщение на сайте</p></div>
				<form enctype="multipart/form-data" method="POST" name="hotlineMod" action="php/hotlineModal.php">
					<textarea id="umessage" name="message" class="message__input" placeholder="Сообщение"></textarea>
					<div class="flex__row file__window">
						<div class="input__wrapper">
							<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
						   <input type="file" id="file__input" name="file__file[]" class="file__input" multiple>
						   <label for="file__input" class="label__file__input">
						   	  <div class="label__flex">
						      	<img src="img/main/plus.svg">
						      	<span class="input__file-button-text">Прикрепить документ</span>
						      </div>
						   </label>
						</div>
						<p class="file__text">Файлы не больше 8МБ</p>
					</div>
					<div class="flex__row submit__window">
						<a href="#thanks">
							
							<div class="input__wrapper">
							   <input type="submit" id="submit__input" name="submit" class="submit__input">
							   <label for="submit__input" class="label__file__submit">
							      <span class="submit__file-button-text">ОТПРАВИТЬ</span>
							   </label>
							</div>
						</a>
						<p class="privacyData">Нажимая на кнопку, вы соглашаетесь <a href="confidentPolicy"><span style="color: #2573CF;">с политикой обработки персональных данных.</span></a></p>
					</div>
					<p style="margin-top: 55px">Ваши сообщения в конфиденциальном порядке будут фиксироваться уполномоченными сотрудниками ЕПК  «Аскелла» для последующего анализа и проверки.
						<br><br>
					С более подробной информацией о целях и возможностях «Единой горячей линии» вы можете ознакомиться в  Положении «Программа оповещения о недостатках «Единая горячая линия» ЕПК Аскелла.
					</p>

				</form>
  			</div>
  		</div>

  		<div id="companies__structures" class="zatemnenie">
			<a class="bgPopup" href="#header"></a>
			<div class="flex__column">
			<div class="window">
				<a href="#header"><img src="img/main/closeWindow.svg" class="imgClose"></a>
				<img class="companyStructures" src="img/main/companyCtructures.png">
  			</div>
  			<div class="zaglushka"></div>
  			</div>
  		</div>

  		<div id="menu" class="menu">
  			<div id="header" class="headerr">
					<div class='container'>
						<div class="flex__row">
								<img class="menu__logo" src="img/Logo.svg">
								<p class="header__p"><a class="a__hover" href="/">О ЕПК Аскелла</a></p>
								<p class="header__p"><a class="a__hover" href="companies">Компании</a></p>
								<p class="header__p"><a class="a__hover" href="/">Устойчивое развитие</a></p>
								<p class="header__p"><a class="a__hover modalOpener" href="#hotline">Горячая линия</a></p>
								<div class="header__text3"><p class="header__p2"><a class="a__hover" href="#contactUs">СВЯЗАТЬСЯ С НАМИ</a></p></div>
								<div class="header__last">
									<p class="lang__p"><a data-google-lang="en"  class="a__hover"  style="cursor: pointer;">En</a></p>
									<a class="modalClose" href="#header"><img src="img/main/cross.svg" class="header__foot"></a>
								</div>
						</div>
					</div>
			</div>
  			<div class="div__menu">
	  			<div class='container'>
				  <div class="footerMain">
					<div class="flex__row">
						<div class="flex__column">
							<p class="footer__title"><a class="a__hover" href="EpkAskella">ЕПК АСКЕЛЛА</a></a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#fifth__block">Корпративное управление</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#fourth__block">Стратегия ЕПК АСКЕЛЛА</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#third__block">Миссия ЕПК АСКЕЛЛА</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#second__block">История успеха</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#sixth__block">Карьера</a></p>
							<!-- <p class="footer__text__last__copyright">© 2003 – 2024 ЕПК «АСКЕЛЛА»</p> -->
						</div>
						<div class="flex__column">
							<p class="footer__title"><a class="a__hover" href="companies">Компании</a></p>
							<div class="flex__row">
								<div class="flex__column">
									<p class="footer__text"><a class="a__hover" href="comps/askellaHolding">ООО АСКЕЛЛА ХОЛДИНГ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askLogistics">ТОО ASKELLA LOGISTICS</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/mirSumok">ТОО ТПК МИР СУМОК</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askGlobalPort">ASK GLOBAL PORT LTD</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/eurasia">ТОО ЕВРАЗИЯ САХАР</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/">ASKELLA INVEST LTD</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askellaAgro">ТОО АСКЕЛЛА АГРО</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/shubarCoal">ТОО ШУБАР УГОЛЬ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/NurkazProm">ТОО НУРКАЗПРОМ</a></p>
								</div>
								<div class="flex__column__second">
									<p class="footer__text"><a class="a__hover" href="comps/severprom">ООО СЕВЕРПРОМ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/asib">ТОО ASIB GROUP</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/pkMir">ТОО ПК МИР</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/ask">ТОО АСК</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/ack">ТОО АСК</a></p>
									<!-- <p class="footer__text"><a class="a__hover" href="comps/askPteLtd">ASKELLA PTE LTD</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askGlobalPort">ASK GLOBAL</a></p> -->
									<!-- <p class="footer__text"><a class="a__hover" href="comps/gm">ООО GM</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/npkMir">НПК МИР</a></p> -->
								</div>
							</div>
						</div>
						<div class="flex__column">
							<p class="footer__title"><a class="a__hover" href="improve">Устойчивое развитие</a></p>
							<p class="footer__text"><a class="a__hover" href="improve#second__block">Ответственное инвестирование</a></p>
							<p class="footer__text"><a class="a__hover" href="improve">Компании партнёров</a></p>

							<p class="footer__title"><a class="a__hover" href="improve" style="margin-top: 25px;">Дополнительные ссылки</a></p>
							<p class="footer__text"><a class="a__hover" href="improve">Струкутра компаний</a></p>
							<p class="footer__text"><a class="a__hover" href="improve">Команда</a></p>
							<p class="footer__text" style="visibility: hidden;">.</p>
							<!-- <p class="footer__text__last"><a class="a__hover" href="confidentPolicy">Политика обработки персональных данных</a></p> -->

						</div>
						<div class="flex__column">
							<p class="footer__title"><a class="a__hover" href="#callcenter">Справочная служба</a></p>
							<p class="footer__text"><a class="a__hover" href="/">Оставить заявку</a></p>
							<p class="footer__hotline"><a class="a__hover" href="#hotline">Горячая линия</a></p>
<!-- 							<p class="footer__text__last__last"><a class="a__hover" href="/">Сообщить об ошибке на сайте</a></p> -->
						</div>
					</div>
					<div class="flex__row" style="justify-content: space-between; margin-top: 40px; margin-bottom: 50px;">
						<p style="align-self: flex-start;     opacity: 0.5;">© 2003 – 2024 ЕПК «АСКЕЛЛА»</p>
						<p style="align-self: flex-end;"><a class="a__hover" href="confidentPolicy">Политика обработки персональных данных</a></p>
						<p style="align-self: flex-end;"><a class="a__hover" href="#siteerror">Сообщить об ошибке на сайте</a></p>
					</div>
				</div>

				<div class="footer1290">
					<div class="flex__row">
						<div class="flex__column">
							<p class="footer__title"><a class="a__hover" href="EpkAskella">ЕПК АСКЕЛЛА</a></a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#fifth__block">Корпративное управление</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#fourth__block">Стратегия ЕПК АСКЕЛЛА</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#third__block">Миссия ЕПК АСКЕЛЛА</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#second__block">История успеха</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#sixth__block">Карьера</a></p>
							<!-- <p class="footer__text__last__copyright">© 2003 – 2024 ЕПК «АСКЕЛЛА»</p> -->
						</div>
						<div class="flex__column">
							<p class="footer__title"><a class="a__hover" href="companies">Компании</a></p>
							<div class="flex__row">
								<div class="flex__column">
									<p class="footer__text"><a class="a__hover" href="comps/askellaHolding">ООО АСКЕЛЛА ХОЛДИНГ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askLogistics">ТОО ASKELLA LOGISTICS</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/mirSumok">ТОО ТПК МИР СУМОК</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askGlobalPort">ASK GLOBAL PORT LTD</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/eurasia">ТОО ЕВРАЗИЯ САХАР</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/">ASKELLA INVEST LTD</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askellaAgro">ТОО АСКЕЛЛА АГРО</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/shubarCoal">ТОО ШУБАР УГОЛЬ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/NurkazProm">ТОО НУРКАЗПРОМ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/severprom">ООО СЕВЕРПРОМ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/asib">ТОО ASIB GROUP</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/pkMir">ТОО ПК МИР</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/ask">ТОО АСК</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/ack">ТОО АСК</a></p>
								</div>
							</div>
						</div>
						<div class="flex__column">
							<p class="footer__title"><a class="a__hover" href="improve">Устойчивое развитие</a></p>
							<p class="footer__text"><a class="a__hover" href="improve#second__block">Ответственное инвестирование</a></p>
							<p class="footer__text"><a class="a__hover" href="improve">Компании партнёров</a></p>

							<p class="footer__title"><a class="a__hover" href="improve" style="margin-top: 25px;">Дополнительные ссылки</a></p>
							<p class="footer__text"><a class="a__hover" href="improve">Струкутра компаний</a></p>
							<p class="footer__text"><a class="a__hover" href="improve">Команда</a></p>
							<p class="footer__text" style="visibility: hidden;">.</p>
							
							<p class="footer__title"><a class="a__hover" href="#callcenter">Справочная служба</a></p>
							<p class="footer__text"><a class="a__hover" href="/">Оставить заявку</a></p>
							<p class="footer__hotline"><a class="a__hover" href="#hotline">Горячая линия</a></p>
							<!-- <p class="footer__text__last__last"><a class="a__hover" href="/">Сообщить об ошибке на сайте</a></p> -->
						</div>
					</div>
					<div class="flex__row" style="justify-content: space-between; margin-top: 40px; margin-bottom: 50px;">
						<p style="align-self: flex-start;     opacity: 0.5;">© 2003 – 2024 ЕПК «АСКЕЛЛА»</p>
						<p style="align-self: flex-end;"><a class="a__hover" href="confidentPolicy">Политика обработки персональных данных</a></p>
						<p style="align-self: flex-end;"><a class="a__hover" href="#siteerror">Сообщить об ошибке на сайте</a></p>
					</div>
				</div>

				<div class="footer960">
					<div class="flex__row">
						<div class="flex__column">
							<p class="footer__title"><a class="a__hover" href="EpkAskella">ЕПК АСКЕЛЛА</a></a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#fifth__block">Корпративное управление</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#fourth__block">Стратегия ЕПК АСКЕЛЛА</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#third__block">Миссия ЕПК АСКЕЛЛА</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#second__block">История успеха</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#sixth__block">Карьера</a></p>
							<!-- <p class="footer__text" style="visibility: hidden;">.</p>
							 -->
							<!-- <p class="footer__text__last__copyright">© 2003 – 2024 ЕПК «АСКЕЛЛА»</p> -->
						</div>
						<div class="flex__column">
							<p class="footer__title"><a class="a__hover" href="companies">Компании</a></p>
							<div class="flex__row">
								<div class="flex__column">
									<p class="footer__text"><a class="a__hover" href="comps/askellaHolding">ООО АСКЕЛЛА ХОЛДИНГ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askLogistics">ТОО ASKELLA LOGISTICS</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/mirSumok">ТОО ТПК МИР СУМОК</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askGlobalPort">ASK GLOBAL PORT LTD</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/eurasia">ТОО ЕВРАЗИЯ САХАР</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/">ASKELLA INVEST LTD</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askellaAgro">ТОО АСКЕЛЛА АГРО</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/shubarCoal">ТОО ШУБАР УГОЛЬ</a></p>
									<p class="footer__text" style="visibility: hidden;">.</p>
									<p class="footer__text" style="visibility: hidden;">.</p>
									<!-- <p class="footer__title"><a class="a__hover" href="/">Справочная служба</a></p>
							<p class="footer__text"><a class="a__hover" href="/">Оставить заявку</a></p> -->

								</div>
								<div class="flex__column__second">
									<p class="footer__text"><a class="a__hover" href="comps/NurkazProm">ТОО НУРКАЗПРОМ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/severprom">ООО СЕВЕРПРОМ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/asib">ТОО ASIB GROUP</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/pkMir">ТОО ПК МИР</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/ask">ТОО АСК</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/ack">ТОО АСК</a></p>
									<p class="footer__text" style="visibility: hidden;">.</p>
									<!-- <p class="footer__hotline"><a class="a__hover" href="#hotline">Горячая линия</a></p> -->
									<!-- <div style="position: relative;top: 115px;right:50px;">
										<p class="footer__text"><a class="a__hover" href="confidentPolicy">Политика обработки персональных данных</a></p>
										<p class="footer__text"><a class="a__hover" href="/">Сообщить об ошибке на сайте</a></p>
									</div> -->

								</div>
							</div>
						</div>
					</div>
						<div class="flex__row">
							<div class="flex__column">
								<p class="footer__title"><a class="a__hover" href="improve">Устойчивое развитие</a></p>
								<p class="footer__text"><a class="a__hover" href="improve#second__block">Ответственное инвестирование</a></p>
								<p class="footer__text"><a class="a__hover" href="improve">Компании партнёров</a></p>

								<p class="footer__title"><a class="a__hover" href="improve" style="margin-top: 25px;">Дополнительные ссылки</a></p>
								<p class="footer__text"><a class="a__hover" href="improve">Струкутра компаний</a></p>
								<p class="footer__text"><a class="a__hover" href="improve">Команда</a></p>
							</div>
							<div class="flex__column">
								<div class="flex__row">
								<div class="flex__column">
									<p class="footer__title"><a class="a__hover" href="#callcenter">Справочная служба</a></p>
									<p class="footer__text"><a class="a__hover" href="/">Оставить заявку</a></p>
									<p class="footer__text" style="visibility: hidden;">ТОО ASKELLA CONSTRUCTION</p>
								</div>
								<div class="flex__column__second">
									<p class="footer__hotline"><a class="a__hover" href="#hotline">Горячая линия</a></p>
									<p class="footer__text" style="visibility: hidden;">ТОО АСКЕЛЛА АГРО</p>
								</div>
							</div>
							</div>
						</div>
						<div class="flex__row" style="justify-content: space-between; margin-top: 40px; margin-bottom: 50px; align-items: center;">
							<p style="opacity: 0.5;">© 2003 – 2024 ЕПК «АСКЕЛЛА»</p>
							<div class="flex__column">
								<p style="align-self: flex-end;"><a class="a__hover" href="confidentPolicy" >Политика обработки персональных данных</a></p>
								<p style="align-self: flex-end;"><a class="a__hover" href="#siteerror" style="margin-top: 20px;">Сообщить об ошибке на сайте</a></p>
							</div>
						</div>
					</div>

					<div class="footer640">
					<div class="flex__row" style="margin-bottom: 50px;">
						<div class="flex__column">
							<p class="footer__title"><a class="a__hover" href="EpkAskella">ЕПК АСКЕЛЛА</a></a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#fifth__block">Корпративное управление</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#fourth__block">Стратегия ЕПК АСКЕЛЛА</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#third__block">Миссия ЕПК АСКЕЛЛА</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#second__block">История успеха</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#sixth__block">Карьера</a></p>
							<p class="footer__text" style="visibility: hidden;">.</p>
							<p class="footer__title"><a class="a__hover" href="improve">Устойчивое развитие</a></p>
								<p class="footer__text"><a class="a__hover" href="improve#second__block">Ответственное инвестирование</a></p>
								<p class="footer__text"><a class="a__hover" href="improve">Компании партнёров</a></p>

								<p class="footer__title"><a class="a__hover" href="improve" style="margin-top: 25px;">Дополнительные ссылки</a></p>
								<p class="footer__text"><a class="a__hover" href="improve">Струкутра компаний</a></p>
								<p class="footer__text"><a class="a__hover" href="improve">Команда</a></p>
							<p class="footer__text" style="visibility: hidden;">.</p>
							<p class="footer__title"><a class="a__hover" href="#callcenter">Справочная служба</a></p>
									<p class="footer__text"><a class="a__hover" href="/">Оставить заявку</a></p>
									<p class="footer__text" style="visibility: hidden;">.</p>
									<p class="footer__hotline"><a class="a__hover" href="#hotline">Горячая линия</a></p>
							<p class="footer__text__last__copyright" style="padding-top: 44px;">© 2003 – 2024 ЕПК «АСКЕЛЛА»</p>
						</div>
						<div class="flex__column" style="padding-left: 64px;">
							<p class="footer__title"><a class="a__hover" href="companies">Компании</a></p>
							
								<div class="flex__column">
									<p class="footer__text"><a class="a__hover" href="comps/askellaHolding">ООО АСКЕЛЛА ХОЛДИНГ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askLogistics">ТОО ASKELLA LOGISTICS</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/mirSumok">ТОО ТПК МИР СУМОК</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askGlobalPort">ASK GLOBAL PORT LTD</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/eurasia">ТОО ЕВРАЗИЯ САХАР</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/">ASKELLA INVEST LTD</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askellaAgro">ТОО АСКЕЛЛА АГРО</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/shubarCoal">ТОО ШУБАР УГОЛЬ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/NurkazProm">ТОО НУРКАЗПРОМ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/severprom">ООО СЕВЕРПРОМ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/asib">ТОО ASIB GROUP</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/pkMir">ТОО ПК МИР</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/ask">ТОО АСК</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/ack">ТОО АСК</a></p>
									<p class="footer__text" style="visibility: hidden;">.</p>
									<!-- <p class="footer__text" style="visibility: hidden;">.</p> -->
									
									<div style="position: relative;top: 30px;">
										<p class="footer__text"><a class="a__hover" href="confidentPolicy">Политика обработки персональных данных</a></p>
										<p class="footer__text"><a class="a__hover" href="#siteerror">Сообщить об ошибке на сайте</a></p>
									</div>
							</div>
						</div>
					</div>
					</div>

					<div class="footer480">
					<div class="flex__row">
						<div class="flex__column">
							<p class="footer__title"><a class="a__hover" href="EpkAskella">ЕПК АСКЕЛЛА</a></a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#fifth__block">Корпративное управление</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#fourth__block">Стратегия ЕПК АСКЕЛЛА</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#third__block">Миссия ЕПК АСКЕЛЛА</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#second__block">История успеха</a></p>
							<p class="footer__text"><a class="a__hover" href="EpkAskella#sixth__block">Карьера</a></p>
							<p class="footer__text" style="visibility: hidden;">.</p>
							<p class="footer__title"><a class="a__hover" href="companies">Компании</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askellaHolding">ООО АСКЕЛЛА ХОЛДИНГ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askLogistics">ТОО ASKELLA LOGISTICS</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/mirSumok">ТОО ТПК МИР СУМОК</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askGlobalPort">ASK GLOBAL PORT LTD</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/eurasia">ТОО ЕВРАЗИЯ САХАР</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/">ASKELLA INVEST LTD</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/askellaAgro">ТОО АСКЕЛЛА АГРО</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/shubarCoal">ТОО ШУБАР УГОЛЬ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/NurkazProm">ТОО НУРКАЗПРОМ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/severprom">ООО СЕВЕРПРОМ</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/asib">ТОО ASIB GROUP</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/pkMir">ТОО ПК МИР</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/ask">ТОО АСК</a></p>
									<p class="footer__text"><a class="a__hover" href="comps/ack">ТОО АСК</a></p>
									<p class="footer__text" style="visibility: hidden;">.</p>
							<p class="footer__title"><a class="a__hover" href="improve">Устойчивое развитие</a></p>
								<p class="footer__text"><a class="a__hover" href="improve#second__block">Ответственное инвестирование</a></p>
								<p class="footer__text"><a class="a__hover" href="improve">Компании партнёров</a></p>

								<p class="footer__title"><a class="a__hover" href="improve" style="margin-top: 25px;">Дополнительные ссылки</a></p>
								<p class="footer__text"><a class="a__hover" href="improve">Струкутра компаний</a></p>
								<p class="footer__text"><a class="a__hover" href="improve">Команда</a></p>
							<p class="footer__text" style="visibility: hidden;">.</p>
							<p class="footer__title"><a class="a__hover" href="#callcenter">Справочная служба</a></p>
									<p class="footer__text"><a class="a__hover" href="/">Оставить заявку</a></p>
									<p class="footer__hotline"><a class="a__hover" href="#hotline">Горячая линия</a></p>
									<div style="position: relative;top: 35px;">
										<p class="footer__text" style="padding-top: 0px;"><a class="a__hover" href="confidentPolicy">Политика обработки персональных данных</a></p>
										<p class="footer__text"><a class="a__hover" href="#siteerror">Сообщить об ошибке на сайте</a></p>
									</div>
									<p class="footer__text__last__copyright">© 2003 – 2024 ЕПК «АСКЕЛЛА»</p>

						</div>
					</div>
					</div>

			</div>				
			</div>
		</div>


  		<div id="thanks" class="zatemnenie">
			<a class="bgPopup" href="#header"></a>
			<div class="window">
				<div style="display: flex;width: 100%;height: 100%;">
				<p class="mesSended">Ваша заявка успешно отправлена!</p>
				</div>
			</div>
		</div>