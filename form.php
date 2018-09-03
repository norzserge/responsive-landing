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
$to = "metelskiysa@karandash.pw";
$from = 'metelskiisa@mail.ru';
$subject = "У нас новый клиент!";
$message = 'Имя: '.$_POST['name'].'; Телефон: '.$_POST['telephone'].'; Email: '.$_POST['email'].'; Компания: '.$_POST['company'].'; Сообщение: '.$_POST['message'].';';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <metelskiisa@mail.ru>\r\n";
$result = mail($to, $subject, $message, $headers);

    if ($result){ 
        echo "<p class='result-success'><i class='fa fa-thumbs-o-up' aria-hidden='true'></i> Ваше сообщение успешно отправленно. Пожалуйста, оставайтесь на связи.</p>";
    }
    else{
        echo "<p>Cообщение не отправленно. Пожалуйста, попробуйте еще раз</p>";
    }
}
else {
echo "<p class='result-false'><i class='fa fa-thumbs-o-down' aria-hidden='true'></i> Обязательные поля не заполнены. Введите номер телефона пожалуйста.</p>";
}
?>

</body>
</html>