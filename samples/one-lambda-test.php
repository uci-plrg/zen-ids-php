<?php

function normal($a) {
  print("normal function says: $a\n");
}

$lambda = create_function('$a', 'print("lambda says: $a\n");');

$normal_function = "normal";

$normal_function(3);
$lambda(3);

?>
