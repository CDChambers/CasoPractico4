<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dulces</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/icono.png" type="image/x-icon">
      <!-- Google font-->     <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
  </head>
  <body>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php">
                            Servicios web 9J                        
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
            
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                     
                    </div>
                </div>
            </nav>
    
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                        <div class="main-menu-header">
                                    <img src="assets/images/icono.png" >
                                    <div class="user-details" style="text-align:left;">
                                        <span ><li>Integrantes de equipo</li></span>
                                        <span><li>Daniel Eduardo Perez Vasquez</li></span>
                                        <span><li>Jose Enrique gomez Jimenez</li></span>
                                        <span><li>Juan Alexander de la Cruz Estrada</li></span>
                                        
                                    </div>
                                </div> 
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                           <h6>Caso Práctico 4 - Creando una aplicación Cliente-Servidor </h6>                                       </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Basic table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Dulces tipicos de Chiapas</h5>
                                                <div class="card-header-right">
                                                <button class="btn-sm btn-primary" data-toggle="modal" data-target="#agregar_dulce">Agregar dulce</button>
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
           
                                                <?php

require_once 'lib/nusoap.php';

$url=new nusoap_client("http://localhost/CasoPractico04/SWDulces/Dulces_sw.php");
$datos=json_decode($url->call("Obtenerdulces"));
  
    ?>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Origen</th>
            <th>Editar</th>
            <th>Eliminar</th>
            
        </tr>   
        <?php
            foreach ($datos as $valor) {
                echo'<tr>';
                echo '<td>'. $valor->Id.'</td>';
                echo '<td>'.'<img src="img/'.$valor->Imagen.'" alt="imagen-dulce" height="50px" width="50px">'.'</td>';
                echo '<td>'. $valor->Nombre.'</td>';
                echo '<td>'. $valor->Descripcion.'</td>';
                echo '<td>'. $valor->Origen.'</td>';
                ?>
                <td>
                <a href="" onclick="editar_dulce(
                                                                 '<?php echo $valor->Id ?>',
                                                                '<?php echo $valor->Imagen?>',
                                                                '<?php echo $valor->Nombre?>',
                                                                '<?php echo $valor->Descripcion?>',
                                                                '<?php echo $valor->Origen?>',
                                                                )" title="Editar dulce" type="button" class="btn btn-info "  data-toggle="modal" data-target="#modificar_dulce"><i class="ti-marker-alt"></i><span >Editar</span></a>
                </td>
                <td>
                <a href="" onclick="eliminar_dulce('<?php echo $valor->Id ?>')" title="Eliminar dulce" type="button" class="btn btn-info "  data-toggle="modal" data-target="#eliminar_dulce"><i class="ti-trash"></i><span >Eliminar</span></a>
                </td>
                <?php

            }
        ?>    
    </table>

        
                                              
                                                </div>
                                            </div>
                                        </div>
                                     
                                       
                                       
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->

                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script>

function editar_dulce(dato1,dato2,dato3,dato4,dato5) {

    var d1 = document.getElementById('id_e'); 
        id_e.value=dato1;
        var d1 = document.getElementById('img_e'); 
        img_e.value=dato2;
        var d3 = document.getElementById('nombre_e'); 
        nombre_e.value=dato3;
        var d4 = document.getElementById('descripcion_e'); 
        descripcion_e.value=dato4;
        var d5 = document.getElementById('origen_e'); 
        origen_e.value=dato5;
}

function eliminar_dulce(dato1) {

var d1 = document.getElementById('id_eliminar'); 
id_eliminar.value=dato1;
}

</script>
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
    <!-- Custom js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical-layout.min.js "></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>



                                                     
    <?php require_once("Form_agregar.php"); ?>
    <?php require_once("Form_editar.php"); ?>
    <?php require_once("Form_eliminar.php"); ?>
   
    


</body>

</html>
