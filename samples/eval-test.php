<?php
eval('print "something dynamic\n";');
print "something static\n";
eval('eval(\' print"something doubly dynamic\n";\');');
?>
