<div class="box-principal">
<h3 class="titulo">Libros disponibles<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de libros</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Título</th>
		      <th>Autor</th>
		      <th>ISBN</th>
		      <th>Editorial</th>
		      <th>Paginas</th>
		      <th>sinopsis</th>
		      <th>Acción</th>
		      <th></th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
		  			
					<td><?php echo $row['titulo']; ?></td>
					<td><?php echo $row['nombre_autor'] . " " . $row['apellidos_autor'] ; ?></td>
			    	<td><?php echo $row['ISBN']; ?></td>
			    	<td><?php echo $row['nombre']; ?></td>
			    	<td><?php echo $row['n_paginas']; ?></td>
			    	<td><?php echo $row['sinopsis']; ?></td>
			    	<td><a class="btn btn-warning" href="<?php echo URL; ?>libros/editar/<?php echo $row['ISBN']; ?>">Editar</a>
			    	</td>
					<td><a class="btn btn-danger" href="<?php echo URL; ?>libros/eliminar/<?php echo $row['ISBN']; ?>">Eliminar</a>
			    	</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>