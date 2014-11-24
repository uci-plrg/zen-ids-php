#include "php.h"
#include "php_opcode_monitor.h"
#include "opcode_monitor_context.h"

typedef struct _shadow_frame_t {
  zend_op *context;
  uint continuation_index;
} shadow_frame_t;

static shadow_frame_t shadow_stack[256];
static shadow_frame_t *shadow_frame;
static shadow_frame_t *last_pop;

void initialize_opcode_monitor_context()
{
  shadow_frame = shadow_stack;
  shadow_frame->context = NULL;
  last_pop = NULL;
}

void push_context(zend_op* context, uint branch_index)
{
  shadow_frame->context = context;
  shadow_frame->continuation_index = branch_index + 1;
  shadow_frame++;
}

void pop_context()
{
  last_pop = --shadow_frame;
}

void verify_context(zend_op* context, uint index)
{
  shadow_frame_t *verify_frame = last_pop;
  
  last_pop = NULL;
  if (verify_frame == NULL) // nothing pending
    return;

  if (verify_frame->context != context) {
    PRINT("Error! Returned to context "PX" but expected context "PX"!\n", 
          (uint64) context, (uint64) verify_frame->context);
    return;
  }
  if (verify_frame->continuation_index != index) {
    PRINT("Error! Returned to index %d but expected index %d!\n",
          index, verify_frame->continuation_index);
    return;
  }
  
  PRINT("Verified return from "PX" to "PX".%d\n", (uint64) verify_frame->context, 
        context, index);
}


