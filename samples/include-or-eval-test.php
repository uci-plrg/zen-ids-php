<?php

eval("print 'eval\n';");
print('include "routine.php"'."\n");
include "routine.php";
print('include_once "routine.php"'."\n");
include_once "routine.php";
print('require "routine.php"'."\n");
require "routine.php";
print('require_once "routine.php"'."\n");
require_once "routine.php";

?>
