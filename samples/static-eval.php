<?php

function static_eval()
{
  eval('$i=3; $i++; print "eval in a function where i=".$i."\n";');
}

function define_foo()
{
  function foo()
  {
    print "foo\n";
  }
}
?>
