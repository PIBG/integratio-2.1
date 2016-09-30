<?php
include("conecta.php");
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
session_start();
 
//Caso o usuбrio nгo esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['usuarioLogin']) and !isset($_SESSION['senha']) ) {
    //Destrуi
    session_destroy();
 
    //Limpa
    unset ($_SESSION['usuarioLogin']);
    unset ($_SESSION['senha']);
     
    //Redireciona para a pбgina de autenticaзгo
    header('location:/login.php');
}

?>