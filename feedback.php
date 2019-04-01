<?php 

$sendTo   = "titov8victor@yandex.ru"; // Обязательно измените e-mail на свой
$sendToCc = "victor180188@gmail.com"; // Скрытая копия
$file_name= "img/to_mail_logo.jpg";
$usermail = $_POST['mail'];
$username = $_POST['name'];
$content  = nl2br($_POST['message']);



// Формирование заголовка сообщения.
$subject  = "Сообщение с обртной формы сайта BAK-ONE";

// Формируем заголовок письма

$header  = "From: " . strip_tags($usermail) . "\r\n";
$header .= "Cc:" . strip_tags( $sendToCc ) . "\r\n";
$header .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type:text/html; charset=utf-8\r\n";
// Формирование тела письма
$msg .= '<html><body style = "background-color: rgb(247, 247, 247); width: 90%; margin: 10px auto; font-family: Arial, Helvetica, sans-serif;">
<h2>Новое сообщение от пользователя сайта Bak-one.</h2>
<dl><dt><strong>Name:</strong></dt>
<dd>' . $username . '</dd></dl>
<dl><dt><strong>EMail:</strong></dt>
<dd>' . $usermail . '</dd></dl>
<dl><dt><strong>Message:</strong></dt>
<dd style="font-style:italic;">' . $content . '</dd></dl>
</body></html>';


// отправка сообщения
if(mail($sendTo, $subject, $msg, $header)) {
    echo "true";    
} else {
	echo "false";
}



?>