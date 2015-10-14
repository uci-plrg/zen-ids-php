<?php

$key = "request_count";

if (array_key_exists($key, $_SESSION)) {
  $count = $_SESSION[$key] + 1;
} else {
  $count = 1;
}

echo("Setting count to $count\n");
$_SESSION[$key] = $count;

?>
