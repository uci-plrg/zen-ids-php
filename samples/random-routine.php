<?php

function a($message)
{
  print "a: ".$message."\n";
}

function b($message)
{
  print "b: ".$message."\n";
}

function c($message)
{
  print "c: ".$message."\n";
}

function pick_function($i)
{
  switch ($i % 3) {
  case 0:
    return 'a';
  case 1:
    return 'b';
  default:
    return 'c';
  }
}

$i = rand(0, 10);

$f = pick_function($i);

$f("Starting a random routine");

if ($i < 5) {
  for ($j = $i; $j < 8; $j++) {
    $f = pick_function($j);
    switch ($j) {
    case 0:
      $f("Zero");
      break;
    case 1:
      $f("One");
      break;
    case 2:
      $f("A couple");
      break;
    case 3:
      $f("A few");
      break;
    default:
      $f("Many");
      break;
    }
  }
}

?>
