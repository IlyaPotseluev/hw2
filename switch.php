<form method="post" action "switch.php">
<input type="text" name= "var" placeholder ="|Введите число!" required/>
<input type="submit" name="submit" value="Вывести число"/>
<br>
<?php
if(isset($_POST['submit'])){ 
$var = $_POST['var'];
}
switch ($var)

{
	case "2": echo 'Двойка'; break;
	case "3": echo 'Тройка'; break;
	default: echo "Какое-то значение ($var)"; break;
		
}
?>