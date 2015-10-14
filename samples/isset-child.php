<?php

if (!isset($foo)) {
  $foo = "bar";
  print("Now setting file-global \$foo = '$foo'\n");
} else {
  print("Already have file-global \$foo = '$foo'\n");
}

?>
