PHP_ARG_ENABLE(zend-monitor,whether to enable Zend monitor support,
[  --enable-zend-monitor       Enable Zend monitoring support])

if test "$PHP_ZEND_MONITOR" = "yes"; then
  PHP_NEW_EXTENSION(opcode_monitor, opcode_monitor.c, $ext_shared)
fi
