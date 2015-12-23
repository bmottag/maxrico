<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4 class="list-group-item-heading">
						Reporte de Clientes - organizado por Zona
					</h4>
				</div>
			</div>
		</div>			
	</div>
	<?php if(!$xls){ ?>
		<form  name="form" id="form" role="form" method="post" >
			<div class="row">
				<div class='col-sm-2'>
					<label class="control-label">Zona : *</label>
					<select name="zona" id="zona" class="form-control" >
						<option value='' >Seleccione...</option>
						<option value='1'>Zona Centro</option>
						<option value='2'>Zona Norte</option>
						<option value='3'>Zona Sur</option>
						<option value='4'>Zona Oriente</option>
						<option value='5'>Zona Occidente</option>
					</select>
				</div>
				<div class="col-md-2"><br>
					<input type="submit" name="guardar" value="Buscar" class="btn btn-primary"/>
				</div>
				<div class="col-md-2"><br>
					<a class="btn btn-primary" href="<?php echo base_url().'inicio/reporte/1';  ?>">XLS</a>
				</div>
			</div>	
		</form>	
	<?php } ?>
	<div class="row">
		<div class="col-md-12">
	<table class="table table-bordered table-striped table-hover table-condensed">
		<tr class="info">
			<td ><p class="text-center"><strong>ID </strong></p></td>
			<td ><p class="text-center"><strong>Tipo Identificaci&oacute;n </strong></p></td>
			<td ><p class="text-center"><strong>No. Identificaci&oacute;n </strong></p></td>
			<td ><p class="text-center" ><strong>Raz&oacute;n social</strong></p></td>
			<td ><p class="text-center" ><strong>Sucursal</strong></p></td>
			<td ><p class="text-center" ><strong>Direcci&oacute;n</strong></p></td>
			<td ><p class="text-center"><strong>Tel&eacute;fonos </strong></p></td>
			<td ><p class="text-center"><strong>Frecuencia</strong></p></td>
			<td ><p class="text-center"><strong>Descripci&oacute;n</strong></p></td>
		</tr>
		<?php 
		foreach ($clientes as $lista):
			echo "<tr>";
			echo "<td><small>" . $lista['CL_id_cliente'] . "</small></td>";
			echo "<td><small>";
				switch ($lista['CL_tipo_identificacion']) {
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
			echo "<td><small>" . $lista['CL_numero_identificacion'] . "</small></td>";
			echo "<td><small>" . $lista['CL_razon_social'] . "</small></td>";
			echo "<td><small>" . $lista['CL_sucursal'] . "</small></td>";
			echo "<td><small>" . $lista['CL_direccion'] . "</small></td>";
			echo "<td><small>" . $lista['CL_telefonos'] . "</small></td>";
			echo "<td><small>" . $lista['CL_frecuencia'] . "</small></td>";
			echo "<td><small>" . $lista['CL_desc'] . "</small></td>";
			echo "</tr>";
		endforeach ?>
	</table>
		</div>
	</div>
</div>