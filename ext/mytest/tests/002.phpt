--TEST--
mytest_test1() Basic test
--SKIPIF--
<?php
if (!extension_loaded('mytest')) {
	echo 'skip';
}
?>
--FILE--
<?php
$ret = mytest_test1();

var_dump($ret);
?>
--EXPECT--
The extension mytest is loaded and working!
NULL
