<?php
class variedadModel{
  private $db;
  function __construct()
  {
   $this->db=$this->Connect();
  }
  private function Connect(){
    return new PDO('mysql:host=localhost;'
   .'dbname=lossobrinosderosa;charset=utf8'
   , 'root', '');
  }
  function GET_variedades(){
   $sentencia =$this->db->prepare( "select * from variedad");
   $sentencia->execute();
   return $sentencia->fetchAll(PDO::FETCH_ASSOC);
   header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
  function Agregar_variedad($nombre_variedad,$estado){
    $sentencia = $this->db->prepare("INSERT INTO variedad(Nombre_variedad,Estado) VALUES(?,?)");
    $sentencia->execute(array($nombre_variedad,$estado));
  }
  function Borrar_Variedad($id_variedad){
    $sentencia = $this->db->prepare("delete from variedad where id_variedad=?");
    $sentencia->execute(array($id_variedad));
  }
 function GuardarEditarVariedad($nombre_variedad,$estado,$id_variedad){
    $sentencia = $this->db->prepare( "update variedad set Nombre_variedad= ?, Estado = ?, where id_variedad=?");
    $sentencia->execute(array($nombre_variedad,$estado,$id_variedad));


}


 function getProductos(){
     $sentencia = $this->db->prepare( "select * from producto order by precio");
     $sentencia->execute();
     //mysql_close($db);
     return $sentencia->fetchAll(PDO::FETCH_ASSOC);
     header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
   }
//revisar
   function getProducto($id_producto){
       $sentencia = $this->db->prepare( "select * from producto where id_producto='$id_producto'");
       $sentencia->execute();
       //mysql_close($db);
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     }
   function guardarProducto($id_producto,$nombreproducto,$precio){
     $sentencia = $this->db->prepare( "update producto set nombre_producto= ?, precio = ?, where id_producto=?");
      $sentencia->execute(array($nombreproducto,$precio,$id_producto));
    }
   function addProducto($id_producto,$nombreproducto, $precio){
     $sentencia = $this->db->prepare("INSERT INTO producto(id_producto,nombre_producto,precio) VALUES(?,?,?)");
     $sentencia->execute(array($id_producto,$nombreproducto, $precio));
     header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
   }

   function removeProducto($id_producto){
       $accion = $this->db->prepare("delete from variedad where id_producto=?");
       $accion->execute(array($id_producto));
       $accion2 = $this->db->prepare("delete from producto where id_producto=?");
       $accion2->execute(array($id_producto));
     }
      function GetVariedad($id_variedad){
      $sentencia = $this->db->prepare( "select * from variedad where id_variedad=?");
      $sentencia->execute(array($id_variedad));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

    function getVariedades($id_producto){
      $sentencia = $this->db->prepare( "select * from variedad where id_producto='$id_producto'");
      $sentencia->execute();
      //mysql_close($db);
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

}
 ?>
