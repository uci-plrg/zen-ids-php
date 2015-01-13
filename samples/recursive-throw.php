<?php

function throw_bomb($a) {
  if ($a == 0)
    throw new Exception("Boom!\n");
  else
    throw_bomb(--$a);
}

try {
  throw_bomb(4);
} catch (Exception $e) {
  print "Exception says: " . $e . "\n";
}

?>
