<?php

for ($i = 0; $i < 10; $i++) {
  for ($j = 0; $j < 10; $j++) {
    print "i=" . $i . " | j=" . $j . "\n";
    eval('for ($k = 0; $k < 10; $k++) { print "k=" . $k . "\n"; break 1; }');
    break 2;
  }
}

?>
