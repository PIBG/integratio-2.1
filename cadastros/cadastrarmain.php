<html>
    <head>
        
    </head>
    <body onload='window.history.back();'>
     <!-- onload='window.history.back();'-->
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
$datanow = date('Y-m-d');
$query=mysql_query($sql);
$query2=mysql_query($type); 
        
if($tipo == 1){
// CADASTRO NO BANCO DE DADOS (TABELA MAIN)
//-----------------------------------------
//SE DECISÃO FOR BATISMO
    if($decisao == 1 and isset ($sexo) and isset ($bairro) and isset ($estadocivil)) {
        if (empty ($datanascimento) or empty ($databatismo)){
            $_SESSION['errocadastrar']='
            <div class="alert alert-warning alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Atenção!</strong>Data de nascimento ou data do batismo <b>NÃO</b> prenchidos!
            </div>';
        }else{
            $sql ="INSERT INTO `tb_main` (`id_main`, `dsc_nome`, `dsc_sexo`, `dsc_endereco`, `dsc_id_bairro`, `dsc_dta_cadastro`, `dsc_id_sta_discipulador`, `dsc_id_decisao`, `dsc_est_civil`,`dsc_data_batismo`,`dsc_data_nascimento`,`dsc_data_decisao`) VALUES (NULL, '$nome', '$sexo', '$endereco', '$bairro', '$datanow', NULL, '$decisao', '$estadocivil', '$databatismo', '$datanascimento', NULL)";
        }
    }
//DECISÃO FOR NÃO COMVERTIDO
    if($decisao == 2 and isset ($sexo) and isset ($bairro) and isset ($estadocivil)){
        if (empty ($datanascimento)){
            $_SESSION['errocadastrar']='
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Atenção!</strong> Data de nascimento <b>NÃO</b> prenchido!
            </div>';
        }else{
            $sql ="INSERT INTO `tb_main` (`id_main`, `dsc_nome`, `dsc_sexo`, `dsc_endereco`, `dsc_id_bairro`, `dsc_dta_cadastro`, `dsc_id_sta_discipulador`, `dsc_id_decisao`, `dsc_est_civil`,`dsc_data_batismo`,`dsc_data_nascimento`,`dsc_data_decisao`) VALUES (NULL, '$nome', '$sexo', '$endereco', '$bairro', '$datanow', NULL, '$decisao', '$estadocivil', NULL, '$datanascimento', NULL)";  
        }
    }
    //DECISÃO FOR NOVO COMVERTIDO
    if($decisao == 3 and isset ($sexo) and isset ($bairro) and isset ($estadocivil)){
        if ( empty ($datanascimento) or empty ($datadecisao)){
        $_SESSION['errocadastrar']='
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Atenção!</strong>Data de nascimento ou data da decisão <b>NÃO</b> prenchidos!
            </div>';
        }else{
            $sql ="INSERT INTO `tb_main` (`id_main`, `dsc_nome`, `dsc_sexo`, `dsc_endereco`, `dsc_id_bairro`, `dsc_dta_cadastro`, `dsc_id_sta_discipulador`, `dsc_id_decisao`, `dsc_est_civil`,`dsc_data_batismo`,`dsc_data_nascimento`,`dsc_data_decisao`) VALUES (NULL, '$nome', '$sexo', '$endereco', '$bairro', '$datanow', NULL, '$decisao', '$estadocivil', NULL, '$datanascimento', '$datadecisao')";  
        }
    }      
}
        
if($tipo == 2){
    //SE FOR DISCIPULADOR
        if( isset ($status) ){
        $sql =  "INSERT INTO `tb_main` (`id_main`, `dsc_nome`, `dsc_sexo`, `dsc_endereco`, `dsc_id_bairro`, `dsc_dta_cadastro`, `dsc_id_sta_discipulador`, `dsc_id_decisao`, `dsc_est_civil`,`dsc_data_batismo`,`dsc_data_nascimento`,`dsc_data_decisao`) VALUES (NULL, '$nome', '$sexo', '$endereco', '$bairro', '$datanow',  '$status' , NULL, '$estadocivil', NULL, NULL, NULL)";
        }
}

//CADASTRO NO BANCO DE DADOS (TABELA TYPE)

if (mysql_query($sql,$conectar)){
$ultimo_id = mysql_insert_id($conectar);
$type ="INSERT INTO `tb_type`(`type_id_main`, `id_tipo`) VALUES (".$ultimo_id.",".$tipo.")";	
//recebo o último id
}
        
if (mysql_query($type,$conectar)){
 $_SESSION['sucessocadastrar']=' 
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Tudo certo!</strong> Cadastrado efetuado com Sucesso.
</div>';
}

else{
    $_SESSION['errocadastrar']='
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Atenção!</strong> Os campos com <b style="color:red">*</b> são obigatorios!
        </div>';
        }
?>  
    </body>
</html>
