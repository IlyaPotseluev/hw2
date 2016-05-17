require() включает в страницу заданный файл, <br> 
в то время как require_once() делает это только в том случае, если этот файл не был включен ранее (на одной и той же странице).<br>

Таким образом, require_once() лучше использовать, если нужно включить файл с большим количеством функций. <br>
Тогда можно быть уверенным, что файл не будет включен многократно и не 
возникнет ошибка “объявление функции дублируется”(т.к. повторное определение функций приводит к ошибке).<hr><br>

Отличие между require() и include() следущее: 
require() возвращает FATAL ERROR, если файл не найден, <br>
include() же возвращает только WARNING. 
Таким образом, require() прекращает работу приложения, если файл не найден, <br>
А include() лишь выдаёт предупреждение.
<br>Целесообразнее в большинстве случаев использовать require().  

<br><hr>

Функция include_once() работает почти так же, как и include(),<br>
а отличия те же, что и между require() и require_once().