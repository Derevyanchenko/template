<?php

$subject = trim($_POST['subject']);



//Проверка поля ИМЯ



$username = trim($_POST['name']);

if (isset($_POST['name'])) {

 $body_name = "Имя: $username<br>";

}



//Проверка поля ТЕЛЕФОН



$telephone = trim($_POST['tel']);

if (isset($_POST['tel'])){

  $body_telephone = "Номер телефона: $telephone<br>";

}


//Проверка поля ТЕЛЕФОН



$email = trim($_POST['zasneg']);

if (isset($_POST['zasneg'])){

 $body_email = "Сосна Заснеженная,  $email <br>";

}



$zelenaya = trim($_POST['zelena']);

if (isset($_POST['zelena'])){

 $body_zelenaya = "Сосна Зеленая,  $zelenaya <br>";

}

$razpushen = trim($_POST['razpush']);

if (isset($_POST['razpush'])){

 $body_razpushen = "Сосна Распушенная,  $razpushen <br>";

}

$sospvh = trim($_POST['pvh']);

if (isset($_POST['pvh'])){

 $body_sospvh = "Ель ПВХ,  $sospvh <br>";

}

$litayasos = trim($_POST['litaya']);

if (isset($_POST['litaya'])){

 $body_litayasos = "Ель Литая,  $litayasos <br>";

}

$country = trim($_POST['country']);

if (isset($_POST['country'])){

 $body_country = "Город: $country<br>";

}	



//Проверка наличия ТЕКСТА сообщения



$message = trim($_POST['message']);

if (isset($_POST['message'])){ 

  $body_message = "Сообщение:\n $message";

}








//Если ошибок нет, отправить email

if (!isset($hasError)) {

  echo "<p class='thanks center beliy'>Спасибо, ".$username ."  вы выбрали " .$email . " ". $zelenaya ." ". $razpushen ." ". $sospvh ."  ". $litayasos ." елку.<br /> Ваша заявка принята </p>";

  

  $body = "

  <h4>$subject</h4>

  $body_name

  $body_telephone

  $body_email

  $body_message

  $body_country

  $body_zelenaya

  $body_razpushen

  $body_sospvh

   $body_litayasos
  ";

  mail_utf8('ihor.dolar@yandex.ru', $email, 'Сообщение с сайта', $body);

}



function mail_utf8($to, $from, $subject, $message)

{

  $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

  $headers = "MIME-Version: 1.0\r\n";

  $headers .= "Content-type: text/html; charset=utf-8\r\n";

  $headers .= "From: $from\r\n";

  return mail($to, $subject, $message, $headers);

}

?>