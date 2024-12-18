<?php

require __DIR__ . '/vendor/autoload.php';

use Animal\Dog;
use Animal\Cat;

function getUserInput($prompt) {
    echo $prompt;
    $handle = fopen("php://stdin", "r");
    $input = trim(fgets($handle));
    fclose($handle);
    return $input;
}

$animalType = getUserInput("Выберите животное (dog/cat): ");

$animal = null;
if ($animalType === "dog") {
    $animal = new Dog();
} elseif ($animalType === "cat") {
    $animal = new Cat();
} else {
    echo "Неизвестное животное!\n";
    exit; 
}

$userInput = getUserInput("Введите данные для обработки: ");

$processedData = $animal->processInput($userInput);

echo "Обработанные данные: " . $processedData . "\n";
echo $animal->getInfo() . "\n";
