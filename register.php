<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/22
 * Time: 16:06
 */

require './lib/init.php';
class Register{
    function getPost(){
        require './view/front/register.html';
    }

    function toDb(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $sql = "insert into user (username,password,email) values ('$username','$password','$email');";
        $res = mQuery($sql);
    }

    function start(){
        if(!$_POST){
            $this->getPost();
        }else{
            $this->toDb();
            header('location:./login.php');
        }
    }
}

$r = new Register();
$r->start();