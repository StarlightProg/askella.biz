<!DOCTYPE html>
<html>
<head>
	<title>Активы компании</title>
	<link rel="icon" sizes="16x16" type="image/x-icon" href="img/favicon16.ico">
		<link rel="icon" sizes="32x32" type="image/x-icon" href="img/favicon32.ico">
		<!-- Адаптив -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<!-- Подключаем CSS -->
	<link rel="stylesheet" href="css/styleGeneral.css" />
	<link rel="stylesheet" href="css/styleCompanies.css" />
	<!-- Кодировка страницы -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<?php
			require __DIR__. DIRECTORY_SEPARATOR . 'header.php';
		?>
		<div class="wrapper">
			<div class="content">

				<div class="main">
					<div class="videoDiv">
						<img src="img/companies/map.png" class="main__video">
						<div class="videoBg" style="position: absolute;width:100%;z-index: -3;background-color: #01336E;"></div>
						
						<div class="trianglesDiv">
							<img src="img/companies/russia.png" class="russiaMap">
							<img src="img/companies/turkey.png" class="turkeyMap">
							<img src="img/companies/kz.png" class="kzMap">
							<img src="img/companies/uz.png" class="uzMap">
							<img src="img/companies/china.png" class="chinaMap">

							<img src="img/companies/pin.png" class="moscow1">
							<img src="img/companies/pin.png" class="moscow2">
							<img src="img/companies/pin.png" class="tashkent">
							<img src="img/companies/pin.png" class="astana">
							<img src="img/companies/pin.png" class="almata">
							<img src="img/companies/pin.png" class="stambul">
							<img src="img/companies/pin.png" class="china">
							<img src="img/companies/pin.png" class="singapore">
							<img src="img/companies/pin.png" class="omsk">
						</div>

						<div class="bg__video"></div>
					</div>
					<div class="container">
						<div class="main__column">
							<div class="flex__row">
								<div>
									<p><a class="p__main" href="main">Главная</a> <span class="span__main" style="opacity: 0.6">| О корпорации</span></p>
									<p class="main__title">Компании</p>
									<div class="company__description__div">
										<div class="company__description" id="holding__desc">
											
											<p class="description__title">Аскелла Холдинг</p>
											<p class="mini__description__title">Год основания</p>
											<p class="description__text">2019</p>
											<p class="mini__description__title">Россия</p>
											<p class="description__text">Омск</p>
											<p class="mini__description__title">О компании</p>
											<p class="description__text">Аскелла холдинг - Один из крупнейших российских холдингов. Основной вид деятельности — управление активами Концерна на территории России. Компания осуществляет торговые операции, производство, юридические, брокерские и транспортные услуги.</p>
										</div>
										<div class="company__description" id="sumka__desc">
											
											<p class="description__title">МИР СУМОК</p>
											<p class="mini__description__title">Год основания</p>
											<p class="description__text">2007</p>
											<p class="mini__description__title">Казахстан</p>
											<p class="description__text">Астана</p>
											<p class="mini__description__title">О компании</p>
											<p class="description__text">Компания расположена в Казахстане. Основной вид деятельности — изготовление Швейных изделий.</p>
										</div>
										
										<div class="company__description" id="asib__desc">
											
											<p class="description__title">АСИБ GROUP</p>
											<p class="mini__description__title">Год основания</p>
											<p class="description__text">2011</p>
											<p class="mini__description__title">Россия</p>
											<p class="description__text">Омск</p>
											<p class="mini__description__title">О компании</p>
											<p class="description__text">Компания расположена в России, основной вид деятельности — комплексный аутсорсинг, снабжение предприятий, торговые операции, аудит и аккредитация, сюрвейерские услуги.</p>
										</div>
										<div class="company__description" id="askagro__desc">
											
											<p class="description__title">ASKELLA AGRO</p>
											<p class="mini__description__title">Год основания</p>
											<p class="description__text">2021</p>
											<p class="mini__description__title">Казахстан</p>
											<p class="description__text">Астана</p>
											<p class="mini__description__title">О компании</p>
											<p class="description__text">Производство и реализация сельскохозяйственной продукции. Внедрение и управление инновационных бизнес-моделей в сфере растениеводства, работы элеваторов и зернотрейдинга.</p>
										</div>
										<div class="company__description" id="sugar__desc">
											
											<p class="description__title">ЕВРАЗИЯ САХАР</p>
											<p class="mini__description__title">Год основания</p>
											<p class="description__text">2011</p>
											<p class="mini__description__title">Казахстан</p>
											<p class="description__text">Астана</p>
											<p class="mini__description__title">О компании</p>
											<p class="description__text">Казахстанская компания, основным видом деятельности которой является продажа продукции и контроль за деятельностью заводов-производителей свекловичного сахара.</p>
										</div>
										<div class="company__description" id="nurkaz__desc">
											
											<p class="description__title">NURKAZPROM</p>
											<p class="mini__description__title">Год основания</p>
											<p class="description__text">2019</p>
											<p class="mini__description__title">Казахстан</p>
											<p class="description__text">Астана</p>
											<p class="mini__description__title">О компании</p>
											<p class="description__text">Компания расположена в Казахстане, основной вид деятельности — контроль за реализацией строительных проектов для нужд ЕПК АСКЕЛЛА.</p>
										</div>
										<div class="company__description" id="secerprom__desc">
											
											<p class="description__title">СЕВЕРПРОМ</p>
											<p class="mini__description__title">Год основания</p>
											<p class="description__text">2019</p>
											<p class="mini__description__title">Узбекистан</p>
											<p class="description__text">Ташкент</p>
											<p class="mini__description__title">О компании</p>
											<p class="description__text">Компания расположена в Узбекистане (г. Ташкент), основным видом деятельности является — производство и реализация строительных материалов, организация транспортных услуг и представление интересов ЕПК АСКЕЛЛА на территории Узбекистана.</p>
										</div>
										<div class="company__description" id="pteltd__desc">
											
											<p class="description__title">ASKELLA INVEST</p>
											<p class="mini__description__title">Год основания</p>
											<p class="description__text">2009</p>
											<div class="flex__row">
												<p class="mini__description__title">Сингапур</p>
												
											</div>
											<p class="mini__description__title">О компании</p>
											<p class="description__text">Основной вид деятельности — управление активами Концерна на  на территории Южно-Восточной Азии и Китая . Компания осуществляет торговые операции, производство, юридические, брокерские и транспортные услуги.</p>
										</div>
										<div class="company__description" id="gruz__desc">
											
											<p class="description__title">Современные технологии логистики</p>
											<p class="mini__description__title">Год основания</p>
											<p class="description__text">???</p>
										
												<p class="mini__description__title">Россия</p>
												<p class="description__text">Санкт-Петербург</p>
												
											<p class="mini__description__title">О компании</p>
											<p class="description__text">???</p>
										</div>
										<div class="company__description" id="npkmir__desc">
											
											<p class="description__title">НПК МИР</p>
											<p class="mini__description__title">Год основания</p>
											<p class="description__text">2021</p>
										
												<p class="mini__description__title">Россия</p>
												<p class="description__text">Санкт-Петербург</p>
												
											<p class="mini__description__title">О компании</p>
											<p class="description__text">Производство продукции для людей в профессиональной и повседневной жизни . Широкий ассортимент дорожных, спортивных сумок, рюкзаков, школьных ранцев, деловых кожаных портфелей и папок, а также большой выбор школьной и спортивной формы, одежды специального назначения и средств индивидуальной защиты.</p>
										</div>
										<div class="company__description" id="askport__desc">
											
											<p class="description__title">ASK GLOBAL PORT</p>
											<p class="mini__description__title">Год основания</p>
											<p class="description__text">2013</p>																		
												<p class="mini__description__title">Турция</p>
												<p class="description__text">Стамбул</p>										
											<p class="mini__description__title">О компании</p>
											<p class="description__text">Активная судоходная компания, которая консолидирует владение, управление судами, фрахтование, агентские, судовые брокерские услуги и занимается приобретением и продажей судов.</p>
										</div>
										<div class="company__description" id="askconst__desc">
											
											<p class="description__title">Askella Construction</p>
											<p class="mini__description__title">Год основания</p>
											<p class="description__text">2010</p>																		
												<p class="mini__description__title">Казхстан</p>
												<p class="description__text">Алмата</p>										
											<p class="mini__description__title">О компании</p>
											<p class="description__text">Компания расположена в Казахстане, основной вид деятельности компании — производство и продажа строительных материалов, импорт/экспорт строительных материалов.</p>
										</div>
									</div>
								</div>
								<div class="flex__row">
									<div class="stat__div">
										<p class="stat__number">8</p>
										<p class="stat__text">СТРАН</p>
									</div>
									<div class="stat__div">
										<p class="stat__number">74</p>
										<p class="stat__text">КОМПАНИЙ</p>
									</div>
									<div class="stat__div">
										<p class="stat__number">5</p>
										<p class="stat__text">ОТРАСЛЕЙ</p>
									</div>
								</div>
							</div>
							<div class="flex__column second__elem3 ">
								<div class="flex__row">
									<div class="flex__row__butt">
										<div class="div__about__text4 second__chosen" id="holding">
											<p class="f12">АСКЕЛЛА ХОЛДИНГ</p>
										</div>
										<div class="div__about__text4" id="sumka">
											<p class="f12">Mir sumok.ru</p>
										</div>
										<!-- <div class="div__about__text4" id="gruz">
											<p class="f12">Современные технологии логистики</p>
										</div> -->
										<div class="div__about__text4" id="asib">
											<p class="f12">АСИБ GROUP</p>
										</div>
										<div class="div__about__text4" id="askagro">
											<p class="f12">ASKELLA AGRO</p>
										</div>
										<div class="div__about__text4" id="sugar">
											<p class="f12">Евразия сахар</p>
										</div>
										<div class="div__about__text4" style="display: none;">
											<p class="f12">Евразия сахар</p>
										</div>
									</div>

								</div>
								<div class="flex__row">
									<div class="flex__row__butt">
										<div class="div__about__text4" id="nurkaz">
											<p class="f12">Nurkazprom</p>
										</div>
										<div class="div__about__text4" id="secerprom">
											<p class="f12">Severprom</p>
										</div>
										<div class="div__about__text4" id="pteltd">
											<p class="f12">Askella Invest</p>
										</div>
										<div class="div__about__text4" id="npkmir">
											<p class="f12">НПК МИР</p>
										</div>
										<div class="div__about__text4" id="askport">
											<p class="f12">ASK GLOBAL PORT</p>
										</div>
										<!-- <div class="div__about__text4" id="askconst">
											<p class="f12">ASKELLA CONSTRUCTION</p>
										</div> -->
									</div>
									
								</div>
							</div>
						</div>	
					</div>			
				</div>
				<div class="second__block">
					<div class="container">
						<div class="second__content">
							<p class="title__p">Стратегический фокус</p>
							<p class="text__second">Поиск новых возможностей, монетизация знаний и опыта наших сотрудников, эффективное использование финансовых инструментов, реализация Международных проектов, где будут задействованы как можно больше компаний, входящих в ЕПК АСКЕЛЛА</p>
							
							<div class="flex__row second__elem3">
								<div class="second__chosen div__about__text4 all_chose">
									<p class="f12">ВСЕ ОТРАСЛИ</p>
									<p class="f12 f12__num">14</p>
								</div>
								<div class="div__about__text4 prod_choose">
									<p class="f12">Производство</p>
									<p class="f12 f12__num">6</p>
								</div>
								<div class="div__about__text4 agro_choose">
									<p class="f12">Агробизнес</p>
									<p class="f12 f12__num">2</p>
								</div>
								<div class="div__about__text4 stroi_choose">
									<p class="f12">Строительство</p>
									<p class="f12 f12__num">7</p>
								</div>
								<div class="div__about__text4 invest_choose">
									<p class="f12">Инвестиции</p>
									<p class="f12 f12__num">1</p>
								</div>
								<div class="div__about__text4 log_choose">
									<p class="f12">Логистика</p>
									<p class="f12 f12__num">5</p>
								</div>
							</div>
							<select id = "selectComp"  class="second__elem4">
								<option selected disabled><p style="opacity: 0.4">Выберите отрасль</p></option>
							    <option value="Production"><p style="opacity: 0.4">Производство</p></option>
							    <option value="Agrobuisnes"><p style="opacity: 0.4">Агробизнес</p></option>
							    <option value="Construction"><p style="opacity: 0.4">Строительство</p></option>
							    <option value="Investments"><p style="opacity: 0.4">Инвестиции</p></option>
							    <option value="Logistic"><p style="opacity: 0.4">Логистка</p></option>
							</select>
							<div id="#companies__grid" class="second__grid">
								<a class="a__black prod log" href="comps/askellaHolding">
								<div class="activess ">
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
								<a class="a__black agro" href="comps/eurasia">
								<div class="activess ">
											<p class="actives__type__p">Агробизнес</p>
											<p class="actives__title__p">Евразия Сахар</p>
											<p class="actives__stat__p">2019</p>
											<p class="actives__statText__p">Год основания компании</p>
											<p class="actives__stat__p">3</p>
											<p class="actives__statText__p">Сахарных завода</p>
											<p class="actives__stat__p">>150 000</p>
											<p class="actives__statText__p">Тонн экспортируемой продукции</p>
								</div>
								</a>
								<a class="a__black prod" href="comps/mirSumok">
								<div class="activess ">
									<p class="actives__type__p">Производство</p>
									<p class="actives__title__p">Мир Сумок</p>
									<p class="actives__stat__p">2007</p>
									<p class="actives__statText__p">Год основания компании</p>
									<p class="actives__stat__p">40 млн₽</p>
									<p class="actives__statText__p">Выручка за 2022 год</p>
									<p class="actives__stat__p">2</p>
									<p class="actives__statText__p">Швейные фабрики</p>
								</div>
								</a>
								<a class="a__black log" href="comps/askLogistics">
								<div class="activess ">
									<p class="actives__type__p">Логистика</p>
									<p class="actives__title__p">Askella Logistics</p>
									<p class="actives__stat__p">2013</p>
									<p class="actives__statText__p">Год основания компании</p>
									<p class="actives__stat__p">1500+</p>
									<p class="actives__statText__p">Аперированных вагонов</p>
									<p class="actives__stat__p">4</p>
									<p class="actives__statText__p">Вида вагонов</p>
								</div>
								</a>
								<a class="a__black stroi" href="comps/nurkazprom">
								<div class="activess ">
									<p class="actives__type__p">СТРОИТЕЛЬСТВО</p>
									<p class="actives__title__p">Нурказпром</p>
									<p class="actives__stat__p">2019</p>
									<p class="actives__statText__p">Год основания компании</p>
									<p class="actives__stat__p">5000</p>
									<p class="actives__statText__p">Отремонтированных вагонов</p>
									<p class="actives__stat__p">> 20</p>
									<p class="actives__statText__p">Ремонтных депо</p>
								</div>
								</a>
								<!-- <a class="a__black prod" href="comps/askellaConst">								
								<div class="activess ">
											<p class="actives__type__p">Производство</p>
											<p class="actives__title__p">Askella Construction</p>
											<p class="actives__stat__p">2021</p>
											<p class="actives__statText__p">Год основания компании</p>
											<p class="actives__stat__p">2</p>
											<p class="actives__statText__p">Завода по изготовлению стройматериалов</p>
											<p class="actives__stat__p">100+</p>
											<p class="actives__statText__p">Численность персонала</p>
								</div>
								</a> -->
								<a class="a__black stroi log" href="comps/severprom">									
								<div class="activess ">
									<p class="actives__type__p">СТРОИТЕЛЬСТВО и логистика</p>
									<p class="actives__title__p">Северпорм</p>
									<p class="actives__stat__p">2019</p>
									<p class="actives__statText__p">Год основания компании</p>
									<p class="actives__stat__p">1000+</p>
									<p class="actives__statText__p">Оперированных вагонов</p>
									<p class="actives__stat__p">1 млн.</p>
									<p class="actives__statText__p">Перевезённых грузов</p>
								</div>
								</a>	
								<a class="a__black agro" href="comps/askellaAgro">
								<div class="activess ">
									<p class="actives__type__p">АГРОБИЗНЕС</p>
									<p class="actives__title__p">Аскелла Агро</p>
									<p class="actives__stat__p">2018</p>
									<p class="actives__statText__p">Год основания компании</p>
									<p class="actives__stat__p">10+</p>
									<p class="actives__statText__p">Выращенных культур</p>
									<p class="actives__stat__p">5+</p>
									<p class="actives__statText__p">Стран экспоортных поставок</p>
								</div>
								</a>
								<a class="a__black log" href="comps/asib">
								<div class="activess ">
									<p class="actives__type__p">ЛОГИСТИКА</p>
									<p class="actives__title__p">Асиб GROUP</p>
									<p class="actives__stat__p">2021</p>
									<p class="actives__statText__p">Год основания компании</p>
									<p class="actives__stat__p">30+</p>
									<p class="actives__statText__p">Услуг аутсорсинга</p>
									<p class="actives__stat__p">50+</p>
									<p class="actives__statText__p">Человек - Численность персонала</p>
								</div>
								</a>
								<a class="a__black invest" href="comps/askPteLtd">
								<div class="activess ">
									<p class="actives__type__p">Инвестиции</p>
									<p class="actives__title__p">Askella Invest</p>
									<p class="actives__stat__p">2009</p>
									<p class="actives__statText__p">Год основания компании</p>
									<p class="actives__stat__p">50 млн$</p>
									<p class="actives__statText__p">Инвестиции</p>
									<p class="actives__stat__p">10+</p>
									<p class="actives__statText__p">Сотруднечеств с портами</p>
								</div>
								</a>	
								<a class="a__black log" href="comps/npkMir">
								<div class="activess ">
									<p class="actives__type__p">ЛОГИСТИКА</p>
									<p class="actives__title__p">НПК МИР</p>
									<p class="actives__stat__p">2021</p>
									<p class="actives__statText__p">Год основания компании</p>
									<p class="actives__stat__p">10</p>
									<p class="actives__statText__p">Зарегестрированных патентов</p>
									<p class="actives__stat__p">40+</p>
									<p class="actives__statText__p">Разработанных моделей</p>
								</div>
								</a>
								

								<!-- <a class="a__black log" href="comps/askGlobalPort">
								<div class="activess ">
									<p class="actives__type__p">ИНВЕСТИЦИИ</p>
									<div>
										<p class="actives__title__p">ТПК МИР</p>
										<p class="actives__title__p__small">УЗБЕКИСТАН</p>
									</div>
									<p class="actives__stat__p">2009</p>
									<p class="actives__statText__p">Год основания компании</p>
									<p class="actives__stat__p">50 млн$</p>
									<p class="actives__statText__p">Инвестиции</p>
									<p class="actives__stat__p">10+</p>
									<p class="actives__statText__p">Сотруднечеств с портами</p>
								</div>
								</a>

								<a class="a__black log" href="comps/askGlobalPort">
								<div class="activess ">
									<p class="actives__type__p">ЛОГИСТИКА</p>
									<div>
										<p class="actives__title__p">ТПК МИР</p>
										<p class="actives__title__p__small">КАЗАХСТАН</p>
									</div>
									<p class="actives__stat__p">2011</p>
									<p class="actives__statText__p">Год основания компании</p>
									<p class="actives__stat__p">1 млн тонн</p>
									<p class="actives__statText__p">Перевезённых грузов</p>
									<p class="actives__stat__p">> 1 млн кв. м </p>
									<p class="actives__statText__p">Складская площадь</p>
								</div>
								</a>

								<a class="a__black log" href="comps/askGlobalPort">
								<div class="activess ">
									<p class="actives__type__p">ПРОИЗВОДСТВО</p>
									<div>
										<p class="actives__title__p">ТПК МИР</p>
										<p class="actives__title__p__small">РОССИЯ</p>
									</div>
									<p class="actives__stat__p">2021</p>
									<p class="actives__statText__p">Год основания компании</p>
									<p class="actives__stat__p">10</p>
									<p class="actives__statText__p">Зарегестрированных патентов</p>
									<p class="actives__stat__p">40+</p>
									<p class="actives__statText__p">Разработанных моделей</p>
								</div>
								</a> -->

								<a class="a__black log" href="comps/askGlobalPort">
								<div class="activess ">
									<p class="actives__type__p">ЛОГИСТИКА</p>
									<p class="actives__title__p">Ask Global Port</p>
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
				</div>	
				<div class="fourth__block">
					<div class="container">
						<div class="third__invest_cost">
							<div class="flex__row">
								<div class="fourth__text">
									<p class="actives__title">Увеличиваем финансовые показатели</p>
									<img class="graphic__img" src="img/main/480/graphic.svg">
									<p class="actives__statText__p">ЕПК АСКЕЛЛА находится в процессе постоянного поиска новых идей для Построения классического Международного Концерна и реализация Международных проектов, где будут задействованы как можно больше компаний, входящих в ЕПК АСКЕЛЛА.</p>
									<a href="#suggestProject"><div class="butt div__about__text3 modalOpener" ><p class="about__text3">ПРЕДЛОЖИТЬ ПРОЕКТ</p></div></a>
								</div>
								<div class="third__graphic">
									<div class="third__img">
										<p class="third__img__p1"><span style="visibility: hidden;">0</span>234</p>
										<p class="third__img__p2">400</p>
										<p class="cot__percent">+170,9%</p>
										<img class="triangle1_1" src="img/main/triangle1_1.svg">
										<img class="triangle1_2" src="img/main/triangle1_2.svg">
										<img class="line" src="img/main/line.svg">
									</div>
								</div>
							</div>
						</div>			
					</div>
					<img class="lineUnder" src="img/main/lineUnder.svg">
				</div>

	
			</div>
		</div>

		

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

  		<div id="companies__structures" class="zatemnenie">
			<a class="bgPopup" href="#header"></a>
			<div class="flex__column">
			<div class="window">
				<a href="#header"><img src="img/main/closeWindow.svg" class="imgClose"></a>
				<img src="img/main/companyCtructures.png">
  			</div>
  			<div class="zaglushka"></div>
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
		<script type="text/javascript" src="js/companies.js"></script>
</body>
</html>