<h1>PHP - 5.<!--  Основы PHP.Post и Get запросы. --></h1>

<?php 
echo "<strong>_POST array:</strong>";
echo "<br><br>";
print_r($_POST);
echo "<br><br>";

if (!empty($_POST)) {

	$message = "Вам пришло новое сообщение с сайта: \n"
	. "Имя отправителя: " . $_POST['userName'] . "\n"
	. "Email отправителя: " . $_POST['userEmail'] . "\n"
	. "Сообщение отправителя: \n " . $_POST['message'];

	$headers = "From: info@php-test.com";

	$resultMail = mail("andrew80ka@yandex.ru", "Сообщение с сайта", $message, $headers );
	if ($resultMail) {
		echo "Сообщение отправлено успешно!";
	} else {
			echo "Ошибка ввода. Письмо не отправлено.";
			}
}

 ?>
 
<form action="index.php" method="post">
	<input type="text" name="userName" placeholder="Ваше имя">
	<br><br>
	<input type="text" name="userEmail" placeholder="Ваш Email">
	<br><br>
	<textarea name="message" id="" cols="30" rows="5" placeholder="Сообщение"></textarea>
	<br><br>
	<input type="submit" value="Send Form! (Отправить форму)">
</form>