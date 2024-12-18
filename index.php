<?php

// Подключаем автозагрузку Composer
require __DIR__ . '/vendor/autoload.php';

use Animal\Dog;
use Animal\Cat;

// Функция для получения ввода от пользователя
function getUserInput($prompt) {
    echo $prompt;
    $handle = fopen("php://stdin", "r");
    $input = trim(fgets($handle)); // Получаем ввод и убираем лишние пробелы
    fclose($handle);
    return $input;
}

// Запрос у пользователя выбрать животное
$animalType = getUserInput("Выберите животное (dog/cat): ");

// Создаем объект животного в зависимости от выбора
$animal = null;
if ($animalType === "dog") {
    $animal = new Dog();
} elseif ($animalType === "cat") {
    $animal = new Cat();
} else {
    echo "Неизвестное животное!\n";
    exit; // Завершаем программу, если выбран неверный тип
}

// Запрос данных для обработки
$userInput = getUserInput("Введите данные для обработки: ");

// Обрабатываем данные через метод processInput
$processedData = $animal->processInput($userInput);

// Выводим обработанные данные и информацию о животном
echo "Обработанные данные: " . $processedData . "\n";
echo $animal->getInfo() . "\n";
