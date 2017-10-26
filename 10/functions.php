<?php
/**
 * Created by PhpStorm.
 * User: Pivz3
 * Date: 24.10.2017
 * Time: 15:25
 */

function commForm(){
    return '
        <form action="./10.php" method="post">
        <p><textarea name="comment" rows="10" cols="50" autofocus></textarea></p>
        <p><input type="submit" value="send"></p>
        </form>
        ';
}

function setStr($str){
    echo $str . '<br>';
    $arrStr = explode(' ', $str);
    $arrRes = array_count_values($arrStr);
    var_dump($arrRes);
    $arrT = [];

    $t = 0;
    $b = 0;
    foreach ($arrRes as $value){
        if($value !== 1){
            $b++;
        } else $t++;
    }
    echo "Количество уникальных слов: " . $t . '<br>';
    echo "Количество дублирующихся слов: " . $b . '<br>';


    foreach ($arrRes as $value){
        if($value == 1){
            array_push($arrT, $value);
        }
    }
    echo '<br>' . "Количество уникальных слов (второй способ): " . count($arrT) . '<br>';
}