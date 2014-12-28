<?php

for ($i = 0; $i < 5; $i++) {
  print $i . ") many\nlines\nof\noutput\n";
  eval('echo "dynamic php!";');
}
?>

