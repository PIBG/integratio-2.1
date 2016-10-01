<?php
include("session.php");

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PIBG Sys - Cadastro</title>

        <!-- Bootstrap Core CSS -->
        <link href="/layout/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/layout/css/sb-admin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/layout/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

    <body>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="index.html">PIBG Admin</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <!--
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Nome usuario</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Olá,!</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Olá,!</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                ------------>
                        <!-- Alerta -------------
                <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Olá, <?php echo $_SESSION['usuarioNome']; ?>!<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/user/profile.php"><i class="fa fa-fw fa-user"></i> Perfil</a>
                                </li>
                                <!--
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        </li>
                        -->
                                <li>
                                    <a href=""><i class="fa fa-fw fa-gear"></i> Configurações</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href='/logout.php'><i class="fa fa-fw fa-power-off"></i>Logout</a>
                                </li>
                            </ul>
                        </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li class="active">
                            <a href="cadastro.php"><i class="fa fa-fw fa-edit"></i> Cadastrar</a>
                        </li>
                        <li>
                            <a href="relatorios.php"><i class="fa fa-fw fa-bar-chart-o"></i> Relatorios</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                        </li>
                        <li>
                            <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                        </li>
                        <li>
                            <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="#">Dropdown Item</a>
                                </li>
                                <li>
                                    <a href="#">Dropdown Item</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                        </li>
                        <li>
                            <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                            Cadastro
                        </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-edit"></i> Cadastro
                                </li>
                            </ol>
                            <?php
				    if(isset($_SESSION['sucessocadastrar'])){
					echo $_SESSION['sucessocadastrar'];
					unset($_SESSION['sucessocadastrar']);
				    }
                            ?>
                             <?php
				    if(isset($_SESSION['errocadastrar'])){
					echo $_SESSION['errocadastrar'];
					unset($_SESSION['errocadastrar']);
				    }
                       ?>
                           
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                        <div class="col-lg-6">

                            <form role="form" action="/cadastros/cadastrarmain.php" method="post">
                                <h3>Dados Pessoais</h3>
                                <div class="form-group">
                                    <label>Nome Completo</label>
                                    <input class="form-control" name="nome" required autofocus>
                                    <!--p class="help-block">Example block-level help text here.</p-->
                                </div>
                                <div class="form-group">
                                    <label>Endereço</label>
                                    <input class="form-control" name="endereco">
                                </div>
                                <div class="form-group">
                                    <label>Bairro</label>
                                    <select class="form-control" name="bairro">
                                    <option value="">Selecione</option>
                                    <?php
                                    $consultabairro = mysql_query("SELECT * FROM tb_bairros order by bai_bairro");
                                    while($resultbairro = mysql_fetch_array( $consultabairro ) )
                                    {
                                    $codbai = $resultbairro ['id_bairro'];
                                    $bai = $resultbairro ['bai_bairro'];
                                    echo "<option value='$codbai'>$bai</option>";
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Estado Civil</label>
                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="estadocivil" id="optionsRadiosInline1" value="Casado">Casado
                                    </label>
                                        <label>
                                        <input type="radio" name="estadocivil" id="optionsRadios2" value="Solteiro">Solteiro
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="sexo" id="optionsRadios1" value="Masculino">Masculino
                                    </label>
                                        <label>
                                        <input type="radio" name="sexo" id="optionsRadios2" value="Feminino">Feminino
                                    </label><br><br>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <h3>Dados Eclesiasticos</h3>
                                <label>Tipo Cadastro</label>
                                <select class="form-control" onchange="habilitaBtn()" id="opcao" name="tipo" required>
                                                <option  value="" selected>Selecione</option>
                                                <option  value="1">Discípulo</option>
                                                <option  value="2">Discipulador</option>
                                </select>
                            </div>


                            <fieldset>


                                <div class="form-group">
                                    <label style="display:none;" id="avancarlabels">Decisão Do Discipulo</label>
                                    <select class="form-control" onchange="escolhadecisao()" id="avancars" style="display:none;" type="text" name="decisao">
                                        <option  value="" selected>Selecione</option>
                                        <option value="1">Batismo</option>
                                        <option value="2">Não Convertido</option>
                                        <option value="3">Novo Convertido</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label style="display:none;" id="avancarlabel">Estado Discipulador</label>
                                    <select class="form-control" style="display:none;" id="avancar" type="text" name="status">
                                        <option value='' selected>Selecione</option>
                                        <option value="1">Ativo</option>
                                        <option value="2">Inativo</option>
                                    </select>
                                </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label style="display:none;" id="ldatab">Data do Batismo</label>
                                <input type="date" style="display:none;" class="form-control" id="databatismo" name="databatismo">

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label id="ldatad" style="display:none;">Data decisão</label>
                                <input type="date" class="form-control" style="display:none;" id="datadecisao" name="datadecisao">

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label style="display:none;" id="ldatan">Data Nascimento</label>
                                <input type="date" style="display:none;" class="form-control" id="datanascimento" name="datanascimento">

                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button id="btnsubmit" type="submit" class="btn btn-theme-green btn-jumbotron btn-block" disabled>Cadastrar</button>
                        </div>
                        </fieldset>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="/layout/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/layout/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            function habilitaBtn() {
                var op = document.getElementById("opcao").value;
                if (op == "") {
                  if (!document.getElementById('avancar').style.display) document.getElementById('avancar').style.display = 'none'
                    document.getElementById('avancars').style.display = 'none';
                    document.getElementById('avancarlabel').style.display = 'none';
                    document.getElementById('avancar').value = '';
                    document.getElementById('avancars').value = '';
                    var myInput = document.getElementById('btnsubmit');
                    myInput.disabled = true;
                    document.getElementById('avancarlabels').style.display = 'none';
                    document.getElementById('datadecisao').style.display = 'none';
                    document.getElementById('ldatad').style.display = 'none';
                    document.getElementById('datanascimento').style.display = 'none';
                    document.getElementById('ldatan').style.display = 'none';
                    document.getElementById('databatismo').style.display = 'none';
                    document.getElementById('ldatab').style.display = 'none';
                } else if (op == "2") {
                    if (document.getElementById('avancar').style.display) document.getElementById('avancar').style.display = 'block'
                    document.getElementById('avancars').style.display = 'none';
                    document.getElementById('avancarlabel').style.display = 'block';
                    document.getElementById('avancarlabels').style.display = 'none';
                    document.getElementById('avancars').value = '';
                    var myInput = document.getElementById('btnsubmit');
                    myInput.disabled = false;
                    document.getElementById('datadecisao').style.display = 'none';
                    document.getElementById('ldatad').style.display = 'none';
                    document.getElementById('datanascimento').style.display = 'none';
                    document.getElementById('ldatan').style.display = 'none';
                    document.getElementById('databatismo').style.display = 'none';
                    document.getElementById('ldatab').style.display = 'none';
                } else {
                    if (document.getElementById('avancars').style.display) document.getElementById('avancar').style.display = 'none'
                    document.getElementById('avancars').style.display = 'block';
                    document.getElementById('avancarlabel').style.display = 'none';
                    document.getElementById('avancarlabels').style.display = 'block';
                    document.getElementById('avancar').value = '';
                    var myInput = document.getElementById('btnsubmit');
                    myInput.disabled = true;
                    document.getElementById('datadecisao').style.display = 'none';
                    document.getElementById('ldatad').style.display = 'none';
                    document.getElementById('datanascimento').style.display = 'none';
                    document.getElementById('ldatan').style.display = 'none';
                    document.getElementById('databatismo').style.display = 'none';
                    document.getElementById('ldatab').style.display = 'none';
                }
            }
        </script>
        <script type="text/javascript">
            function escolhadecisao() {
                var op = document.getElementById("avancars").value;
                if (op == "1") {
                    if (!document.getElementById('databatismo').style.display) document.getElementById('databatismo').style.display = 'block'
                    document.getElementById('datadecisao').style.display = 'block';
                    document.getElementById('ldatad').style.display = 'block';
                    document.getElementById('datanascimento').style.display = 'block';
                    document.getElementById('ldatan').style.display = 'block';
                    document.getElementById('databatismo').style.display = 'block';
                    document.getElementById('ldatab').style.display = 'block';
                    var myInput = document.getElementById('datadecisao');
                    myInput.disabled = true;
                    var myInput = document.getElementById('databatismo');
                    myInput.disabled = false;
                    var myInput = document.getElementById('btnsubmit');
                    myInput.disabled = false;
                }
                if (op == "2") {
                    if (!document.getElementById('databatismo').style.display) document.getElementById('databatismo').style.display = 'none'
                    document.getElementById('datadecisao').style.display = 'block';
                    document.getElementById('ldatad').style.display = 'block';
                    document.getElementById('datanascimento').style.display = 'block';
                    document.getElementById('ldatan').style.display = 'block';
                    document.getElementById('databatismo').style.display = 'block';
                    document.getElementById('ldatab').style.display = 'block';
                     var myInput = document.getElementById('datanascimento');
                    myInput.disabled = false;
                    var myInput = document.getElementById('datadecisao');
                    myInput.disabled = true;
                    var myInput = document.getElementById('databatismo');
                    myInput.disabled = true;
                    var myInput = document.getElementById('btnsubmit');
                    myInput.disabled = false;
                }
                if (op == "3") {
                    if (document.getElementById('datadecisao').style.display)
                        document.getElementById('datadecisao').style.display = 'block';
                    document.getElementById('ldatad').style.display = 'block';
                    document.getElementById('datanascimento').style.display = 'block';
                    document.getElementById('ldatan').style.display = 'block';
                    document.getElementById('databatismo').style.display = 'block';
                    document.getElementById('ldatab').style.display = 'block';
                    var myInput = document.getElementById('datadecisao');
                    myInput.disabled = false;
                    var myInput = document.getElementById('databatismo');
                    myInput.disabled = true;
                    var myInput = document.getElementById('btnsubmit');
                    myInput.disabled = false;
                }
                if (op == "") {
                    if (document.getElementById('databatismo').style.display) document.getElementById('databatismo').style.display = 'none'
                    document.getElementById('datadecisao').style.display = 'none';
                    document.getElementById('ldatad').style.display = 'none';
                    document.getElementById('datanascimento').style.display = 'none';
                    document.getElementById('ldatan').style.display = 'none';
                    document.getElementById('databatismo').style.display = 'none';
                    document.getElementById('ldatab').style.display = 'none';
                    var myInput = document.getElementById('datadecisao');
                    myInput.disabled = false;
                    var myInput = document.getElementById('databatismo');
                    myInput.disabled = false;
                    var myInput = document.getElementById('btnsubmit');
                    myInput.disabled = true;
                }
            }
        </script>
    </body>

    </html>
