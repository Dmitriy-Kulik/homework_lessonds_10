<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 23.10.2017
 * Time: 20:07
 */
include_once '8/functions.php';

if(isset( $_POST['comment'])){
    $str = $_POST['comment'];
    addComment($str);

}

showAllComm();