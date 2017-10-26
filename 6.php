<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 26.10.2017
 * Time: 21:49
 */
include_once '6/functions.php';

echo commForm();
setStr();

//var_dump($_FILES[upload]);

/*if($_FILES['img']){
    move_uploaded_file($_FILES["img"]["tmp_name"], "/path/to/file/".$_FILES["filename"]["name"]);
}*/

/*if(isset( $_POST['img'])){
    $img = $_POST['img'];
    setStr($img);
}*/