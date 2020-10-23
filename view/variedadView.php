<?php
require('libs/smarty.class.php');

class variedadView
{
  private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();
  }
  function mostrarAdmin($TITULO,$titulo1,$titulo2,$variedades,$productos){
$this->Smarty->assign('Titulo',$TITULO);
  $this->Smarty->assign('Titulo1',$titulo1);
  $this->Smarty->assign('Titulo2',$titulo2);
  $this->Smarty->assign('variedades',$variedades);
  $this->Smarty->assign('productos',$productos);

  //$this->Smarty->debugging = true;
  $this->Smarty->display('templates/homeAdmin.tpl');
  }
  function mostrarc($TITULO,$titulo1,$titulo2,$variedades,$productos){
  $this->Smarty->assign('Titulo',$TITULO);
  $this->Smarty->assign('Titulo1',$titulo1);
  $this->Smarty->assign('Titulo2',$titulo2);
  $this->Smarty->assign('variedades',$variedades);
  $this->Smarty->assign('productos',$productos);

  //$this->Smarty->debugging = true;
  $this->Smarty->display('templates/homec.tpl');
  }
  function MuestraEditVariedad($titulo,$variedad){

    $this->Smarty->assign('Titulo',$titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('variedad',$variedad);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    //$smarty->debugging = true;
    $this->Smarty->display('templates/MuestraEditVariedad.tpl');
  }
  function addVariedad($titulo,$productos){
    $this->Smarty->assign('Titulo',$titulo);
    $this->Smarty->assign('productos',$productos);
    $this->Smarty->display('templates/addVariedad.tpl');

  }

  function muestraFormProducto($titulo,$producto){

    $this->Smarty->assign('Titulo',$titulo);
    $this->Smarty->assign('producto',$producto);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    //$smarty->debugging = true;
    $this->Smarty->display('templates/abmProducto.tpl');
  }


}
?>
