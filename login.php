<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/22
 * Time: 14:12
 */

//setcookie('name','null',0);
//header('location:login.php');
require './lib/init.php';

class Login{

    public function getlogin(){
        require "./view/front/login.html";
    }

    public function userToDb(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "select * from user where username = '$username' and password = '$password'";
        $res = mGetRow($sql);
        if(!$res){
            echo "登录失败！";
        }else{
            $this->setSession($res);
        }
    }

    public function setSession($res){
        $username = $res['username'];
        setcookie("username","$username");
    }

    public function start(){
        if(!$_POST){
            $this->getlogin();
        }else{
            $this->userToDb();
            header('location:./index.php');
        }
    }
}
$l = new Login();
$l->start();
