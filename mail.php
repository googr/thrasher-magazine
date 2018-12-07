<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Обратная связь</title>
</head>
<body >
<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['mess'])) {$mess = $_POST['mess'];}
if (isset($_POST['a'])) {$a = $_POST['a'];}
if (isset($_POST['b'])) {$b = $_POST['b'];}
if (isset($_POST['sum'])) {$sum = $_POST['sum'];}

if (empty($name))//Проверка ввода имени//
{
echo "<b>Не указано имя!<p>";//Если не введено имя, выводим сообщение//
echo "<a href=forma.html>Вернуться к заполнению формы</a>";
}
else
if (empty($email))//Проверка ввода email
{
echo "<b>Не указан e-mail!<p>";
echo "<a href=forma.html>Вернуться к заполнению формы</a>";
}
else
if (empty($mess))//Проверка ввода текста сообщения
{
echo "<b>Сообщение не написано!<p>";
echo "<a href=forma.html>Вернуться к заполнению формы</a>";
}
else
{
$s = $a + $b;//Присваиваем переменной $s значение суммы a+b
if (empty($s))//Проверка ввода чисел
{
echo "<b>Не введены числа или сумма равна нулю!<p>";
echo "<a href=forma.html>Вернуться к заполнению формы</a>";
}
else
if ($s != $sum)//Сравниваем значение суммы с введенным посетителем сайта
{
echo "<b>Введите правильно сумму!<p>";//Если результаты разные, выводим сообщение об ошибке
echo "<a href=forma.html>Вернуться к заполнению формы</a>";
}
else//Если результаты совпадают, отправляем письмо
{
$to = "googr@mail.ru"; 
$headers = "Content-type: text/plain; charset = charset=utf-8";
$subject = "Сообщение с вашего сайта";
$message = "Имя пославшего: $name \nЭлектронный адрес: $email \nСообщение: $mess";
$send = mail ($to, $subject, $message, $headers);
if ($send == 'true')
{
echo "<b>Спасибо за отправку вашего сообщения!<p>";
}
else
{
echo "<p><b>Сообщение не отправлено. Приносим свои извинения.";
echo "<p><b>Попробуйте повторить отправку позже.";
}
}
}
?>
</body>