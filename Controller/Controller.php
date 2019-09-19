<?php
include "C_Reader.php";
switch ($_GET['action']){
   case 'show' :
      break;
   case 'delete':
      echo "DELET";die();
      $controller = new C_Reader();
      $result = $controller->delete($_GET['id']);
      header("Location:/");
      break;
   default:
      $controller = new C_Reader();
      $result = $controller->showAll();
      include "view/reader/show.php";
      break;
}