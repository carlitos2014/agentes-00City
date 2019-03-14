<?php
include ('nav.php');
$id = $_GET['id'];
if (isset($id)) {
    $result = mysql_query("SELECT usuario.id_usu, usuario.mail,usuario.nombre,usuario.nombre_usuario,usuario.apellido, usuario.codigo, usuario.password,rol.nombreRol, photo_user FROM usuario, rol where usuario.rol=rol.id_rol and usuario.id_usu='$id'");        
}
?>
<form action="<?php echo (isset($id) ? "../Controller/Usuario/updateUsuario.php" : "../Controller/Usuario/insertUsuario.php" ) ?>" enctype="multipart/form-data" method="POST"> 
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
                        <label  class="control-label col-xs-3">Id #</label>     
                        <input type="email" class="form-control" id="id_usu"  name="id_usu" placeholder="Id" value="<?php echo(isset($row['id_usu']) ? $row['id_usu'] : " " ) ?>"<?php echo (isset($id) ? "readonly" : '' ); ?>>
                    </div>
                    <div>
                        <label class="control-label col-xs-3">Email</label>     
                        <input type="email" class="form-control" id="mail"  name="mail" placeholder="email" value="<?php echo(isset($row['mail']) ? $row['mail'] : " " ) ?>">
                    </div>
                    <div>
                        <label class="control-label col-xs-3">Nombre Completo</label>     
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo" value="<?php echo (isset($row['nombre']) ? $row['nombre'] : " ") ?>">
                    </div>
                    <div>
                        <label class="control-label col-xs-3">Apellido</label>     
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo (isset($row['apellido']) ? $row['apellido'] : " ") ?>">
                    </div>
                     <div>
                        <label class="control-label col-xs-3">Codigo</label>     
                        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo" value="<?php echo (isset($row['codigo']) ? $row['codigo'] : " ") ?>">
                    </div>
                    <div>
                        <label  class="control-label col-xs-3"  >Nombre Usuario</label>
                        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Propietario" value="<?php echo (isset($row['nombre_usuario']) ? $row['nombre_usuario'] : " ") ?>" <?php ?>>
                    </div>
                    <div>
                        <label  class="control-label col-xs-3" >Contraseña</label>
                        <input type="password"  class="form-control" id="password" name="password" placeholder="Contraseña" value="<?php echo (isset($row['password']) ? $row['password'] : " ") ?>" <?php //echo (isset($id) ? "readonly" : '' );       ?>>
                    </div>

                        <div>
                        <label  class="control-label col-xs-3" >Foto de perfil</label>
                        <input type="file" class="form-control" id="photo_user" name="photo_user" placeholder="Contraseña" value="<?php echo (isset($row['poto_user']) ? $row['poto_user'] : " ") ?>" <?php //echo (isset($id) ? "readonly" : '' );       ?>>
                    </div>

                    <!--Para editar -->
                    <?php
                    $result2 = mysql_query("SELECT id_rol, nombreRol FROM rol");
                    ?>
                    <div>
                        <label  class="control-label col-xs-3" >Rol</label>
                        <select class="form-control" name="rol">
                            <option>Seleccione</option>
                            <?php
                            while ($row2 = mysql_fetch_array($result2, MYSQL_ASSOC)) {
                                echo "<option value=" . $row2['id_rol'] . ">" . $row2['nombreRol'] . "</option>";
                                }?>
                        </select>
                    </div>
                    <input type="hidden" name="idUpdate" value="<?php echo $row['id_usu'] ?>">
                    <?php }
            } else {
                ?>
<!--                <div>
                    <label  class="control-label col-xs-3">Id #</label>     
                    <input type="email" class="form-control" id="id_usu"  name="id_usu" placeholder="Id" value="<?php echo(isset($row['id_usu']) ? $row['id_usu'] : " " ) ?>">
                </div>-->
                <div>
                    <label class="control-label col-xs-3">Email</label>     
                    <input type="email" class="form-control" id="mail"  name="mail" placeholder="Email"  >
                </div>
                <div>
                    <label class="control-label col-xs-3">Nombre Completo</label>     
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo" required="">
                </div>
                <div>
                        <label class="control-label col-xs-3">Apellido</label>   
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required="">
                </div>
                     <div>
                        <label class="control-label col-xs-3">Codigo</label>     
                        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo" required="">
                    </div>
                <div>
                    <label  class="control-label col-xs-3"  >Nombre Usuario (LOGIN)</label>
                    <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" required placeholder="Nombre Usuario (LOGIN)">
                </div>
                <div>
                    <label  class="control-label col-xs-3">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="Contraseña"/>
                </div>

                    </div>

                        <div>
                        <label  class="control-label col-xs-3">Foto de perfil</label>
                        <input type="file" class="form-control" id="photo_user" name="photo_user" placeholder="Contraseña" value="<?php echo (isset($row['poto_user']) ? $row['poto_user'] : " ") ?>" <?php //echo (isset($id) ? "readonly" : '' );       ?>>
                    </div>
               <?php
                    $result2 = mysql_query("SELECT id_rol, nombreRol FROM rol");
                    ?>
                <div>
                        <label  class="control-label col-xs-3" >Rol</label>
                        <select class="form-control" name="rol">
                            <option>Seleccione</option>
                            <?php
                            while ($row2 = mysql_fetch_array($result2, MYSQL_ASSOC)) {
                                echo "<option value=" . $row2['id_rol'] . ">". $row2['nombreRol'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
            <?php } ?>
            <center>
                <br>    
                <div>
                    <input type="submit" class="btn btn-primary" value="Enviar" >
                    <input type="reset" class="btn btn-success" value="Limpiar"><br><br>                   
                    <a href="index_usuarios.php" class="glyphicon glyphicon-arrow-left">Volver</a>
                </div>
        </div>    
        </center>
    </div>
</form>