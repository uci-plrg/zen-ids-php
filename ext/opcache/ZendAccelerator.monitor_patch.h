#ifndef _ZEND_ACCELERATOR_MONITOR_PATCH_H_
#define _ZEND_ACCELERATOR_MONITOR_PATCH_H_ 1

#ifdef ZEND_MONITOR
# undef ZVAL_COPY_VALUE_EX
# define ZVAL_COPY_VALUE_EX ZVAL_COPY_VALUE_INT_EX
# undef zend_hash_init
# define zend_hash_init(ht, nSize, pHashFunction, pDestructor, persistent) \
    do { \
      _zend_hash_init((ht), (nSize), (pDestructor), (persistent) ZEND_FILE_LINE_CC); \
      (ht)->u.v.reserve |= HASH_RESERVE_INTERNAL; \
    } while (0)
# undef zend_hash_init_ex
# define zend_hash_init_ex(ht, nSize, pHashFunction, pDestructor, persistent, bApplyProtection) \
    do { \
      _zend_hash_init_ex((ht), (nSize), (pDestructor), (persistent), (bApplyProtection) ZEND_FILE_LINE_CC); \
      (ht)->u.v.reserve |= HASH_RESERVE_INTERNAL; \
    } while (0)
#endif

#endif
