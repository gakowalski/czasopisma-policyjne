<?php

if (file_exists('config.php') === false) die("Najpierw przygotuj plik config.php bazujac na config.sample.php.");

require 'config.php';
require 'Core/Journal.php';

spl_autoload_register(function ($class_name) {
    if (file_exists("Journals/$class_name.php")) {
      include "Journals/$class_name.php";
    }
});

$files = 0;

foreach ($journals as $journal) {
  echo $journal::get_count() . "\tplików w " . $journal::get_title() . "\n";
  $files += $journal::get_count();
}

echo "$files\tplików we wszystkich kolekcjach\n";
