<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 26.10.2017
 * Time: 20:49
 */

function commForm(){
    return '
        <h1>Введите путь к катологу:</h1>
        <form action="./5.php" method="post">
        <p><input type="text" name="text"></p>
        <p><input type="submit" value="send"></p>
        </form>
        ';
}

function setStr($dir, $search){
    echo "Поиск в директории - " . $dir . "<br>";
    echo "Ключевое слово для поиска - " . $search . "<br>";
    $arr = scandir($dir);
    echo "<p>" . "Найденые файлы и директории: " . "</p>";
    var_dump($arr);
    echo "Найдено: <br>";
    foreach ($arr as $key=>$value){
        if($value == $search) {
            echo $value . "<br>";
        }

    }
    //var_dump($arrResult);
}