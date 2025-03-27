<?php

class Point {
    public $x;
    public $y;

    // Конструктор для инициализации координат точки
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Метод для переноса точки по оси X и Y
    public function move($dx, $dy) {
        $this->x += $dx;
        $this->y += $dy;
    }
}

class Vector {
    public $x;
    public $y;

    // Конструктор для инициализации компонентов вектора
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Метод для вычисления длины вектора
    public function length() {
        return sqrt($this->x * $this->x + $this->y * $this->y);
    }

    // Метод для проверки, является ли вектор нулевым
    public function isZero() {
        return $this->x == 0 && $this->y == 0;
    }

    // Метод для проверки перпендикулярности
    public function isPerpendicularTo($otherVector) {
        return $this->x * $otherVector->x + $this->y * $otherVector->y == 0;
    }
}

// Создаем точку T1 с произвольными координатами
$T1 = new Point(3, 4);

// Создаем произвольный вектор V1
$V1 = new Vector(3, 4);

// Создаем нулевой вектор V2
$V2 = new Vector(0, 0);

// Создаем вектор V3, перпендикулярный вектору V1 (например, (-4, 3))
$V3 = new Vector(-4, 3);

// Выводим длину каждого вектора
echo "Длина вектора V1: " . $V1->length() . "<br>";
echo "Длина вектора V2: " . $V2->length() . "<br>";
echo "Длина вектора V3: " . $V3->length() . "<br>";

// Проверяем, что V1 и V3 перпендикулярны
if ($V1->isPerpendicularTo($V3)) {
    echo "Вектор V1 и вектор V3 перпендикулярны.<br>";
} else {
    echo "Вектор V1 и вектор V3 не перпендикулярны.<br>";
}

// Переносим точку T1 на вектор V1
$T1->move($V1->x, $V1->y);
echo "Координаты точки T1 после переноса: (" . $T1->x . ", " . $T1->y . ")";
?>
