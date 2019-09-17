<?php

class Policja_Lodzkie extends Journal {

  // source: http://lodzka.policja.gov.pl/ld/policja-lodzkie/2374,Policja-Lodzkie-nr-32018.html
  public static $links = [
    'http://lodzka.policja.gov.pl/download/216/97823/POLICJALODZKIENR07-08-2019.pdf' => [2019,'07-08'],
    'http://lodzka.policja.gov.pl/download/216/93732/POLICJALODZKIENR06-popr.pdf' => [2019,'06'],
    'http://lodzka.policja.gov.pl/download/216/90764/POLICJALODZKIENR05-2019-nowe.pdf' => [2019,'05'],
    'http://lodzka.policja.gov.pl/download/216/88150/POLICJALODZKIENR04-2019.pdf' => [2019,'04'],
    'http://lodzka.policja.gov.pl/download/216/85970/POLICJALODZKIENR03-2019.pdf' => [2019,'03'],
    'http://lodzka.policja.gov.pl/download/216/83604/POLICJALODZKIENR02-2019.pdf' => [2019,'02'],
    'http://lodzka.policja.gov.pl/download/216/81092/POLICJALODZKIENR01-2019.pdf' => [2019,'01'],
    'http://lodzka.policja.gov.pl/download/216/79071/POLICJALODZKIENR12-2018.pdf' => [2018,'12'],
    'http://lodzka.policja.gov.pl/download/216/77599/POLICJALODZKIENR11-2018-2.pdf' => [2018,'11'],
    'http://lodzka.policja.gov.pl/download/216/75235/POLICJALODZKIENR10-2018.pdf' => [2018,'10'],
    'http://lodzka.policja.gov.pl/download/216/72918/POLICJALODZKIENR09-2018.pdf' => [2018,'09'],
    'http://lodzka.policja.gov.pl/download/216/69204/POLICJALODZKIENR07-082018.pdf' => [2018,'07-08'],
    'http://lodzka.policja.gov.pl/download/216/66605/POLICJALODZKIENR06-2018v2.pdf' => [2018,'06'],
    'http://lodzka.policja.gov.pl/download/216/63253/PolicjaLodzkienr052018.pdf' => [2018,'05'],
    'http://lodzka.policja.gov.pl/download/216/60821/POLICJALODZKIENR04-18wersjatradycyjna.pdf' => [2018,'04'],
    'http://lodzka.policja.gov.pl/download/216/58006/POLICJALODZKIENR03-18.pdf' => [2018,'03'],
    'http://lodzka.policja.gov.pl/download/216/55942/PolicjaLodzkienr02-2018.pdf' => [2018,'02'],
    'http://lodzka.policja.gov.pl/download/216/53631/POLICJALODZKIENR01-18.pdf' => [2018,'01'],
    'http://lodzka.policja.gov.pl/download/216/51012/POLICJALODZKIENR11-17.pdf' => [2017,'11'],
    'http://lodzka.policja.gov.pl/download/216/48697/POLICJALODZKIENR10-17.pdf' => [2017,'10'],
    'http://lodzka.policja.gov.pl/download/216/45263/POLICJALODZKIENR9-17.pdf' => [2017,'09'],
    'http://lodzka.policja.gov.pl/download/216/42213/POLICJALODZKIENR8-17.pdf' => [2017,'08'],
    'http://lodzka.policja.gov.pl/download/216/38164/POLICJALODZKIENR7-17.pdf' => [2017,'07'],
    'http://lodzka.policja.gov.pl/download/216/35658/POLICJALODZKIENR6-17.pdf' => [2017,'06'],
    'http://lodzka.policja.gov.pl/download/216/32292/POLICJALODZKIENR5-17.pdf' => [2017,'05'],
    'http://lodzka.policja.gov.pl/download/216/27344/POLICJALODZKIENR3-17.pdf' => [2017,'03'],
    'http://lodzka.policja.gov.pl/download/216/25781/POLICJALODZKIENR2-17.pdf' => [2017,'02'],
    'http://lodzka.policja.gov.pl/download/216/22418/POLICJALODZKIENR1-2017.pdf' => [2017,'01'],
    'http://lodzka.policja.gov.pl/download/216/20440/POLICJALODZKIENR7.pdf' => [2016,'7'],
    'http://lodzka.policja.gov.pl/download/216/17146/POLICJALODZKIENR6.pdf' => [2016,'6'],
    'http://lodzka.policja.gov.pl/download/216/14208/POLICJALODZKIENR5.pdf' => [2016,'5'],
    'http://lodzka.policja.gov.pl/download/216/12182/POLICJALODZKIENR4.pdf' => [2016,'4'],
    'http://lodzka.policja.gov.pl/download/216/9025/POLICJALODZKIENR3.pdf' => [2016,'3'],
    'http://lodzka.policja.gov.pl/download/216/6433/POLICJALODZKIENR2.pdf' => [2016,'2'],
    'http://lodzka.policja.gov.pl/download/216/4145/POLICJALODZKIENR1.pdf' => [2016,'1'],
  ];

  public static function get_title() {
    return "Policja Łódzkie";
  }

  public static function get_collection() {
    foreach(self::$links as $url => $metadata) {
      $year = $metadata[0];
      $issue = $metadata[1];
      yield [$url, self::get_title() . " - $year nr $issue"];
    }
  }
}
