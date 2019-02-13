<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/15
 * Time: 13:42
 */



header("Content-Type:text/html;charset=utf8");
require('./lib/init.php');
$res = $_POST;
if(empty($_POST)){
    require(ROOT . '/catinfo.php');

}else{
//    $conn = mysqli_connect('localhost','root','root','blog');
    if(empty($_POST['biaoti'])){
        echo "名称不能为空！";
        exit();
    }
    $sql = "select count(*) from cat where cat_name = '$_POST[biaoti]';";
    $num = mGetOne($sql);

    if($num > 0){
        echo "栏目名称已经存在！";
        exit();
    }else{
        $sql1 = "insert into cat (cat_name,num,info) values('$_POST[biaoti]',0,'$_POST[neirong]')";
        $res = mQuery($sql1);
        if($res){
            header('location:./catinfo.php');
        }else{
            echo mysqli_error($conn);
            echo "插入失败！";
        }
    }
}
