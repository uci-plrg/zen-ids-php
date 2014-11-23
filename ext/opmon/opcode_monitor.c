#ifdef HAVE_CONFIG_H
#include "config.h"
#endif
#include "php.h"
#include "php_opcode_monitor.h"

static function_entry opcode_monitor_functions[] = {
    PHP_FE(opcode_monitor, NULL)
    {NULL, NULL, NULL}
};

zend_module_entry opcode_monitor_module_entry = {
#if ZEND_MODULE_API_NO >= 20010901
    STANDARD_MODULE_HEADER,
#endif
    PHP_OPCODE_MONITOR_EXTNAME,
    opcode_monitor_functions,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
#if ZEND_MODULE_API_NO >= 20010901
    PHP_OPCODE_MONITOR_VERSION,
#endif
    STANDARD_MODULE_PROPERTIES
};

#ifdef COMPILE_DL_OPCODE_MONITOR
ZEND_GET_MODULE(opcode_monitor)
#endif

PHP_FUNCTION(opcode_monitor)
{
    RETURN_STRING("Hello World", 1);
}
