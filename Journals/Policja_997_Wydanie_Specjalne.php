<?php

class Policja_997_Wydanie_Specjalne extends Journal {
  public static $links = [
    'http://www.gazeta.policja.pl/download/7/180717/Nr1specjalny072014.pdf' => array(1,2014,7),
    'http://www.gazeta.policja.pl/download/7/180720/Nr2specjalny042015.pdf' => array(2,2015,4),
    'http://www.gazeta.policja.pl/download/7/180722/Nr3specjalny072015.pdf' => array(3,2015,7),
    'http://www.gazeta.policja.pl/download/7/180724/Nr4specjalny102015.pdf' => array(4,2015,10),
    'http://www.gazeta.policja.pl/download/7/200132/Nr5specjalny062016.pdf' => array(5,2016,6),
    'http://www.gazeta.policja.pl/download/7/209862/Nr6specjalny082016.pdf' => array(6,2016,8),
    'http://www.gazeta.policja.pl/download/7/227163/Nr7specjalny122016.pdf' => array(7,2016,12),
    'http://www.gazeta.policja.pl/download/7/228285/Nr8specjalny122016.pdf' => array(8,2016,12),
    'http://www.gazeta.policja.pl/download/7/241415/Nr9specjalny042017.pdf' => array(9,2017,4),
    'http://www.gazeta.policja.pl/download/7/266806/Nr1011specjalny122017.pdf' => array('10-11',2018,12),
    'http://www.gazeta.policja.pl/download/7/288903/Nr12specjalny072018.pdf' => array(12,2018,7),
    'http://www.gazeta.policja.pl/download/7/295802/Nr13specjalny092018.pdf' => array(13,2018,9),
    'http://www.gazeta.policja.pl/download/7/301993/Nr14specjalny122018.pdf' => array(14,2018,12),
  ];

  public static function get_title() {
    return "Policja 997 Wydanie Specjalne";
  }

  public static function get_collection() {
    foreach(self::$links as $url => $metadata) {
      $issue  = $metadata[0];
      $year   = $metadata[1];
      $month  = $metadata[2];
      yield [$url, self::get_title() . " - $year-$month nr $issue"];
    }
  }
}
