<?php
function foo() {
  function bar() {
    print("foobar!\n");
  }
  bar();
}
foo();
?>
<a href="zot">
zot|zot
</a>
<?php
print("bar\n");
?>
