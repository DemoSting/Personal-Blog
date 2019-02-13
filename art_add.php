<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/18
 * Time: 11:46
 */

require("./lib/init.php");

class ArtAdd
{
    function getArt()
    {
        $sql1 = "select * from cat";
        $data = mQuery($sql1);
        require("./view/admin/art_add.html");
    }

    function addArt()
    {
        $conn=mConn();
        $title = $_POST['title'];
        $content = $_POST['content'];
        $type = $_POST['type'];
        $sql = "insert into art(title,content,type) values('$title','$content','$type')";
        $res = mQuery($sql);
        $this->index();
    }

    function start(){
        if(!$_POST){
            $this->getArt();
        }else{
            $this->addArt();
        }
    }

    function index(){
        $sql = "select * from art";
        $data = mGetAll($sql);
        require('./view/admin/index.html');
    }
}

$a = new ArtAdd();
$a->start();
