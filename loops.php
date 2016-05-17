Цикл do-while представляет собой небольшую модификацию цикла while используемую в том случае,
<br> когда нужно, чтобы блок кода был исполнен хотя бы один раз, 
<br> а условие проверялось только после этого.<br>

<?php
for ($i=1;$i<101;$i++)
{static $sum1=0;
$sum1=$sum1+$i;}
echo $sum1.'<br>';
//-------------------
$sum2=0;
$i=1;
while ($i<101)
{	
  $sum2=$sum2+$i;
  $i++;
}
echo $sum2.'<br>';
//----------------------
do 
{ 
static $sum3=0;
static $i=1;
$sum3=$sum3+$i;
$i++;	
}
while ($i<101);
echo $sum3.'<br>';

?>




<?php
//произведение всех чисел в массиве
$arr = [1,2,3,4,5,6,7,8,9,10];
foreach ($arr as $element)

{	static $a = 1;
    $a=$a*$element;
}
	echo $a;
?>

<?php
$array = ['h','e','l','l','o'];
$array2=[];

for($i=0;$i<(sizeof($array));$i++)
{ static $z=1;
  $b = $array[sizeof($array)-$z];			
$array2[$i]=$b;
$z++;
}
print_r($array2);
?>
<hr>

<?php
//вторая версия:
$arr = ['h','e','l','l','o'];
$reversed = [];
for ($i=0; $i<count($arr); $i++) array_unshift($reversed, $arr[$i]); //array_unshift - Добавляет один или несколько элементов в начало массива. 
//В данном случае добавление в начало массива $reversed элементов массива $arr по порядку.
for ($i=0; $i<count($reversed); $i++) echo "$reversed[$i]"; 


?>