<?php

class Kwartalnik_Prawno_Kryminalistyczny extends Journal {

  // source: http://isp.policja.pl/isp/e-czytelnia
  public static $links = [
    'http://isp.policja.pl/download/12/1961/kwartalnik6-7.pdf' => [2011,'6-7'],
    'http://isp.policja.pl/download/12/1963/kwartalnik8-9.pdf' => [2011,'8-9'],
// 2012
    'http://isp.policja.pl/download/12/1965/kwartalnik1011.pdf' => [2012,'10-11'],
    'http://isp.policja.pl/download/12/2396/kwartalnik12-13.pdf' => [2012,'12-13'],
    'http://isp.policja.pl/download/12/2398/kwartalnik14-15.pdf' => [2013,'14-15'],
    'http://isp.policja.pl/download/12/4346/kwartalnik16-17.pdf' => [2013,'16-17'],
// 2014
    'http://isp.policja.pl/download/12/4348/kwartalnik18.pdf' => [2014,'1 (18)'],
    'http://isp.policja.pl/download/12/4350/kwartalnik19.pdf' => [2014,'2 (19)'],
    'http://isp.policja.pl/download/12/5113/kwartalnik20.pdf' => [2014,'3 (20)'],
    'http://isp.policja.pl/download/12/5528/kwartalnik21.pdf' => [2014,'4 (21)'],
    'http://isp.policja.pl/download/12/5110/kwartalnikspecjalny2014skladka.pdf' => [2014,'specjalny'],
// 2015
    'http://isp.policja.pl/download/12/6841/kwartalnik22.pdf' => [2015,'1 (22)'],
    'http://isp.policja.pl/download/12/6876/kwartalnik23.pdf' => [2015,'2 (23)'],
    'http://isp.policja.pl/download/12/7711/kwartalnik24internet.pdf' => [2015,'3 (24)'],
    'http://isp.policja.pl/download/12/8122/kwartalnik25.pdf' => [2015,'4 (25)'],
    'http://isp.policja.pl/download/12/8120/kwartalnikspecjalny12015.pdf' => [2015,'specjalny'],
// 2016
    'http://isp.policja.pl/download/12/9357/Kwartalniknr26.pdf' => [2016,'1 (26)'],
    'http://isp.policja.pl/download/12/11813/KwartalnikPrawno-Kryminalistycznynr2272016.pdf' => [2016,'2 (27)'],
    'http://isp.policja.pl/download/12/16305/KwartalnikPrawno-Kryminalistycznynr3282016.pdf' => [2016,'3 (28)'],
    'http://isp.policja.pl/download/12/19657/kwartalnik29.pdf' => [2016,'4 (29)'],
    'http://isp.policja.pl/download/12/19633/kwartalnikspecjalny2016.pdf' => [2016,'specjalny'],
// 2017
    'http://isp.policja.pl/download/12/28113/kwartalnik30.pdf' => [2017,'1 (30)'],
    'http://isp.policja.pl/download/12/28115/kwartalnik31.pdf' => [2017,'2 (31)'],
  ];

  public static function get_title() {
    return "Kwartalnik Prawno-Kryminalistyczny";
  }

  public static function get_collection() {
    foreach(self::$links as $url => $metadata) {
      $year = $metadata[0];
      $issue = $metadata[1];
      yield [$url, self::get_title() . " - $year nr $issue"];
    }
  }
}
