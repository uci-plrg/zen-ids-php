<?php

function define_function($a) {
  eval('echo "Defining ' . $a . '()\n"; function ' . $a . '() { print "Foo here\n"; }');
}

print "Statically call define_function(\"foo\")\n";
define_function("foo");

print "Statically calling foo()\n";
foo();

?>
