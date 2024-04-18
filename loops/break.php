<?php

$colors = array("Merah", "Hijau", "Biru");
foreach ($colors as $value) {
  if ($value == "Hijau") {
    break; 
    // Menghentikan loop jika nilai $value sama dengan "Hijau"
  }
  echo "$value\n"; 
  // Mencetak "Merah" dan kemudian menghentikan loop
}

?>