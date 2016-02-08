<?php

function foo($a) {
  echo ("a: $a\n");
}

function bar($a) {
  echo ("a: $a\n");
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

?>
