<?php
// 1. Змінні $a і $b
$a = 5;
$b = 10;

echo "<h3>1. Арифметичні операції:</h3>";
echo "Сума: " . ($a + $b) . "<br>";
echo "Різниця: " . ($a - $b) . "<br>";
echo "Добуток: " . ($a * $b) . "<br>";
echo "Ділення: " . ($a / $b) . "<br>";

// 2. Масив днів тижня
$days = ["Понеділок", "Вівторок", "Середа", "Четвер", "П’ятниця", "Субота", "Неділя"];

echo "<h3>2. Масив днів тижня:</h3>";
echo "3-й день: " . $days[2] . "<br>";
echo "5-й день: " . $days[4] . "<br>";

// 3. Асоціативний масив товарів
$products = [
    "Хліб" => 25,
    "Молоко" => 30,
    "Сир" => 80
];

echo "<h3>3. Товари:</h3>";
foreach ($products as $product => $price) {
    echo "$product: $price грн<br>";
}

// 4. Switch по дню тижня
$day = "Monday";

echo "<h3>4. Повідомлення за днем тижня:</h3>";
switch ($day) {
    case "Monday":
        echo "Початок робочого тижня!<br>";
        break;
    case "Friday":
        echo "Останній робочий день!<br>";
        break;
    case "Sunday":
        echo "Вихідний день!<br>";
        break;
    default:
        echo "Звичайний день.<br>";
        break;
}

// 5. Перевірка парності
$x = 7;

echo "<h3>5. Перевірка числа:</h3>";
if ($x % 2 == 0) {
    echo "$x — парне число.";
} else {
    echo "$x — непарне число.";
}
?>