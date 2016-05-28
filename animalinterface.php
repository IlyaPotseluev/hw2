Отличия интерфейса от абстрактного класса: 
1)в описании интерфейса отсутствуют свойства, и ВСЕ методы(которые так же описываются без реализации) должны быть public <br>
2)интерфейс реализуется (implements), а абстрактный класс наследуется(extends). <br>
3) в интерфейсе наследник может реализовывать методы нескольких интерфейсов,  <br>
в то время как в абстрактном классе наследник имеет только одного родителя. <br>
<hr>

<?php

interface iface
{function getSpecies($spec);
 function geType($typ);
}

class Animals implements iface
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

function geType($typ)
{
	return $typ;
}

}

$object = new Animals('salt','string');

echo $object->getSpecies('sugartwo');
echo ' '.$object->geType('wordtwo');

?>