<?php
//Если форма была отправленна, то выводим ее содержимое на экран
if($_POST) {
$to = "galina@agro-personal.ru"; // почта, на которую будет приходить письмо galina@agro-personal.ru
$from = $_POST['name'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$hh = $_POST['hh'];
$region = $_POST['region'];
$email = $_POST['email'];


$headers = "Reply-To: galina@agro-personal.ru\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: ". $from ." \r\n";
$subject = "Заявка на вакансию";

$msg = "";
$msg .= $from." ";
$msg .= $phone." ";
$msg .= $company." ";
$msg .= $hh." ";
$msg .= $region." ";
$msg .= $email." ";


$result = mail($to, $subject, $msg, $headers);
if ($result){ echo "Cообщение успешно отправленно."; }
}

?>