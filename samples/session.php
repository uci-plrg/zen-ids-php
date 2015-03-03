<?php 

session_start();

$_SESSION["foo"] = 8;
echo "foo = " . $_SESSION["foo"] . "\n";

session_start();

echo "After session_start() again, foo = " . $_SESSION["foo"] . "\n";

?>
