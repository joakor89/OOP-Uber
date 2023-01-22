<?php

require_once("Car.php");
require_once("UberX.php");
require_once("UberPool.php");
require_once("Account.php");

echo "Hello Uber Folks..! \n";

$uberX = new UberX("JRF303", new Account("JOAQUIN ROMERO", "JR333"), "Chevrolet", "Malibu");
$uberX->printDataCar();

$UberPool = new UberPool("ALV444", new Account("GABRIELA FLORES", "ANDA83"), "Audi", "RS7");
$UberPool->printDataCar();
?>



