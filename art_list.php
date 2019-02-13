<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/19
 * Time: 18:56
 */

require './lib/init.php';

$sql = "select * from art";
$data = mGetAll($sql);

require './view/admin/art_list.html';
