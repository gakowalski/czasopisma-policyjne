<?php

class Przeglad_Prewencyjny extends Journal {

  // source: http://www.slupsk.szkolapolicji.gov.pl/sps/o-szkole/biblioteka-oraz-wydawni/70950,Przeglad-prewnecyjny.html
  public static $links = [
    'http://www.slupsk.szkolapolicji.gov.pl/download.php?s=304&id=111497' => [2014,'3 (12)'],
    'http://www.slupsk.szkolapolicji.gov.pl/download.php?s=304&id=111499' => [2014,'2 (11)'],
    'http://www.slupsk.szkolapolicji.gov.pl/download.php?s=304&id=111501' => [2014,'1 (10)'],
    'http://www.slupsk.szkolapolicji.gov.pl/download.php?s=304&id=111503' => [2013,'2 (9)'],
    'http://www.slupsk.szkolapolicji.gov.pl/download.php?s=304&id=111505' => [2013,'1 (8)'],
    'http://www.slupsk.szkolapolicji.gov.pl/download.php?s=304&id=111507' => [2012,'3 (7)'],
    'http://www.slupsk.szkolapolicji.gov.pl/download.php?s=304&id=111509' => [2012,'2 (6)'],
    'http://www.slupsk.szkolapolicji.gov.pl/download.php?s=304&id=111511' => [2012,'1 (5)'],
    'http://www.slupsk.szkolapolicji.gov.pl/download.php?s=304&id=98931' => [2011,'2 (4)'],
    'http://www.slupsk.szkolapolicji.gov.pl/download.php?s=304&id=111514' => [2011,'1 (3)'],
    'http://www.slupsk.szkolapolicji.gov.pl/download.php?s=304&id=111516' => [2010,'1 (2)'],
    'http://www.slupsk.szkolapolicji.gov.pl/download.php?s=304&id=111518' => [2009,'1'],
  ];

  public static function get_title() {
    return "Przegląd Prewencyjny";
  }

  public static function get_collection() {
    foreach(self::$links as $url => $metadata) {
      $year = $metadata[0];
      $issue = $metadata[1];
      yield [$url, self::get_title() . " - $year nr $issue"];
    }
  }
}
