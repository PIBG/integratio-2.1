<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$conectar = mysql_connect("mysql.hostinger.com.br","u557304116_breno","Yw=p#oce5|HPL") or die ("Erro na conexão");
mysql_select_db("u557304116_pibg")or die ("Base não encontrada");
?>