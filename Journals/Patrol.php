<?php

class Patrol extends Journal {
  public static $links = [
    'http://policja.pl/download/366/121517/patrol12019.pdf' => [2019,1],
    'http://pomorska.policja.gov.pl/download/366/127442/PATROL22019.pdf' => [2019,2],
    'http://pomorska.policja.gov.pl/download/366/132769/Numer31dointernetu.pdf' => [2019,3],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77941' => [2018,1],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77942' => [2018,2],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77943' => [2018,3],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77944' => [2018,4],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77936' => [2017,1],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77937' => [2017,2],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77938' => [2017,3],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77939' => [2017,4],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77931' => [2016,1],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77932' => [2016,2],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77933' => [2016,3],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77934' => [2016,4],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77926' => [2015,1],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77927' => [2015,2],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77928' => [2015,3],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77929' => [2015,4],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77921' => [2014,1],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77922' => [2014,2],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77923' => [2014,3],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77924' => [2014,4],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77916' => [2013,1],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77917' => [2013,2],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77918' => [2013,3],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77919' => [2013,4],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77912' => [2012,1],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77913' => [2012,2],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77914' => [2012,3],
    'http://www.pomorska.policja.gov.pl/download.php?s=366&id=77915' => [2012,4],
  ];

  public static function get_title() {
    return "Patrol";
  }

  public static function get_collection() {
    foreach(self::$links as $url => $metadata) {
      $year = $metadata[0];
      $issue = $metadata[1];
      yield [$url, self::get_title() . " - $year nr $issue"];
    }
  }
}
