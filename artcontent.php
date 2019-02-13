<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/18
 * Time: 15:06
 */

require('./lib/init.php');
class ArtComment{

    public function getArt(){
        $id = $_GET['id'] + 0;
        $sql = "select * from art where id = $id";
        $data = mGetRow($sql);
        require('./view/admin/art_content.html');
    }

    public function getPost(){
        /**
         * @return sql
         */
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $comment = $_POST['comment'];
        $name = "haha";
        $date = "2018.9.10";
        $sql = "insert into comment (comment,date,name,email,subject) values ('$email','$date','$name','$subject','$comment')";
        return $sql;
    }

    public function toDb(){
        $sql = $this->getPost();
        mQuery($sql);
    }

    public function start($a){
        if(!$_POST){
            $a->getArt();
        }else{
            $a->toDb();
        }
    }
}
$a = new ArtComment();
$a->start($a);
