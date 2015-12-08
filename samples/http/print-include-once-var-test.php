<?php

$included = "constant";
$clobbered = $_GET["foo"];
$clobbered_local = $_GET["foo"];

include_once __DIR__ . "/print-include-once-var.php";

$clobbered_local = "constant";

print "Included variable is $included\n";
print "Clobbered variable is $clobbered\n";
print "Clobbered-local variable is $clobbered_local\n";
print "Copied variable is $copied\n";

?>
