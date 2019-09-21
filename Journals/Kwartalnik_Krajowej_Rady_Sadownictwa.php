<?php

class Kwartalnik_Krajowej_Rady_Sadownictwa extends Journal {

  // source: http://www.krs.pl/pl/kwartalnik-krs
  public static $links = [
    'http://www.krs.pl/admin/files/kwartalnik/krs_01_2018_druk_prv.pdf' => [2018,'1'],
    'http://www.krs.pl/admin/files/kwartalnik/krs_04_2017_druk_prv.pdf' => [2017,'4'],
    'http://www.krs.pl/admin/files/kwartalnik/krs_03_2017_druk_prv.pdf' => [2017,'3'],
    'http://www.krs.pl/admin/files/kwartalnik/krs_02_2017.pdf' => [2017,'2'],
    'http://www.krs.pl/admin/files/kwartalnik/krs_01_2017_druk_prv.pdf' => [2017,'1'],
    'http://www.krs.pl/admin/files/kwartalnik/krs_04_2016_druk_prv.pdf' => [2016,'4'],
    'http://www.krs.pl/admin/files/kwartalnik/krs_03_2016_druk_prv.pdf' => [2016,'3'],
    'http://www.krs.pl/admin/files/kwartalnik/krs_02_2016.pdf' => [2016,'2'],
    'http://www.krs.pl/admin/files/kwartalnik/krs_01_2016_druk_prv.pdf' => [2016,'1'],
    'http://www.krs.pl/admin/files/kwartalnik/krs_04_2015_druk_prv.pdf' => [2015,'4'],
    'http://www.krs.pl/admin/files/kwartalnik/krs_03_2015.pdf' => [2015,'3'],
    'http://www.krs.pl/admin/files/rp2013/krs_02_2015.pdf' => [2015,'2'],
    'http://www.krs.pl/admin/files/rp2013//krs_2015_01.pdf' => [2015,'1'],
    'http://www.krs.pl/admin/files/rp2013//krs_04_2014.pdf' => [2014,'4'],
    'http://www.krs.pl/admin/files/kwartalnik/krs_03_2014.pdf' => [2014,'3'],
    'http://www.krs.pl/admin/files/kwartalnik/krs_02_2014_druk_prv_kolor.pdf' => [2014,'2'],
    'http://www.krs.pl/admin/files/kwartalnik/krs_01_2014_druk_prv_kolor.pdf' => [2014,'1'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_04_2013.pdf' => [2013,'4'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_03_2013.pdf' => [2013,'3'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_02_2013.pdf' => [2013,'2'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_01_2013.pdf' => [2013,'1'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_04_2012.pdf' => [2012,'4'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_03_2012.pdf' => [2012,'3'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_02_2012.pdf' => [2012,'2'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_01_2012.pdf' => [2012,'1'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_04_2011.pdf' => [2011,'4'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_03_2011.pdf' => [2011,'3'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_02_2011.pdf' => [2011,'2'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_01_2011.pdf' => [2011,'1'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_04_2010.pdf' => [2010,'4'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_03_2010.pdf' => [2010,'3'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_02_2010.pdf' => [2010,'2'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_01_2010.pdf' => [2010,'1'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_04_2009.pdf' => [2009,'4'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_03_2009.pdf' => [2009,'3'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_02_2009.pdf' => [2009,'2'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_2009_01.pdf' => [2009,'1'],
    'http://www.krs.pl/admin/files/kwartalnik/KRS_01_2008.pdf' => [2008,'1'],

  ];

  public static function get_title() {
    return "Kwartalnik Krajowej Rady Sądownictwa";
  }

  public static function get_collection() {
    foreach(self::$links as $url => $metadata) {
      $year = $metadata[0];
      $issue = $metadata[1];
      yield [$url, self::get_title() . " - $year nr $issue"];
    }
  }
}
