<?php
include ('nav.php');
$id = $_GET['id'];
if (isset($id)) {
    $desc2= mysql_query("SELECT vacantes.idVacante, vacantes.latitud, vacantes.longitud, vacantes.codigoVacante, vacantes.Estado, vacantes.fechaIni, vacantes.fechaFin, vacantes.requicitos, vacantes.idProveedor, proveedor.nameProveedor FROM vacantes, proveedor WHERE vacantes.idProveedor=proveedor.idProveedor AND vacantes.idVacante='$id'");  
}
?>
<div class="container">
    <br>
    <br>
<h1> Descripcion de Mision #<?php echo $id;?> </h1>
    <br>
    <div class="table">
        <table  class="table table-bordered table-hover" method='GET'>
 				<?php while ($row = mysql_fetch_array($desc2, MYSQL_ASSOC)) {?>    
        	<th>
        		Empresa:
        		<?php echo $row['nameProveedor'] ?></br>
        		Fecha Inicio:
        		<?php echo $row['fechaIni'] ?></br>
        		Fecha Final:               
                <?php echo $row['fechaFin'] ?></br>
                Requisitos:
                <?php echo $row['requicitos'] ?></br>
                Sede:
                <?php/echo $row['sede'] ?></br>
                Latitud:
                <?php echo $row['latitud'] ?></br>
                Longitud:
                <?php echo $row['longitud'] ?></br>
                QR:
                <a href="pdf.php?codigoVacante=<?php echo $row['codigoVacante'] ?>" class="glyphicon glyphicon-qrcode"></a></br>
                <?php } ?>
                <!-- Ventana Modal-->
                 <form enctype="multipart/form-data" action="../Controller/Vacante/do_mission.php?id=<?php echo $id;?>" method="POST"> 
                    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Completar esta Mision</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Descripcion de la Mision</h3>
                                        <textarea name="descMision" id="descMision" cols="0" rows="3"></textarea>
                                     </div>
                                    <div>
                                        <label class="control-label col-xs-3">Foto</label>     
                                        <input type="file" name="foto" class="form-control" id="logo"  name="logo" placeholder="logo">
                                    </div></br>
                                    <input type="submit" class="btn btn-primary" value="Enviar" ></br>
                                    <div>
                                     <script type="text/javascript">
                                        $('.testBtn').on('click',function(){
                                         $('#textareaID').focus();
                                            });​
                                     </script>
                                    </div>

                                    <div class="modal-body">
                                        
                                    </div>
                                </div>
                        </div>
                    </div>              
                </form>
                <br><button data-toggle="modal" data-target="#miModal" type="button" style="text-align:right" class="btn btn-primary">Completar Mision</button></br>          
                <td style="text-align:center;">
                <img src="..." alt="..." class="img-rounded"></br>
                </td>
        	</th>
        </table>
	</div>
</div>