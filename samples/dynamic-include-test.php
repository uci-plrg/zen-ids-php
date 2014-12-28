<?php
print "Before include: $foo $bar\n";
eval('include "foobar.php";');
print "After include: $foo $bar\n";
?>
