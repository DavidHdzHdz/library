<div class="box-principal">
<h3 class="titulo">Autores disponibles<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de Autores</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Id</th>
		      <th>Nombre</th>
		      <th>Apellidos</th>		     
		      <th>Acción</th>
		      
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
		  			
					<td><?php echo $row['id_autor']; ?></td>
					<td><?php echo $row['nombre_autor'];?></td>
			    	<td><?php echo $row['apellidos_autor']; ?></td>			    	
			    	<td><a class="btn btn-warning" href="<?php echo URL; ?>autores/editar/<?php echo $row['id_autor']; ?>">Editar</a> &nbsp;			    	
					<a class="btn btn-danger" href="<?php echo URL; ?>autores/eliminar/<?php echo $row['id_autor']; ?>">Eliminar</a>
			    	</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>