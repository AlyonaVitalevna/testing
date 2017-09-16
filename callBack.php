<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>


<?php
if(!empty($_POST['telephone'] ))
{
$to = "iamindividual@mail.ru";
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['telephone']; // сохраняем в переменную данные полученные из поля c телефонным номером

// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($username) . "\r\n";
$headers .= "Reply-To: ". strip_tags($username) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$message  = "<html><body style='font-family:Arial,sans-serif;'>";
$message .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$message .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$message .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$message .= "</body></html>";

$result = mail($to, $subject, $message, $headers);

    if ($result){ 
        echo "<p>Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи</p>";
    }
    else{
        echo "<p>Cообщение не отправленно. Пожалуйста, попрбуйте еще раз</p>";
    }
}
else {
echo "<p>Обязательные поля не заполнены. Введите номер телефона</p>";
}
?>
</body>
</html>