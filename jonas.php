<?php
include "secundarios.php";
include "config.php";

$erro = "";

if ($_POST) {
   foreach ($usuario as $manos) {
    if(
        $_POST["usuario"] == $manos["usuario"] &&
        $_POST["senha"] == $manos["senha"]
    )
   }
}

?>