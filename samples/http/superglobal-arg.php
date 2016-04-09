<?php

function printParameters($p) {
  foreach ($p as $k => $v) {
    echo("$k: $v");
  }
}

printParameters($_GET);

