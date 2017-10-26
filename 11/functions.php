<?php
/**
 * Created by PhpStorm.
 * User: Pivz3
 * Date: 24.10.2017
 * Time: 20:26
 */

function commForm(){
    return '
        <form action="./11.php" method="post">
        <p><textarea name="comment" rows="10" cols="50" autofocus></textarea></p>
        <p><input type="submit" value="send"></p>
        </form>
        ';
}

function setStr($str){
    echo  $str.'<br>';

/*  for ($i = 0; $i < strlen($str); $i++){
    if($str[$i] == '.'){
        echo $i . ' ' . substr($str,0,1) .'<br>';
        $str[$i+2] = mb_strtoupper(substr($str,1,2), "UTF-8").'<br>';
    }

    }
    var_dump(substr($str,0,strlen($str)));
    echo '<br>';*/

    $arr = explode('. ', $str);
    $newArr=[];
    foreach ($arr as $value){
        $char =  mb_strtoupper(substr($value,0,2), "UTF-8");
        $value[0] = $char[0];
        $value[1] = $char[1];
        array_push($newArr, $value);
    }
    var_dump($newArr);
    $str = implode('. ', $newArr);
    echo $str.'<br>';

    /*$char = mb_strtoupper(substr($str,0,2), "utf-8"); // это первый символ
    $string[0] = $char[0];
    $string[1] = $char[1];
    echo $str;*/
}