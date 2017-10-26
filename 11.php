<?php
/**
 * Created by PhpStorm.
 * User: Pivz3
 * Date: 24.10.2017
 * Time: 15:24
 */
include_once '11/functions.php';

echo commForm();

if(isset( $_POST['comment'])){
    $str = $_POST['comment'];
    setStr($str);
}
//Почему-то на русском нормально большие буквы проставляет, а на английском превую и вторую большими делает?
//Хотя строка из 2-х языков проходит через один и тот же алгоритм.
//Как исправить можно?