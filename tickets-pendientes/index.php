<?php

	require_once 'config.php';
	require_once 'conexion.php';

$bd= new Conexion();

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta  content="text/html" charset="utf-8">
 	<title>Relacion de Tickets Pendientes</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<script src="http://192.168.1.7/cdn/bootstrap/js/jquery.min.js"></script>
 	<script src="http://192.168.1.7/cdn/bootstrap/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="http://192.168.1.7/cdn/DataTables/media/css/dataTables.bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="http://192.168.1.7/cdn/DataTables/media/js/dataTables.bootstrap.min.js"></script>




 </head>
 <body>
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="alert alert-dismissible alert-info">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong><center>Los tickets siguientes estan ordenado por orden de fecha de solicitud y por un nivel de prioridad</center></strong>
				</div>
 			</div>
 		</div>

		<div class="row">
		<div class="col-md-12">
<div class="table-responsive">
				<table class="table table-bordered table-condensed" id="pendientes">
				<!-- 	<thead>
					</thead>
					<tbody> -->
						<tr class="active" >

							<th colspan="6"><center>Josue Nuñez</center></th>
							<th colspan="6" class="warning"><center>Eduardo Turpo</center></th>
							<th colspan="6"><center>Marco Garcia</center></th>
							<th colspan="6" class="warning"><center>Jesus Roncal</center></th>
							<th colspan="6"><center>Omar Mori</center></th>
							<th colspan="6" class="warning"><center>Jose Adrian</center></th>
							<th colspan="6" ><center>Willian</center></th>
							<th colspan="6" class="warning"><center>Proveedor</center></th>



						</tr>
						<tr class="active">
							<th width="30">#</th>
							<th width="50">Fecha</th>
							<th width="20px">Pri</th>
							<th width="40">User</th>
							<th width="40">Emp-Area</th>
							<th width="20px">Nivel</th>


							<th width="30" class="warning">#</th>
							<th width="50" class="warning">Fecha</th>
							<th width="10" class="warning">Pri</th>
							<th width="40" class="warning">User</th>
							<th width="40" class="warning">Emp-Area</th>
							<th width="40" class="warning">Nivel</th>

							<th width="30">#</th>
							<th width="50">Fecha</th>
							<th width="10">Pri</th>
							<th width="20">User</th>
							<th width="40">Emp-Area</th>
							<th width="20px">Nivel</th>

							<th width="30" class="warning">#</th>
							<th width="50" class="warning">Fecha</th>
							<th width="10" class="warning">Pri</th>
							<th width="20" class="warning">User</th>
							<th width="40" class="warning">Emp-Area</th>
							<th width="40" class="warning">Nivel</th>

							<th width="30">#</th>
							<th width="50">Fecha</th>
							<th width="10">Pri</th>
							<th width="20">User</th>
							<th width="40">Emp-Area</th>
							<th width="20px">Nivel</th>

							<th width="30" class="warning">#</th>
							<th width="50" class="warning">Fecha</th>
							<th width="10" class="warning">Pri</th>
							<th width="20" class="warning">User</th>
							<th width="40" class="warning">Emp-Area</th>
							<th width="40" class="warning">Nivel</th>


							<th width="30">#</th>
							<th width="50">Fecha</th>
							<th width="10">Pri</th>
							<th width="20">User</th>
							<th width="40">Emp-Area</th>
							<th width="20px">Nivel</th>

							<th width="30" class="warning">#</th>
							<th width="50" class="warning">Fecha</th>
							<th width="10" class="warning">Pri</th>
							<th width="20" class="warning">User</th>
							<th width="40" class="warning">Emp-Area</th>
							<th width="40" class="warning">Nivel</th>


						</tr>
						<!-- </thead>
						<tbody>-->

						<?php

							$nmax=0;




							$eduardo= $bd->query("SELECT '1' as ni,idticket_cab,fecha_creacion,prioridad,nombres,concat(nombres,' ',apellidos) fullname,a.descripcion,detalle,fecha_creacion,fecha_asignacion,substring(e.descripcion,1,2) empresa  from ticket_cab t
								inner join usuario u on u.idusuario=t.usuario_idusuario
								inner join area a on a.idarea=u.area_idarea
								inner join empresa e on e.idempresa=t.empresa_idempresa
							 where t.estado not in ('08','10','09') and usuario_tecnico=176
										order by prioridad asc,fecha_creacion asc ");
							$nmax=($eduardo->num_rows>$nmax)?$eduardo->num_rows:$nmax;




							$josue=$bd->query("SELECT '2' as ni,idticket_cab,fecha_creacion,prioridad,nombres,concat(nombres,' ',apellidos) fullname,a.descripcion,detalle,fecha_creacion,fecha_asignacion,substring(e.descripcion,1,2) empresa  from ticket_cab t
								inner join usuario u on u.idusuario=t.usuario_idusuario
								inner join area a on a.idarea=u.area_idarea
								inner join empresa e on e.idempresa=t.empresa_idempresa
								where t.estado not in ('08','10','09') and usuario_tecnico=36
										order by prioridad asc,fecha_creacion asc ");
							$nmax=($josue->num_rows>$nmax)?$josue->num_rows:$nmax;

							$marco=$bd->query("SELECT '2' as ni,idticket_cab,fecha_creacion,prioridad,nombres,concat(nombres,' ',apellidos) fullname,a.descripcion,detalle,fecha_creacion,fecha_asignacion,substring(e.descripcion,1,2) empresa from ticket_cab t
								inner join usuario u on u.idusuario=t.usuario_idusuario
								inner join area a on a.idarea=u.area_idarea
								inner join empresa e on e.idempresa=t.empresa_idempresa
								where t.estado not in ('08','10','09') and usuario_tecnico=19
										order by prioridad asc,fecha_creacion asc ");
							$nmax=($marco->num_rows>$nmax)?$marco->num_rows:$nmax;


							$yisus=$bd->query("SELECT '1' as ni,idticket_cab,fecha_creacion,prioridad,nombres,concat(nombres,' ',apellidos) fullname,a.descripcion,detalle,fecha_creacion,fecha_asignacion,substring(e.descripcion,1,2) empresa from ticket_cab t
								inner join usuario u on u.idusuario=t.usuario_idusuario
								inner join area a on a.idarea=u.area_idarea
								inner join empresa e on e.idempresa=t.empresa_idempresa
								where t.estado not in ('08','10','09') and usuario_tecnico=177
										order by prioridad asc,fecha_creacion asc ");
							$nmax=($yisus->num_rows>$nmax)?$yisus->num_rows:$nmax;



							$omar=$bd->query("SELECT '2' as ni,idticket_cab,fecha_creacion,prioridad,nombres,concat(nombres,' ',apellidos) fullname,a.descripcion,detalle,fecha_creacion,fecha_asignacion,substring(e.descripcion,1,2) empresa from ticket_cab t
								inner join usuario u on u.idusuario=t.usuario_idusuario
								inner join area a on a.idarea=u.area_idarea
								inner join empresa e on e.idempresa=t.empresa_idempresa
								where t.estado not in ('08','10','09') and usuario_tecnico=252
										order by prioridad asc,fecha_creacion asc ");
							$nmax=($omar->num_rows>$nmax)?$omar->num_rows:$nmax;


							$jose_adrian=$bd->query("SELECT '3' as ni,idticket_cab,fecha_creacion,prioridad,nombres,concat(nombres,' ',apellidos) fullname,a.descripcion,detalle,fecha_creacion,fecha_asignacion,substring(e.descripcion,1,2) empresa from ticket_cab t
								inner join usuario u on u.idusuario=t.usuario_idusuario
								inner join area a on a.idarea=u.area_idarea
								inner join empresa e on e.idempresa=t.empresa_idempresa
								where t.estado not in ('08','10','09') and usuario_tecnico=212
										order by prioridad asc,fecha_creacion asc ");
							$nmax=($jose_adrian->num_rows>$nmax)?$jose_adrian->num_rows:$nmax;



														$willian= $bd->query("SELECT '2' as ni,idticket_cab,fecha_creacion,prioridad,nombres,concat(nombres,' ',apellidos) fullname,a.descripcion,detalle,fecha_creacion,fecha_asignacion,substring(e.descripcion,1,2) empresa  from ticket_cab t
															inner join usuario u on u.idusuario=t.usuario_idusuario
															inner join area a on a.idarea=u.area_idarea
															inner join empresa e on e.idempresa=t.empresa_idempresa
														 where t.estado not in ('08','10','09') and usuario_tecnico=77
																	order by prioridad asc,fecha_creacion asc ");
														$nmax=($willian->num_rows>$nmax)?$willian->num_rows:$nmax;



							$proveedor=$bd->query("SELECT '4' as ni,idticket_cab,fecha_creacion,prioridad,nombres,concat(nombres,' ',apellidos) fullname,a.descripcion,detalle,fecha_creacion,fecha_asignacion,substring(e.descripcion,1,2) empresa from ticket_cab t
								inner join usuario u on u.idusuario=t.usuario_idusuario
								inner join area a on a.idarea=u.area_idarea
								inner join empresa e on e.idempresa=t.empresa_idempresa
								where t.estado not in ('08','10','09') and usuario_tecnico=257
										order by prioridad asc,fecha_creacion asc ");
							$nmax=($proveedor->num_rows>$nmax)?$proveedor->num_rows:$nmax;


								 ?>


							<?php for($a=1;$a<=$nmax;$a++){
								$tjosue=mysqli_fetch_array($josue);
								$teduardo=mysqli_fetch_array($eduardo);
								$tmarco=mysqli_fetch_array($marco);
								$tyisus=mysqli_fetch_array($yisus);
								$tomar=mysqli_fetch_array($omar);
								$tjose_adrian=mysqli_fetch_array($jose_adrian);
								$twillian=mysqli_fetch_array($willian);
								$tproveedor=mysqli_fetch_array($proveedor);

								?>

						<tr>


							<?php
								//declaro fecha inicio

							//aumentandole un dia mas a la ultima fecha para que sea incluida en el proceso

							 ?>
							<td><a href="" data-toggle="modal" data-target="#<?php echo $tjosue['idticket_cab']?>"><?php echo ucwords(strtolower($tjosue['idticket_cab'])) ?></a></td>
							<td><font size="1px"><?php
								if($tjosue['fecha_creacion']!=""){
								$fecha=new DateTime($tjosue['fecha_creacion']);

							 	echo $fecha->format('d/m/y H:i');
							 	}
							 	?>
							 	</font>
							 </td>
							<td><?php echo $tjosue['prioridad'] ?></td>

							<td><?php echo ucwords(strtolower($tjosue['nombres'])) ?></td>
							<td><?php echo $tjosue['empresa'].'-'.substr($tjosue['descripcion'],0,4) ?></td>
							<td  style="text-align:center;"><?php echo $tjosue['ni'] ?></td>




							<td class="warning"><a href="" data-toggle="modal" data-target="#<?php echo $teduardo['idticket_cab']?>"><?php echo ucwords(strtolower($teduardo['idticket_cab'])) ?></a></td>
							<td class="warning"><font size="1px"><?php
								if($teduardo['fecha_creacion']!=""){
								$fecha=new DateTime($teduardo['fecha_creacion']);
							 echo $fecha->format('d/m/y H:i');
							 }
							 ?>
							 	</font>
							 </td>
							 <td class="warning"><?php echo $teduardo['prioridad'] ?></td>

							<td class="warning"><?php echo ucwords(strtolower($teduardo['nombres'])) ?></td>
							<td class="warning"><?php echo $teduardo['empresa'].'-'.substr($teduardo['descripcion'],0,4) ?></td>
							<td class="warning" style="text-align:center;"><?php echo $teduardo['ni'] ?></td>




							<td><a href="" data-toggle="modal" data-target="#<?php echo $tmarco['idticket_cab']?>"><?php echo ucwords(strtolower($tmarco['idticket_cab'])) ?></a></td>
							<td><font size="1px">	<?php
								if($tmarco['fecha_creacion']!=""){
								$fecha=new DateTime($tmarco['fecha_creacion']);
							 echo $fecha->format('d/m/y H:i');
							 }
							 ?>
							 </font>

							 </td>
							<td><?php echo $tmarco['prioridad'] ?></td>

							<td><?php echo ucwords(strtolower($tmarco['nombres'])) ?></td>
							<td><?php echo $tmarco['empresa'].'-'.substr($tmarco['descripcion'],0,4) ?></td>
								<td  style="text-align:center;"><?php echo $tmarco['ni'] ?></td>





							<td class="warning"><a href="" data-toggle="modal" data-target="#<?php echo $tyisus['idticket_cab']?>"><?php echo ucwords(strtolower($tyisus['idticket_cab'])) ?></a></td>
							<td class="warning">
								<font size="1px">	<?php
									if($tyisus['fecha_creacion']!=""){
									$fecha=new DateTime($tyisus['fecha_creacion']);
								 echo $fecha->format('d/m/y H:i');
								 }
								 ?>
								 </font>
							 </td>
							<td class="warning">
								<?php echo $tyisus['prioridad'] ?>

							</td>
							<td class="warning"><?php echo ucwords(strtolower($tyisus['nombres'])) ?></td>
							<td class="warning"><?php echo $tyisus['empresa'].'-'.substr($tyisus['descripcion'],0,4) ?></td>
							<td class="warning" style="text-align:center;"><?php echo $tyisus['ni'] ?></td>






						<td><a href="" data-toggle="modal" data-target="#<?php echo $tomar['idticket_cab']?>"><?php echo ucwords(strtolower($tomar['idticket_cab'])) ?></a></td>
						<td><font size="1px"><?php
							if($tomar['fecha_creacion']!=""){
							$fecha=new DateTime($tomar['fecha_creacion']);

							echo $fecha->format('d/m/y H:i');
							}
							?>
							</font>
						 </td>
						<td><?php echo $tomar['prioridad'] ?></td>

						<td><?php echo ucwords(strtolower($tomar['nombres'])) ?></td>
						<td><?php echo $tomar['empresa'].'-'.substr($tomar['descripcion'],0,4) ?></td>
						<td  style="text-align:center;"><?php echo $tomar['ni'] ?></td>




						<td class="warning"><a href="" data-toggle="modal" data-target="#<?php echo $tjose_adrian['idticket_cab']?>"><?php echo ucwords(strtolower($tjose_adrian['idticket_cab'])) ?></a></td>
						<td class="warning"><font size="1px"><?php
							if($tjose_adrian['fecha_creacion']!=""){
							$fecha=new DateTime($tjose_adrian['fecha_creacion']);
						 echo $fecha->format('d/m/y H:i');
						 }
						 ?>
							</font>
						 </td>
						 <td class="warning"><?php echo $tjose_adrian['prioridad'] ?></td>

						<td class="warning"><?php echo ucwords(strtolower($tjose_adrian['nombres'])) ?></td>
						<td class="warning"><?php echo $tjose_adrian['empresa'].'-'.substr($tjose_adrian['descripcion'],0,4) ?></td>
						<td class="warning" style="text-align:center;"><?php echo $tjose_adrian['ni'] ?></td>






												<td><a href="" data-toggle="modal" data-target="#<?php echo $twillian['idticket_cab']?>"><?php echo ucwords(strtolower($twillian['idticket_cab'])) ?></a></td>
												<td><font size="1px"><?php
													if($twillian['fecha_creacion']!=""){
													$fecha=new DateTime($twillian['fecha_creacion']);

													echo $fecha->format('d/m/y H:i');
													}
													?>
													</font>
												 </td>
												<td><?php echo $twillian['prioridad'] ?></td>

												<td><?php echo ucwords(strtolower($twillian['nombres'])) ?></td>
												<td><?php echo $twillian['empresa'].'-'.substr($twillian['descripcion'],0,4) ?></td>
												<td  style="text-align:center;"><?php echo $twillian['ni'] ?></td>



												<td class="warning"><a href="" data-toggle="modal" data-target="#<?php echo $tproveedor['idticket_cab']?>"><?php echo ucwords(strtolower($tproveedor['idticket_cab'])) ?></a></td>
												<td class="warning"><font size="1px"><?php
													if($tproveedor['fecha_creacion']!=""){
													$fecha=new DateTime($tproveedor['fecha_creacion']);
												 echo $fecha->format('d/m/y H:i');
												 }
												 ?>
													</font>
												 </td>
												 <td class="warning"><?php echo $tproveedor['prioridad'] ?></td>

												<td class="warning"><?php echo ucwords(strtolower($tproveedor['nombres'])) ?></td>
												<td class="warning"><?php echo $tproveedor['empresa'].'-'.substr($tproveedor['descripcion'],0,4) ?></td>
												<td class="warning" style="text-align:center;"><?php echo $tproveedor['ni'] ?></td>




							</tr>

							<?php include 'detallesjosue.php' ?>
							<?php include 'detallemarco.php' ?>
							<?php include 'detalleduardo.php' ?>
							<?php include 'detalleyisus.php' ?>
							<?php include 'detalleomar.php' ?>
							<?php include 'detallejose.php' ?>
							<?php include 'detallewill.php' ?>
							<?php include 'detalleproveedor.php' ?>

						<?php  }?>
						<!-- 	</tbody> -->
				</table>
			</div>
			</div>
		</div>


 	</div>


	<script>
		$(document).ready(function() {
    		$('#pendientes').DataTable( {
		        "ordering": false,
		        "info":     false,
		        "scrollY":        "420px",
        		"scrollCollapse": true,
        		"paging":         false
		    } );
} );
	</script>
 </body>
 </html>
