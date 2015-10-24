<?php

$b = "b";
echo "base sees b: $b\n";

include "zval-stack-include.php";

goto skip;
include "non-existent-file.php";
skip:

$c = "c" . $b . $a;

echo "a: $a; b: $b; c: $c; z: $z\n";

?>
