<?php

if ($_POST['phone'] && $_POST['phone'] !== '' ) {

	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";

	$letter = 'Имя - '.$_POST['name'].'<br>Почта - '.$_POST['email'].'<br>Телефон - '.$_POST['phone'].'<br> Сообщение: <br>'.$_POST['detail'];
	$title = 'Заказ на сайте ООО Партнер';

	mail('partner13rm@mail.ru', $title, $letter, $headers);
}