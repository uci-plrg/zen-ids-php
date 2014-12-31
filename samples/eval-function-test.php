<?php
include "static-eval.php";

define_foo();

static_eval();
static_eval();
static_eval();

include "dynamic-eval.php";

dynamic_eval('print "dynamic eval\n";');
dynamic_eval('print "dynamic eval!"; $i=7; $i--; print " ...and i=".$i."\n";');
dynamic_eval('print "dynamic eval!!\n";');
?>
