<?php
require_once 'action/conection.php';
 ?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="text-info">Datos registrados</h2>
			</div>
			<div class="table-responsive">
		        <table id="listform" class="table table-striped table-bordered table-hover text-center">
			        <thead>
			          	<tr>
				           <th>ID</th>
				           <th>Nombre</th>
				           <th>Email</th>
				           <th>Numero</th>
				           <th>Pais</th>
				           <th>Fecha Hora</th>
				           <th>Editar</th>
				           <th>Eliminar</th>
			         	</tr>
			       	</thead>
			       	<tbody id="listbusqueda">
				        <?php
				        $ang = $dbh->prepare("SELECT * FROM formdatos");
				        $ang->execute();
				        $lista = $ang->fetchAll(PDO::FETCH_ASSOC);
				        foreach ($lista as $lists) { ?>
				         	<tr id="list">
						        <th><?php echo $lists['id_form']; ?></th>
						        <td><?php echo $lists['name']; ?></td>
						        <td><a href="mailto:<?php echo $lists['email']; ?>"><?php echo $lists['email']; ?></a></td>
						        <td><a href="https://api.whatsapp.com/send?phone=<?php echo $lists['phone']; ?>&text=Hola, usted dejo sus datos en test form." target="_blank"><?php echo $lists['phone']; ?></a></td>
						        <td><?php echo $lists['pais']; ?></td>
						        <td><?php echo $lists['date_form']; ?></td>
						        <td><i class="fa fa-edit btn text-primary" onclick="editar(<?php echo $lists['id_form']; ?>)"></i></td>
						        <td>
						        	<i class='text-danger btn delet fa fa-trash' data-id="<?php echo $lists['id_form']; ?>" data-name="<?php echo $lists['name']; ?>" data-target="#Modaldelet" data-toggle="modal" id="delet<?php echo $lists['id_form']; ?>" title="Eliminar">
	                                    </i></td>
					        </tr>
				      	<?php }?>
			    	</tbody>
		  		</table>
		  	</div>
		</div>
	</div>
	<div class="modal fade" id="Modaldelet" role="dialog">
	  <div class="modal-dialog modal-md">
	   <div class="modal-content">
	    <div class="modal-header">

	     <h4 class="modal-title" id="titlemsjdelet"></h4>
	   </div>
	   <div class="modal-body text-center" id="imp1">
	     <p id="mensajedelet"></p>
	   </div>
	   <div class="modal-footer">
	     <button type="button" class="close mr-5" data-dismiss="modal">Cerrar</button>
	     <div id="btnmodaldelet"></div>
	   </div>
	 </div>
	</div>
	</div>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/maindatatable.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/listForm.js"></script>