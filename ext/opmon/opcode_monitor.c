#ifdef HAVE_CONFIG_H
#include "config.h"
#endif
#include "php.h"
#include "php_opcode_monitor.h"

static PHP_FUNCTION(opcode_monitor_string);

ZEND_BEGIN_MODULE_GLOBALS(opcode_monitor)
  uint foo;
ZEND_END_MODULE_GLOBALS(opcode_monitor)

#ifdef ZTS
# define ReSG(v) TSRMG(opcode_monitor_globals, zend_opcode_monitor_globals *, v)
#else
# define ReSG(v) (opcode_monitor_globals.v)
#endif

ZEND_DECLARE_MODULE_GLOBALS(opcode_monitor)
static PHP_GINIT_FUNCTION(opcode_monitor);

static zend_function_entry php_opcode_monitor_functions[] = {
    PHP_FE(opcode_monitor_string, NULL)
    {NULL, NULL, NULL}
};

zend_module_entry opcode_monitor_module_entry = {
    STANDARD_MODULE_HEADER,
    PHP_OPCODE_MONITOR_EXTNAME,
    php_opcode_monitor_functions,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    PHP_OPCODE_MONITOR_VERSION,
    PHP_MODULE_GLOBALS(opcode_monitor),
    PHP_GINIT(opcode_monitor),
    NULL,
    NULL,
    STANDARD_MODULE_PROPERTIES_EX
};

#ifdef COMPILE_DL_OPCODE_MONITOR
ZEND_GET_MODULE(opcode_monitor)
#endif

static PHP_GINIT_FUNCTION(opcode_monitor)
{
  opcode_monitor_globals->foo = 3U;
}

PHP_FUNCTION(opcode_monitor_string)
{
    RETURN_STRING("Opcode monitor says: 'Hello World'", 1);
}
