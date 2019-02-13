<?php

header('Content-type:text/html;charset=utf8');
define('ROOT' , dirname(__DIR__));
/*echo __FILE__ , '<br>';
echo __LINE__;*/
require(ROOT . '/lib/mysql.php');
require(ROOT . '/lib/func.php');

$_POST = _addslasshes($_POST);
$_GET = _addslasshes($_GET);
$_COOKIE = _addslasshes($_COOKIE);


?>