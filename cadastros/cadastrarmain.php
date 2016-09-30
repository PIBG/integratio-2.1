<?php
include ('session.php');

//parametros da pagina cadastro.php
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$estadocivil = $_POST['estadocivil'];
$sexo = $_POST['sexo'];
$tipo = $_POST['tipo'];
$decisao = $_POST['decisao'];
$datanascimento = $_POST['datanascimento'];
$datadecisao = $_POST['datadecisao'];
$databatismo = $_POST['databatismo'];
$status = $_POST['status'];
echo $nome.",".$endereco.", ".$bairro.", ".$estadocivil.", ".$sexo.", ".$tipo."=Tipo, ".$decisao."=decisao, ".$datadecisao.", ".$databatismo.", ".$datanascimento.", ".$status." =status";
?>
