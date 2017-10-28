<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 26.10.2017
 * Time: 21:49
 */
function commForm(){
    return '
        <form enctype="multipart/form-data" action="./6.php" method="post">
        <p><input type="file" name="upload"></p>
        <p><input type="submit" value="send"></p>
        </form>
        ';
}
function setStr()
{
    var_dump($_FILES['upload']);
    if(isset($_FILES['upload']) && $_FILES['upload']['type'] == 'image/jpeg'){
        move_uploaded_file($_FILES['upload']['tmp_name'], './6/gallery/' . $_FILES['upload']['name']);
    }
    echo "<br><img src='6/gallery/2.jpg'>";

    $s = new Smarty();
}
