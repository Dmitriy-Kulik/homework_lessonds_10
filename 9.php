<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 23.10.2017
 * Time: 21:44
 */

include_once '9/functions.php';

echo commForm();

if(isset( $_POST['comment'])){
    $str = $_POST['comment'];
    setStr($str);

}