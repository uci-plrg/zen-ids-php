<?php

class Something {
  public $foo;
  public $bar;

  public function __construct() {
    $this->foo = "foo";
    $this->bar = "bar";
  }

  public function iterateFields() {
    foreach ($this as $k => $v) {
      echo "$k = $v\n";
    }
  }
}

$a = new Something();
$a->iterateFields();

?>
