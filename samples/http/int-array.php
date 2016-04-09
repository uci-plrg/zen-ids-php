<?php

$stuff = array( 0 => "c", 1 => "d" );

$a = $_GET["a"];
$stuff[0] =  $a;

$stuff0 = $stuff[0]; # should be tainted
$stuff1 = $stuff[1]; # should not be tainted
echo("\$stuff[0]: $stuff0; \$stuff[1]: $stuff1\n");

?>
