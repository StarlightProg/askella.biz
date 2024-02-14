<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Заголовок страницы в браузере -->
		<title>ЕПК Аскелла</title>
		<link rel="icon" sizes="16x16" type="image/x-icon" href="img/favicon16.ico">
		<link rel="icon" sizes="32x32" type="image/x-icon" href="img/favicon32.ico">
		<!-- Адаптив -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<!-- Подключаем CSS -->
		
		<link rel="stylesheet" href="css/owl.carousel.min.css" />
		<link rel="stylesheet" href="css/owl.theme.default.min.css" />
		<link rel="stylesheet" href="css/styleGeneral.css" />
		<link rel="stylesheet" href="css/style.css" />
		<!-- Кодировка страницы -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
	</head>
	<!-- Отображаемое тело страницы -->
	<body>	
		<?php
			require __DIR__. DIRECTORY_SEPARATOR . 'header.php';
		?>
		<div class="wrapper">
			<!-- <header></header> -->
			
			<div class="content">
				<!-- <img class="imgg" src="img/main/MainCircle.png"> -->
				<div class="main">
					<div class="videoDiv">
						<div class="mapVisible">
						<map name="videomap">
				  			<area shape="poly" coords="945, 418, 954, 409, 1070, 373, 1048, 488, 1038, 498, 945, 418" href="companies#" target="_blank" id="otrasli">
				  			<area shape="poly" coords="955, 420, 948, 380, 972 , 307, 1056, 347, 1061, 381, 962, 412, 955, 420" href="EpkAskella#fifth__block" target="_blank" id="result">
				  			<area shape="poly" coords="919,543,930,444,953,424,1036,498,1017,522,919,543" href="EpkAskella#fourth__block" target="_blank" id="strategy">
				  			<area shape="poly" coords="1050,497,1071,389,1104,389,1152,467,1085,497,1050,497" href="EpkAskella#sixth__block" target="_blank" id="team">
				  			<area shape="poly" coords="942,567,942,540,1026,522,1044,-499,1044,546,1040,592,942,567" href="EpkAskella#third__block" target="_blank" id="mission">
				  		</map>
				  		</div>
						<img src="img/main/areamap.png" class="areamapImg">
						<!-- <img src="img/main/bgVideo.png" class="bg__video"> -->
						<img src="img/main/linesVideo.png" class="lines__Video">
						<img muted autoplay class="main__img" id="main__img">
						<video muted autoplay class="main__video" id="main__video">
								<source src="videos/Glavnaya2.webm" type='video/webm; codecs="vp8, vorbis"'>
									<source src="videos/Glavnaya2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
						</video>
						<div class="bg__video"></div> 

						<div class="trianglesDiv">
							<img src="img/main/financeResult.png" class="resultTriangle">
							<img src="img/main/otrasliTriangle.png" class="otrasliTriangle">
							<img src="img/main/strategyTriangle.png" class="strategyTriangle">
							<img src="img/main/teamTriangle.png" class="teamTriangle">
							<img src="img/main/missionTriangle.png" class="missionTriangle">
						</div>

						<div class="trianglesDiv">
							<div class="dotDiv dotFinance">
								<p class="pDot pFinance">Корпаротивное управление</p>
								<img class="dot imgFinance" src="img/main/circle.png">	
							</div>

							<div class="dotDiv dotOtrasli">
								<p class="pDot pFinance">Команда</p>
								<img class="dot imgFinance" src="img/main/circle.png">	
							</div>

							<div class="dotDiv dotTeam">
								<div class="flex__row">
									<img class="dot imgTeam" src="img/main/circle.png">
									<p class="pDot pTeam">Работа в компании</p>
								</div>	
							</div>

							<div class="dotDiv dotStrategy">
								<div class="flex__row">
									<p class="pDot pStrategy">Стратегия</p>
									<img class="dot imgStrategy" src="img/main/circle.png">
								</div>
							</div>

							<div class="dotDiv dotMission">
								<img class="dot" src="img/main/circle.png">
								<p class="pDot pMission">Миссия</p>	
							</div>
						</div>
										
					</div>
					

						<div class="main__column">
							<div style="font-family: 'gilroy';" class="main__text">Евразийский Промышленный Концерн</div>
							<div class="main__row">								
								<div class="main__title">
									<p class="titlep1">КОНСОЛИДИРУЕМАЯ<br>ВЫРУЧКА</p>
									<p class="titlep2">400</p>
									<p class="titlep3">млн $</p>
								</div>
								<div class="main__title">
									<p class="titlep1">КОЛИЧЕСТВО <br>СОТРУДНИКОВ</p>
									<p class="titlep2">5000</p>
									<p class="titlep3">человек</p>
								</div>
								<div class="main__title">
									<p class="titlep1">ПРИСУТСТВИЕ<br>КОНЦЕРНА</p>
									<p class="titlep2">6</p>
									<p class="titlep3">стран</p>
								</div>
							</div>
						</div>
					
				</div>
				<div class="second__block">
					<div class='container'>
						<div class="second__column">
							<div class="about__company">
								<p class="about__text1">О концерне</p>
								<a class="modalOpener" href="companyStructure"><p  class="all__actives__p ">Структура компаний</p></a>	
								<p class="about__text2">Один из крупнейших Международных Концернов, который развивается в пяти основных направлениях - логистика, строительство, аграрный бизнес, производство и инвестиции. Активы компании расположены в России, Казахстане, Узбекистане, Сингапуре, Турции и Китае.<br><br>Общее количество сотрудников более 5000 человек. За время работы нами была создана сеть международных контактов на территории всего Евразийского Континента.</p>
								<a href="EpkAskella"><div class="butt div__about__text3"><p class="about__text3">УЗНАТЬ БОЛЬШЕ</p></div></a>
							</div>
							<div class="actives">
								<p class="actives__title">Компании</p>
								<a class="modalOpener" href="companies"><p class="all__actives__p">Все компании</p></a>	
								<!-- <div class="flex__row"> -->
								<div class="carouselOuter">
								<div id="js-carousel-2" class="owl-carousel">
									<div class="flex__column">
										<a class="a__black" href="comps/askellaHolding">
											<div class="activess">
												<p class="actives__type__p">Производство и логистика</p>
												<p class="actives__title__p">Аскелла Холдинг</p>
												<p class="actives__stat__p">2019</p>
												<p class="actives__statText__p">Год основания компании</p>
												<p class="actives__stat__p">400 млн. ₽</p>
												<p class="actives__statText__p">Выручка с 2019 года</p>
												<p class="actives__stat__p">300 000</p>
												<p class="actives__statText__p">Произведенных единиц продукции</p>
											</div>
										</a>
									</div>
									<div class="flex__column">
										<a class="a__black" href="comps/npkMir">
										<div class="activess">
											<p class="actives__type__p">Логистика</p>
											<p class="actives__title__p">GM</p>
											<p class="actives__stat__p">100%</p>
											<p class="actives__statText__p">Совокупная  доля владения</p>
											<p class="actives__stat__p">1 млн тонн</p>
											<p class="actives__statText__p">Перевезённых грузов</p>
											<p class="actives__stat__p">> 1 млн кв. м </p>
											<p class="actives__statText__p">Складская площадь</p>
										</div>
										</a>
									</div>
									<div class="flex__column">
										<a class="a__black" href="comps/npkMir">
										<div class="activess">
											<p class="actives__type__p">Производство</p>
											<p class="actives__title__p">НПК МИР</p>
											<p class="actives__stat__p">2021</p>
											<p class="actives__statText__p">Год основания компании</p>
											<p class="actives__stat__p">10</p>
											<p class="actives__statText__p">Зарегестрированных патентов</p>
											<p class="actives__stat__p">40+</p>
											<p class="actives__statText__p">Разработанных моделей</p>
										</div>
										</a>
									</div>
									
									<div class="flex__column">
										<a class="a__black" href="comps/askGlobalPort">
										<div class="activess">
											<p class="actives__type__p">ПРОМЫШЛЕННОСТЬ</p>
											<p class="actives__title__p">AskGlobalPort</p>
											<p class="actives__stat__p">2013</p>
											<p class="actives__statText__p">Год основания компании</p>
											<p class="actives__stat__p">30+</p>
											<p class="actives__statText__p">Взаимодействий с портами</p>
											<p class="actives__stat__p">20+</p>
											<p class="actives__statText__p">Судов под управлением</p>
										</div>
										</a>
									</div>
								</div>
								</div>
								<!-- </div> -->
							</div>
						</div>
					</div>
				</div>
				<div class="third__block">
					<div class="container">
						
						<div class="third__invest_cost">
							<div class="flex__row">
								<div class="third__text">
									<p class="actives__title">Увеличиваем финансовые показатели</p>
									<img class="graphic__img" src="img/main/480/graphic.svg">
									<p class="actives__statText__p">ЕПК АСКЕЛЛА находится в процессе постоянного поиска новых идей для Построения классического Международного Концерна и реализация Международных проектов, где будут задействованы как можно больше компаний, входящих в ЕПК АСКЕЛЛА. </p>
									<a href="#suggestProject"><div class="butt div__about__text3 modalOpener" ><p class="about__text3">ПРЕДЛОЖИТЬ ПРОЕКТ</p></div></a>
								</div>
								<div class="third__graphic">
									<div class="third__img">
										<p class="third__img__p1">234</p>
										<p class="third__img__p2">400</p>
										<p class="cot__percent">+70,9%</p>
										<img class="triangle1_1" src="img/main/triangle1_1.svg">
										<img class="triangle1_2" src="img/main/triangle1_2.svg">
										<img class="line" src="img/main/line.svg">
									</div>
								</div>
							</div>
								<!-- <img src="img/main/triangles.svg"> -->
						</div>
					</div>
					<img class="lineUnder" src="img/main/lineUnder.svg" style="width: 120%;">
				</div>
			</div>
		</div>

		<?php require __DIR__. DIRECTORY_SEPARATOR . 'footer.php';  ?>

		<?php require __DIR__. DIRECTORY_SEPARATOR . 'menuAndModal.php';  ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/google-translate.js"></script>
<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
		<script type="text/javascript" src="js/general.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){

			  

			  $('#js-carousel-2').owlCarousel({
			  	responsive:{
			  		1290:{
			  			items:4
			  		},
			  		960:{
			  			items:3
			  		},
			  		640:{
			  			items:2
			  		},
			  		570:{
			  			items: 2
			  		},
			  		480:{
			  			items:1.5
			  		},
			  		
			  		360:{
			  			loop:true,
			  			margin:10,
			  			items:1.2
			  		},
			  		0:{
			  			items:1.1
			  		}
			  	},
		        
		        nav:false,
		        navText: [
		          '<img style="position:absolute;left:-80px;bottom:50%" src="img/leftSlider2.png"></img>',
		          '<img style="position:absolute;left:100%;bottom:50%" src="img/rightSlider2.png"></img>'
		        ]
			  });
			});
		</script>
	</body>
</html>