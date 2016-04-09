<?php

function foo($a) {
  echo ("foo: $a\n");
}

function bar($a) {
  echo ("bar: $a\n");
}

function zot(&$a) {
  echo ("zot: $a\n");
}

$stuff = array( "a" => "c", "b" => "d" );

$a = $_GET["a"];
$stuff["a"] =  $a;

$a_stuff = $stuff["a"]; # should be tainted
$b_stuff = $stuff["b"]; # should not be tainted

foo($a_stuff);
foo($stuff["a"]);

bar($b_stuff);
bar($stuff["b"]);

$a_stuff = strlen($a_stuff); # retains taint
$a_stuff = strstr($a_stuff, "a"); # may drop taint

zot($a_stuff);
zot($stuff["a"]);

?>
