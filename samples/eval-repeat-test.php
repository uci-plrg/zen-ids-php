<?php

$first = 'print "first eval\n";';
$second = '$i = 1; print ($i + 1) . "nd eval\n";';
$third = '$i = 1; print (++$i + 1) . "rd eval\n";';

eval($first);
eval($second);
eval($third);
eval($first);
eval($second);
eval($third);

?>
