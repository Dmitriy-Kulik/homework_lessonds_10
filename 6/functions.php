<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 26.10.2017
 * Time: 21:49
 */
include_once './libs/Smarty.class.php';

function uploadsFiles(){
    if(isset($_FILES['upload']) && $_FILES['upload']['type'] == 'image/jpeg'){
        move_uploaded_file($_FILES['upload']['tmp_name'], './6/gallery/' . $_FILES['upload']['name']);
    }
}

function showGallery(){
    $arrGall = glob('6/gallery/*.*');
    $smarty = new Smarty();
    $smarty->setTemplateDir('6/template');
    $smarty->assign('arrGall', $arrGall);
    $smarty->display('index.tpl');
}


