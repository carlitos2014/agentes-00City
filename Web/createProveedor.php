<?php
include ('nav.php');
$id = $_GET['id'];
if (isset($id)) {
    $result = mysql_query("SELECT idPrograma, nombrePrograma FROM programas where idPrograma='$id'");        
}
?>
<form enctype="multipart/form-data" action="<?php echo (isset($id) ? "../Controller/Programa/updatePrograma.php" : "../Controller/Proveedor/insertProveedor.php" ) ?>" method="POST"> 
    <div class="form-group">
        <br>
        <br>
        <br>
        <div>
            <?php
            if (isset($id)) {
                while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                    ?>
                    <div>
                        <label class="control-label col-xs-3">Id Programa</label>
                        <input type="text" class="form-control" id="idPrograma"  name="idPrograma" value="<?php echo(isset($row['idPrograma']) ? $row['idPrograma'] : " " ) ?>"<?php echo (isset($id) ? "readonly" : '' ); ?>>
                    </div>
                     <div>
                        <label class="control-label col-xs-3">Nombre Programa</label>
                        <input type="text" class="form-control" id="nameProvedor"  name="nameProvedor" placeholder="Nombre Proveedor" value="<?php echo(isset($row['nameProvedor']) ? $row['nameProvedor'] : " " ) ?>">
                    </div>                                             
                    <?php }
            } else {
                ?>
<!--                <div>
                    <label  class="control-label col-xs-3">Id #</label>     
                    <input type="email" class="form-control" id="id_usu"  name="id_usu" placeholder="Id" value="<?php echo(isset($row['idPrograma']) ? $row['idPrograma'] : " " ) ?>">
                </div>-->
                <div>
                    <label class="control-label col-xs-3">Nombre Proveedor</label>     
                    <input type="text" class="form-control" id="nameProvedor"  name="nameProvedor" placeholder="Nombre Proveedor">
                </div>
                 <div>
                    <label class="control-label col-xs-3">Logo Proveedor</label>     
                    <input type="file" class="form-control" id="logo"  name="logo" placeholder="logo">
                </div>
                               
            <?php } ?>
            <center>
                <br>    
                <div>
                    <input type="submit" class="btn btn-primary" value="Enviar" >
                    <input type="reset" class="btn btn-success" value="Limpiar"><br><br>                   
                    <a href="index_programa.php" class="glyphicon glyphicon-arrow-left">Volver</a>
                </div>
        </div>    
        </center>
    </div>
</form>