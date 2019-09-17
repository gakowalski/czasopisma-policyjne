<?php

class Journal {
  public static function get_title() { die('Sample Journal Title'); }
  public static function get_collection() { die('NO COLLECTION'); }
  public static function get_count() { return isset(static::$links) ? count(static::$links) : 0; }
}
