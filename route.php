<?php

  require_once "controller/variedadController.php";
  $controller= new variedadController();
   $partesURL=explode('/',$_GET['action']);
    if ($partesURL[0]== ''){
      $controller->home();

    }elseif ($partesURL[0]=='agregar'){
        $controller->Agrega_variedad();

    }  elseif($partesURL[0]=='borrar'){
          $controller->Borra_variedad($partesURL[1]);
       }

?>