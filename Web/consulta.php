
<?php
include('../Sql/Conexion.php');
?>
<div class="container">

    <br>
    <br>    

    <h1>Consulta Multas </h1>

    <form method="post" action="">


        <div class="control-label col-xs-5">

            <?php $result = mysql_query("SELECT id_cedulapro, nombre,apellido FROM propietario"); ?>

            <label class="control-label col-xs-3">Identificacion</label>

            <select class="form-control" id="identificacion" name="identificacion">
                <option>Seleccione</option>;
                <?php
                while ($row2 = mysql_fetch_array($result, MYSQL_ASSOC)) {

                    echo "<option value=" . $row2['id_cedulapro'] . ">" . $row2['id_cedulapro'] . " -- " . $row2['nombre'] . $row2['apellido'] . "</option>";
                }
                ?>
            </select>

<!--<input type="reset" class="btn btn-success" value="Limpiar">-->
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Consultar" style="margin-top: 5px"> 
        <br>
        <br>
        <div class="table">
            <table  class="table table-bordered table-hover" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Fecha Multa</th>
                        <th>Placa Vehiculo </th>
                        <th>Propietario </th>
                        <th>Descripcion Infraccion</th>
                        <th>Valor Multa</th>
                        <th>Acciones</th>

                    </tr>
                </thead>

                <tbody>

                    <?php
                    include ('nav.php');
//include ('../Controller/Accion/consultaMulta.php');




                    if (isset($_POST["identificacion"])) {
                        $identificacion = $_POST["identificacion"];
                    } else {
                        $identificacion = "";
                    }
//$x="INSERT INTO vehiculo VALUES('$id_placa', '$Modelo', '$ano', '$cc_pro')";
//echo $x;
//die();
//$idUpdate=$_POST["idUpdate"];

                    if (isset($identificacion)) {
//    $b ="update vehiculo set  modelo='$Modelo',ano= '$ano' where id_placa='$idUpdate'";
//    echo $b;
//    die();
//    
                        $result = mysql_query("select multa.fecha_multa, multa.id_multa, multa.id_placa, multa.descripcion_multa,propietario.nombre,propietario.apellido, multa.valor_multa FROM multa, propietario, vehiculo where multa.id_placa=vehiculo.id_placa and vehiculo.id_cedulapro=propietario.id_cedulapro AND propietario.id_cedulapro='$identificacion'");

//$_SESSION["data"]=$result;
//header('location: ../../Web/consulta.php');
                    } else {

                        echo "No Tiene multas pendiente o posiblemente escribio mal si identificacion";
                    }
//$x="INSERT INTO 'vehiculo' VALUE('$id_placa', 'Modelo', 'ano', 'id_cedulapro'";
                    ?>



                    <?php
                    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id_multa'] ?></td>
                            <td><?php echo $row['fecha_multa'] ?></td>
                            <td><?php echo $row['id_placa'] ?></td>
                            <td><?php echo $row['nombre'] . ' ' . $row['apellido'] ?></td>
                            <td><?php echo $row['descripcion_multa'] ?></td>
                            <td><?php echo $row['valor_multa'] ?></td>

                            <td>
                                <a href="index_comunicacion.php" class="btn btn-warning btn-xs" data-toggle="popover" title="comunicacion" data-content="comunicacion"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a href="index_gestion_loc.php" class="btn btn-warning btn-xs" data-toggle="popover" title="localizacion" data-content="localizacion"><i class="glyphicon glyphicon-pencil"></i></a>
                            </td>
                        </tr>
                    <?php } ?>





<!--                    <div class="modal fade" id="modalDelete<?php //echo $row['id_multa']          ?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Esta seguro que Desea eliminar este Registro <?php // echo $row['id_multa']          ?></h4>
                                </div>
                                <div class="modal-body">
                                    <p>One fine body&hellip;</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    <a class="btn btn-success" href="../Controller/Multa/deleteMulta.php?idDelete=<?php // echo $row['id_multa']          ?>">Aceptar</a>
                                    <button type="button" class="btn btn-success">Aceptar</button>
                                </div>
                            </div> /.modal-content 
                        </div> /.modal-dialog 
                    </div> /.modal -->



                </tbody>


            </table>
        </div>		

</div>
</form>