<?php

namespace app\code;

class Util {
  function substring($src, $set, $mark) {
    return substr($src, $set, $mark);
  }
}

function concatenate($first, $second) {
  return $first . $second;
}

namespace plugin\code;

class Util {
  function substring($src, $start, $length) {
    return substr($src, $start, $length);
  }
}

function concatenate($first, $delimiter, $second) {
  return $first . $delimiter . $second;
}

use app\code;

$util = new Util();
print("substring(\"foobar\", 1, 4): " . $util->substring("foobar", 1, 4) . "\n");

runkit_function_remove(substring

use plugin\code;

$util = new Util();
print("substring(\"foobar\", 1, 4): " . $util->substring("foobar", 1, 4) . "\n");

$utili = new \app\code\Util();

/*
$a = strlen('hi'); // see "Using namespaces: fallback to global
                   // function/constant" section

$d = namespace\MYCONST; // see "namespace operator and __NAMESPACE__
                        // constant" section
$d = __NAMESPACE__ . '\MYCONST';
echo constant($d); // see "Namespaces and dynamic language features" section
*/

?>
