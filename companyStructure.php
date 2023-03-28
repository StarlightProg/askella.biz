<!DOCTYPE html>
<html>
<head>
	<title>Структура компаний</title>
	<link rel="icon" sizes="16x16" type="image/x-icon" href="img/favicon16.ico">
		<link rel="icon" sizes="32x32" type="image/x-icon" href="img/favicon32.ico">
		<!-- Адаптив -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<!-- Подключаем CSS -->
	<link rel="stylesheet" href="css/styleGeneral.css" />
	<link rel="stylesheet" href="css/stylePolicy.css" />
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
				<div class="container">
					<div class="flex__column mar">
						<div class="flex__row ">
								<p><a class="p__main" href="/">Главная</a> <span class="span__main" style="opacity: 0.6">| Структура компаний</span></p>							
						</div>
						<p class="main__title">Структура компаний</p>
						<img class="structImg" src="img/companyStruct.png">
					</div>
					
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
		<script type="text/javascript" src="js/policy.js"></script>
</body>
</html>