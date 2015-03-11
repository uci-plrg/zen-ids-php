<?php

$dynamic_include = "../a.php";
include $dynamic_include;

print "a: " . a("main") . "\n";

include "../b.php";
print "a: " . a("main") . "\n";
print "b: " . b("main") . "\n";

?>
