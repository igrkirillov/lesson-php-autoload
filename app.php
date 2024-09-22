<?php

function namespaceAutoload($rawClass){
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $rawClass);
    require_once($class . ".php");
}

// регистрация spl_autoload
spl_autoload_register("namespaceAutoload");


use Human\Student as Student;
use Technics\Device\TV as TV;

$samsungTv = new TV(32, "32VNC", "Samsung");
$sonyTv = new TV(65, "65TC", "Sony");

$meStudent = new Student("Игорь Кириллов", 37);
$myFriendStudent = new Student("Вася Иванов", 22);

logTVInfo($samsungTv);
logTVInfo($sonyTv);

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