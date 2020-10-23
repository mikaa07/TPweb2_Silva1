<?php
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) .'/home');
define('HOMEADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/homeadmin');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');

class configApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'variedadController#home',
      'home'=> 'variedadController#home' ,
      'homeadmin'=> 'variedadController#homeAdmin' ,
      'borrar'=> 'variedadController#Borra_Variedad',
      'agregar'=> 'variedadController#Agrega_variedad',
      'editar'=> 'variedadController#EditarVariedad',
      'addVariedad'=> 'variedadController#AddVariedad',
      'guardarEditar'=> 'variedadController#GuardarEditarVariedad',

      'MostrarUsuarios'=> 'usuarioController#MostrarUsuario',
      'login'=>'loginController#login',
      'logout'=>'loginController#logout',
      'verificarLogin'=> 'loginController#verificarLogin',


      'borrarProducto'=> 'variedadController#removeProducto',
      'guardarProducto'=> 'variedadController#guardarProducto',
      'editarProducto'=> 'variedadController#editProducto',
      'addProducto'=> 'variedadController#addProducto',


      'addUsuario'=>'usuarioController#addUsuario',
      'InsertarUsuario'=>'usuarioController#InsertUsuario'


    ];

}
 ?>
