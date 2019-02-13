<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/16
 * Time: 14:04
 */

header("Content-Type:text/html;charset=utf8");

$id = $_GET['cat_id'];

$conn = mysqli_connect('localhost','root','root','blog');

$sql1 = "select count(*) from cat where id = '$id'";
$sql2 = "select num from cat where id = '$id'";

$num = mysqli_query($conn,$sql1);
$a_num = mysqli_query($conn,$sql2);

if(mysqli_fetch_row($num)[0] == 0){
    echo "没有该栏目，删除失败！";
    exit();
}

if(mysqli_fetch_row($a_num)[0] != 0){
    echo "该栏目下有文章，不能删除！";
    exit();
}

$sql3 = "delete from cat where id = '$id';";
$res = mysqli_query($conn,$sql3);

if($res){
    header('location:./catadd.php');
}else{
    echo "删除失败！";
}