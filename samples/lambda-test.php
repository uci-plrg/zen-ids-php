<?php

for ($i = 0; $i < 100; $i++) {
  $code = "\$c = 0;\n";
  $instruction_count = rand(3, 5);
  for ($j = 0; $j < $instruction_count; $j++) {
    if ($j % 2 == 0)
      $op = "+";
    else
      $op = "-";

    switch (rand(0, 5)) {
    case 0:
      $code = $code . "\$c " . $op . "= \$a + \$b;\n";
      break;
    case 1:
      $code = $code . "\$c " . $op . "= \$a - \$b;\n";
      break;
    case 2:
      $code = $code . "\$c " . $op . "= \$a * \$b;\n";
      break;
    case 3:
      $code = $code . "\$c " . $op . "= \$a / \$b;\n";
      break;
    case 4:
      $code = $code . "\$c " . $op . "= \$a % \$b;\n";
      break;
    }
  }

  $functions[$i] = create_function('$a,$b', $code . 'print("'.$i.': $c\n");');
}

for ($i = 0; $i < 10; $i++) {
  $f = $functions[rand(0, 99)]($i, $i+1);
}

?>
