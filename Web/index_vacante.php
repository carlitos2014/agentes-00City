<?php
include ('nav.php');
$re= mysql_query("SELECT vacantes.idVacante, vacantes.codigoVacante, vacantes.Estado, vacantes.fechaIni, vacantes.fechaFin, vacantes.requicitos, vacantes.idProveedor, proveedor.nameProveedor FROM vacantes, proveedor WHERE vacantes.idProveedor=proveedor.idProveedor");
//var_dump($row);
//die();
?>

<div class="container">
    <br>
    <br>
    <h1> Misiones </h1>
    <br>
    <div class="table">
        <table  class="table table-bordered table-hover" method='GET'>
            <thead>
                <tr>
                    <th>Codigo Mision</th>                  
                    <th>Proveedor</th>                  
                    <th>Fecha Inicio</th>
                    <th>Fecha Final</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysql_fetch_array($re, MYSQL_ASSOC)) {?>
                    <tr>
                        <td><a href="description_mission.php?id=<?php echo $row['idVacante'] ?>"><?php echo $row['idVacante'] ?></a></td>                      
                        <td><?php echo $row['nameProveedor'] ?></td>
                        <td><?php echo $row['fechaIni'] ?></td>
                        <td><?php echo $row['fechaFin'] ?></td>
                       
                        <td><?php 
                                    $estado=$row['Estado'];
                                if ($estado==0) {
                                    
                                    $estado="Pendiente por Completar";
                                }else{
                                    $estado="Completado";
                                }

                                echo $estado;

                        ?></td>
                        

                        <td>  
                            <a href="createVacante.php?id=<?php echo $row['idVacante'] ?>" class="btn btn-warning btn-xs" data-toggle="popover" title="Editar" data-content="Edicion"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a href="#" data-toggle="modal" data-target="#modalDelete<?php echo $row['idVacante']?>" action="" onclick="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" data-toggle="popover" title="Borrar" data-content="Eliminar Evento"></i></a>
                        </td>
                    </tr>
                <div class="modal fade" id="modalDelete<?php echo $row['idVacante'] ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Esta seguro que Desea eliminar este Usuario <?php echo $row['idVacante'] ?></h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <a class="btn btn-success" href="../Controller/Vacante/deleteVacante.php?idDelete=<?php echo $row['idVacante'] ?>">Aceptar</a>
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
        <a href="createVacante.php" class="btn btn-success" data-toggle="popover" title="Crear Nueva Persona" data-content="Creacion de Categoria"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-list"></i></a>
    </div>
</div>
