<?php
session_start();
$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];
include_once("conexao.php");

$result = mysql_query("SELECT * FROM usuarios WHERE login='$usuariot' AND senha='$senhat' LIMIT 1");
$resultado = mysql_fetch_assoc($result);
//echo "Usuario: ".$resultado['nome'];
if(empty($resultado)){
	//Mensagem de Erro
	$_SESSION['loginErro'] = '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Better check yourself.
</div>';
	
	//Manda o usuario para a tela de login
	header("Location: login.php");
}else{
	//Define os valores atribuidos na sessao do usuario
	$_SESSION['usuarioId'] 			= $resultado['id'];
	$_SESSION['usuarioNome'] 		= $resultado['nome'];
	$_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
	$_SESSION['usuarioLogin'] 		= $resultado['login'];
	$_SESSION['usuarioSenha'] 		= $resultado['senha'];
	
	if($_SESSION['usuarioNivelAcesso'] == 1){
		header("Location: admin/index.php");
	}else{
		header("Location: default/usuario.php");
	}
}
?>