<?php

$app="util.app.php";

include $app;
include "util.plugin.php";

use \app\code\Util as AppUtil;
use \plugin\code\Util as PluginUtil;

$util = new AppUtil();
print("\app\code\Util::substring(\"foobar\", 1, 4): " . $util->substring("foobar", 1, 4) . "\n");
print("\app\code\concatenate(\"foo\", \"bar\"" . \app\code\concatenate("foo", "bar") . "\n");


$util = new PluginUtil();
print("\plugin\code\Util::substring(\"foobar\", 1, 4): " . $util->substring("foobar", 1, 4) . "\n");
print("\plugin\code\concatenate(\"foo\", \"-\", \"bar\"): " . \plugin\code\concatenate("foo", "-", "bar") . "\n");

function call_concatenate($basename) {
  $callee=$basename . "\concatenate";
  print("$basename . \concatenate(\"foo\", \"-\", \"bar\"): " . $callee("foo", "-", "bar") . "\n");
}

call_concatenate("\app\code");
call_concatenate("\plugin\code");

?>
