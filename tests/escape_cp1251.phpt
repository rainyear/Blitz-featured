--TEST--
escape for non-UTF encoding (cp1251)
--FILE--
<?php
include('common.inc');
ini_set('default_charset', 'cp1251');
$string_var = '������ � ��������� windows-1251';
$body = "<span>{{ escape(\$string_var); }}</span>";

$T = new Blitz();
$T->load($body);

$T->display(array('string_var' => $string_var));
?>
--EXPECT--
<span>������ � ��������� windows-1251</span>

