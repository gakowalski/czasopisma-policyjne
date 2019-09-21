<?php

if (file_exists('config.php') === false) die("Najpierw przygotuj plik config.php bazujac na config.sample.php.");

require 'config.php';
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
  Policyjny_Glos_Mazowsza::class,
];

$download_count = 0;

foreach ($journals as $journal) {
  $download_count += $journal::download_collection($enabled_ocr);
}

echo "\nPrzetwarzanie zakończone, pobrano $download_count nowych plików\n";
