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
$to = "pixmaqwerty@mail.ru";
$from = 'info@superdvor.by';
$subject = "Заявка";
$message = 'Имя: '.$_POST['name'].'; Телефон: '.$_POST['telephone'].'; Cообщение: '.$_POST['message'].';';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <info@superdvor.by>\r\n";
$result = mail($to, $subject, $message, $headers);

    if ($result){ 
        echo "<p>Cообщение УСПЕШНО отправленно. Пожалуйста, оставайтесь на связи</p>";
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