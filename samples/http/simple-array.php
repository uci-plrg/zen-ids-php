<?php

$stuff = array( "a" => "c", "b" => "d" );

$a = $_GET["a"];
$stuff["a"] =  $a;

$a_stuff = $stuff["a"]; # should be tainted
$b_stuff = $stuff["b"]; # should not be tainted
echo("\$stuff[a]: $a_stuff; \$stuff[b]: $b_stuff\n");

?>
