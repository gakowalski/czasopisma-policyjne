<?php

class Journal {
  public static function get_title() { die('Sample Journal Title'); }
  public static function get_collection() { die('NO COLLECTION'); }
  public static function get_count() { return isset(static::$links) ? count(static::$links) : 0; }
  public static function download_file($url, $file) {
    echo "Pobieram $file...";
    $file_handle = fopen($url, 'r');
    if ($file_handle === false) {
      echo "Błąd!\n";
      return 0;
    } else {
      $bytes = file_put_contents($file, $file_handle);
      echo "$bytes bajtów pobrano!\n";
      fclose($file_handle);
      return 1;
    }
  }

  public static function download_collection($OCR = false) {
    $download_count = 0;
    echo "\nPrzetwarzam kolekcję \"" . static::get_title() . "\"\n";

    $subfolder  = static::get_title();
    $collection = static::get_collection();

    // create directory structure
    static::create_dir("Download/$subfolder");
    if ($OCR) {
      static::create_dir("OCR/$subfolder");
    }

    foreach ($collection as $issue) {
      $url      = $issue[0];
      $title    = $issue[1];
      $file     = "Download/$subfolder/$title.pdf";
      $file_OCR = "OCR/$subfolder/$title (OCR).pdf";

      if (file_exists($file) === false) {
        $download_count += static::download_file($url, $file);
      } else {
        echo '.';
        //echo "Pomijam $file\n";
      }

      if ($OCR) {
        if (file_exists($file) && file_exists($file_OCR) === false) {
          echo "Rozpoznawanie znaków do pliku $file_OCR\n";
          static::ocr($file, $file_OCR, $title);
        } else {
          echo '.';
          //echo "Pomijam rozpoznawanie znaków do $file_OCR\n";
        }
      }
    }

    return $download_count;
  }

  public static function ocr($input_file, $output_file, $title) {
    global $naps2_cmd;
    system($naps2_cmd . " -i \"$input_file\" -o \"$output_file\" --pdftitle \"$title\" --enableocr --ocrlang \"pol\" --verbose --profile \"PROF1\" ");
  }

  public static function unrar($input_file) {
    global $unrar_7z;
    system("$unrar_7z x $input_file");
  }

  public static function create_dir($path) {
    if (!file_exists($path)) {
      echo "Tworzę folder $path\n";
      mkdir($path, 0777, true);
    }
  }
}
