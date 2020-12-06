<?php
// Файлы phpmailer
require './phpmailer/PHPMailer.php';
require './phpmailer/SMTP.php';
require './phpmailer/Exception.php';


$formType = $_POST['form_type'];

if ($formType == 'newsletter') {
  $email = $_POST['email'];

  $title = "Новое подписка Best Tour Plan";
  $body = "<h2>Внести пользователя " . $email . " в рассылку</h2>";

  $successMessage = "Вы подписались на рассылку Best Tour Plan!";
  $errorMessage = "При отправке запроса произошла ошибка";
} elseif ($formType == 'contact') {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $title = "Новое сообщение Best Tour Plan";
  $body = "
  <h2>Новое письмо</h2>
  <b>Имя:</b> $name<br>
  <b>Номер телефона:</b> $phone<br><br>
  <b>Сообщение:</b><br>$message
  ";

  $successMessage = "Сообщение отправлено!";
  $errorMessage = "Сообщение не отправлено!";
} else {
}

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
  $mail->isSMTP();
  $mail->CharSet = "UTF-8";
  $mail->SMTPAuth   = true;
  // $mail->SMTPDebug = 2;
  $mail->Debugoutput = function ($str, $level) {
    $GLOBALS['status'][] = $str;
  };

  // Настройки вашей почты
  $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
  $mail->Username   = 'glo.studying@gmail.com'; // Логин на почте
  //TODO: set password before deploying
  $mail->Password   = ''; // Пароль на почте
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;
  $mail->setFrom('glo.studying@gmail.com', 'Best Tour Plan'); // Адрес самой почты и имя отправителя

  // Получатель письма
  $mail->addAddress('almiskov@gmail.com');

  // Отправка сообщения
  $mail->isHTML(true);
  $mail->Subject = $title;
  $mail->Body = $body;

  // Проверяем отравленность сообщения
  if ($mail->send()) {
    $result = "success";
  } else {
    $result = "error";
  }
} catch (Exception $e) {
  $result = "error";
  $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
header("Location: /tour-plan/thanks.php?result=" . $result . "&type=" . $formType);
