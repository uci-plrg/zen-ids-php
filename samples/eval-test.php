<?php
print "something static\n";
eval('print "something dynamic\n";');
eval('eval(\' print"something doubly dynamic\n";\');');
?>
