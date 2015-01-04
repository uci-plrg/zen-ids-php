<?php

for ($i = 0; $i < 100; $i++) {
  $functions[$i] = create_function('$a', 'print("'.$i.': $a\n");');
}

for ($i = 0; $i < 10; $i++) {
  $f = $functions[rand(0, 100)]($i);
}

?>
