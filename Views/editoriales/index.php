<div class="box-principal">
<h3 class="titulo">Editoriales disponibles<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de editoriales</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Id</th>
		      <th>Nombre</th>
		      <th>Sede</th>		     
		      <th>Acción</th>
		      
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
		  			
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['nombre'];?></td>
			    	<td><?php echo $row['sede']; ?></td>			    	
			    	<td><a class="btn btn-warning" href="<?php echo URL; ?>editoriales/editar/<?php echo $row['id']; ?>">Editar</a> &nbsp;			    	
					<a class="btn btn-danger" href="<?php echo URL; ?>editoriales/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
			    	</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>