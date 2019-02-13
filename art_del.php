<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/19
 * Time: 18:36
 */


require './lib/init.php';
$id = $_GET['id'];
$sql = "delete from art where id = $id";
$res = mQuery($sql);

$sql = "select * from art";
$data = mGetAll($sql);

require './view/admin/art_list.html';
