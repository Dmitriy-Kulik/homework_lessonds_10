<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 26.10.2017
 * Time: 18:26
 */

function commForm(){
    return '
        <form action="./3.php" method="post">
        <p><input type="text" name="text"></p>
        <p><input type="submit" value="send"></p>
        </form>
        ';
}

function setStr($l){
    echo "Удаляет слова длина которых больше " . $l . ".<br>";
    if(!file_exists('3/text.txt')){
        $text = fopen("3/text.txt", "w");
        fwrite($text, 'Это тестовая строка которая появляеться если файла изначально не существует!');
        fclose($text);
    }
        //$text = fopen("3/text.txt", "w");
        //$res = fopen("3/text.txt", "r");
        //fclose($res);
        $text = file_get_contents('3/text.txt');
        echo "Строка до удаления слов: ". $text . "<br>";
        $arr = explode(" ", $text);
        foreach ($arr as $key=>$value){
            if(strlen($value) > $l) {
                if (isset($arr[$key])){
                    unset($arr[$key]);
                } else echo "Ошибка! Такого элеммента в масиве не существует!";
            }
        }
    $t = implode(" ", $arr);
    echo "Строка после удаления слов: ". $t;
    $res = fopen("3/text.txt", "w");
    fwrite($res, $t);
}