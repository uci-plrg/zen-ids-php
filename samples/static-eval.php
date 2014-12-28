<?php

function static_eval()
{
  eval('print "eval in a function\n";');
}

function define_foo()
{
  function foo()
  {
    print "foo\n";
  }
}
?>
