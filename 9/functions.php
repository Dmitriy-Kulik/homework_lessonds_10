<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 23.10.2017
 * Time: 21:44
 */

function commForm(){
    return '
        <form action="./9.php" method="post">
        <p><textarea name="comment" rows="10" cols="50" autofocus></textarea></p>
        <p><input type="submit" value="send"></p>
        </form>
        ';
}

function setStr($str){
    echo $str . '<br>';

    $s = '';
    $l = strlen($str);
    for ($i = 0; $i < $l; $i++){
        $s = $str[$i].$s;
    }
    echo $s;
}