<?php

$lambda = create_function('$a', 'print("lambda says: $a\n"); return $a * $a;');

$lambda($lambda(3));

?>
