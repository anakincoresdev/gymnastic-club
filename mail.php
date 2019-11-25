<?php

// Получение данных полей формы
$user_name = trim($_POST['name']);
$user_phone = trim($_POST['phone']);
$user_age = trim($_POST['age']);
$form_type = trim($_POST['type']);

// Метаданные для отправки письма
$email_admin  = 'coffeesmile@1gb.ru';
$email_to = 'gclub@yandex.ru, anakincore@yandex.ru';
$sitename  = 'Gymnastic club';
$subject   = 'Новая заявка с сайта: ' . $sitename;
$header = 'From:' . $email_admin;

// Формирование текста письма
$message = '';
if($user_name) {
    $message .= 'Имя: ' . $user_name . "\n";
}
if($user_phone) {
    $message .= 'Номер телефона: ' . $user_phone . "\n";
}
if($user_age) {
    $message .= 'Возраст ребенка: ' . $user_age . "\n";
}
if($form_type) {
    $message .= 'Тема: ' . $form_type . "\n";
}

mail($email_to, $subject, $message, $header);
?>