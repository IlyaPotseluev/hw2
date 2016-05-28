Класс - это шаблон кода, который используется для создания объектов.  <br>
Класс объявляется с помощью ключевого слова class <br>
и произвольного имени класса. <br>
В именах классов может использоваться любое сочетание букв и цифр, <br>
но они не должны начинаться с цифры. <br>
Код, связанный с классом, должен быть заключен в фигурные скобки.
<hr>
Объект - это данные, которые структурируются в соответствии с шаблоном, <br>
определенным в классе. При этом говорят, что объект - это экземпляр класса. <br>
Его тип определяется классом.
<hr>
Помимо вытекающих из своих определений, ключевыми отличиями класса от объекта в php являются следующие: <br>
1)класс - как, правило, это набор функций, а объект - набор данных. 

2)Некоторые функции в классе могут быть использованы только с набором данных (т.е. объектом),<br>
который передается неявно, когда мы указываем $object->method(). <br>
Другие функции не требуют объекта, поэтому могут быть вызваны напрямую из класса.<br>

3)Без реализации класса (создания объекта) Вы можете работать только со статическими методами/свойствами класса.
<hr>
При создании нового объекта вызываемому классу можно передать перечень аргументов.
Они передаются специальному методу внутри класса, который называется 
конструктором и занимается инициализацией различных свойств.
//<pre>
{
function __construct($param1, $param2)
    {
      // Сюда помещаются инструкции конструктора
	public $username = "Guest";}
	//</pre>
	<hr>
	
<?php
class Animals
{
public $species = null;
public $type = null;

function __construct($species,$type)
{ $this ->species=$species;
$this->type=$type;

}
function getSpecies($spec)
{	
	return $spec;}

function getype($typ)
{
	return $typ;
}
function getType($var)
{ $a=gettype($var);
		return $a;
}
}

$object = new Animals('salt','string');

echo $object->getSpecies('sugar');
echo ' '.$object->getype('word');
echo ' '.$object->getType(2);

?>

<h3> Абстрактные классы </h3>
Абстрактный класс - базовый класс, который не предполагает создания экземпляров, <br>
иными словами, объект абстрактного класса создать нельзя, и, соответственно, <br>
конструктор в абстрактном классе так же не нужен, т.к. конструктор вызывается только при создании экземпляра класса. <br>


Абстрактный класс содержит характеристики сущности, отличающие её от других сущностей.<br>
Абстрактный класс определяется с помощью ключевого слова abstract.<br>

Абстрактный метод - это метод, который не может иметь реализацию в абстрактном классе.<br>
Он объявляется как обычный метод, но объявление заканчивается точкой с запятой, <br>
а не телом метода. <br> 
Создавая абстрактный метод, гарантируется, что его реализация будет доступна во всех конкретных<br>
дочерних классах, но детали этой реализации остаются неопределенными.<br>
Любой класс, содержащий абстрактные методы, должен быть абстрактным. <br><hr>

<?php

abstract class Animalss
{
public $species = null;
public $type = null;


abstract function getSpecies($spec);

abstract function getype($typ);



//abstract function getType($var);

}

class Animalone extends Animalss
{
function __construct($species,$type)
	{$this ->species=$species;
	$this->type=$type;
	
	}
	
	
	function getSpecies($spec)
	{
		return $spec; }
	function getype($typ)
	{return $typ;}
	
	}



class Animaltwo extends Animalone

{ 
	
}
	


$obj = new Animaltwo('salt','string');
echo $obj->getSpecies('sugar');
echo ' '.$obj->getype('word');
	
?>

<hr><br> <h3>Статические функции.</h3> <br>

Статический метод - метод, который можно вызвать в классе, но не в объекте.<br>
Статический метод не имеет доступа ни к одному из свойств объекта.<br>
<pre>
При попытке получить доступ к свойству текущего объекта с помощью выражения $this->property 
или получить доступ к другим свойствам объекта внутри статической функции 
будет выдано сообщение об ошибке
</pre>


<?php
class Animalsss
{
public $species = null;
public $type = null;
public static $piece = null;
public static $type1 = null;

function __construct($species,$type)
{ $this ->species=$species;
$this->type=$type;
}
function getSpecies($spec)
{	
	return $spec;}

function getype($typ)
{	
	return $typ;
}
//--------------------------------------------------------
static function setPieces($val1)
{return self::$piece=($val1*2).'<br>';
			
}
static function seType($val2)
{ return self::$type1=$val2." - type.<br>"; 
  	}
}

echo Animalsss::setPieces(3);
echo Animalsss::seType('integer');

$object = new Animalsss('salt','string');

echo $object->getSpecies('sugar');
echo ' '.$object->getype('word');



?>