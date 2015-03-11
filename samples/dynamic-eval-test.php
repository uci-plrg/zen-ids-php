<?php

include "dynamic-eval.php";

dynamic_eval('print "dynamic eval\n";');
dynamic_eval('print "dynamic eval!"; $i=7; $i--; print " ...and i=".$i."\n";');
dynamic_eval('print "dynamic eval!!\n";');

?>
