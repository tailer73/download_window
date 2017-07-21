<div class="b-popup" id="popup1">
	<?php
   function file_force_download($file) {
	if (file_exists($file)) {
    // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
    // если этого не сделать файл будет читаться в память полностью!
    if (ob_get_level()) {
      ob_end_clean();
    }
    // заставляем браузер показать окно сохранения файла
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    // читаем файл и отправляем его пользователю
    readfile($file);
    exit;
  }
}
	if(isset($_POST['download']))
	{
	file_force_download("/var/www/1.exe");//тут в качестве параметра передается путь к файлу
	}
?>
	<script type="text/javascript">
	$(document).ready(function(){
    PopUpHide();
	});
	</script>
    <div class="b-popup-content">
	<form method="POST">
	<input type="submit" id="Button1" onclick="PopUpHide()" name="download" value="Загрузить" style="position:absolute;cursor:pointer;left:32%;top:19%;width:96px;height:25px;">
	<input type="submit" id="Button1" onclick="PopUpHide()" name="no" value="Позже" style="position:absolute;cursor:pointer;left:60%;top:19%;width:96px;height:25px;">
  
	</form>
Здесь пиши свой текст
 </div>
</div>
