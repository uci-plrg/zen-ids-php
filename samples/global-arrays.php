<?php

global $a;
$a = array();
$a[] = array(array("x11", "y11", "z11"), array("x12", "y12", "z12"));
$a[] = array(array("x21", "y21", "z21"), array("x22", "y22", "z22"));
$a[] = array(array("x31", "y31", "z31"));

global $b;
$b = &$a[1];

function add_array_local() {
  global $a;
  $a3 = $a[2];
  $a31 = array("x32", "y32", "z32");
  $a3[] = $a31;

  global $b;
  $a2 = $b[1];
  $a2[1] = "y22i";
}

function add_array_global() {
  global $a;
  $a3 = &$a[2];
  $a31 = array("x32", "y32", "z32");
  $a3[] = $a31;

  global $b;
  $a2 = &$b[1];
  $a2[1] = "y22i";
}

add_array_local();
echo "Added array (3,2) locally; global array \$a is now: ";
var_dump($a);
echo "\n";

add_array_global();
echo "Added array (3,2) globally; global array \$a is now: ";
var_dump($a);
echo "\n";

?>
