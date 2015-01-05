<?php

$fib = "1 1";
$a[0] = 1;
$a[1] = 1;
for ($i = 2; $i < 10; $i++) {
  $a[$i] = $a[$i-1] + $a[$i-2];
  $fib = $fib . " " . $a[$i];
}
echo $fib . "\n";

?>
