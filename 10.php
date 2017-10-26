<?php
/**
 * Created by PhpStorm.
 * User: Pivz3
 * Date: 24.10.2017
 * Time: 15:24
 */

include_once '10/functions.php';

echo commForm();

if(isset( $_POST['comment'])){
    $str = $_POST['comment'];
    setStr($str);

}