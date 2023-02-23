<div class="modal fade" id="editar_<?php echo $product->codigo; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <center><h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1></center>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-center">Esta seguro que editar el producto?</p>
		<h5 class="text-center"><?=$product->codigo?></h5>
      </div>
      <div class="modal-body">
      <div class="container-fluid">
			<form method="POST" action="editar.php?cod=<?=$product->codigo?>" enctype="multipart/form-data"/ >

				<!--<div class="row form-group m-2">
					<div class="col-sm-2 mx-1">
						<label class="control-label" for="codigo">Codigo: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" id="codigo" placeholder="PROD#####">
					</div>
				</div>-->

				<div class="row form-group m-2">
					<div class="col-sm-2 mx-1">
						<label class="control-label" for="nombre">Nombre: </label>
					</div>
					<div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$product->nombre?>">
					</div>
				</div>

                <div class="row form-group m-2">
					<div class="col-sm-2 mx-1">
						<label class="control-label" for="descripcion">Descripcion: </label>
					</div>
					<div class="col-sm-10">
						<textarea type="text" class="form-control" name="descripcion" id="descripcion" rows="3" ><?=$product->descripcion?></textarea>
					</div>
				</div>

                <div class="row form-group m-2">

					<div class="col-sm-2 mx-1">
						<label class="control-label" for="categoria">Categoria: </label>
					</div>

					<div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="categoria" id="flexRadioDefault1" value="Textil" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Textil
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="categoria" id="flexRadioDefault2" value="Promocional">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Promocional
                            </label>
                        </div> 
					</div>

				</div>

				<div class="row form-group m-2">
					<div class="col-sm-2 mx-1">
						<label class="control-label" for="precio">Precio: </label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0" step="0.01" class="form-control" name="precio" id="precio" value="<?=$product->precio?>">
					</div>
				</div>

				<div class="row form-group m-2">
					<div class="col-sm-2 mx-1">
						<label class="control-label" for="existencias" >Existencias: </label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0" class="form-control" name="existencias" id="existencias" value="<?=$product->existencias?>">
					</div>
				</div>

                <div class="row form-group m-2">
                    <label for="formFile" class="form-label">Cargar Imagen</label>
                    <input class="form-control" name="archivo" id="archivo" type="file">
                </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" value="subir"></span>Editar</a>
      </div>
      </form>
    </div>
  </div>
</div>