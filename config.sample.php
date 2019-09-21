<?php

$enabled_ocr  = false;  // ustaw na true aby przetwarzac OCR z uzyciem NAPS
$naps2_cmd   = '';      // sciezka do pliku wykonywalnego narzedzia NAPS2.Console

$enabled_unrar  = false;  // ustaw na true aby dekompresowac archiwa RAR
$unrar_7z       = '';     // sciezka do pliku wykonywalnego 7-Zip (7z.exe)

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
