<div class="box-principal">
<h3 class="titulo">Agregar libros<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar un nuevo libro</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				   
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">titulo del libro</label>
				        <input class="form-control" name="titulo" type="text" required>
				    </div>
				   
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">ISBN</label>
				        <input class="form-control" name="ISBN" type="number" required>
				    </div>
				    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">numero de paginas</label>
				        <input class="form-control" name="n_paginas" type="number" required>
				    </div>
				   
				    <div class="form-group">
				      <label for="inputEmail" class="control-label" >autor</label>
				      <select name="autores_id" class="form-control" required>
				      	<?php while($row = mysqli_fetch_array($datos[0])){ ?>
				      		<option value="<?php echo $row['id_autor']; ?>"><?php echo $row['nombre_autor'] . " " . $row['apellidos_autor'] ; ?></option>
				      	<?php } ?>
				      </select>
				    </div>
				   
				    <div class="form-group">
				     <label for="inputEmail" class="control-label">Editorial</label>
				     <select name="editoriales_id" class="form-control" required>
			         	<?php while($row = mysqli_fetch_array($datos[1])){ ?>
			         		<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
				      	<?php } ?>
			         </select>
				    </div>

				    <div class="form-group">
				      <label for="inputEmail" class="control-label">sinopsis</label>
				        <textarea class="form-control" name="sinopsis" type="text" required></textarea>
				    </div>
				   
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Registrar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>