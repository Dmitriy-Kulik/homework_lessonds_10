<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 23.10.2017
 * Time: 20:06
 */

function commForm(){
    return '
        <form action="./8.php" method="post">
        <p><textarea name="comment" rows="10" cols="50" autofocus></textarea></p>
        <p><input type="submit" value="send"></p>
        </form>
        ';
}

function addComment($strComm){
    $arrComm = getAllComm();

    $arrComm [] = [
        'comment' => $strComm
    ];

    file_put_contents('8/comm.json', json_encode($arrComm));

}

function getAllComm(){
    if(!file_exists('8/comm.json')){
        return [];
    }
    $comm = file_get_contents('8/comm.json');
    return json_decode($comm, true);
}

function showAllComm(){
    $censur = ['123', 'мат', 'Мат'];

    foreach (getAllComm() as $key=>$value){
        foreach ($value as $item){
            echo '<p>' . 'Комментарий № ';
            echo $key + 1 . ': <br>';
            //echo $item.'<br>';
            echo str_replace('<b>', '', str_replace('</b>', '', str_replace($censur, ' " Недопустимое слово " ', $item)));

        }
    }
    echo commForm();
}