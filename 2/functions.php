<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 13.10.2017
 * Time: 22:39
 */

function topLengthWord($str){
    $newArr = [];
    $arr = explode(" ", $str);
    uasort($arr, 'mysort');
    foreach ($arr as $key=>$value){
        if (count($newArr) == 3) return $newArr;
        else array_push($newArr, $value);

    }

    return $newArr;

}
function mysort($a, $b) {
    if(strlen($a) < strlen($b)){
        return true;
    }else return false;
}
