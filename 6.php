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

/*if($_FILES['gallery']){
    move_uploaded_file($_FILES["gallery"]["tmp_name"], "/path/to/file/".$_FILES["filename"]["name"]);
}*/

/*if(isset( $_POST['gallery'])){
    $gallery = $_POST['gallery'];
    setStr($gallery);
}*/