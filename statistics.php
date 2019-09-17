<?php

require 'Core/Journal.php';

spl_autoload_register(function ($class_name) {
    if (file_exists("Journals/$class_name.php")) {
      include "Journals/$class_name.php";
    }
});

$journals = [
  Gazeta_Policyjna::class,
  Magazyn_Kryminalny::class,
  Patrol::class,
  Policja_997::class,
  Policja_997_Wydanie_Specjalne::class,
  Kwartalnik_Prawno_Kryminalistyczny::class,
  Kwartalnik_Policyjny::class,
  Wiadomosci_SP_IPA::class,
  Policja_Lodzkie::class,
  Przeglad_Prewencyjny::class,
  Stoleczny_Magazyn_Policyjny::class,
];

$files = 0;

foreach ($journals as $journal) {
  echo $journal::get_count() . ' plików w ' . $journal::get_title() . "\n";
  $files += $journal::get_count();
}

echo "$files plików we wszystkich kolekcjach\n";
