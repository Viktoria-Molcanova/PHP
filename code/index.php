<?php
$a = 5;
$b = '05';
var_dump($a == $b);
// В первом сравнении a  = 5, а b строке '05'. 
//Оператор == сравнивает значения, но без учёта типов.И преобразует '05' в число 5, поэтому условие истинно.
var_dump((int)'012345');
// В  примере php  интерпритирует '012345' в целое число 12345. Ответ int(12345).
var_dump((float)123.0 === (int)123.0);
//Оператор === проверяет и значение, и тип.
// (float)123.0  это число типа float, а (int)123.0  это число типа integer и так как типы разные, то и  условие ложно. Ответ bool(false).
var_dump(0=='hello, world');
//Строка 'hello, world' не может быть преобразована в число, поэтому она станет 0. Сравнение 0 и 0 истинно
// !! При смене версии  с 7.4 на 8.2 - 8.4 Последнее утверждение становится ложным, строка не интерпритируется как число. Истинно при var_dump(0==(int)'hello, world')
//
$a = 1;
$b = 2;
$a = $b + $a;
$b = $a - $b;
$a = $b + $b;
echo "a = ",$a , ", b = ",$b ;
?>
