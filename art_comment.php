<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/21
 * Time: 19:30
 */

class ArtComment{

    public function getPost(){
        /**
         * @return sql
         */
        $sql = '';

        if(!$_POST){
            require './view/admin/art_content.html';
        }else{
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $comment = $_POST['comment'];
            $date = date();
            $sql = "insert into comment (comment,date,name,email,subject) values ('$email','$date','$subject','$comment')";
        }
        return sql;
    }
}

$a = new ArtComment();
echo $a->getPost();
