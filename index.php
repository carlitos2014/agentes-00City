<<<<<<< HEAD
<?php
include '.\Sql\Conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto Ionic</title>
        <link rel="stylesheet"  href="Boostrap\css\bootstrap.min.css">
    </head>
    <body background="Img\Login.jpg">

        <form action='.\Web\ingresar.php' method='POST'>

            <div id="login-overlay" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <center> <h4 class="modal-title" id="myModalLabel">Inicio De Session</h4></center>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="well">
                                    <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                                        <center>
                                            <div class="form-group">
                                                <label for="username" class="control-label">Nombre De Usuario</label>
                                                <input type="text" class="form-control" id="username" name="username" value="" required="" title="Ingrese nombre de ususario" placeholder="Nombre de Usuario">
                                                <span class="help-block"></span>
                                            </div>
                                        </center>
                                        <center>
                                            <div class="form-group">
                                                <label for="password" class="control-label">Contraseña</label>
                                                <input type="password" placeholder="Contraseña" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                                <span class="help-block"></span>
                                            </div>
                                        </center>
                                        <div id="loginErrorMsg" class="alert alert-error hide">Error en usuario y contraseña</div>

                                        <button type="submit" class="btn btn-warning">Ingresar</button>

                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <p class="lead">00City</p>
                                <center>
                                    <!--<ul class="list-unstyled" style="line-height: 2">
                                        <li><span class="fa fa-check text-success"></span> Carlos Quintero</li> 
                                        <li><span class="fa fa-check text-success"></span> Ricardo Cordobal</li>                                  

                                    </ul>-->
                                    <img src="Img/2.jpeg" style="height:100px; right: 100px">
                                </center>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</form>
=======
<?php
include '.\Sql\Conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto Ionic</title>
        <link rel="stylesheet"  href="Boostrap\css\bootstrap.min.css">
    </head>
    <body background="Img\Login.jpg">

        <form action='.\Web\ingresar.php' method='POST'>

            <div id="login-overlay" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <center> <h4 class="modal-title" id="myModalLabel">Inicio De Session</h4></center>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="well">
                                    <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                                        <center>
                                            <div class="form-group">
                                                <label for="username" class="control-label">Nombre De Usuario</label>
                                                <input type="text" class="form-control" id="username" name="username" value="" required="" title="Ingrese nombre de ususario" placeholder="Nombre de Usuario">
                                                <span class="help-block"></span>
                                            </div>
                                        </center>
                                        <center>
                                            <div class="form-group">
                                                <label for="password" class="control-label">Contraseña</label>
                                                <input type="password" placeholder="Contraseña" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                                <span class="help-block"></span>
                                            </div>
                                        </center>
                                        <div id="loginErrorMsg" class="alert alert-error hide">Error en usuario y contraseña</div>

                                        <button type="submit" class="btn btn-warning">Ingresar</button>

                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <p class="lead">00City</p>
                                <center>
                                    <!--<ul class="list-unstyled" style="line-height: 2">
                                        <li><span class="fa fa-check text-success"></span> Carlos Quintero</li> 
                                        <li><span class="fa fa-check text-success"></span> Ricardo Cordobal</li>                                  

                                    </ul>-->
                                    <img src="Img/2.jpeg" style="height:100px; right: 100px">
                                </center>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</form>
>>>>>>> 061b81c1dd6cbd184f3a9c4096e0e1ee8a4a736f
</html>