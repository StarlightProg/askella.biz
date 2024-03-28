<!DOCTYPE html>
<html>
<head>
	<title>Нурказпром</title>
	<link rel="icon" sizes="16x16" type="image/x-icon" href="../img/favicon16.ico">
		<link rel="icon" sizes="32x32" type="image/x-icon" href="../img/favicon32.ico">
		<!-- Адаптив -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<!-- Подключаем CSS -->
	<link rel="stylesheet" href="../css/styleGeneral.css" />
	<link rel="stylesheet" href="../css/styleComps.css" />
	<!-- Кодировка страницы -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<?php
			require  __DIR__. DIRECTORY_SEPARATOR . 'header.php';
		?>

		<div class="wrapper">
			<div class="content">
				<div class="main">
					<div class="videoDiv">
						<div class="videoBg" style="position: absolute;width:100%;z-index: -3;background-color: #01336E;width: 100%; object-fit: cover;"></div>
						<img src="../img/main/linesVideoComp.png" class="lines__Video">
						<video loop muted autoplay class="main__video" id="main__video">
								<source src="../videos/viz.webm" type='video/webm; codecs="vp8, vorbis"'>
									<source src="../videos/viz.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
						</video>
						<div class="bg__video"></div>
						
					</div>
					<div class="container">
						<div class="main__column">
							<div class="flex__column">
								<p><a class="p__main" href="../main">Главная</a> |<a class="p__main" href="../companies"> Компании</a><span class="span__main" style="opacity: 0.6"> | Нурказпром</span></p>
								<p class="main__title">Нурказпром</p>
								<p class="main__text">Ремонт и техническое обслуживание грузовых вагонов</p>
								<div class="grid__main">
									<div class="flex__column">
										<p class="grid__main__title">основание компании</p>
										<p class="grid__main__num">2019</p>
										<p class="grid__main__text">год</p>
									</div>
								
									<div class="flex__column">
										<p class="grid__main__title">отремонтированных вагонов более</p>
										<p class="grid__main__num">500</p>
										<p class="grid__main__text">единиц</p>
									</div>
								
									<div class="flex__column">
										<p class="grid__main__title">количество ремонтных Депо</p>
										<p class="grid__main__num">> 20</p>
										<p class="grid__main__text">единиц</p>
									</div>
								</div>
							</div>
						</div>	
					</div>			
				</div>
				<div class="second__block">
					<div class="container">
						<div class="flex__column impStrat">
							<div class="second__title__div">
								<img class="improve__logo" src="../img/comps/nurkazprom/strategyLogo.png">
								<p class="p__title">Стратегия развития</p>
							</div>
							<p class="p__text">Развитие транспортно-экспедиторской деятельности, расширение комплекса логистических услуг, благодаря  совершенствованию операционных процессов,
оптимизации логистических маршрутов с целью сокращения сроков поставки грузов клиентов, наращиванию и модернизации парка в управлении Компании, увелечению клиентской базы, укреплению позиций на рынке перевозок промышленных грузов,
реализации высокого уровня корпоративного управления в Компании.</p>
						</div>						
					</div>
				</div>
				<div class="third__block" style="padding-bottom: 40px;">
					<div class="container">
						<div class="flex__column activity">
								<!-- <p class="p__title">Деятельность</p> -->
								<div class="activityFlex flex__row">
									<div class="flex__column activityDiv">
										<div class="activity__block">
											<div class="width90">
												<p class="activity__title">Капитальный ремонт</p>
												<p class="activity__text">
													Проведение капитального ремонта позволяет полностью восстановить ресурс вагонов, которые были в эксплуатации длительное время. В процессе такого ремонта проводится замена всех элементов, которые были изношены ранее. Если такие запчасти являются несъемными, их ремонтируют непосредственно на месте.
