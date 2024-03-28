<!DOCTYPE html>
<html>
<head>
	<title>ПК МИР</title>
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
						<div class="videoBg" style="position: absolute;width:100%;z-index: -3;background-color: #01336E; width: 100%; object-fit: cover;"></div>
						<img src="../img/main/linesVideoComp.png" class="lines__Video">
						<video loop muted autoplay class="main__video" id="main__video" style="height: 765px;">
								<source src="../videos/viz2.webm" type='video/webm; codecs="vp8, vorbis"'>
									<source src="../videos/viz2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
						</video>
						<div class="bg__video"></div>
						
					</div>
					<div class="container">
						<div class="main__column">
							<div class="flex__column">
								<p><a class="p__main" href="../main">Главная</a> |<a class="p__main" href="../companies"> Компании</a><span class="span__main" style="opacity: 0.6"> | ПК МИР</span></p>
								<p class="main__title">ПК МИР</p>
								<p class="main__text">Компания расположена в Казахстане, основной вид деятельности проектной организации - испытание и тестирование продуктов концерна 
</p>
								<div class="grid__main">
									<div class="flex__column">
										<p class="grid__main__title">основаниЕ компании</p>
										<p class="grid__main__num">2020</p>
										<p class="grid__main__text">год</p>
									</div>
								
									<div class="flex__column">
										<p class="grid__main__title">КОЛ-во
специалистов</p>
										<p class="grid__main__num">50+</p>
										<p class="grid__main__text">сотрудников</p>
									</div>
								
									<div class="flex__column">
										<p class="grid__main__title">КОЛ-во патентов</p>
										<p class="grid__main__num">5+</p>
										<p class="grid__main__text">патентов</p>
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
								<img src="../img/comps/pkMir/strategyLogo.png">
								<p class="p__title">Стратегия развития</p>
							</div>
							<p class="p__text">Улучшения в техническом регулировании и стандартизация в легкой промышленности изделий компаний концерна, оценки свойств текстильных материалов и разработка требований к ним, обоснований требований к одежде, формировании пакетов материалов в изделии с учетом климатических условий регионов, разработки нормативной и технической документации производства
</p>
						</div>						
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
												<p class="activity__title">Техническое регулирование и контроль качества продуктов концерна</p>
												<p class="activity__text">
													Оценка свойств материалов и разработка требований к ним, обоснование требований к продуктам
												</p>
											</div>
										</div>					

									</div>
									<div class="flex__column activityDiv secondactivityDiv">
										<div class="activity__block">
											<div class="width90">
												<p class="activity__title">Тестирование продуктов концерна</p>
												<p class="activity__text">
													Внедрение новых технологий производства, тестирование прочности и гибкости материалов. Контроль качества, экспертиза материалов и готовых изделий.
												</p>
											</div>
											
										</div>

									

										


									</div>

								</div>
						</div>
					</div>
				</div>
			</div>
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