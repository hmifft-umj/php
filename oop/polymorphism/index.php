<?php

abstract class Vehicle {
    /* Properti proteksi hanya bisa di akses oleh 
    class sendiri dan class turunannya */
    protected $name;
    // Metode abstrak untuk mengambil nama kendaraan 
    abstract public function getName();    
    // Metode abstrak untuk mengatur nama kendaraan     
    abstract public function setName();
}

class Car extends Vehicle {
    public function setName()
    {
        $this->name  = "Ferrari";
    }
    public function getName()
    {
        return $this->name;
    }
}

class Bike extends Vehicle {
    public function setName()
    {
        $this->name  = "BMW";
    }    
    public function getName()
    {
        return $this->name;
    }
}

?>