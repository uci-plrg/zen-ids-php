<?php
include "/stash/script-safe/samples/a.php";
print "a: " . a("main") . "\n";
include "b.php";
print "a: " . a("main") . "\n";
print "b: " . b("main") . "\n";
?>
