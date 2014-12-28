<?php
print "Before include: $foo $bar\n";
include "foobar.php";
print "After include: $foo $bar " . zot("$foo-$bar") . "\n";
?>
