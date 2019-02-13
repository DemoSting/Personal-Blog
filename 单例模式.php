<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/19
 * Time: 13:00
 */

header('Content-Type:text/html;charset=utf-8');

class Single{
    public $data;
    static public $obj = null;
    final protected function __Construct(){
        $this -> $data = mt_rand(1000000,9999999999999);
    }

    static public function getCount(){
        if(Single::$obj == null){
            Single::$obj = new Single();
        }
        return Single::$obj;
    }
}

Single::getCount();
