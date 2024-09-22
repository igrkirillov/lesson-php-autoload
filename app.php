<?php

function namespaceAutoload($rawClass){
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $rawClass);
    require_once($class . ".php");
}

// регистрация spl_autoload
spl_autoload_register("namespaceAutoload");


use Human\Student as Student;
use Technics\Device\TV as TV;

$tvSamsung = new TV(32, "32VNC", "Samsung");
$tvSony = new TV(65, "65TC", "Sony");

$studentMe = new Student("Игорь Кириллов", 37);
$studentMyFriend = new Student("Вася Иванов", 22);

logTVInfo($tvSamsung);
logTVInfo($tvSony);

function logTVInfo(TV $tv): void
{
    $name = $tv->getBrand() . " app.php" . $tv->getModel();
    $d = $tv->getDiagonal();
    if ($d <= TV::TV_DIAGONAL_SMALL) {
        echo "$name is small" . "\n";
    } else if ($d <= TV::TV_DIAGONAL_MEDIUM) {
        echo "$name is medium" . "\n";
    } else if ($d <= TV::TV_DIAGONAL_BIG) {
        echo "$name is big" . "\n";
    } else {
        echo "$name is super big" . "\n";
    }
}

// деактивация spl_autoload
spl_autoload_unregister("namespaceAutoload");