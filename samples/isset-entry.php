<?php

include "isset-child.php";
include "isset-child.php";

function isset_test() {
  if (isset($foo)) {
    print("Alread have function-local \$foo = '$foo'\n");
  } else {
    $foo = "bar";
    print("Now setting function-local \$foo = '$foo'\n");
  }
}

isset_test();
isset_test();

?>
