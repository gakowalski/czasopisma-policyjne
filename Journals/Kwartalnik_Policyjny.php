<?php

class Kwartalnik_Policyjny extends Journal {

  // source: http://isp.policja.pl/isp/e-czytelnia
  public static $links = [
    'http://isp.policja.pl/download/12/2663/KwartalnikPolicyjny1272014m.pdf' => [2014,1],
    'http://isp.policja.pl/download/12/4134/KwartalnikPolicyjnynr2282014.pdf' => [2014,2],

    'http://isp.policja.pl/download/12/8035/Kwartalniknr3.pdf' => [2015,3],
    'http://isp.policja.pl/download/12/8034/Dodatekspecjalny.pdf' => [2015,'3 dodatek specjalny'],
  ];

  public static function get_title() {
    return "Kwartalnik policyjny";
  }

  public static function get_collection() {
    foreach(self::$links as $url => $metadata) {
      $year = $metadata[0];
      $issue = $metadata[1];
      yield [$url, self::get_title() . " - $year nr $issue"];
    }
  }
}
