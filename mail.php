<?php

$recepient = "b-aibulat@mail.ru";

$name = trim($_POST['name']);
$mail = trim($_POST['mail']);
$message = trim($_POST['message']);

$result_message = "Имя: $name \nEmail: $mail \nТекст: $message\n";

$title = "Новое сообщение с сайта komplekt64.ru";

mail($recepient, $title, $result_message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");