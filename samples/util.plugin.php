<?php

namespace plugin\code;

class Util {
  function substring($src, $start, $length) {
    return substr($src, $start, $length);
  }
}

function concatenate($first, $delimiter, $second) {
  return $first . $delimiter . $second;
}

?>
