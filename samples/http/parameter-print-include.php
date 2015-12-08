<?php

foreach ($_GET as $parameter => $value) {
  print("Query parameter '$parameter' = '$value'\n");
  $parameter_count++;
  $value_char_count += strlen($value);
}

?>
