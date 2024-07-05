<?php

class Person {
    // Properties
    public $name;    

    // Methods untuk melakukan set nilai variable name
    function set_name($name) {
        $this->name = $name;
    }

    // Methods untuk mengambil nilai variable name
    function get_name() {
        return $this->name;
    }
}

// Membuat objek baru dari kelas Person
$person = new Person(); 

// Memanggil methods set_name dari object person
$setName = $person->set_name("Jhon Doe");

// Memanggil methods get_name dari object person
$getName = $person->get_name();

// Menampilkan nilai properties name pada object person
print("Nama saya adalah {$getName} \n");

?>