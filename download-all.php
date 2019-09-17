<?php

require 'config.php';
require 'Core/Journal.php';

spl_autoload_register(function ($class_name) {
    if (file_exists("Journals/$class_name.php")) {
      include "Journals/$class_name.php";
    }
});

function quote($text) {
  return "\"$text\"";
}

function download($url, $file) {
  echo "Pobieram $file...";
  $file_handle = fopen($url, 'r');
  if ($file_handle === false) {
    echo "Błąd!\n";
  } else {
    $bytes = file_put_contents($file, $file_handle);
    echo "$bytes bajtów pobrano!\n";
    fclose($file_handle);
  }
}

function ocr($input_file, $output_file, $title) {
  global $naps2_cmd;
  system($naps2_cmd . " -i \"$input_file\" -o \"$output_file\" --pdftitle \"$title\" --enableocr --ocrlang \"pol\" --verbose --profile \"PROF1\" ");
}

$journals = [
  Gazeta_Policyjna::class,
  Magazyn_Kryminalny::class,
  Patrol::class,
  Policja_997::class,
  Policja_997_Wydanie_Specjalne::class,
  Kwartalnik_Prawno_Kryminalistyczny::class,
  Kwartalnik_Policyjny::class,
  Wiadomosci_SP_IPA::class,
];

foreach ($journals as $journal) {
  echo "\nPrzetwarzam kolekcję \"" . $journal::get_title() . "\"\n";
  $collection = $journal::get_collection();
  foreach ($collection as $issue) {
    $url      = $issue[0];
    $title    = $issue[1];
    $file     = "$title.pdf";
    $file_OCR = "$title (OCR).pdf";

    if (file_exists($file) === false) {
      download($url, $file);
    } else {
      echo '.';
      //echo "Pomijam $file\n";
    }

    if ($enabled_ocr) {
      if (file_exists($file) && file_exists($file_OCR) === false) {
        echo "Rozpoznawanie znaków do pliku $file_OCR\n";
        ocr($file, $file_OCR, $title);
      } else {
        echo '.';
        //echo "Pomijam rozpoznawanie znaków do $file_OCR\n";
      }
    }
  }
}
