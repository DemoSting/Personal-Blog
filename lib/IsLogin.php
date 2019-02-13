<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/22
 * Time: 16:13
 */
function isLogin(){
    return isset($_COOKIE['username']);
}