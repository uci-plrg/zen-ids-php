--TEST--
mcrypt_module_get_algo_key_size
--SKIPIF--
<?php if (!extension_loaded("mcrypt")) print "skip"; ?>
--FILE--
<?php
var_dump(mcrypt_module_get_algo_key_size(MCRYPT_RIJNDAEL_256));
var_dump(mcrypt_module_get_algo_key_size(MCRYPT_RIJNDAEL_192));
var_dump(mcrypt_module_get_algo_key_size(MCRYPT_RC2));
var_dump(mcrypt_module_get_algo_key_size(MCRYPT_XTEA));
var_dump(mcrypt_module_get_algo_key_size(MCRYPT_CAST_256));
var_dump(mcrypt_module_get_algo_key_size(MCRYPT_BLOWFISH));
?>
--EXPECT--
int(32)
int(32)
int(128)
int(16)
int(32)
int(56)
