<?php

class Prodi {
    // Properties Prodi
    public $studyProgram = "Teknik Informatika";
}

/* extends Prodi menunjukkan bahwa kelas Mahasiswa 
   mewarisi (extends) dari kelas Prodi. */
class Mahasiswa extends Prodi {
    // Properties Mahasiswa
    public $name = "Jhon Doe";
}

$mahasiswa = new Mahasiswa();
print(
    "Nama saya adalah {$mahasiswa->name} dari {$mahasiswa->studyProgram} \n"
);

?>