<script src="<?php echo base_url() . 'validaciones/proveedores.js'; ?>"></script>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4 class="list-group-item-heading">
						PROVEEDORES
					</h4>
				</div>
			</div>
		</div>			
	</div>
	<div class="well">
		<form  name="form" id="form" role="form" method="post" >
			<div class="row">
				<div class='col-md-3'>					
					<label class="control-label">Tipo de Identificaci&oacute;n : *</label>
					<select name="tipoIdentificacion" id="tipoIdentificacion" class="form-control" onChange="habilitar();">
						<option value='' >Seleccione...</option>
						<?php 
						$tipoIdentificacion = '';
						if( $this->input->post() )
							$tipoIdentificacion = set_value('tipoIdentificacion');
						else if( !$nuevo )
							$tipoIdentificacion = $proveedores[0]["PV_tipo_identificacion"];					
						?>
						<option value='1' <? if($tipoIdentificacion == '1') { echo "selected"; }  ?>>CC</option>
						<option value='2' <? if($tipoIdentificacion == '2') { echo "selected"; }  ?>>NIT</option>
						<option value='3' <? if($tipoIdentificacion == '3') { echo "selected"; }  ?>>CE</option>
						<option value='4' <? if($tipoIdentificacion == '4') { echo "selected"; }  ?>>PAS</option>
					</select>
				</div>
				<div class="col-md-3">
					<label class="control-label">N&uacute;mero de Identificaci&oacute;n : *</label>
					<input type="text" name="numero" id="numero" class="form-control" placeholder="N&uacute;mero de Identificaci&oacute;n" value="<?php if( $this->input->post() ){echo set_value('numero');}elseif( !$nuevo ){echo $proveedores[0]["PV_numero_identificacion"];} ?>"  />
				</div>
				<div class="col-md-2">
					<label class="control-label">Digito verificaci&oacute;n : </label>
					<input type="text" name="digito" id="digito" class="form-control" placeholder="Digito verificaci&oacute;n" value="<?php if( $this->input->post() ){echo set_value('digito');}elseif( !$nuevo ){echo $proveedores[0]["PV_dv"];} ?>" disabled />
				</div>
				<div class="col-md-4">
					<label class="control-label">Raz&oacute;n social : *</label>
					<input type="text" name="razonsocial" id="razonsocial" class="form-control" placeholder="Raz&oacute;n social" value="<?php if( $this->input->post() ){echo set_value('razonsocial');}elseif( !$nuevo ){echo $proveedores[0]["PV_razon_social"];} ?>"  />
				</div>
			</div>		
			<div class="row">
				<div class="col-md-4">
					<label class="control-label">Direcci&oacute;n : *</label>
					<input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direcci&oacute;n" value="<?php if( $this->input->post() ){echo set_value('direccion');}elseif( !$nuevo ){echo $proveedores[0]["PV_direccion"];} ?>" />
				</div>
				<div class="col-md-2">
					<label class="control-label">Tel&eacute;fono : *</label>
					<input type="text" name="telefono" id="telefono" class="form-control" placeholder="Tel&eacute;fono" value="<?php if( $this->input->post() ){echo set_value('telefono');}elseif( !$nuevo ){echo $proveedores[0]["PV_telefonos"];} ?>" />
				</div>
				<div class="col-md-4">
					<label class="control-label">Contacto : *</label>
					<input type="text" name="contacto" id="contacto" class="form-control" placeholder="Contacto" value="<?php if( $this->input->post() ){echo set_value('contacto');}elseif( !$nuevo ){echo $proveedores[0]["PV_contacto"];} ?>" />
				</div>
			</div>
			<div class="row">			
				<div class="col-md-4">
					<label class="control-label">Correo electr&oacute;nico : </label>
					<input type="text" name="correo" id="correo" class="form-control" placeholder="correo" value="<?php if( $this->input->post() ){echo set_value('correo');}elseif( !$nuevo ){echo $proveedores[0]["PV_email"];} ?>" />
				</div>
				<div class="col-md-4">
					<label class="control-label">Frecuencia : </label>
					<textarea class="form-control" name="frecuencia" rows="2"><?php
					if(isset($proveedores))
						echo $proveedores[0]['PV_frecuencia'];
					?></textarea>
				</div>
				<div class="col-md-4">
					<label class="control-label">Descripci&oacute;n : </label>
					<textarea class="form-control" name="descripcion" rows="2"><?php
					if(isset($proveedores))
						echo $proveedores[0]['PV_desc'];
					?></textarea>
				</div>
				<div class='col-sm-2'>
					<label class="control-label">Estado : *</label>
					<select name="estado" id="estado" class="form-control" >
						<?php 
						$estado = '';
						if(isset($proveedores))
							$estado = $proveedores[0]['PV_estado'];
						?>					
						<option value='1' <? if($estado == '1') { echo "selected"; }  ?>>Activo</option>
						<option value='2' <? if($estado == '2') { echo "selected"; }  ?>>Inactivo</option>
					</select>
				</div>
				<div class="col-md-2">
					<label class="control-label">Fecha registro: </label>
					<input type="text" name="fechaReg" id="fechaReg" class="form-control" placeholder="Cantidad" value="<?php if( $nuevo ){echo date('Y-m-d');}elseif( !$nuevo ){echo $proveedores[0]["PV_fecha"];} ?>"  disabled />
				</div>
			</div><br>
			<div class="row" align="center">
					<?php 
						if( $nuevo ){
							$botonValue = 'Guardar datos';
						}else{
							$botonValue = 'Actualizar datos';
							echo '<input type="hidden" name="idProveedor" value="' . $proveedores[0]["PV_id_proveedor"] . '" />';
						}
					?>
					<div style="width:50%;" align="center">
						<?php if( $msj != ''){ ?>
							<div class="alert <?php echo $clase; ?>">
								<span class="glyphicon glyphicon-remove"></span>
								<strong>Nota :</strong>&nbsp; 
								<?php echo $msj; ?>
							</div>
						<?php } ?>
						<input type="submit" name="Button" value="<?php echo $botonValue; ?>" class="btn btn-primary"/>
					</div>
			</div>			
		</form>
	</div>
	<?php if( validation_errors() ){  ?>
		<!-- Mensaje del controlador -->
		<div class="alert <?php echo $clase; ?> alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<?php echo validation_errors(); ?>
		</div>
		<!-- FIN Mensaje del controlador -->
	<?php } ?>
</div>