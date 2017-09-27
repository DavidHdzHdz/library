<?php $lista = $listar -> listar();?>
<div class="box-principal">
<h3 class="titulo">Editar libro <?php echo $datos['titulo'];?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar <?php echo $datos['titulo']. "    ISBN: " . $datos['ISBN'];?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				   
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">titulo del libro</label>
				        <input class="form-control" name="titulo" type="text" value="<?php echo $datos['titulo'];?>" required>
				    </div>
				   
				    
				    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">numero de paginas</label>
				        <input class="form-control" name="n_paginas" type="number" value="<?php echo $datos['n_paginas'];?>" required>
				    </div>
				   
				    <div class="form-group">
				      <label for="inputEmail" class="control-label" > autor <b>(autor actual <?php echo $datos['nombre_autor'] . " " . $datos['apellidos_autor'];?> )</b></label>
				      <select name="autores_id" class="form-control" required>
				      	<?php while($row = mysqli_fetch_array($lista[0])){ ?>
				      		<option value="<?php echo $row['id_autor']; ?>"><?php echo $row['nombre_autor'] . " " . $row['apellidos_autor'] ; ?></option>
				      	<?php } ?>
				      </select>
				    </div>
				   
				    <div class="form-group">
				     <label for="inputEmail" class="control-label">Editorial <b>(editorial actual <?php echo $datos['nombre'];?> )</b></label>
				     <select name="editoriales_id" class="form-control" required>
			         	<?php while($row = mysqli_fetch_array($lista[1])){ ?>
			         		<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
				      	<?php } ?>
			         </select>
				    </div>

				    <input name="ISBN_edit" type="hidden" value="<?php echo $datos['ISBN'];?>" required>
				    <input name="libros_ISBN" type="hidden" value="<?php echo $datos['libros_ISBN'];?>" required>


				    <div class="form-group">
				      <label for="inputEmail" class="control-label">sinopsis</label>
				        <input  class="form-control" name="sinopsis" type="text" value="<?php echo $datos['sinopsis'];?>" required>
				    </div>
				   
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Editar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>

				
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>