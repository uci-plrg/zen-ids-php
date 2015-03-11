<?php

namespace app\code;

class Util {
  function substring($src, $set, $mark) {
    return substr($src, $set, $mark - $set);
  }
}

function concatenate($first, $second) {
  return $first . $second;
}

?>
