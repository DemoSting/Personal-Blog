<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/18
 * Time: 14:30
 */
require('./lib/init.php');
$id = $_GET['id'];
$pst = $_POST;
if(!$_POST){
    $sql1 = "select * from cat";
    $data = mQuery($sql1);
    $sql2 = "select * from art where id = $id;";
    $data2 = mGetRow($sql2);
    require('./view/admin/art_edit.html');
}else{
    $sql3 = "update art set title='$pst[title]',content = '$pst[content]',type = '$pst[type]' where id = $id";
    $res = mQuery($sql3);
    $sql4 = "select * from art";
    $data = mGetAll($sql4);
    require './view/admin/art_list.html';

}