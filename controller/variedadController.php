<?php
require_once "./view/variedadView.php";
require_once "./model/variedadModel.php";
require_once "securedController.php";

class variedadController
{
  private $View;
  PRIVATE $TITULO;
  private $titulo1;
  private $titulo2;
  private $Model;

    function __construct()
    {
    $this->View=new variedadView();
    $this->Model=new variedadModel();
    $this->titulo1="Nuestros Productos";
    $this->titulo2="Nuestras Variedades";
    $this->tituloedit="editar variedad";
    $this->Titulo="HOME";
    }
    function addvariedad(){
        $productos = $this->Model->getProductos();
        $this->View->addVariedad($this->titulo2,$productos);
    }

    Function adddvariedad(){
        $productos = $this->Model->getProductos();
    $this->View->addVariedad($this->titulo2,$productos);
    }
  function homeAdmin(){
    $variedades =$this->Model->GET_variedades();
    $productos = $this->Model->getProductos();
    $this->View->mostrarAdmin($this->Titulo,$this->titulo1,$this->titulo2,$variedades,$productos);

  }
  function home(){
    $variedades =$this->Model->GET_variedades();
    $productos = $this->Model->getProductos();
    $this->View->mostrarC($this->Titulo,$this->titulo1,$this->titulo2,$variedades,$productos);

  }
  function Agrega_variedad(){
   $nombre_variedad=$_POST["nombre_variedad"];
   $estado=$_POST["estado"];
   $this->Model->Agregar_variedad($nombre_variedad,$estado);
   header(HOMEADMIN);
  }
 function Borra_variedad($param){
     $this->Model->Borrar_Variedad($param[0]);
     header(HOMEADMIN);
 }
 function GuardarEditarVariedad(){
 $nombre_variedad = $_POST["nombrevariedad"];
 $disponible = $_POST["disponible"];
 $id_variedad=$_POST["idvariedad"];
 $this->Model->GuardarEditarVariedad($nombre_variedad,$disponible,$id_variedad);
 header(HOMEADMIN);
}
 function EditarVariedad($param){
       $id_variedad = $param[0];
       $variedad = $this->Model->getVariedad($id_variedad);
       $this->View->MuestraEditVariedad($this->tituloedit,$variedad);
   }
 function editProducto($param){
     $id_producto = $param[0];
     $producto = $this->Model->getProducto($id_producto);
     $this->View->muestraFormProducto($this->tituloedit,$producto);
 }
 function guardarProducto(){
   $id_producto = $_POST['id_producto'];
   $id_variedad = $_POST['id_variedad'];
   $nombreproducto = $_POST['Nombre_producto'];
   $precio = $_POST['Precio'];
   if ($id_producto=="") {
     $this->Model->addProducto($id_producto,$id_variedad,$nombreproducto,$precio);
     header(HOMEADMIN);
   }
   else {
     $this->Model->guardarProducto($id_producto,$id_variedad,$nombreproducto,$precio);
     header(HOMEADMIN);
   }
 }


 function  removeProducto($param){
     $this->Model->removeProducto($param[0]);//id_producto
     header(HOME);
 }
 function addProducto(){
     $producto=0;
     $this->View->muestraFormProducto($this->tituloedit,$producto);
 }
 function adddProducto($param){

  $id_producto = $POST['id_producto'];
  $nombreproducto = $_POST['Nombre_producto'];
  $precio = $_POST['Precio'];
  if(isset($nombreproducto) && !empty($precio)){
      $this->Model->addProducto($id_producto,$nombreproducto,$precio);
    }
  }


function getProducto(){
 $nombreproducto = $_POST['Nombre_producto'];
 if(isset($_POST['Nombre_producto']) && !empty($id_variedad)) {
     $producto=$this->Model->getProducto($nombreproducto);
     $variedades=$this->Model->getVariedades($producto['id_producto']);
     $this->View->mostrar($producto,$variedades);
   }
 }





}
?>
