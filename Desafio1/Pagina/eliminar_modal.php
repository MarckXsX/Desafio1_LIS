<!-- Eliminar -->
<div class="modal fade" id="eliminar_<?php echo $product->codigo; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Eliminar Producto</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            	<p class="text-center">
                    <strong>Esta seguro que deseas borrar el producto seleccionado?</strong>
                </p>

				<div class="row">

                    <div class="col-6 position-relative" >
                        <img src="img/<?=$product->img?>" class="card-img-top position-absolute top-50 start-50 translate-middle" style="width: 14rem; height: 14rem; " alt="Producto">
                    </div>
                    
                    <div class="col-6">

                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action active" aria-current="true">Detalles</button>
                            <button type="button" class="list-group-item list-group-item-action">Codigo: <?=$product->codigo?></button>
                            <button type="button" class="list-group-item list-group-item-action">Categoria: <?=$product->categoria?></button>
                            <button type="button" class="list-group-item list-group-item-action">Precio: $<?=$product->precio?></button>
                            <button type="button" class="list-group-item list-group-item-action">Existencias: <?=$product->existencias != 0 ? $product->existencias : " Producto no Disponible"?></button>
                        </div>
                        
                        <div class="card p-1 my-3">
                            <div class="card-body">
                                <?=$product->descripcion?>
                            </div>
                        </div>

                    </div>

                </div>

			</div>

            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                <a href="eliminar.php?cod=<?=$product->codigo?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Confirmar</a>
            </div>
 
        </div>
    </div>
</div>