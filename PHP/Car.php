<?php

class Car {
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = new account($driver->name, $driver->document);
    }

    public function printDataCar(){
        echo "Car license: $this->license and driver: {$this->driver->name}";
    }
}
