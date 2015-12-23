<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4 class="list-group-item-heading">
						Listado de Proveedores
					</h4>
				</div>
			</div>
		</div>			
	</div>
		<form  name="form" id="form" role="form" method="post" >
			<div class="row">
				<div class="col-md-3">
					<label class="control-label">N&uacute;mero de Identificaci&oacute;n : *</label>
					<input type="text" name="numero" id="numero" class="form-control" placeholder="N&uacute;mero de Identificaci&oacute;n" value="<?php if( $this->input->post() ){echo set_value('numero');} ?>"  />
				</div>
				<div class="col-md-4">
					<label class="control-label">Raz&oacute; social : *</label>
					<input type="text" name="razonsocial" id="razonsocial" class="form-control" placeholder="Raz&oacute; social" value="<?php if( $this->input->post() ){echo set_value('razonsocial');} ?>"  />
				</div>
				<div class="col-md-2"><br>
					<input type="submit" name="guardar" value="Buscar" class="btn btn-primary"/>
				</div>
			</div>	
		</form>	
	<div class="row">
		<div class="col-md-12">
	<table class="table table-bordered table-striped table-hover table-condensed">
		<tr class="info">
			<td ><p class="text-center"><strong>ID </strong></p></td>
			<td ><p class="text-center"><strong>Tipo identificaci&oacute;n </strong></p></td>
			<td ><p class="text-center"><strong>No. identificaci&oacute;n </strong></p></td>
			<td ><p class="text-center" ><strong>Raz&oacute;n social</strong></p></td>
			<td ><p class="text-center" ><strong>Direcci&oacute;n</strong></p></td>
			<td ><p class="text-center"><strong>Tel&eacute;fonos </strong></p></td>
			<td ><p class="text-center"><strong>Frecuencia</strong></p></td>
			<td ><p class="text-center"><strong>Descripci&oacute;n</strong></p></td>
			<td ><p class="text-center" ><strong>Estado</strong></p></td>
		</tr>
		<?php 
		foreach ($proveedores as $lista):
			echo "<tr>";
			echo "<td><small>" . $lista['PV_id_proveedor'] . "</small></td>";
			echo "<td><small>";
				switch ($lista['PV_tipo_identificacion']) {
					case 1:
						echo "CC";
						break;
					case 2:
						echo "NIT";
						break;
					case 3:
						echo "CE";
						break;
					case 4:
						echo "PAS";
						break;
				}
			echo "</small></td>";
			echo "<td><small>" . $lista['PV_numero_identificacion'] . "</small></td>";
			echo "<td><small>" . $lista['PV_razon_social'] . "</small></td>";
			echo "<td><small>" . $lista['PV_direccion'] . "</small></td>";
			echo "<td><small>" . $lista['PV_telefonos'] . "</small></td>";
			echo "<td><small>" . $lista['PV_frecuencia'] . "</small></td>";
			echo "<td><small>" . $lista['PV_desc'] . "</small></td>";
			echo "<td class='text-center'>";
			$enlace = base_url().'proveedores/index/' .$lista['PV_id_proveedor'];
			if( $lista['PV_estado']==1){
				$valor = 'Activo';
				$clase = "btn btn-success";
			}else{
				$valor = 'Inactivo';
				$clase = "btn btn-danger";
			}
			echo '<a class="' . $clase . '" href="' . $enlace . '">' .  $valor . ' <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
			 
			echo "</td>";
			echo "</tr>";
		endforeach ?>
	</table>
		</div>
	</div>
</div>