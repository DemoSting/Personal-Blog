<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/15
 * Time: 18:37
 */

header("Content-Type:text/html;charset=utf-8");

$sql = "select * from cat";
$conn = mysqli_connect('localhost','root','root','blog');
$res = mysqli_query($conn,$sql);
$data = [];
if(!$res){
    echo mysqli_error($conn);
}else{
    while($row = mysqli_fetch_assoc($res)){
        $data[] = $row;
    }
}

include("./view/admin/cat_add.html");