<?php
$name = $_POST['myInputName1'];
$phone = $_POST['myInputPhone1'];
$email = $_POST['myInputEmail1'];
$goods = $_POST['myInputText1'];

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$goods = htmlspecialchars($goods);

$name = urldecode($name);
$phone = urldecode($phone);
$email = urldecode($email);
$goods = urldecode($goods);

$name = trim($name);
$phone = trim($phone);
$email = trim($email);
$goods = trim($goods);

$message = 'Название товара: ' . $goods . "\r\n" .
    'Номер телефона: ' . $phone . "\r\n" .
    'Имя: ' . $name . "\r\n" .
    'Email: ' . $email . "\r\n";

$headers = 'От: ' . $email . "\r\n" .
    'Ответить: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($email, $name, $message, $headers)) {
    header("Location: http://webbooster");
}
