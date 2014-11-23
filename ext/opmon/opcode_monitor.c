#ifdef HAVE_CONFIG_H
#include "config.h"
#endif
#include "php.h"
#include "php_opcode_monitor.h"

#define EC(f) opcode_monitor_globals.execution_context.f

typedef struct _execution_context_t {
  const zend_op *base_op;
} execution_context_t;

ZEND_BEGIN_MODULE_GLOBALS(opcode_monitor)
  execution_context_t execution_context;
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
  PHP_MINIT(opcode_monitor),
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

#ifdef COMPILE_DL_OPMON
ZEND_GET_MODULE(opcode_monitor)
#endif

static void opcode_executing(const zend_op *op)
{
  uint op_index;
  zend_op *current_opcodes;

  if (EC(base_op) == NULL)
    EC(base_op) = op;

  if (EG(current_execute_data) != NULL && EG(current_execute_data)->func != NULL)
    current_opcodes = &EG(current_execute_data)->func->op_array.opcodes;

  if (current_opcodes == NULL)
    op_index = 0xffffffff;
  else
    op_index = (uint)(op - current_opcodes);

  fprintf(stderr, "[op %d, line #%d): 0x%x:%s\n", op_index, op->lineno,
      op->opcode, zend_get_opcode_name(op->opcode));

  if (op->opcode == ZEND_INCLUDE_OR_EVAL) {
    fprintf(stderr, "  == entering new script context\n");
  } else if (op->opcode == ZEND_DO_FCALL) {
    fprintf(stderr, "  == call function by name\n");
  } else if (op->opcode == ZEND_RETURN) {
    fprintf(stderr, "  == return\n");
  }

  printf("Opcode monitor observes execution of opcode %d\n", op->opcode);
}

PHP_MINIT_FUNCTION(opcode_monitor)
{
  printf("Initializing the opcode monitor\n");

  register_opcode_monitor(opcode_executing);
}

static PHP_GINIT_FUNCTION(opcode_monitor)
{
  opcode_monitor_globals->execution_context.base_op = NULL;
}

PHP_FUNCTION(opcode_monitor_string)
{
  printf("Executing the opcode monitor function\n");
  RETURN_STRING("Opcode monitor says: 'Hello World'");
}
