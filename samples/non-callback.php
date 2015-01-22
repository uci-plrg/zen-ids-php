<?php

function match_callback(array $matches) {
  return "[[" . $matches[0] . "]]";
}

function foo() {
  return "foo";
}

print("Match: " . match_callback(array("abc")) . "\n");

?>
