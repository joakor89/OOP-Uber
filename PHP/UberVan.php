<?php
require_once('Car.php');
class UberVan extends Car {
    public $typeCarAccepted;
    public $seatsmaterial;

    public function __construct($license, $driver, $typeCarAccepted, $seatsmaterial) {
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsmaterial = $seatsmaterial;
    }
}
?>

