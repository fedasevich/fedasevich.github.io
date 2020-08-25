<!-- Через 10 секунд после появления сообщения об отправке или ошибке — отправляемся на сайт Кода :) -->
<meta http-equiv='refresh' content='1; url=succes.html'>
<meta http-equiv='refresh' content='5; url=succes.html'>
<meta charset="UTF-8" />

<!-- Начался блок PHP -->

<?php

// Получаем значения переменных из пришедших данных

$name = $_POST['name'];

$email = $_POST['email'];

$mail = "yurafedasevka@gmail.com";

$header = $_POST['phone'];

$header2 ="Форма зв'язку";

$message = $_POST['message'];

// Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме 

$mes = "Им'я: $name \nE-mail: $email \nНомер телефону: $header \nТекст: $message";

// Пытаемся отправить письмо по заданному адресу

// Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты

$send = mail ($mail,$header2,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");

// Если отправка прошла успешно — так и пишем 

if ($send == 'true')

{
	echo "Сообщение отправлено";
}

// Если письмо не ушло — выводим сообщение об ошибке

else {echo "Ой, что-то пошло не так";}

?>



<h2 class="test">12312</h2>