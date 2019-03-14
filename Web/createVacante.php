<?php
include ('nav.php');
$id = $_GET['id'];
if (isset($id)) {      
$re= mysql_query("SELECT vacantes.idVacante, vacantes.latitud, vacantes.longitud, vacantes.codigoVacante, vacantes.Estado, vacantes.fechaIni, vacantes.fechaFin, vacantes.requicitos, vacantes.idProveedor, proveedor.nameProveedor FROM vacantes, proveedor WHERE vacantes.idProveedor=proveedor.idProveedor AND vacantes.idVacante='$id'");
}
?>
<form action="<?php echo (isset($id) ? "../Controller/Vacante/updateVacante.php" : "../Controller/Vacante/insertVacante.php" ) ?>" method="POST"> 
    <div class="form-group">
        <br>
        <br>
        <br>
<!--  formulario para editar nueva Vacante-->
        <div>
            <?php
                if (isset($id)) {
                    while ($row = mysql_fetch_array($re, MYSQL_ASSOC)) {
            ?> 
                    <?php
                        $ressult_proveedor = mysql_query("SELECT idProveedor, nameProveedor FROM proveedor");
                    ?>
                 <div>
                        <label class="control-label col-xs-3">Empresa</label>
                        <select class="form-control" id="idProveedor" name="idProveedor" required>
                        <option>Seleccione</option>;
                            <?php
                                while ($row = mysql_fetch_array($ressult_proveedor, MYSQL_ASSOC)) {
                                echo "<option value=" . $row['idProveedor'] . ">" . $row['nameProveedor'] . "</option>";}
                            ?>
                       </select>                           
                </div>
                
                <div>
                    <label  class="control-label col-xs-3">Sede</label>
                    <input type="text" class="form-control" id="sede" name="sede" required placeholder="Sede Vacante" value="<?php echo(isset($row['sede']) ? $row['sede'] : " " ) ?>">
                </div>
                <div>
                    <label  class="control-label col-xs-3">Codigo Mision</label>
                    <input type="text" class="form-control" id="codigoVacante" name="codigoVacante" required placeholder="Codigo Vacante minimo 3 numeros" " minlength="3" value="<?php echo(isset($row['codigoVacante']) ? $row['codigoVacante'] : " " ) ?>">
                </div>
                <div>
                <label  class="control-label col-xs-3">Requisitos</label>
                <textarea class="form-control" rows="3" id="requicitos" name="requicitos" placeholder="Requisitos de la Vacante" value="<?php echo(isset($row['requicitos']) ? $row['requicitos'] : " " ) ?>"></textarea>
                </div>
                <div>
                        <label>Ubcacion de Mision</label></br>
                        <input type="text" class="form-control" id="latitud"  name="latitud" placeholder="latitud" value="<?php echo(isset($row['latitud']) ? $row['latitud'] : " " ) ?>">                          <input type="text" class="form-control" id="longitud"  name="longitud" placeholder="longitud" value="<?php echo(isset($row['longitud']) ? $row['longitud'] : " " ) ?>">
                </div>
                <div>
                        <label class="control-label col-xs-3">Fecha Inicial</label>     
                        <input type="text" class="form-control" id="fechaIni"  name="fechaIni" placeholder="Fecha Inical" value="<?php echo(isset($row['fechaIni']) ? $row['fechaIni'] : " " ) ?>">
                </div>
                <div>
                        <label class="control-label col-xs-3">Fecha Final</label>     
                        <input type="text" class="form-control" id="fechaFin" name="fechaFin" placeholder="Fecha Final" value="<?php echo (isset($row['fechaFin']) ? $row['fechaFin'] : " ") ?>">
                </div>                      
                <?php } ?>  
                    <input type="hidden" name="idUpdate" value="<?php echo $row['idVacante'] ?>">
                    <?php } else { ?>
<!--  formulario para crear nueva Vacante-->

                <?php
                $ressult_proveedor = mysql_query("SELECT idProveedor, nameProveedor FROM proveedor");
                ?>
                 <div>
                        <label class="control-label col-xs-3">Empresa</label>
                        <select class="form-control" id="idProveedor" name="idProveedor" required>
                        <option>Seleccione</option>;
                        <?php
                        while ($row = mysql_fetch_array($ressult_proveedor, MYSQL_ASSOC)) {
                            echo "<option value=" . $row['idProveedor'] . ">" . $row['nameProveedor'] . "</option>";
                        }
                        ?>
                       </select>                           
                </div>
                <?php } ?> 

                <div>
                    <label  class="control-label col-xs-3">Sede</label>
                    <input type="text" class="form-control" id="sede" name="sede" required placeholder="Sede Vacante">
                </div>
                <div>
                    <label  class="control-label col-xs-3">Codigo Mision</label>
                    <input type="text" class="form-control" id="codigoVacante" name="codigoVacante" required placeholder="Codigo Mision">
                </div>
                <label  class="control-label col-xs-3">Requisitos</label>
                <textarea class="form-control" rows="3" id="requicitos" name="requicitos" placeholder="Requisitos de la Mision"></textarea>
                <div>
                        <label>Ubcacion de Mision</label></br>
                       <!-- <label class="control-label col-xs-3">Latitud</label>     -->
                        <input type="text" class="form-control" id="latitud" name="latitud" placeholder="latitud">
                        <!--<label class="control-label col-xs-3">Longitud</label>     -->
                        <input type="text" class="form-control" id="longitud"  name="longitud" placeholder="longitud">
                </div>
                <div>
                        <label class="control-label col-xs-3">Fecha Inicial</label>     
                        <input type="date" class="form-control" id="fechaIni"  name="fechaIni" placeholder="Fecha Inical">
                </div>
                <div>
                    <label class="control-label col-xs-3">Fecha Final</label>     
                     <input type="date" class="form-control" id="fechaFin" name="fechaFin" placeholder="Fecha Final">
                </div>                      
                                    
            <center>
                <br>    
                <div>
                    <input type="submit" class="btn btn-primary" value="Enviar" >
                    <input type="reset" class="btn btn-success" value="Limpiar"><br><br>             
                    <a href="index_vacante.php" class="glyphicon glyphicon-arrow-left">Volver</a>
                </div>
        </div>    
        </center>
    </div>
</form>