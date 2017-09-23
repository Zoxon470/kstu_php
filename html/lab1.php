<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Шаблон</title>
</head>
<body>
	<?php
		$name = 'Ахмед';
		$surname = 'Асадов';
		$fullName = 'Имя: ' . $name . '</br>' . 'Фамилия: ' . $surname;
		echo "<b><i>$fullName</i></b></br>";
		$linkAddress = 'http://www.iet.kg';
		$linkText = 'Это мой институт';
		echo "<a href='$linkAddress'>$linkText</a></br>";
		$emailAddress = 'mailto:zoxon470@gmail.com';
		$emailText = 'Мой E-mail';
		echo "<a href='$emailAddress'>$emailText</a></br>";

		
		$today = date("F j, Y, g:i a"); 
		echo $today . '</br>';
		$today = date("m.d.y");
		echo $today . '</br>';
		$today = date("j, n, Y");
		echo $today . '</br>';

		$a = 5;
		echo '<br>$a='.$a;



	?>
</body>
</html>