<?php
include("conecta.php");
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
session_start();
 
//Caso o usu�rio n�o esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['usuarioLogin']) and !isset($_SESSION['senha']) ) {
    //Destr�i
    session_destroy();
 
    //Limpa
    unset ($_SESSION['usuarioLogin']);
    unset ($_SESSION['senha']);
     
    //Redireciona para a p�gina de autentica��o
    header('location:/login.php');
}

?>