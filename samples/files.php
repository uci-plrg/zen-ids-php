<?php

$f = tmpfile();
$count = fwrite($f, "Temp");
printf("Wrote %d bytes to the temp file.\n", $count);
fseek($f, 0);
printf("Temp file contains '%s'\n", fread($f, 32));
fclose($f);

file_put_contents("/var/tmp/foo.txt", "foo");
