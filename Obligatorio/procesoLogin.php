  <?php
session_start();

$usuario = $_POST['txtUsuario'];
$clave = $_POST['txtClave'];

if($usuario == "admin" && $clave == "12345"){
    $_SESSION['entro'] = true;
}
else{
    unset($_SESSION['entro']);
}
echo 'sdefsf';
header("Location: privada.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>