Основные требования к ремонту:
· используемые детали и элементы должны соответствовать установленным нормам;
· установленные запчасти обязаны иметь сертификаты и декларации;
· ответственные комплектующие вагонов должны иметь соответствующие клейма.
После окончания такого ремонта вагон возвращается в эксплуатацию для дальнейших грузовых перевозок.


												</p>
											</div>
										</div>

										<div class="activity__block">
											<div class="width90">
												<p class="activity__title">Приемка в ремонт</p>
												<p class="activity__text">
													Приемка грузовых вагонов осуществляется в соответствии с четко определенными правилами. Все они прописаны в нормативно-правовой документации, которая используется специалистами, проверяющими состояние элементов, а также приемщиками в депо или на специализированных станциях.
												</p>
											</div>
										</div>									

									</div>
									<div class="flex__column activityDiv secondactivityDiv">
										<div class="activity__block">
											<div class="width90">
												<p class="activity__title">Деповской ремонт</p>
												<p class="activity__text">
													Данный тип ремонта вагонов предусматривает осуществление всех необходимых манипуляций непосредственно в депо. Сначала проводится очистка от остатков перевозимого груза. Далее – осмотр и диагностика элементов. Такую работу в обязательном порядке проводит квалифицированный специалист совместно с приемщиком. Составляется дефектная ведомость, в которой указываются все выявленные повреждения и определяется объем последующих работ.



												</p>
											</div>
											
										</div>

										<div class="activity__block">
										<div class="width90">
												<p class="activity__title">Текущий отцепочный ремонт</p>
												<p class="activity__text">
													Такой тип ремонта предоставляет возможность восстановления работы груженного или пустого вагона путем замены изношенных элементов на новые или отремонтированные. При этом манипуляции проводятся на специализированных путях.<br>
ТР-1. Текущий ремонт с маркировкой ТР-1 предусматривает выполнение работ при подготовке к отправке.<br>
ТР-2. Проведение ремонта ТР-2 включает восстановление работоспособности вагонов, которые отцепляют от транзитного или прибывшего в разборку состава.
												</p>
											</div>
										</div>

									</div>

								</div>
						</div>
					</div>
				</div>
			</div>

			<div class="fourth__block" style="margin-top: 40px;  margin-bottom: 40px;">
				<div class="container">
					<p class="p__title">Новости и события</p>
					<div class="news__div">
						
						<div class="news">
							<a href="nurkazpromNews/news1" style="color: black;">
							<img src="../img/comps/nurkazprom/news1.png" style="width: 100%">
							<p class="news__p">Опубликованы новые лоты по продаже запчастей</p>
							</a>
						</div>
						
						
						<div class="news">
							<a href="nurkazpromNews/news2" style="color: black;">
							<img src="../img/comps/nurkazprom/news2.png" style="width: 100%">
							<p class="news__p">Производство грузовых вагонов в России снизилось на 21,6%</p>
							</a>
						</div>
						
						<div class="news">
							<a href="nurkazpromNews/news3" style="color: black;">
							<img src="../img/comps/nurkazprom/news3.png" style="width: 100%">
							<p class="news__p">О современных видах ремонта вагонов</p>
							</a>
						</div>
						
						<div class="news">
							<a href="nurkazpromNews/news4" style="color: black;">
							<img src="../img/comps/nurkazprom/news4.png" style="width: 100%">
							<p class="news__p">В Казахстане решилась проблема дефицита вагонных запчастей</p>
							</a>
						</div>
						
					</div>
				</div>
			</div>

			<!-- <div class="fifth__block">
				<div class="container">
				<p class="p__title">Узнайте больше информации на сайте</p>
				<a class="a__hover" style="color: white;" href="https://askholding.ru/press-centr/novosti-otrasli"> <p class="p__title2">Nurkazprom</p></a>
				</div>
				<img class="lineUnder" src="../img/main/lineUnder.svg">
			</div>
 -->
		</div>
	</div>

		<?php require __DIR__ . DIRECTORY_SEPARATOR . 'footer.php';  ?>
<?php require __DIR__ . DIRECTORY_SEPARATOR . 'menuAndModal.php';  ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/google-translate.js"></script>
<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
		<script type="text/javascript" src="../js/general.js"></script>
		<script type="text/javascript" src="../js/comps.js"></script>
</body>
</html>