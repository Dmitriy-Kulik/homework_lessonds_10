<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 26.10.2017
 * Time: 19:39
 */
function commForm(){
    return '
        <h1>Введите путь к катологу:</h1>
        <form action="./4.php" method="post">
        <p><input type="text" name="text"></p>
        <p><input type="submit" value="send"></p>
        </form>
        ';
}

function setStr($dir){
    echo "В директории - " . $dir . "<br> лежат:";
    $arr = scandir($dir);
    foreach ($arr as $key=>$value){
        if($value != '.' && $value != '..') {
            if (is_dir($value)) {
                echo "<p>" . "Это директория - " . $value . "</p>";
            } else echo "<p>" . "Это файл - " . $value . "</p>";
        }
    }
}