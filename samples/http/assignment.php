<?php

$a = "a";
$b = "b";
$c = "c";
$stuff = array( $a => "a", $b => "b", $c => "c" );

foreach ($_GET as $parameter => $value) {
  $p = $parameter;
  $v = $value;
  echo("Query parameter '$p' = '$v'\n");

  $stuff[$p] = $v;
}

echo("\$stuff[\$$a]: " . $stuff[$a] . "\n");
echo("\$stuff[\$$b]: " . $stuff[$b] . "\n");

foreach ($stuff as $key => $value) {
  echo("\$stuff[\$$key]: $value\n");
}

?>
