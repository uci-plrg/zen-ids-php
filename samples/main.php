<?php

include "a.php";

#$dynamic_include = "a.php";
#include $dynamic_include;

print "a: " . a(str_repeat("main", 2)) . "\n";

include "b.php";
print "a: " . a(b("main")) . "\n";
print "b: " . b("main") . "\n";

?>
