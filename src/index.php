<?php
include "App.php";
// Демонстрация всех магических методов

// 1. __construct - вызов конструктора при создании объекта
$obj = new MagicClass(); // __construct

// 2. __call - попытка вызова несуществующего метода
$obj->nonExistentMethod(); // __call: nonExistentMethod

// 3. __callStatic - вызов несуществующего статического метода
App\MagicClass::staticMethod(); // __callStatic: staticMethod

// 4. __get - попытка обращения к несуществующему свойству
echo $obj->someProperty; // __get: someProperty

// 5. __set - попытка присваивания значения несуществующему свойству
$obj->someProperty = "value"; // __set: someProperty = value

// 6. __isset - проверка существования несуществующего свойства
isset($obj->someProperty); // __isset: someProperty

// 7. __unset - попытка удалить несуществующее свойство
unset($obj->someProperty); // __unset: someProperty

// 8. __toString - преобразование объекта в строку
echo $obj; // __toString

// 9. __invoke - использование объекта как функции
$obj(); // __invoke

// 10. __sleep - сериализация объекта
$serialized = serialize($obj); // __sleep

// 11. __wakeup - десериализация объекта
$unserialized = unserialize($serialized); // __wakeup

// 12. __clone - клонирование объекта
$objClone = clone $obj; // __clone

// 13. __debugInfo - отладочная информация об объекте
var_dump($obj); // __debugInfo

// 14. __set_state - восстановление объекта из массива
$exported = var_export($obj, true);
eval('$newObj = ' . $exported . ';'); // __set_state

// 15. __destruct - уничтожение объекта
unset($obj); // __destruct
?>
