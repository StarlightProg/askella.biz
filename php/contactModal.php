<?php
	require 'phpmailer/PHPMailer.php';
	require 'phpmailer/SMTP.php';
	require 'phpmailer/Exception.php';


	$name = trim(urldecode(htmlspecialchars($_POST['name'])));
	$tel = trim(urldecode(htmlspecialchars($_POST['telephone'])));
	$per = trim(urldecode(htmlspecialchars($_POST['person__type'])));
	$mes = trim(urldecode(htmlspecialchars($_POST['message'])));

	//$file = $_FILES['file'];

	$mail =  new PHPMailer\PHPMailer\PHPMailer();
	$mail->CharSet = "UTF-8";

	// $mail->isSMTP();   
 //    $mail->CharSet = "UTF-8";
 //    $mail->SMTPAuth   = true;
    
 //    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

	$mail->From = 'mail.ru@pkz33.hoster.kz';
	//$mail->FromName = 'Mailer';
	$mail->addAddress('askella@askella.biz', 'User');

	$mail->isHTML(true);
	$mail->Subject = 'Связаться с нами';
	$mail->Body    = "Имя: ".$name."\r\n".$per."\r\n"."Телефон:".$tel."\r\n"."Сообщение:".$mes;

	if (array_key_exists('file', $_FILES)) {
	    for ($ct = 0; $ct < count($_FILES['file']['tmp_name']); $ct++) {
	        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['file']['name'][$ct]));
	        $filename = $_FILES['file']['name'][$ct];
	        //echo $_FILES['file']['name'][$ct];
	        if (move_uploaded_file($_FILES['file']['tmp_name'][$ct], $uploadfile)) {
	            $mail->addAttachment($uploadfile, $filename);
	        } else {
	             $rfile[] = "Не удалось прикрепить файл $filename";
	        }
	    }   
	}

	$mail->send();

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Заявка отправлена</title>
	<link rel="icon" sizes="16x16" type="image/x-icon" href="../img/favicon16.ico">
		<link rel="icon" sizes="32x32" type="image/x-icon" href="../img/favicon32.ico">
		<!-- Адаптив -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<!-- Подключаем CSS -->
	<link rel="stylesheet" href="../css/styleGeneral.css" />
	<link rel="stylesheet" href="../css/styleComps.css" />
	<link rel="stylesheet" href="../css/styleModal.css" />
	<!-- Кодировка страницы -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<div class="wrapper">
			<div class="content">

				<div class="main">
					<div class="videoDiv">
						<div class="videoBg" style="position: absolute;width:100%;z-index: -3;background-color: #01336E;"></div>
						<img src="../img/main/linesVideoComp.png" class="lines__Video">
						<video loop muted autoplay class="main__video" id="main__video" style="height: 765px;">
								<source src="../videos/viz.webm" type='video/webm; codecs="vp8, vorbis"'>
									<source src="../videos/viz.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
						</video>
						<div class="bg__video"></div>
						
					</div>
					<div class="container">
						<div class="main__column">
							<div class="flex__column">
								<p class="main__title">Ваша заявка успешно отправлена</p>
								<p class="main__text">С Вами свяжутся в течение 15-ти минут.</p>
								<a href="../main"><div class="butt div__about__text3"><p class="about__text3">Вернуться на главную</p></div></a>
							</div>
						</div>	
					</div>			
				</div>

			</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/google-translate.js"></script>
<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
		<script type="text/javascript" src="../js/modal.js"></script>
</body>
</html>