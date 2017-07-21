Разместить все файлы в директорию со страницей, на которой будет всплывать окно загрузки.
В файле sc.php создана функция file_force_download($file), которая в качестве парамтера принимает путь к файлу,
который необходимо скачать пользователю.
Для подключения,необходимо в хедере страницы(в которой будет всплывать окно) подключить нужные файлы 
следующим образом(пример):
<head>
	<link href="about.css" rel="stylesheet">

	<script src="jquery-1.12.4.min.js"></script>

	<script src="test.js"></script>

	<?php include 'sc.php';?>

</head>

Сначал подключаем css-файл, потом библиотеку jquery, затем js-скрипт и php-файл.
Чтобы проверить работоспособность, например: при нажатии на кнопку,чтобы появлялось окно. 
Нужно в div с классом "b-container" создать кнопку, при нажатии на которую вызывается функция PopUpShow().

Пример:

<div class="b-container">

<input type="button" onclick="PopUpShow()" value="Показать!"/>

</div>
