<?php
include 'secundarias.php';
include 'config.php';

$erro = "";

if ($_POST) {
   foreach ($usuario as $manos) {
    if(
        $_POST["usuario"] == $manos["usuario"] &&
        $_POST["senha"] == $manos["senha"]
    ) {
        $_SESSION["usuario"] = $manos["usuario"];
        $_SESSION["perfil"] = $manos["perfil"];
        exit;
    }
   }
   $erro = "usuario ou senha invalidos";
}
?>
