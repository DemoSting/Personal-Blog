<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/18
 * Time: 16:01
 */

//$id = $_GET['id'];
$re = require('./lib/init.php');

function index(){
    $sql = "select * from art";
    $data = mGetAll($sql);
    require('./view/admin/index.html');
}

index();
