Рекурсия - это когда объект является частью самого себя. 
<br>Рекурсивная функция - это функция, которая вызывает сама себя.

<form method="post" action "switch.php">
<input type="text" name= "var" placeholder ="|Введите число!" required/>
<input type="submit" name="submit" value="Вывести факториал числа"/>
<br>
<?php

if(isset($_POST['submit'])){ 
$var = $_POST['var'];
print_r(factorial($var));
}

function factorial($b)
{ static $count=1;
  static $i=1;
  
  while ($i<$b)
  { $count= ($count*($i+1));
	 $i++; 
  }
	return $count;
  }
  
?>