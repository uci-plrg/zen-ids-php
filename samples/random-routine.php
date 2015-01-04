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

require_once "routine.php";
eval("print 'foo';");
include "routine.php";
include_once "routine.php";
require "routine.php";
require_once "routine.php";

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
} else {
  for ($j = 11; $j > $i; $j--) {
    $f = pick_function($j);
    for ($k = 1; $k < $j; $k++) {
      switch ($j) {
      case 9:
        $f("Nine");
        continue 2;
      case 8:
        $f("Eight");
      case 7:
        $f("Seven");
        break 2;
      case 6:
        $f(Six);
        if ($k % 2 == 0)
          break;
      case 5:
        $f(Five);
        if ($k %2 == 1)
          continue;
      default:
        $f("k = ".$k);
      }
    }
  }
}

?>
