<?php

function include_zot() {
  $a = 3;
  include "zot.php";
  echo "in include_zot() after including zot.php, a = $a\n";
}

$a = 4;
echo "from include-test before include_zot(), a = $a\n";
include_zot();
echo "from include-test after include_zot(), a = $a\n";

echo "Before include: $foo $bar\n";
include "foobar.php";
echo "After include: $foo $bar " . foobar("$foo-$bar") . "\n";

?>
