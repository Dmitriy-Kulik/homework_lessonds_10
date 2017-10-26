<?php
/**
 * Created by PhpStorm.
 * User: Pivz3
 * Date: 25.10.2017
 * Time: 23:50
 */
function commForm(){
    return '
        <form action="./12.php" method="post">
        <p><textarea name="comment" rows="10" cols="50" autofocus></textarea></p>
        <p><input type="submit" value="send"></p>
        </form>
        ';
}

function setStr($str){
    echo $str . '<br><br>';

    $arr = explode(' ', $str);
    $arrRes = array_count_values($arr);
    asort($arrRes);
    foreach ($arrRes as $key=>$value){
        echo "Слово '" . $key . "' встречается в строке " . $value ." раза." . "<br>";
    }
}