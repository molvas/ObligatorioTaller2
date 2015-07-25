<?php
session_start();

if($_SESSION['entro'] ){
    echo "<h1>Bienvenido al área privada</h1>";
}
else {
    header("Location: formLogin.html");
}

?>