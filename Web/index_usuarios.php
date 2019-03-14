<?php
include ('nav.php');


$result = mysql_query("SELECT usuario.id_usu, usuario.nombre, usuario.rol, usuario.apellido,usuario.codigo, usuario.mail,usuario.nombre_usuario,usuario.password, usuario.rol, rol.nombreRol FROM usuario, rol where usuario.rol=rol.id_rol ");


//var_dump($row);
//die();
?>

<div class="container">
    <br>
    <br>
    <h1 class="glyphicon glyphicon-user"> Usuarios </h1>
    <br>
    <div class="table">
        <table  class="table table-bordered table-hover" method='GET'>
            <thead>
                <tr>            
                    
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>E-Mail</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                <?php
                while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                    ?>
                    <tr>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['apellido'] ?></td>
                        <td><?php echo $row['nombre_usuario'] ?></td>
                        <td><?php echo $row['codigo'] ?></td>
                        <td><?php echo $row['mail'] ?></td>
                        
                        

                        <td>  

                            <a href="createUsuario.php?id=<?php echo $row['id_usu'] ?>" class="btn btn-warning btn-xs" data-toggle="popover" title="Editar" data-content="Edicion"><i class="glyphicon glyphicon-pencil"></i></a>

                            <a href="#" data-toggle="modal" data-target="#modalDelete<?php echo $row['id_usu'] ?>" action="" onclick="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" data-toggle="popover" title="Borrar" data-content="Eliminar Evento"></i></a>
                        </td>
                    </tr>

                <div class="modal fade" id="modalDelete<?php echo $row['id_usu'] ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Esta seguro que Desea eliminar este Usuario <?php echo $row['id_usu'] ?></h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <a class="btn btn-success" href="../Controller/Usuario/deleteUsuario.php?idDelete=<?php echo $row['id_usu'] ?>">Aceptar</a>
                                <!--<button type="button" class="btn btn-success">Aceptar</button>-->
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            <?php } ?>


            </tbody>


        </table>
    </div>		


    <div style="margin-bottom: 10px; margin-top: 30px" align="center">

        <a href="home.php"  class="btn btn-info" data-toggle="popover" title="Pagina de inicio" data-content="Index" ><i class="glyphicon glyphicon-home"></i></a> 

        <a href="createUsuario.php" class="btn btn-success" data-toggle="popover" title="Crear Nueva Persona" data-content="Creacion de Categoria"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-list"></i></a>

    </div>

</div>
