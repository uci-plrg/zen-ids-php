<?php

$stuff = array();

$a = $_GET["a"];
$b = "b";

$stuff[] = $a;
$stuff[] = $b;

echo("\$stuff[] has " . count($stuff) . " elements.\n");

$stuff0 = $stuff[0]; # should be tainted
$stuff1 = $stuff[1]; # should not be tainted
echo("\$stuff[0]: $stuff0; \$stuff[1]: $stuff1\n");

?>
