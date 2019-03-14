
<?php
include '..\Sql\Conexion.php';
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <link rel="stylesheet"  href="..\Boostrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="..\Css\style.css">
    <script src="..\Boostrap\js\jquery-1.11.3.js"></script>
    <script src="..\Boostrap\js\bootstrap.min.js"></script>

</head>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!--    <div class="container"> 
            <div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a target="_blank" href="#" class="navbar-brand">Logo</a>
            </div>
            <div class="collapse navbar-collapse">-->



    <ul class="nav navbar-nav">

        <li class="active"><a href="home.php">Inicio</a></li>
        <?php //
        //session_start();
        //if ($_SESSION['rol'] == "1") {
            ?>
           <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Gestion<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="viewVehiculos\indexVehiculo.php"><span class="glyphicon glyphicon-list"> Vehiculos </span></a></li>
                    <li><a href="viewPropietarios\indexPropietario.php" class="glyphicon glyphicon-ok"> Propietarios </a></li>
                    <li><a href="viewMultas\indexMultas.php" class="glyphicon glyphicon-ok"> Multas </a></li>
                </ul>
            </li>

            <li><a href="index_comunicacion.php">Gestion De La Comunicacion</a></li>-->

            
            <li><a href="index_usuarios.php">Gestion De Usuarios</a></li>
            <li><a href="index_vacante.php">Gestion De Misiones</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Parametrizacion<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="index_programa.php"><span class="glyphicon glyphicon-list"> Proveedores </span></a></li>
                    
                   <!-- <li><a href="viewMultas\indexMultas.php" class="glyphicon glyphicon-ok"> Multas </a></li>-->
                </ul>
            </li>
            
        </ul>
    <?php // } //else { ?>
      <!--  <li><a href=".\consulta.php">Consulta</a></li> -->

    <?php// } ?>

   <!-- <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span> 
                <strong>Nombre</strong>
                <span class="glyphicon glyphicon-chevron-down"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <div class="navbar-login">
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="text-center">
                                    <span class="glyphicon glyphicon-user icon-size"></span>
                                </p>
                            </div>
                            <div class="col-lg-8">
                                <p class="text-left"><strong>Nombre Apellido</strong></p>
                                <p class="text-left small">correoElectronico@email.com</p>
                                <p class="text-left">
                                    <a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="divider"></li>
                <li>
                    <div class="navbar-login navbar-login-session">
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    <a href=".\close_session.php" class="btn btn-danger btn-block">Cerrar Sesion</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
    </ul>-->
</div>
</div>
</div>
