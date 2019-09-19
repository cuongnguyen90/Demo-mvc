<?php
include "C_Reader.php";
$controller = new C_Reader();
if (isset($_GET['action'])){

    switch ($_GET['action']){
        case 'delete':
            $controller->deleteReader($_GET['id']);
            header("Location:/demo");
            break;
        case 'detail':
            $reader = $controller->getReader($_GET['id']);
            include 'view/reader/detail.php';
            break;
        case 'update':
            $controller->updateData((object)$_POST);
            header("Location:/demo");
            break;
        case 'add':
            $controller->addReader((object)$_POST);
            header("Location:/demo");
            break;
        default:
            header("Location:/demo");
            break;
    }
}else{
    $result = $controller->showAll();
    include "view/reader/show.php";
}