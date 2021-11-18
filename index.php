<?php

session_start();

if (isset($_SESSION["usuarioId"])) {

    header('location: listagem/index.php');

} else {

    header("location: ./login/index.php");
    
}

?>