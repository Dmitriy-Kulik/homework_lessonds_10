<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 26.10.2017
 * Time: 18:26
 */

include_once '3/functions.php';

echo commForm();

if(isset( $_POST['text'])){
    $l = $_POST['text'];
    setStr($l);
}