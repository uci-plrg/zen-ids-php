<?php

class StaticThings {
  public static function callMeStatic($a) {
    print($a . "\n");
  }
}

StaticThings::callMeStatic("foo");

$bar = "StaticThings";
$zot = "callMeStatic";
$bar::$zot("bar-zot");

?>
