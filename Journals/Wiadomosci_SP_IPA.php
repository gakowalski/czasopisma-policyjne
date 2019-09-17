<?php

class Wiadomosci_SP_IPA extends Journal {
  public static $links = [
    'http://ipapolska.pl/download/30/187/ipawsp25.pdf' => [2004,1],
    'http://ipapolska.pl/download/30/188/ipawsp26.pdf' => [2004,2],
    'http://ipapolska.pl/download/30/189/ipawsp27.pdf' => [2004,3],
    'http://ipapolska.pl/download/30/190/ipawsp28.pdf' => [2004,4],
    'http://ipapolska.pl/download/30/182/ipawsp21.pdf' => [2003,1],
    'http://ipapolska.pl/download/30/184/ipawsp22.pdf' => [2003,2],
    'http://ipapolska.pl/download/30/185/ipawsp23.pdf' => [2003,3],
    'http://ipapolska.pl/download/30/186/ipawsp24.pdf' => [2003,4],
    'http://ipapolska.pl/download/30/191/ipawsp29.pdf' => [2005,1],
    'http://ipapolska.pl/download/30/192/ipawsp30.pdf' => [2005,2],
    'http://ipapolska.pl/download/30/193/ipawsp31.pdf' => [2005,3],
    'http://ipapolska.pl/download/30/194/ipawsp32.pdf' => [2005,4],
    'http://ipapolska.pl/download/30/195/ipawsp33.pdf' => [2006,1],
    'http://ipapolska.pl/download/30/196/ipawsp34.pdf' => [2006,2],
    'http://ipapolska.pl/download/30/197/ipawsp35.pdf' => [2006,3],
    'http://ipapolska.pl/download/30/198/ipawsp36.pdf' => [2007,1],
    'http://ipapolska.pl/download/30/199/ipawsp37.pdf' => [2007,2],
    'http://ipapolska.pl/download/30/200/38.pdf' => [2008,1],
    'http://ipapolska.pl/download/30/201/ipawsp39.pdf' => [2008,2],
    'http://ipapolska.pl/download/30/202/biuletyn401.pdf' => [2008,3],
    'http://ipapolska.pl/download/30/203/Biuletynnr41.pdf' => [2008,4],
    'http://ipapolska.pl/download/30/204/42.pdf' => [2009,1],
    'http://ipapolska.pl/download/30/205/Biuletyn43ostatecznawersjadodruku.pdf' => [2009,2],
    'http://ipapolska.pl/download/30/206/44.pdf' => [2009,3],
    'http://ipapolska.pl/download/30/207/Biuletynnr45Grudzien2009.pdf' => [2009,4],
    'http://ipapolska.pl/download/30/208/Biuletynnr46.pdf' => [2010,1],
    'http://ipapolska.pl/download/30/210/Wydanieokolicznosciowe.pdf' => [2010,3],
    'http://ipapolska.pl/download/30/214/biuletyn49.pdf' => [2010,4],
    'http://ipapolska.pl/download/30/211/biuletyn50.pdf' => [2011,1],
    'http://ipapolska.pl/download/30/212/biuletyn52kompress.pdf' => [2011,3],
    'http://ipapolska.pl/download/30/213/biuletynnr51.pdf' => [2011,2],
    'http://ipapolska.pl/download/30/647/IPA.pdf' => [2012,2],
    'http://ipapolska.pl/download/30/1630/GAZETA.pdf' => [2013,58],
    'http://ipapolska.pl/download/30/1545/57.pdf' => [2013,57],
    'http://ipapolska.pl/download/30/1585/56.pdf' => [2013,56],
    'http://ipapolska.pl/download/30/3399/gazetaIPA61int.pdf' => [2014,61],
    'http://ipapolska.pl/download/30/2880/gazetaIPAnr60int.pdf' => [2014,60],
    'http://ipapolska.pl/download/30/2881/gazetaIPAnr59int.pdf' => [2014,59],
    'http://ipapolska.pl/download/30/3857/gazetaIPAnr62.pdf' => [2015,62],
    'http://ipapolska.pl/download/30/4824/gazetaIPAnr63.pdf' => [2015,63],
    'http://ipapolska.pl/download/30/5294/gazetaIPAnr64.pdf' => [2015,64],
    'http://ipapolska.pl/download/30/6830/gazetaIPAnr65.pdf' => [2016,65],
    'http://ipapolska.pl/download/30/8452/IPAII2016e.pdf' => [2016,66],
    'http://ipapolska.pl/download/30/9254/gazetaIPAnr67.pdf' => [2017,67],
    'http://ipapolska.pl/download/30/11262/gazetaIPAnr68.pdf' => [2017,68],
    'http://ipapolska.pl/download/30/11565/gazetaIPAnr69.pdf' => [2017,69],
    'http://ipapolska.pl/download/30/11954/gazetaIPAnr70.pdf' => [2018,70],
    'http://ipapolska.pl/download/30/13121/gazetaIPAnr71.pdf' => [2018,71],
    'http://ipapolska.pl/download/30/13826/gazetaIPAnr72.pdf' => [2018,72],
    'http://ipapolska.pl/download/30/14545/gazetaIPAnr74.pdf' => [2019,74],
    'http://ipapolska.pl/download/30/14107/gazetaIPAnr73.pdf' => [2019,73],
  ];

  public static function get_title() {
    return "Wiadomości Sekcji Polskiej IPA";
  }

  public static function get_collection() {
    foreach(self::$links as $url => $metadata) {
      $year = $metadata[0];
      $issue = $metadata[1];
      yield [$url, self::get_title() . " - $year nr $issue"];
    }
  }
}
