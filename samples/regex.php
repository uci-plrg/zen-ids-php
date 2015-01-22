<?php

function match_callback(array $matches) {
  return "[[" . $matches[1] . "]]";
}

function foo($text) {
  $regex = '/{(.*?)}/';
  return preg_replace_callback($regex, function(array $matches) {
    return "[[" . $matches[1] . "]]";
  }, $text);
}

function bar($text) {
  $regex = '/{(.*?)}/';
  return preg_replace_callback($regex, "match_callback", $text);
}

$sub = foo("a b c {d e f} g h i {j k l}");
print("Substitution via foo: $sub\n");

$sub = bar("a b c {d e f} g h i {j k l}");
print("Substitution via bar: $sub\n");

?>
