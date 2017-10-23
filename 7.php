<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 20.10.2017
 * Time: 0:06
 */

include_once '7/functions.php';

if(isset( $_POST['comment'])){
    $str = $_POST['comment'];
    addComment($str);

}

showAllComm();


