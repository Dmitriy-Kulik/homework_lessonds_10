<?php
/**
 * Created by PhpStorm.
 * User: Pivz3
 * Date: 25.10.2017
 * Time: 23:34
 */

function commForm(){
    return '
        <form action="./12.php" method="post">
        <p><textarea name="comment" rows="10" cols="50" autofocus></textarea></p>
        <p><input type="submit" value="send"></p>
        </form>
        ';
}

function setStr($str)
{
    echo $str . '<br>';

    $arr = explode('. ', $str);
    var_dump($arr);
    krsort($arr);
    var_dump($arr);
    $str = implode('. ', $arr);
    echo $str;
}