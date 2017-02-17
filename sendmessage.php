<?php
$to = "sinnapsteam@yandex.ru ";
$phone = $_POST['phone'];
$uname = $_POST['uname'];
$text = $_POST['text'];
$product = $_POST['product'];
$par = $_POST['par'];
$price = $_POST['price'];



// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: info@starlight.space" . "\r\n";
$headers .= "Reply-To: info@starlight.space".  "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body>";
$msg .= "<h2>Новое сообщение</h2>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$uname."</p>\r\n";

$msg .= "<p><strong>Наименование товара:</strong> ".$product."</p>\r\n";
$msg .= "<p><strong>Количество пар в кейсе:</strong> ".$par."</p>\r\n";
$msg .= "<p><strong>Цена кейса:</strong> ".$price."</p>\r\n";

$msg .= "<p><strong>Сообщение:</strong> ".$text."</p>\r\n";
$msg .= "</body></html>";


// отправка сообщения
@mail($to, $subject, $msg, $headers);

?>