<div class="col-sm-4 text-center">
	<img style="height:200px;width:200px" src="../images/usuario/<?= $usuario[0]->dato["imagen"]?>.png" class="rounded mx-auto d-block" data-toggle="modal" data-target="#cambiarImagen">
	<?php if($_SESSION["login"] != $usuario[0]->dato["usuario"]):?>
	<h2 align="center"><?=$usuario[0]->dato["usuario"]?></h2>
	<button type="button" class="btn btn-primary">Seguir</button>
	<?php endif ?>
</div>