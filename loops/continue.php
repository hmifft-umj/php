<?php

$colors = array("Merah", "Hijau", "Biru");
foreach ($colors as $value) {
  if ($value == "Hijau") {
    continue; 
    // Melewati loop jika nilai $value sama dengan "Hijau"
  }
  echo "$value\n"; // Mencetak value loop
}

?>