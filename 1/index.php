<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 13.10.2017
 * Time: 19:25
 */

include_once 'functions.php';

$a = $_POST['text1'];
$b = $_POST['text2'];
echo getCommonWords($a, $b);