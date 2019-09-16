<?php

require 'config.php';
require 'Core/Journal.php';

spl_autoload_register(function ($class_name) {
    if (file_exists("Journals/$class_name.php")) {
      include "Journals/$class_name.php";
    }
});

$policja_997_wydanie_specjalne_linki = [
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

$policja_997_linki = array(
  'http://www.gazeta.policja.pl/download/7/318831/Nr172lipiec2019.pdf' => array(172,2019,7,0),
  'http://www.gazeta.policja.pl/download/7/316787/Nr171czerwiec2019.pdf' => array(171,2019,6,0),
  'http://www.gazeta.policja.pl/download/7/312782/Nr170maj2019.pdf' => array(170,2019,5,0),
  'http://www.gazeta.policja.pl/download/7/311378/Nr169kwiecien2019.pdf' => array(169,2019,4,0),
  'http://www.gazeta.policja.pl/download/7/308102/Nr168marzec2019.pdf' => array(168,2019,3,0),
  'http://www.gazeta.policja.pl/download/7/304885/022019.pdf' => array(167,2019,2,0),
  'http://www.gazeta.policja.pl/download/7/302485/012019.pdf' => array(166,2019,1,0),
  'http://www.gazeta.policja.pl/download/7/300972/Nr165grudzien2018.pdf' => array(165,2018,12,0),
  'http://www.gazeta.policja.pl/download/7/298156/Nr164listopad2018.pdf' => array(164,2018,11,0),
  'http://www.gazeta.policja.pl/download/7/295704/Nr163pazdziernik2018.pdf' => array(163,2018,10,0),
  'http://www.gazeta.policja.pl/download/7/290279/Nr162wrzesien2018.pdf' => array(162,2018,9,0),
  'http://www.gazeta.policja.pl/download/7/288022/Nr161sierpien2018.pdf' => array(161,2018,8,0),
  'http://www.gazeta.policja.pl/download/7/284219/Nr160lipiec2018.pdf' => array(160,2018,7,0),
  'http://www.gazeta.policja.pl/download/7/279740/Nr159czerwiec2018.pdf' => array(159,2018,6,0),
  'http://www.gazeta.policja.pl/download/7/276672/Nr158maj2018.pdf' => array(158,2018,5,0),
  'http://www.gazeta.policja.pl/download/7/275415/Nr157kwiecien2018.pdf' => array(157,2018,4,0),
  'http://www.gazeta.policja.pl/download/7/272135/Nr156marzec2018.pdf' => array(156,2018,3,0),
  'http://www.gazeta.policja.pl/download/7/269065/Nr155luty2018.pdf' => array(155,2018,2,0),
  'http://www.gazeta.policja.pl/download/7/266757/Nr154styczen2018.pdf' => array(154,2018,1,0),
  'http://www.gazeta.policja.pl/download/7/265145/Nr153grudzien2017.pdf' => array(153,2017,12,0),
  'http://www.gazeta.policja.pl/download/7/262202/Nr152listopad2017.pdf' => array(152,2017,11,0),
  'http://www.gazeta.policja.pl/download/7/259347/Nr151pazdziernik2017.pdf' => array(151,2017,10,0),
  'http://www.gazeta.policja.pl/download/7/256112/policja092017.pdf' => array(150,2017,9,0),
  'http://www.gazeta.policja.pl/download/7/253192/Nr149sierpien2017.pdf' => array(149,2017,8,0),
  'http://www.gazeta.policja.pl/download/7/248190/Nr148lipiec2017.pdf' => array(148,2017,7,0),
  'http://www.gazeta.policja.pl/download/7/245223/Nr147czerwiec2017.pdf' => array(147,2017,6,0),
  'http://www.gazeta.policja.pl/download/7/243032/Nr146maj2017.pdf' => array(146,2017,5,0),
  'http://www.gazeta.policja.pl/download/7/236729/Nr145kwiecien2017.pdf' => array(145,2017,4,0),
  'http://www.gazeta.policja.pl/download/7/234375/Nr144marzec2017.pdf' => array(144,2017,3,0),
  'http://www.gazeta.policja.pl/download/7/229330/Nr143luty2017.pdf' => array(143,2017,2,0),
  'http://www.gazeta.policja.pl/download/7/227165/Nr142styczen2017.pdf' => array(142,2017,1,0),
  'http://www.gazeta.policja.pl/download/7/223653/Nr141grudzien2016.pdf' => array(141,2016,12,0),
  'http://www.gazeta.policja.pl/download/7/217637/Nr140listopad2016.pdf' => array(140,2016,11,0),
  'http://www.gazeta.policja.pl/download/7/215203/Nr139pazdziernik2016.pdf' => array(139,2016,10,0),
  'http://www.gazeta.policja.pl/download/7/211160/Nr138wrzesien2016.pdf' => array(138,2016,9,0),
  'http://www.gazeta.policja.pl/download/7/206859/Nr137sierpien2016.pdf' => array(137,2016,8,0),
  'http://www.gazeta.policja.pl/download/7/201887/Nr136lipiec2016.pdf' => array(136,2016,7,0),
  'http://www.gazeta.policja.pl/download/7/199297/Nr135czerwiec2016.pdf' => array(135,2016,6,0),
  'http://www.gazeta.policja.pl/download/7/198167/Nr134maj2016.pdf' => array(134,2016,5,0),
  'http://www.gazeta.policja.pl/download/7/191663/Nr133kwiecien2016.pdf' => array(133,2016,4,0),
  'http://www.gazeta.policja.pl/download/7/187537/Nr132marzec2016.pdf' => array(132,2016,3,0),
  'http://www.gazeta.policja.pl/download/7/186091/Nr131luty2016.pdf' => array(131,2016,2,0),
  'http://www.gazeta.policja.pl/download/7/184735/Nr130styczen2016.pdf' => array(130,2016,1,0),
  'http://www.gazeta.policja.pl/download/7/180739/Nr129grudzien2015.pdf' => array(129,2015,12,0),
  'http://www.gazeta.policja.pl/download/7/180737/Nr128listopad2015.pdf' => array(128,2015,11,0),
  'http://www.gazeta.policja.pl/download/7/180736/Nr127pazdziernik2015.pdf' => array(127,2015,10,0),
  'http://www.gazeta.policja.pl/download/7/177264/Nr126wrzesien2015.pdf' => array(126,2015,9,0),
  'http://www.gazeta.policja.pl/download/7/171743/Nr125sierpien2015.pdf' => array(125,2015,8,0),
  'http://www.gazeta.policja.pl/download/7/170098/Nr124lipiec2015.pdf' => array(124,2015,7,0),
  'http://www.gazeta.policja.pl/download/7/167444/Nr123czerwiec2015.pdf' => array(123,2015,6,0),
  'http://www.gazeta.policja.pl/download/7/170095/Nr122maj2015.pdf' => array(122,2015,5,0),
  'http://www.gazeta.policja.pl/download/7/163094/Nr121kwiecien2015.pdf' => array(121,2015,4,0),
  'http://www.gazeta.policja.pl/download/7/160829/Nr120marzec2015.pdf' => array(120,2015,3,0),
  'http://www.gazeta.policja.pl/download/7/157741/Nr119luty2015.pdf' => array(119,2015,2,0),
  'http://www.gazeta.policja.pl/download/7/153181/012015.pdf' => array(118,2015,1,0),
  'http://www.gazeta.policja.pl/download/7/152150/Nr117grudzien2014.pdf' => array(117,2014,12,0),
  'http://www.gazeta.policja.pl/download/7/151198/112014.pdf' => array(116,2014,11,0),
  'http://www.gazeta.policja.pl/download/7/148713/nr115pazdziernik2014.pdf' => array(115,2014,10,0),
  'http://www.gazeta.policja.pl/download/7/146314/nr114wrzesien2014.pdf' => array(114,2014,9,0),
  'http://www.gazeta.policja.pl/download/7/142438/nr113sierpien2014.pdf' => array(113,2014,8,0),
  'http://www.gazeta.policja.pl/download/7/140100/nr112lipiec2014.pdf' => array(112,2014,7,0),
  'http://www.gazeta.policja.pl/download/7/137851/nr111czerwiec2014.pdf' => array(111,2014,6,0),
  'http://www.gazeta.policja.pl/download/7/133585/nr110maj2014.pdf' => array(110,2014,5,0),
  'http://www.gazeta.policja.pl/download/7/132737/nr109kwiecien2014.pdf' => array(109,2014,4,0),
  'http://www.gazeta.policja.pl/download/7/130469/nr108marzec2014.pdf' => array(108,2014,3,0),
  'http://www.gazeta.policja.pl/download/7/128531/nr107luty2014.pdf' => array(107,2014,2,0),
  'http://www.gazeta.policja.pl/download/7/126874/nr106styczen2014.pdf' => array(106,2014,1,0),
  'http://www.gazeta.policja.pl/download/7/125278/nr105grudzien2013.pdf' => array(105,2013,12,0),
  'http://www.gazeta.policja.pl/download/7/123209/nr104listopad2013.pdf' => array(104,2013,11,0),
  'http://www.gazeta.policja.pl/download/7/121402/nr103pazdziernik2013.pdf' => array(103,2013,10,0),
  'http://www.gazeta.policja.pl/download/7/119395/nr102wrzesien2013.pdf' => array(102,2013,9,0),
  'http://www.gazeta.policja.pl/download/7/117912/nr101sierpien2013.pdf' => array(101,2013,8,0),
  'http://www.gazeta.policja.pl/download/7/115445/nr100lipiec2013.pdf' => array(100,2013,7,0),
  'http://www.gazeta.policja.pl/download/7/113684/nr99czerwiec2013.pdf' => array(99,2013,6,0),
  'http://www.gazeta.policja.pl/download/7/112004/nr98maj2013.pdf' => array(98,2013,5,0),
  'http://www.gazeta.policja.pl/download/7/109994/nr97kwiecien2013.pdf' => array(97,2013,4,0),
  'http://www.gazeta.policja.pl/download/7/108059/nr96marzec2013.pdf' => array(96,2013,3,0),
  'http://www.gazeta.policja.pl/download/7/106435/nr95luty2013.pdf' => array(95,2013,2,0),
  'http://www.gazeta.policja.pl/download/7/105139/nr94styczen2013.pdf' => array(94,2013,1,0),
  'http://www.gazeta.policja.pl/download/7/104120/nr93grudzien2012.pdf' => array(93,2012,12,0),
  'http://www.gazeta.policja.pl/download/7/103091/nr92listopad2012.pdf' => array(92,2012,11,0),
  'http://www.gazeta.policja.pl/download/7/101241/nr91pazdziernik2012.pdf' => array(91,2012,10,0),
  'http://www.gazeta.policja.pl/download/7/99948/nr90wrzesien2012.pdf' => array(90,2012,9,0),
  'http://www.gazeta.policja.pl/download/7/97740/nr89sierpien2012.pdf' => array(89,2012,8,0),
  'http://www.gazeta.policja.pl/download/7/97132/nr88lipiec2012.pdf' => array(88,2012,7,0),
  'http://www.gazeta.policja.pl/download/7/94905/nr87czerwiec2012.pdf' => array(87,2012,6,0),
  'http://www.gazeta.policja.pl/download/7/92667/nr86maj2012.pdf' => array(86,2012,5,0),
  'http://www.gazeta.policja.pl/download/7/92354/nr85kwiecien2012.pdf' => array(85,2012,4,0),
  'http://www.gazeta.policja.pl/download/7/89215/nr84marzec2012.pdf' => array(84,2012,3,0),
  'http://www.gazeta.policja.pl/download/7/89214/nr83luty2012.pdf' => array(83,2012,2,0),
  'http://www.gazeta.policja.pl/download/7/86492/nr82styczen2012.pdf' => array(82,2012,1,0),
  'http://www.gazeta.policja.pl/download/7/85085/nr81grudzien2011.pdf' => array(81,2011,12,0),
  'http://www.gazeta.policja.pl/download/7/83670/nr80listopad2011.pdf' => array(80,2011,11,0),
  'http://www.gazeta.policja.pl/download/7/82549/nr79pazdziernik2011.pdf' => array(79,2011,10,0),
  'http://www.gazeta.policja.pl/download/7/81076/nr78wrzesien2011.pdf' => array(78,2011,9,0),
  'http://www.gazeta.policja.pl/download/7/79454/nr77sierpien2011.pdf' => array(77,2011,8,0),
  'http://www.gazeta.policja.pl/download/7/78365/nr76lipiec2011.pdf' => array(76,2011,7,0),
  'http://www.gazeta.policja.pl/download/7/76189/nr75czerwiec2011.pdf' => array(75,2011,6,0),
  'http://www.gazeta.policja.pl/download/7/74863/nr74maj2011.pdf' => array(74,2011,5,0),
  'http://www.gazeta.policja.pl/download/7/73220/nr73kwiecien2011.pdf' => array(73,2011,4,0),
  'http://www.gazeta.policja.pl/download/7/71491/nr72marzec2011.pdf' => array(72,2011,3,0),
  'http://www.gazeta.policja.pl/download/7/70080/nr71luty2011.pdf' => array(71,2011,2,0),
  'http://www.gazeta.policja.pl/download/7/68946/nr70styczen2011.pdf' => array(70,2011,1,0),
  'http://www.gazeta.policja.pl/download/7/68003/nr69grudzien2010.pdf' => array(69,2010,12,0),
  'http://www.gazeta.policja.pl/download/7/66854/nr68listopad2010.pdf' => array(68,2010,11,0),
  'http://www.gazeta.policja.pl/download/7/65624/nr67pazdziernik2010.pdf' => array(67,2010,10,0),
  'http://www.gazeta.policja.pl/download/7/64307/nr66wrzesien2010.pdf' => array(66,2010,9,0),
  'http://www.gazeta.policja.pl/download/7/63123/nr65sierpien2010.pdf' => array(65,2010,8,0),
  'http://www.gazeta.policja.pl/download/7/62044/nr64lipiec2010.pdf' => array(64,2010,7,0),
  'http://www.gazeta.policja.pl/download/7/60611/nr63czerwiec2010.pdf' => array(63,2010,6,0),
  'http://www.gazeta.policja.pl/download/7/57714/nr62maj2010TragediapodSmolenskiem.pdf' => array(62,2010,5,1),
  'http://www.gazeta.policja.pl/download/7/59313/nr62maj2010cz2.pdf' => array(62,2010,5,2),
  'http://www.gazeta.policja.pl/download/7/57876/nr61kwiecien2010.pdf' => array(61,2010,4,0),
  'http://www.gazeta.policja.pl/download/7/56441/nr60marzec2010.pdf' => array(60,2010,3,0),
  'http://www.gazeta.policja.pl/download/7/54935/nr59luty2010.pdf' => array(59,2010,2,0),
  'http://www.gazeta.policja.pl/download/7/53674/nr58styczen2010.pdf' => array(58,2010,1,0),
  'http://www.gazeta.policja.pl/download/7/52539/nr57grudzien2009.pdf' => array(57,2009,12,0),
  'http://www.gazeta.policja.pl/download/7/51383/nr56listopad2009.pdf' => array(56,2009,11,0),
  'http://www.gazeta.policja.pl/download/7/49995/nr55pazdziernik2009.pdf' => array(55,2009,10,0),
  'http://www.gazeta.policja.pl/download/7/49117/nr54wrzesien2009.pdf' => array(54,2009,9,0),
  'http://www.gazeta.policja.pl/download/7/48163/nr53sierpien2009.pdf' => array(53,2009,8,0),
  'http://www.gazeta.policja.pl/download/7/47433/nr52lipiec2009.pdf' => array(52,2009,7,0),
  'http://www.gazeta.policja.pl/download/7/46302/nr51czerwiec2009.pdf' => array(51,2009,6,0),
  'http://www.gazeta.policja.pl/download/7/45429/nr50maj2009.pdf' => array(50,2009,5,0),
  'http://www.gazeta.policja.pl/download/7/44426/nr49kwiecien2009.pdf' => array(49,2009,4,0),
  'http://www.gazeta.policja.pl/download/7/42771/nr48marzec2009.pdf' => array(48,2009,3,0),
  'http://www.gazeta.policja.pl/download/7/41353/nr47luty2009.pdf' => array(47,2009,2,0),
  'http://www.gazeta.policja.pl/download/7/39652/nr46styczen2009.pdf' => array(46,2009,1,0),
  'http://www.gazeta.policja.pl/download/7/37712/nr45grudzien2008r.pdf' => array(45,2008,12,0),
  'http://www.gazeta.policja.pl/download/7/35992/nr44listopad2008r.pdf' => array(44,2008,11,0),
  'http://www.gazeta.policja.pl/download/7/33809/nr1043pazdziernik2008r.pdf' => array(43,2008,10,0),
  'http://www.gazeta.policja.pl/download/7/31773/nr942wrzesien2008r.pdf' => array(42,2008,9,0),
  'http://www.gazeta.policja.pl/download/7/30488/nr841sierpien2008r.pdf' => array(41,2008,8,0),
  'http://www.gazeta.policja.pl/download/7/73465/nr740lipiec2008r.pdf' => array(40,2008,7,0),
  'http://www.gazeta.policja.pl/download/7/73466/nr639czerwiec2008r.pdf' => array(39,2008,6,0),
  'http://www.gazeta.policja.pl/download/7/30561/nr38maj2008r.pdf' => array(38,2008,5,0),
  'http://www.gazeta.policja.pl/download/7/30587/nr37kwiecien2008r.pdf' => array(37,2008,4,0),
  'http://www.gazeta.policja.pl/download/7/30606/nr36marzec2008r.pdf' => array(36,2008,3,0),
  'http://www.gazeta.policja.pl/download/7/30625/nr35luty2008r.pdf' => array(35,2008,2,0),
  'http://www.gazeta.policja.pl/download/7/30635/nr34styczen2008r.pdf' => array(34,2008,1,0),
  'http://www.gazeta.policja.pl/download/7/30652/nr33grudzien2007.pdf' => array(33,2007,12,0),
  'http://www.gazeta.policja.pl/download/7/30674/nr32listopad2007.pdf' => array(32,2007,11,0),
  'http://www.gazeta.policja.pl/download/7/30699/nr31pazdziernik2007.pdf' => array(31,2007,10,0),
  'http://www.gazeta.policja.pl/download/7/30721/nr30wrzesien2007.pdf' => array(30,2007,9,0),
  'http://www.gazeta.policja.pl/download/7/30745/nr29sierpien2007.pdf' => array(29,2007,8,0),
  'http://www.gazeta.policja.pl/download/7/30789/nr28lipiec2007.pdf' => array(28,2007,7,0),
  'http://www.gazeta.policja.pl/download/7/30815/nr27czerwiec2007.pdf' => array(27,2007,6,0),
  'http://www.gazeta.policja.pl/download/7/30840/nr26maj2007.pdf' => array(26,2007,5,0),
  'http://www.gazeta.policja.pl/download/7/30865/nr25kwiecien2007.pdf' => array(25,2007,4,0),
  'http://www.gazeta.policja.pl/download/7/30881/nr24marzec2007.pdf' => array(24,2007,3,0),
  'http://www.gazeta.policja.pl/download/7/30967/nr23luty2007.pdf' => array(23,2007,2,0),
  'http://www.gazeta.policja.pl/download/7/30985/nr22styczen2007.pdf' => array(22,2007,1,0),
  'http://www.gazeta.policja.pl/download/7/31021/nr21grudzien2006r.pdf' => array(21,2006,12,0),
  'http://www.gazeta.policja.pl/download/7/31052/nr20listopad2006r.pdf' => array(20,2006,11,0),
  'http://www.gazeta.policja.pl/download/7/31064/nr19pazdziernik2006r.pdf' => array(19,2006,10,0),
  'http://www.gazeta.policja.pl/download/7/31077/nr18wrzesien2006r.pdf' => array(18,2006,9,0),
  'http://www.gazeta.policja.pl/download/7/31089/nr17sierpien2006r.pdf' => array(17,2006,8,0),
  'http://www.gazeta.policja.pl/download/7/31102/nr16lipiec2006r.pdf' => array(16,2006,7,0),
  'http://www.gazeta.policja.pl/download/7/31121/nr615czerwiec2006r.pdf' => array(15,2006,6,0),
  'http://www.gazeta.policja.pl/download/7/31130/nr14maj2006r.pdf' => array(14,2006,5,0),
  'http://www.gazeta.policja.pl/download/7/31143/nr13kwiecien2006r.pdf' => array(13,2006,4,0),
  'http://www.gazeta.policja.pl/download/7/31157/nr12marzec2006r.pdf' => array(12,2006,3,0),
  'http://www.gazeta.policja.pl/download/7/31165/nr11luty2006r.pdf' => array(11,2006,2,0),
  'http://www.gazeta.policja.pl/download/7/31173/nr10styczen2006r.pdf' => array(10,2006,1,0),
  'http://www.gazeta.policja.pl/download/7/31179/nr9grudzien2005r.pdf' => array(9,2005,12,0),
  'http://www.gazeta.policja.pl/download/7/31186/nr8listopad2005r.pdf' => array(8,2005,11,0),
  'http://www.gazeta.policja.pl/download/7/45592/nr7pazdziernik2005.pdf' => array(7,2005,10,0),
  'http://www.gazeta.policja.pl/download/7/31203/nr6wrzesien2005r.pdf' => array(6,2005,9,0),
  'http://www.gazeta.policja.pl/download/7/31218/nr5sierpien2005.pdf' => array(5,2005,8,0),
  'http://www.gazeta.policja.pl/download/7/31230/nr4lipiec2005r.pdf' => array(4,2005,7,0),
  'http://www.gazeta.policja.pl/download/7/31245/nr3czerwiec2005r.pdf' => array(3,2005,6,0),
  'http://www.gazeta.policja.pl/download/7/31258/nr2maj2005.pdf' => array(2,2005,5,0),
  'http://www.gazeta.policja.pl/download/7/31272/nr1kwiecien2005.pdf' => array(1,2005,4,0),
);

$gazeta_policyjna_linki = array(
  'http://www.gazeta.policja.pl/download/7/107387/file.file' => array(1,2005,0),
  'http://www.gazeta.policja.pl/download/7/107390/file.file' => array(2,2005,0),
  'http://www.gazeta.policja.pl/download/7/107414/file.file' => array(1,2004,0),
  'http://www.gazeta.policja.pl/download/7/107416/file.file' => array(2,2004,0),
  'http://www.gazeta.policja.pl/download/7/107417/file.file' => array(3,2004,0),
  'http://www.gazeta.policja.pl/download/7/107418/file.file' => array(4,2004,0),
  'http://www.gazeta.policja.pl/download/7/107419/file.file' => array(6,2004,0),
  'http://www.gazeta.policja.pl/download/7/107420/file.file' => array(7,2004,0),
  'http://www.gazeta.policja.pl/download/7/107421/file.file' => array(8,2004,0),
  'http://www.gazeta.policja.pl/download/7/107422/file.file' => array(9,2004,0),
  'http://www.gazeta.policja.pl/download/7/107423/file.file' => array(10,2004,0),
  'http://www.gazeta.policja.pl/download/7/107445/file.file' => array(11,2004,0),
  'http://www.gazeta.policja.pl/download/7/107827/file.file' => array(12,2004,0),
  'http://www.gazeta.policja.pl/download/7/107828/file.file' => array(13,2004,0),
  'http://www.gazeta.policja.pl/download/7/107829/file.file' => array(14,2004,0),
  'http://www.gazeta.policja.pl/download/7/107830/file.file' => array(15,2004,0),
  'http://www.gazeta.policja.pl/download/7/107831/file.file' => array(16,2004,0),
  'http://www.gazeta.policja.pl/download/7/107832/file.file' => array(17,2004,0),
  'http://www.gazeta.policja.pl/download/7/107833/file.file' => array(18,2004,0),
  'http://www.gazeta.policja.pl/download/7/107834/file.file' => array(19,2004,0),
  'http://www.gazeta.policja.pl/download/7/107835/file.file' => array(20,2004,0),
  'http://www.gazeta.policja.pl/download/7/107871/file.file' => array(21,2004,0),
  'http://www.gazeta.policja.pl/download/7/107872/file.file' => array(22,2004,0),
  'http://www.gazeta.policja.pl/download/7/107873/file.file' => array(23,2004,0),
  'http://www.gazeta.policja.pl/download/7/107874/file.file' => array(24,2004,0),
  'http://www.gazeta.policja.pl/download/7/107875/file.file' => array(25,2004,0),
  'http://www.gazeta.policja.pl/download/7/107876/file.file' => array(26,2004,0),
  'http://www.gazeta.policja.pl/download/7/107877/file.file' => array(27,2004,0),
  'http://www.gazeta.policja.pl/download/7/107878/file.file' => array(29,2004,0),
  'http://www.gazeta.policja.pl/download/7/107879/file.file' => array(30,2004,0),
  'http://www.gazeta.policja.pl/download/7/107880/file.file' => array(31,2004,0),
  'http://www.gazeta.policja.pl/download/7/107881/file.file' => array(32,2004,0),
  'http://www.gazeta.policja.pl/download/7/108060/file.file' => array(33,2004,0),
  'http://www.gazeta.policja.pl/download/7/108061/file.file' => array(34,2004,0),
  'http://www.gazeta.policja.pl/download/7/108062/file.file' => array(35,2004,0),
  'http://www.gazeta.policja.pl/download/7/108063/file.file' => array(36,2004,0),
  'http://www.gazeta.policja.pl/download/7/108064/file.file' => array(37,2004,0),
  'http://www.gazeta.policja.pl/download/7/108065/file.file' => array(38,2004,0),
  'http://www.gazeta.policja.pl/download/7/108066/file.file' => array(39,2004,0),
  'http://www.gazeta.policja.pl/download/7/108067/file.file' => array(40,2004,0),
  'http://www.gazeta.policja.pl/download/7/108068/file.file' => array(41,2004,0),
  'http://www.gazeta.policja.pl/download/7/108069/file.file' => array(42,2004,0),
  'http://www.gazeta.policja.pl/download/7/108070/file.file' => array(43,2004,0),
  'http://www.gazeta.policja.pl/download/7/108071/file.file' => array(44,2004,0),
  'http://www.gazeta.policja.pl/download/7/108072/file.file' => array(46,2004,0),
  'http://www.gazeta.policja.pl/download/7/108073/file.file' => array(47,2004,0),
  'http://www.gazeta.policja.pl/download/7/108074/file.file' => array(48,2004,0),
  'http://www.gazeta.policja.pl/download/7/143629/file.file' => array(1,2003,0),
  'http://www.gazeta.policja.pl/download/7/143632/file.file' => array(2,2003,0),
  'http://www.gazeta.policja.pl/download/7/143637/file.file' => array(3,2003,0),
  'http://www.gazeta.policja.pl/download/7/143639/file.file' => array(4,2003,0),
  'http://www.gazeta.policja.pl/download/7/143645/file.file' => array(5,2003,0),
  'http://www.gazeta.policja.pl/download/7/143647/file.file' => array(6,2003,0),
  'http://www.gazeta.policja.pl/download/7/143650/file.file' => array(7,2003,0),
  'http://www.gazeta.policja.pl/download/7/143652/file.file' => array(8,2003,0),
  'http://www.gazeta.policja.pl/download/7/143654/file.file' => array(9,2003,0),
  'http://www.gazeta.policja.pl/download/7/143656/file.file' => array(10,2003,0),
  'http://www.gazeta.policja.pl/download/7/143661/file.file' => array(11,2003,0),
  'http://www.gazeta.policja.pl/download/7/143663/file.file' => array(12,2003,0),
  'http://www.gazeta.policja.pl/download/7/143665/file.file' => array(13,2003,0),
  'http://www.gazeta.policja.pl/download/7/143667/file.file' => array(14,2003,0),
  'http://www.gazeta.policja.pl/download/7/143678/file.file' => array(15,2003,0),
  'http://www.gazeta.policja.pl/download/7/143680/file.file' => array(16,2003,0),
  'http://www.gazeta.policja.pl/download/7/143682/file.file' => array(17,2003,0),
  'http://www.gazeta.policja.pl/download/7/143684/file.file' => array(18,2003,0),
  'http://www.gazeta.policja.pl/download/7/143686/file.file' => array(19,2003,0),
  'http://www.gazeta.policja.pl/download/7/143688/file.file' => array(20,2003,0),
  'http://www.gazeta.policja.pl/download/7/143690/file.file' => array(21,2003,0),
  'http://www.gazeta.policja.pl/download/7/143692/file.file' => array(22,2003,0),
  'http://www.gazeta.policja.pl/download/7/143696/file.file' => array(23,2003,0),
  'http://www.gazeta.policja.pl/download/7/143698/file.file' => array(24,2003,0),
  'http://www.gazeta.policja.pl/download/7/143700/file.file' => array(25,2003,0),
  'http://www.gazeta.policja.pl/download/7/143702/file.file' => array(26,2003,0),
  'http://www.gazeta.policja.pl/download/7/108423/file.file' => array(27,2003,0),
  'http://www.gazeta.policja.pl/download/7/108425/file.file' => array(28,2003,0),
  'http://www.gazeta.policja.pl/download/7/108426/file.file' => array(30,2003,0),
  'http://www.gazeta.policja.pl/download/7/108427/file.file' => array(31,2003,0),
  'http://www.gazeta.policja.pl/download/7/108428/file.file' => array(32,2003,0),
  'http://www.gazeta.policja.pl/download/7/108429/file.file' => array(33,2003,0),
  'http://www.gazeta.policja.pl/download/7/108430/file.file' => array(34,2003,0),
  'http://www.gazeta.policja.pl/download/7/108431/file.file' => array(35,2003,0),
  'http://www.gazeta.policja.pl/download/7/108432/file.file' => array(36,2003,0),
  'http://www.gazeta.policja.pl/download/7/108433/file.file' => array(37,2003,0),
  'http://www.gazeta.policja.pl/download/7/108434/file.file' => array(38,2003,0),
  'http://www.gazeta.policja.pl/download/7/108435/file.file' => array(39,2003,0),
  'http://www.gazeta.policja.pl/download/7/108436/file.file' => array(40,2003,0),
  'http://www.gazeta.policja.pl/download/7/108437/file.file' => array(41,2003,0),
  'http://www.gazeta.policja.pl/download/7/108438/file.file' => array(42,2003,0),
  'http://www.gazeta.policja.pl/download/7/108440/file.file' => array(43,2003,0),
  'http://www.gazeta.policja.pl/download/7/108442/file.file' => array(44,2003,0),
  'http://www.gazeta.policja.pl/download/7/108446/file.file' => array(45,2003,0),
  'http://www.gazeta.policja.pl/download/7/108451/file.file' => array(46,2003,0),
  'http://www.gazeta.policja.pl/download/7/108452/file.file' => array(47,2003,0),
  'http://www.gazeta.policja.pl/download/7/108453/file.file' => array(48,2003,0),
  'http://www.gazeta.policja.pl/download/7/143615/file.file' => array(12,2002,0),
  'http://www.gazeta.policja.pl/download/7/108484/file.file' => array(17,2002,0),
  'http://www.gazeta.policja.pl/download/7/143620/file.file' => array(26,2002,1),
  'http://www.gazeta.policja.pl/download/7/143621/file.file' => array(26,2002,2),
  'http://www.gazeta.policja.pl/download/7/143623/file.file' => array(42,2002,0),
  'http://www.gazeta.policja.pl/download/7/143625/file.file' => array(48,2002,0),
  'http://www.gazeta.policja.pl/download/7/143712/file.file' => array(1,2001,0),
  'http://www.gazeta.policja.pl/download/7/143714/file.file' => array(2,2001,0),
  'http://www.gazeta.policja.pl/download/7/143716/file.file' => array(3,2001,0),
  'http://www.gazeta.policja.pl/download/7/143718/file.file' => array(4,2001,0),
  'http://www.gazeta.policja.pl/download/7/143720/file.file' => array(5,2001,0),
  'http://www.gazeta.policja.pl/download/7/143722/file.file' => array(6,2001,0),
  'http://www.gazeta.policja.pl/download/7/143724/file.file' => array(7,2001,0),
  'http://www.gazeta.policja.pl/download/7/143726/file.file' => array(8,2001,0),
  'http://www.gazeta.policja.pl/download/7/143728/file.file' => array(9,2001,0),
  'http://www.gazeta.policja.pl/download/7/143730/file.file' => array(10,2001,0),
  'http://www.gazeta.policja.pl/download/7/143732/file.file' => array(11,2001,0),
  'http://www.gazeta.policja.pl/download/7/143734/file.file' => array(12,2001,0),
  'http://www.gazeta.policja.pl/download/7/143736/file.file' => array(13,2001,0),
  'http://www.gazeta.policja.pl/download/7/143738/file.file' => array(14,2001,0),
  'http://www.gazeta.policja.pl/download/7/143739/file.file' => array(15,2001,0),
  'http://www.gazeta.policja.pl/download/7/143754/file.file' => array(16,2001,0),
  'http://www.gazeta.policja.pl/download/7/143756/file.file' => array(17,2001,0),
  'http://www.gazeta.policja.pl/download/7/143758/file.file' => array(18,2001,0),
  'http://www.gazeta.policja.pl/download/7/143760/file.file' => array(19,2001,0),
  'http://www.gazeta.policja.pl/download/7/143762/file.file' => array(20,2001,0),
  'http://www.gazeta.policja.pl/download/7/143764/file.file' => array(21,2001,0),
  'http://www.gazeta.policja.pl/download/7/143766/file.file' => array(22,2001,0),
  'http://www.gazeta.policja.pl/download/7/143768/file.file' => array(24,2001,0),
  'http://www.gazeta.policja.pl/download/7/143770/file.file' => array(25,2001,0),
  'http://www.gazeta.policja.pl/download/7/143777/file.file' => array(26,2001,0),
  'http://www.gazeta.policja.pl/download/7/143779/file.file' => array(27,2001,1),
  'http://www.gazeta.policja.pl/download/7/143780/file.file' => array(27,2001,2),
  'http://www.gazeta.policja.pl/download/7/143786/file.file' => array(28,2001,0),
  'http://www.gazeta.policja.pl/download/7/143788/file.file' => array(29,2001,0),
  'http://www.gazeta.policja.pl/download/7/143790/file.file' => array(30,2001,0),
  'http://www.gazeta.policja.pl/download/7/143792/file.file' => array(33,2001,0),
  'http://www.gazeta.policja.pl/download/7/143794/file.file' => array(34,2001,0),
  'http://www.gazeta.policja.pl/download/7/143796/file.file' => array(35,2001,0),
  'http://www.gazeta.policja.pl/download/7/143798/file.file' => array(36,2001,0),
  'http://www.gazeta.policja.pl/download/7/143800/file.file' => array(37,2001,0),
  'http://www.gazeta.policja.pl/download/7/143802/file.file' => array(40,2001,0),
  'http://www.gazeta.policja.pl/download/7/143804/file.file' => array(41,2001,0),
  'http://www.gazeta.policja.pl/download/7/143806/file.file' => array(42,2001,0),
  'http://www.gazeta.policja.pl/download/7/143808/file.file' => array(43,2001,0),
  'http://www.gazeta.policja.pl/download/7/143810/file.file' => array(44,2001,0),
  'http://www.gazeta.policja.pl/download/7/143812/file.file' => array(45,2001,0),
  'http://www.gazeta.policja.pl/download/7/143815/file.file' => array(48,2001,0),
  'http://www.gazeta.policja.pl/download/7/143817/file.file' => array('Na przełomie wieków',2001,0),
  'http://www.gazeta.policja.pl/download/7/190118/GPnr12-9012000.pdf' => array(1,2000,0),
  'http://www.gazeta.policja.pl/download/7/190124/GPnr216012000.pdf' => array(2,2000,0),
  'http://www.gazeta.policja.pl/download/7/190127/GPnr323012000.pdf' => array(3,2000,0),
  'http://www.gazeta.policja.pl/download/7/190129/GPnr430012000.pdf' => array(4,2000,0),
  'http://www.gazeta.policja.pl/download/7/190131/GPnr56022000.pdf' => array(5,2000,0),
  'http://www.gazeta.policja.pl/download/7/190133/GPnr720022000.pdf' => array(7,2000,0),
  'http://www.gazeta.policja.pl/download/7/190135/GPnr827022000.pdf' => array(8,2000,0),
  'http://www.gazeta.policja.pl/download/7/190137/GPnr95032000.pdf' => array(9,2000,0),
  'http://www.gazeta.policja.pl/download/7/190139/GPnr1119032000.pdf' => array(11,2000,0),
  'http://www.gazeta.policja.pl/download/7/190141/GPnr1226032000.pdf' => array(12,2000,0),
  'http://www.gazeta.policja.pl/download/7/190154/GPnr132042000.pdf' => array(13,2000,0),
  'http://www.gazeta.policja.pl/download/7/190156/GPnr149042000.pdf' => array(14,2000,0),
  'http://www.gazeta.policja.pl/download/7/190158/GPnr1516042000.pdf' => array(15,2000,0),
  'http://www.gazeta.policja.pl/download/7/190160/GPnr1623-30042000.pdf' => array(16,2000,0),
  'http://www.gazeta.policja.pl/download/7/190162/GPnr177052000.pdf' => array(17,2000,0),
  'http://www.gazeta.policja.pl/download/7/190164/GPnr1814052000.pdf' => array(18,2000,0),
  'http://www.gazeta.policja.pl/download/7/190176/GPnr1921052000.pdf' => array(19,2000,0),
  'http://www.gazeta.policja.pl/download/7/190178/GPnr2028052000.pdf' => array(20,2000,0),
  'http://www.gazeta.policja.pl/download/7/190188/GPnr214062000.pdf' => array(21,2000,1),
  'http://www.gazeta.policja.pl/download/7/190189/GPnr214062000.pdf' => array(21,2000,2),
  'http://www.gazeta.policja.pl/download/7/190191/GPnr2211062000.pdf' => array(22,2000,0),
  'http://www.gazeta.policja.pl/download/7/190193/GPnr2318062000.pdf' => array(23,2000,0),
  'http://www.gazeta.policja.pl/download/7/190195/GPnr2425062000.pdf' => array(24,2000,0),
  'http://www.gazeta.policja.pl/download/7/190197/GPnr252072000.pdf' => array(25,2000,0),
  'http://www.gazeta.policja.pl/download/7/190199/GPnr269072000.pdf' => array(26,2000,0),
  'http://www.gazeta.policja.pl/download/7/190201/GPnr2716072000.pdf' => array(27,2000,0),
  'http://www.gazeta.policja.pl/download/7/190203/GPnr2823-30072000.pdf' => array(28,2000,0),
  'http://www.gazeta.policja.pl/download/7/190205/GPnr296082000.pdf' => array(29,2000,0),
  'http://www.gazeta.policja.pl/download/7/190207/GPnr3013082000.pdf' => array(30,2000,0),
  'http://www.gazeta.policja.pl/download/7/190209/GPnr3227082000.pdf' => array(32,2000,0),
  'http://www.gazeta.policja.pl/download/7/190211/GPnr333092000.pdf' => array(33,2000,0),
  'http://www.gazeta.policja.pl/download/7/190214/GPnr3410092000.pdf' => array(34,2000,0),
  'http://www.gazeta.policja.pl/download/7/190217/GPnr3517092000.pdf' => array(35,2000,0),
  'http://www.gazeta.policja.pl/download/7/190221/GPnr3624092000.pdf' => array(36,2000,0),
  'http://www.gazeta.policja.pl/download/7/190223/GPnr371102000.pdf' => array(37,2000,0),
  'http://www.gazeta.policja.pl/download/7/190229/GPnr388102000.pdf' => array(38,2000,0),
  'http://www.gazeta.policja.pl/download/7/190231/GPnr4022102000.pdf' => array(40,2000,0),
  'http://www.gazeta.policja.pl/download/7/190233/GPnr4129102000.pdf' => array(41,2000,0),
  'http://www.gazeta.policja.pl/download/7/190235/GPnr425-12112000.pdf' => array(42,2000,0),
  'http://www.gazeta.policja.pl/download/7/190237/GPnr4319112000.pdf' => array(43,2000,0),
  'http://www.gazeta.policja.pl/download/7/190241/GPnr4426112000.pdf' => array(44,2000,0),
  'http://www.gazeta.policja.pl/download/7/190239/GPnr453122000.pdf' => array(45,2000,0),
  'http://www.gazeta.policja.pl/download/7/190243/GPnr4610122000.pdf' => array(46,2000,0),
  'http://www.gazeta.policja.pl/download/7/190245/GPnr4717122000.pdf' => array(47,2000,0),
  'http://www.gazeta.policja.pl/download/7/190247/GPnr4824-31122000.pdf' => array(48,2000,0),
);

$magazyn_kryminalny_links = [
  'http://www.gazeta.policja.pl/download/7/124647/file.file' => array(1,1995),
  'http://www.gazeta.policja.pl/download/7/124649/file.file' => array(2,1995),
  'http://www.gazeta.policja.pl/download/7/124651/file.file' => array(3,1995),
  'http://www.gazeta.policja.pl/download/7/124653/file.file' => array(4,1995),
  'http://www.gazeta.policja.pl/download/7/124655/file.file' => array(5,1995),
  'http://www.gazeta.policja.pl/download/7/124657/file.file' => array(6,1995),
  'http://www.gazeta.policja.pl/download/7/124659/file.file' => array(7,1995),
  'http://www.gazeta.policja.pl/download/7/124661/file.file' => array(8,1995),
  'http://www.gazeta.policja.pl/download/7/124663/file.file' => array(9,1995),
  'http://www.gazeta.policja.pl/download/7/124665/file.file' => array(10,1995),
  'http://www.gazeta.policja.pl/download/7/124667/file.file' => array(11,1995),
  'http://www.gazeta.policja.pl/download/7/124669/file.file' => array(12,1995),
  'http://www.gazeta.policja.pl/download/7/124671/file.file' => array(13,1995),
  'http://www.gazeta.policja.pl/download/7/124673/file.file' => array(14,1995),
  'http://www.gazeta.policja.pl/download/7/124675/file.file' => array(15,1995),
  'http://www.gazeta.policja.pl/download/7/124677/file.file' => array(16,1995),
  'http://www.gazeta.policja.pl/download/7/124679/file.file' => array(17,1995),
  'http://www.gazeta.policja.pl/download/7/124681/file.file' => array(18,1995),
  'http://www.gazeta.policja.pl/download/7/124683/file.file' => array(19,1995),
  'http://www.gazeta.policja.pl/download/7/124685/file.file' => array(20,1995),
  'http://www.gazeta.policja.pl/download/7/124687/file.file' => array(21,1995),
  'http://www.gazeta.policja.pl/download/7/124689/file.file' => array(22,1995),
  'http://www.gazeta.policja.pl/download/7/124691/file.file' => array(23,1995),
  'http://www.gazeta.policja.pl/download/7/124693/file.file' => array(24,1995),
  'http://www.gazeta.policja.pl/download/7/118340/file.file' => array(1,1994),
  'http://www.gazeta.policja.pl/download/7/118346/file.file' => array(2,1994),
  'http://www.gazeta.policja.pl/download/7/118350/file.file' => array(3,1994),
  'http://www.gazeta.policja.pl/download/7/118353/file.file' => array(4,1994),
  'http://www.gazeta.policja.pl/download/7/118355/file.file' => array(5,1994),
  'http://www.gazeta.policja.pl/download/7/118357/file.file' => array(6,1994),
  'http://www.gazeta.policja.pl/download/7/118359/file.file' => array(7,1994),
  'http://www.gazeta.policja.pl/download/7/118362/file.file' => array(8,1994),
  'http://www.gazeta.policja.pl/download/7/118364/file.file' => array(9,1994),
  'http://www.gazeta.policja.pl/download/7/118366/file.file' => array(10,1994),
  'http://www.gazeta.policja.pl/download/7/118368/file.file' => array(11,1994),
  'http://www.gazeta.policja.pl/download/7/118370/file.file' => array(12,1994),
  'http://www.gazeta.policja.pl/download/7/118372/file.file' => array(13,1994),
  'http://www.gazeta.policja.pl/download/7/118374/file.file' => array(14,1994),
  'http://www.gazeta.policja.pl/download/7/118381/file.file' => array(15,1994),
  'http://www.gazeta.policja.pl/download/7/118383/file.file' => array(16,1994),
  'http://www.gazeta.policja.pl/download/7/118385/file.file' => array(17,1994),
  'http://www.gazeta.policja.pl/download/7/118387/file.file' => array(18,1994),
  'http://www.gazeta.policja.pl/download/7/118389/file.file' => array(19,1994),
  'http://www.gazeta.policja.pl/download/7/118391/file.file' => array(20,1994),
  'http://www.gazeta.policja.pl/download/7/118393/file.file' => array(21,1994),
  'http://www.gazeta.policja.pl/download/7/118395/file.file' => array(22,1994),
  'http://www.gazeta.policja.pl/download/7/118397/file.file' => array(23,1994),
  'http://www.gazeta.policja.pl/download/7/118399/file.file' => array(24,1994),
  'http://www.gazeta.policja.pl/download/7/118219/file.file' => array(1,1993),
  'http://www.gazeta.policja.pl/download/7/118244/file.file' => array(2,1993),
  'http://www.gazeta.policja.pl/download/7/118272/file.file' => array(3,1993),
  'http://www.gazeta.policja.pl/download/7/118274/file.file' => array(4,1993),
  'http://www.gazeta.policja.pl/download/7/118276/file.file' => array(5,1993),
  'http://www.gazeta.policja.pl/download/7/118282/file.file' => array(6,1993),
  'http://www.gazeta.policja.pl/download/7/118289/file.file' => array(7,1993),
  'http://www.gazeta.policja.pl/download/7/118291/file.file' => array(8,1993),
  'http://www.gazeta.policja.pl/download/7/118295/file.file' => array(9,1993),
  'http://www.gazeta.policja.pl/download/7/118297/file.file' => array(10,1993),
  'http://www.gazeta.policja.pl/download/7/118299/file.file' => array(11,1993),
  'http://www.gazeta.policja.pl/download/7/118301/file.file' => array(12,1993),
  'http://www.gazeta.policja.pl/download/7/118304/file.file' => array(13,1993),
  'http://www.gazeta.policja.pl/download/7/118311/file.file' => array(14,1993),
  'http://www.gazeta.policja.pl/download/7/118313/file.file' => array(15,1993),
  'http://www.gazeta.policja.pl/download/7/118315/file.file' => array(16,1993),
  'http://www.gazeta.policja.pl/download/7/118317/file.file' => array(17,1993),
  'http://www.gazeta.policja.pl/download/7/118319/file.file' => array(18,1993),
  'http://www.gazeta.policja.pl/download/7/118322/file.file' => array(19,1993),
  'http://www.gazeta.policja.pl/download/7/118328/file.file' => array(20,1993),
  'http://www.gazeta.policja.pl/download/7/118332/file.file' => array(21,1993),
  'http://www.gazeta.policja.pl/download/7/118334/file.file' => array(22,1993),
  'http://www.gazeta.policja.pl/download/7/118336/file.file' => array(23,1993),
  'http://www.gazeta.policja.pl/download/7/118338/file.file' => array(24,1993),
  'http://www.gazeta.policja.pl/download/7/118155/file.file' => array(1,1992),
  'http://www.gazeta.policja.pl/download/7/118158/file.file' => array(2,1992),
  'http://www.gazeta.policja.pl/download/7/118160/file.file' => array(3,1992),
  'http://www.gazeta.policja.pl/download/7/118162/file.file' => array(4,1992),
  'http://www.gazeta.policja.pl/download/7/118164/file.file' => array(5,1992),
  'http://www.gazeta.policja.pl/download/7/118166/file.file' => array(6,1992),
  'http://www.gazeta.policja.pl/download/7/118168/file.file' => array(7,1992),
  'http://www.gazeta.policja.pl/download/7/118177/file.file' => array(8,1992),
  'http://www.gazeta.policja.pl/download/7/118179/file.file' => array(9,1992),
  'http://www.gazeta.policja.pl/download/7/118187/file.file' => array(10,1992),
  'http://www.gazeta.policja.pl/download/7/118189/file.file' => array(11,1992),
  'http://www.gazeta.policja.pl/download/7/118191/file.file' => array(12,1992),
  'http://www.gazeta.policja.pl/download/7/118193/file.file' => array(13,1992),
  'http://www.gazeta.policja.pl/download/7/118195/file.file' => array(14,1992),
  'http://www.gazeta.policja.pl/download/7/118197/file.file' => array(15,1992),
  'http://www.gazeta.policja.pl/download/7/118199/file.file' => array(16,1992),
  'http://www.gazeta.policja.pl/download/7/118201/file.file' => array(17,1992),
  'http://www.gazeta.policja.pl/download/7/118203/file.file' => array(18,1992),
  'http://www.gazeta.policja.pl/download/7/118205/file.file' => array(19,1992),
  'http://www.gazeta.policja.pl/download/7/118207/file.file' => array(20,1992),
  'http://www.gazeta.policja.pl/download/7/118209/file.file' => array(21,1992),
  'http://www.gazeta.policja.pl/download/7/118211/file.file' => array(22,1992),
  'http://www.gazeta.policja.pl/download/7/118213/file.file' => array(23,1992),
  'http://www.gazeta.policja.pl/download/7/118215/file.file' => array(24,1992),
  'http://www.gazeta.policja.pl/download/7/118083/file.file' => array(1,1991),
  'http://www.gazeta.policja.pl/download/7/118085/file.file' => array(2,1991),
  'http://www.gazeta.policja.pl/download/7/118087/file.file' => array(3,1991),
  'http://www.gazeta.policja.pl/download/7/118089/file.file' => array(4,1991),
  'http://www.gazeta.policja.pl/download/7/118091/file.file' => array(5,1991),
  'http://www.gazeta.policja.pl/download/7/118093/file.file' => array(6,1991),
  'http://www.gazeta.policja.pl/download/7/118095/file.file' => array(7,1991),
  'http://www.gazeta.policja.pl/download/7/118097/file.file' => array(8,1991),
  'http://www.gazeta.policja.pl/download/7/118099/file.file' => array(9,1991),
  'http://www.gazeta.policja.pl/download/7/118101/file.file' => array(10,1991),
  'http://www.gazeta.policja.pl/download/7/118104/file.file' => array(11,1991),
  'http://www.gazeta.policja.pl/download/7/118106/file.file' => array(12,1991),
  'http://www.gazeta.policja.pl/download/7/118146/file.file' => array('1 specjalny',1991),
  'http://www.gazeta.policja.pl/download/7/118108/file.file' => array(13,1991),
  'http://www.gazeta.policja.pl/download/7/118117/file.file' => array(14,1991),
  'http://www.gazeta.policja.pl/download/7/118119/file.file' => array(15,1991),
  'http://www.gazeta.policja.pl/download/7/118121/file.file' => array(16,1991),
  'http://www.gazeta.policja.pl/download/7/118125/file.file' => array(17,1991),
  'http://www.gazeta.policja.pl/download/7/118127/file.file' => array(18,1991),
  'http://www.gazeta.policja.pl/download/7/118129/file.file' => array(19,1991),
  'http://www.gazeta.policja.pl/download/7/118140/file.file' => array(20,1991),
  'http://www.gazeta.policja.pl/download/7/118142/file.file' => array(21,1991),
  'http://www.gazeta.policja.pl/download/7/118144/file.file' => array('2 specjalny',1991),
  'http://www.gazeta.policja.pl/download/7/118148/file.file' => array(22,1991),
  'http://www.gazeta.policja.pl/download/7/118150/file.file' => array(23,1991),
  'http://www.gazeta.policja.pl/download/7/118152/file.file' => array(24,1991),
  'http://www.gazeta.policja.pl/download/7/122788/file.file' => array(1,1990),
  'http://www.gazeta.policja.pl/download/7/122792/file.file' => array(2,1990),
  'http://www.gazeta.policja.pl/download/7/122793/file.file' => array(3,1990),
  'http://www.gazeta.policja.pl/download/7/122796/file.file' => array(4,1990),
  'http://www.gazeta.policja.pl/download/7/122797/file.file' => array(5,1990),
  'http://www.gazeta.policja.pl/download/7/122799/file.file' => array('5 WSN',1990),
  'http://www.gazeta.policja.pl/download/7/122800/file.file' => array(6,1990),
  'http://www.gazeta.policja.pl/download/7/122801/file.file' => array('7 (1874)',1990),
  'http://www.gazeta.policja.pl/download/7/122803/file.file' => array('7 (1878)',1990),
  'http://www.gazeta.policja.pl/download/7/122802/file.file' => array('8 (1875)',1990),
  'http://www.gazeta.policja.pl/download/7/122804/file.file' => array('8 (1879)',1990),
  'http://www.gazeta.policja.pl/download/7/122806/file.file' => array('9 WSN',1990),
  'http://www.gazeta.policja.pl/download/7/122805/file.file' => array(9,1990),
  'http://www.gazeta.policja.pl/download/7/122807/file.file' => array(10,1990),
  'http://www.gazeta.policja.pl/download/7/122808/file.file' => array(11,1990),
  'http://www.gazeta.policja.pl/download/7/122809/file.file' => array(12,1990),
  'http://www.gazeta.policja.pl/download/7/122810/file.file' => array(13,1990),
  'http://www.gazeta.policja.pl/download/7/122811/file.file' => array(14,1990),
  'http://www.gazeta.policja.pl/download/7/118046/file.file' => array(15,1990),
  'http://www.gazeta.policja.pl/download/7/118050/file.file' => array(16,1990),
  'http://www.gazeta.policja.pl/download/7/118052/file.file' => array(17,1990),
  'http://www.gazeta.policja.pl/download/7/118054/file.file' => array(18,1990),
  'http://www.gazeta.policja.pl/download/7/118056/file.file' => array(19,1990),
  'http://www.gazeta.policja.pl/download/7/118066/file.file' => array(20,1990),
  'http://www.gazeta.policja.pl/download/7/118075/file.file' => array(21,1990),
  'http://www.gazeta.policja.pl/download/7/118077/file.file' => array(22,1990),
  'http://www.gazeta.policja.pl/download/7/118079/file.file' => array(23,1990),
  'http://www.gazeta.policja.pl/download/7/118081/file.file' => array(24,1990),
];

function quote($text) {
  return "\"$text\"";
}

function download($url, $file) {
  echo "Pobieram $file...";
  $file_handle = fopen($url, 'r');
  if ($file_handle === false) {
    echo "Błąd!\n";
  } else {
    $bytes = file_put_contents($file, $file_handle);
    echo "$bytes bajtów pobrano!\n";
    fclose($file_handle);
  }
}

function ocr($input_file, $output_file, $title) {
  global $naps2_cmd;
  system($naps2_cmd . " -i \"$input_file\" -o \"$output_file\" --pdftitle \"$title\" --enableocr --ocrlang \"pol\" --verbose --profile \"PROF1\" ");
}

$journal = Patrol::get_collection();
foreach ($journal as $issue) {
  $url      = $issue[0];
  $title    = $issue[1];
  $file     = "$title.pdf";
  $file_OCR = "$title (OCR).pdf";

  if (file_exists($file) === false) {
    download($url, $file);
  } else {
    echo '.';
    //echo "Pomijam $file\n";
  }
}

foreach ($policja_997_linki as $url => $opis) {
  $numer = $opis[0];
  $rok = $opis[1];
  $miesiac = $opis[2];
  $czesc = $opis[3];

  if ($czesc) {
    $file = "Policja 997 - $rok-$miesiac nr $numer część $czesc.pdf";
  } else {
    $file = "Policja 997 - $rok-$miesiac nr $numer.pdf";
  }

  if (file_exists($file) === false) {
    download($url, $file);
  } else {
    echo '.';
    //echo "Pomijam $file\n";
  }
}

foreach ($policja_997_wydanie_specjalne_linki as $url => $opis) {
  $numer = $opis[0];
  $rok = $opis[1];
  $miesiac = $opis[2];

  $file = "Policja 997 Wydanie Specjalne - $rok-$miesiac nr $numer.pdf";

  if (file_exists($file) === false) {
    download($url, $file);
  } else {
    echo '.';
    //echo "Pomijam $file\n";
  }
}

foreach ($gazeta_policyjna_linki as $url => $opis) {
  $numer = $opis[0];
  $rok = $opis[1];
  $czesc = $opis[2];

  if ($czesc) {
    $title = "Gazeta Policyjna - $rok nr $numer część $czesc";
  } else {
    $title = "Gazeta Policyjna - $rok nr $numer";
  }
  $file     = "$title.pdf";
  $file_OCR = "$title (OCR).pdf";

  if (file_exists($file) === false) {
    download($url, $file);
  } else {
    echo '.';
    //echo "Pomijam $file\n";
  }

  if ($enabled_ocr) {
    if (file_exists($file_OCR) === false) {
      echo "Rozpoznawanie znaków do pliku $file_OCR\n";
      ocr($file, $file_OCR, $title);
    } else {
      echo '.';
      //echo "Pomijam rozpoznawanie znaków do $file_OCR\n";
    }
  }
}

foreach ($magazyn_kryminalny_links as $url => $opis) {
  $numer = $opis[0];
  $rok = $opis[1];

  $title    = "Magazyn kryminalny 997 - $rok nr $numer";
  $file     = "$title.pdf";
  $file_OCR = "$title (OCR).pdf";

  if (file_exists($file) === false) {
    download($url, $file);
  } else {
    echo '.';
    //echo "Pomijam pobieranie $file\n";
  }

  if ($enabled_ocr) {
    if (file_exists($file_OCR) === false) {
      echo "Rozpoznawanie znaków do pliku $file_OCR\n";
      ocr($file, $file_OCR, $title);
    } else {
      echo '.';
      //echo "Pomijam rozpoznawanie znaków do $file_OCR\n";
    }
  }
}
