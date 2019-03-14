<?php
include ('nav.php');
$result = mysql_query("SELECT idProveedor, nameProveedor, logo FROM proveedor");
//var_dump($row);
//die();
?>

<div class="container">
    <br>
    <br>
    <h1 class="glyphicon glyphicon-link"> Proveedores </h1>
    <br>
    <div class="table">
        <table  class="table table-bordered table-hover" method='GET'>
            <thead>
               <tr>   
                                    
                    <th>Nombre</th>                    
                    <th>Logo</th>
                    <th>Acciones</th>  
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                    ?>
                    <tr>

                        <td><?php echo $row['nameProveedor'] ?></td>                                    
                        <td><?php echo '<img src"'.$row['logo'].'" width="100" heigth="100"/>' ?></td>
                        <td>  
                            <a href="createProveedor.php?id=<?php echo $row['idPrograma'] ?>" class="btn btn-warning btn-xs" data-toggle="popover" title="Editar" data-content="Edicion"><i class="glyphicon glyphicon-pencil"></i></a>

                            <a href="#" data-toggle="modal" data-target="#modalDelete<?php echo $row['idPrograma'] ?>" action="" onclick="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" data-toggle="popover" title="Borrar" data-content="Eliminar Evento"></i></a>
                        </td>
                    </tr>
                <div class="modal fade" id="modalDelete<?php echo $row['idPrograma'] ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Esta seguro que Deaea eliminar el programa  <?php echo $row['nombrePrograma'] ?></h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <a class="btn btn-success" href="../Controller/Programa/deletePrograma.php?idDelete=<?php echo $row['idPrograma'] ?>">Aceptar</a>
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
        <a href="createProveedor.php" class="btn btn-success" data-toggle="popover" title="Crear Nuevo Proveedor" data-content="Creacion de Proveedor"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-list"></i></a>
    </div>
</div>
