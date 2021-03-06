Магические методы - это встроенная возможность PHP каким-то образом отреагировать на определенные ключевые события. Эти методы всегда начинаются с двойного подчёркивания.<br><hr>

Список всех магических методов: <br>
__construct<br>
__destruct<br>
__call<br>
__callStatic<br>
__get<br>
__set<br>
__isset<br>
__unset<br>
__sleep<br>
__wakeup<br>
__toString<br>
__set_state<br>
__clone<br>
<hr>

<pre>
<ul>
<li>__construct и __destruct – самые популярные методы, которые реализуют базовые понятия объектно-ориентированного программирования: конструктор и деструктор; <br>
</li>
<li>__call,  __callStatic, __get и __set – методы, связанные с перегрузкой обращений как к свойствам, так и к методам.  <br></li>
 
 <li>Методы __get() и __set() вызываются при установке и получении значения свойства, а методы __call() и __callStatic – при вызове метода. <br>
 Стоит заметить, что эти магические функции будут вызываться только и исключительно в том случае,  <br> если запрошенные метод или свойство 
не существуют;  <br></li>

<li>__isset – метод, срабатывающий при вызове функций empty() или isset() на несуществующем 
или недоступном свойстве класса; <br></li>
<li>__unset – срабатывает при вызове функции unset() на несуществующем или недоступном свойстве класса; <br></li>


<li>__sleep и __wakeup – методы, которые вызываются только из функций serialize и unserialize соответственно. <br>
 Метод __sleep будет вызван сразу при применении к объекту функции serialize, а метод __wakeup – при применении unserialize. В настоящий момент методы применяются для сохранения текущего состояния системы с последующим восстановлением данного состояния 
(например, коннект к базе); <br></li>

<li>__toString – метод, с помощью которого можно обращаться к классу как к строке (например, с 
помощью print или echo); <br></li>
<li>__set_state – метод, который вызывается для классов, экспортирующих значения свойств функцией var_export(); <br></li>

<li>__clone – вызывается при клонировании объекта (введен для использования из-за того, что объекты в php5 и выше передаются по ссылке); <br></li>
<li>__invoke – вызывается при попытке использовать объект в качестве функции.  <br> </li> </ul>
</pre>
<?php

class Room
{

	public function __construct() //этот метод сработает без вызова.
	{echo 'Объект создан'.'<br>';}

	public function __invoke()
	{echo 'Мы обратились к объекту как к функции <br>';}

	public function __toString()
	{ echo 'Мы обратились к объекту как к строке';}
}

$myroom = new Room(); //магический метод __construct сработает при создании экземпляра класса. 
$myroom();
//когда обращаемся к объекту как к функции.
echo $myroom;
?>

