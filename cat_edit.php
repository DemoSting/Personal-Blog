<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/16
 * Time: 14:05
 */

header("Content-Type:text/html;charset=utf8");

$id = $_GET['cat_id'];

$conn = mysqli_connect('localhost','root','root','blog');
$sql1 = "select count(*) from cat where id = '$id'";
$sql2 = "select num from cat where id = '$id'";

$num = mysqli_query($conn,$sql1);
$a_num = mysqli_query($conn,$sql2);

if(mysqli_fetch_row($num)[0] === 0){
    echo "没有该栏目！";
    exit();
}

$sql3 = "select * from cat where id='$id'";
$res = mysqli_query($conn,$sql3);
$row = mysqli_fetch_assoc($res);

if(empty($_POST)) {
    require('./view/admin/cat_edit.html');
}
else{
    $sql = "update cat set cat_name = '$_POST[biaoti]',info = '$_POST[neirong]' where id = $id;";
    $res = mysqli_query($conn,$sql);
    if($res){
        require('./catinfo.php');
        echo "插入成功！";
    }else{
        echo "编辑失败！";
    }
}