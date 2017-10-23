<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 13.10.2017
 * Time: 22:39
 */
include_once 'functions.php';

$str =  $_POST['text'];
var_dump(topLengthWord($str));
echo implode('<br>' , topLengthWord($str));

