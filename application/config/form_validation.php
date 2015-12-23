<?php 

$config = array(
				/**
				 * Valido campos del formulario de Proveedores
				 */
                 'formProveedor' => array(
                                    array(
                                            'field' => 'tipoIdentificacion',
                                            'label' => 'Tipo Identificaci&oacute;n',
                                            'rules' => 'required'
                                         ),
									array(
                                            'field' => 'numero',
                                            'label' => 'N&uacute;mero Identificaci&oacute;n',
                                            'rules' => 'trim|required|numeric|min_length[4]|max_length[10]|callback_validate_documento'
                                         ),
									array(
                                            'field' => 'razonsocial',
                                            'label' => 'Raz&oacute;n social',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
									array(
                                            'field' => 'direccion',
                                            'label' => 'Direcci&oacute;n',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
									array(
                                            'field' => 'telefono',
                                            'label' => 'Tel&eacute;fono',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
									array(
                                            'field' => 'contacto',
                                            'label' => 'Contacto',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
									array(
                                            'field' => 'correo',
                                            'label' => 'Correo electr&oacute;nico ',
                                            'rules' => 'trim|valid_email'
                                         ),
									array(
                                            'field' => 'frecuencia',
                                            'label' => 'Frecuencia',
                                            'rules' => 'trim|min_length[3]|max_length[200]'
                                         )
                                    ),
									
				/**
				 * Valido campos del formulario de Proveedores
				 */
                 'formUptProveedor' => array(
                                    array(
                                            'field' => 'tipoIdentificacion',
                                            'label' => 'Tipo Identificaci&oacute;n',
                                            'rules' => 'required'
                                         ),
									array(
                                            'field' => 'numero',
                                            'label' => 'N&uacute;mero Identificaci&oacute;n',
                                            'rules' => 'trim|required|numeric|min_length[4]|max_length[10]'
                                         ),
									array(
                                            'field' => 'razonsocial',
                                            'label' => 'Raz&oacute;n social',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
									array(
                                            'field' => 'direccion',
                                            'label' => 'Direcci&oacute;n',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
									array(
                                            'field' => 'telefono',
                                            'label' => 'Tel&eacute;fono',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
									array(
                                            'field' => 'contacto',
                                            'label' => 'Contacto',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
									array(
                                            'field' => 'correo',
                                            'label' => 'Correo electr&oacute;nico ',
                                            'rules' => 'trim|valid_email'
                                         ),
									array(
                                            'field' => 'frecuencia',
                                            'label' => 'Frecuencia',
                                            'rules' => 'trim|min_length[3]|max_length[200]'
                                         )
                                    ),

				/**
				 * Valido campos del formulario de Clientes
				 */
                 'formCliente' => array(
                                    array(
                                            'field' => 'tipoIdentificacion',
                                            'label' => 'Tipo Identificaci&oacute;n',
                                            'rules' => 'required'
                                         ),
									array(
                                            'field' => 'numero',
                                            'label' => 'N&uacute;mero Identificaci&oacute;n',
                                            'rules' => 'trim|required|numeric|min_length[4]|max_length[10]|callback_validate_documento'
                                         ),
									array(
                                            'field' => 'razonsocial',
                                            'label' => 'Raz&oacute;n social',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
									array(
                                            'field' => 'sucursal',
                                            'label' => 'Sucursal',
                                            'rules' => 'trim|max_length[200]'
                                         ),
									array(
                                            'field' => 'direccion',
                                            'label' => 'Direcci&oacute;n',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
                                    array(
                                            'field' => 'zona',
                                            'label' => 'Zona',
                                            'rules' => 'required'
                                         ),
									array(
                                            'field' => 'telefono',
                                            'label' => 'Tel&eacute;fono',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
									array(
                                            'field' => 'contacto',
                                            'label' => 'Contacto',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
									array(
                                            'field' => 'correo',
                                            'label' => 'Correo electr&oacute;nico ',
                                            'rules' => 'trim|valid_email'
                                         ),
									array(
                                            'field' => 'frecuencia',
                                            'label' => 'Frecuencia',
                                            'rules' => 'trim|min_length[3]|max_length[200]'
                                         )
                                    ),
									
				/**
				 * Valido campos del formulario de Clientes
				 */
                 'formUptCliente' => array(
                                    array(
                                            'field' => 'tipoIdentificacion',
                                            'label' => 'Tipo Identificaci&oacute;n',
                                            'rules' => 'required'
                                         ),
									array(
                                            'field' => 'numero',
                                            'label' => 'N&uacute;mero Identificaci&oacute;n',
                                            'rules' => 'trim|required|numeric|min_length[4]|max_length[10]'
                                         ),
									array(
                                            'field' => 'razonsocial',
                                            'label' => 'Raz&oacute;n social',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
									array(
                                            'field' => 'sucursal',
                                            'label' => 'Sucursal',
                                            'rules' => 'trim|max_length[200]'
                                         ),
									array(
                                            'field' => 'direccion',
                                            'label' => 'Direcci&oacute;n',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
                                    array(
                                            'field' => 'zona',
                                            'label' => 'Zona',
                                            'rules' => 'required'
                                         ),
									array(
                                            'field' => 'telefono',
                                            'label' => 'Tel&eacute;fono',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
									array(
                                            'field' => 'contacto',
                                            'label' => 'Contacto',
                                            'rules' => 'trim|required|min_length[3]|max_length[200]'
                                         ),
									array(
                                            'field' => 'correo',
                                            'label' => 'Correo electr&oacute;nico ',
                                            'rules' => 'trim|valid_email'
                                         ),
									array(
                                            'field' => 'frecuencia',
                                            'label' => 'Frecuencia',
                                            'rules' => 'trim|min_length[3]|max_length[200]'
                                         )
                                    ),
									
				/**
				 * Valido campos del formulario de Materia prima
				 */
                 'formMateriaPrima' => array(
                                    array(
                                            'field' => 'tipoProducto',
                                            'label' => 'Tipo Producto',
                                            'rules' => 'required'
                                         ),
									array(
                                            'field' => 'tipoMovimiento',
                                            'label' => 'Tipo Movimiento',
                                            'rules' => 'required'
                                         ),
									array(
                                            'field' => 'cantidad',
                                            'label' => 'Cantidad',
                                            'rules' => 'required|min_length[1]|max_length[8]|numeric'
                                         ),
									array(
                                            'field' => 'valorUnitario',
                                            'label' => 'Valor Unitario',
                                            'rules' => 'trim|min_length[2]|max_length[8]|numeric'
                                         )
                                    ),
									
				/**
				 * Valido campos del formulario de Producto terminado
				 */
                 'formProductoTerminado' => array(
                                    array(
                                            'field' => 'tipoProducto',
                                            'label' => 'Tipo Producto',
                                            'rules' => 'required'
                                         ),
									array(
                                            'field' => 'tipoMovimiento',
                                            'label' => 'Tipo Movimiento',
                                            'rules' => 'required'
                                         ),
									array(
                                            'field' => 'cantidad',
                                            'label' => 'Cantidad',
                                            'rules' => 'required|min_length[1]|max_length[8]|numeric'
                                         ),
									array(
                                            'field' => 'fechaCaducidad',
                                            'label' => 'Fecha Caducidad',
                                            'rules' => 'trim|required'
                                         )
                                    ),
									
				/**
				 * Valido campos del formulario de Producto terminado
				 */
                 'formFactura' => array(
                                    array(
                                            'field' => 'cliente',
                                            'label' => 'Cliente',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'noFactura',
                                            'label' => 'Número Factura',
                                            'rules' => 'required|numeric|min_length[1]|max_length[4]|is_unique[factura.FA_no_factura]'
                                         ),
                                    array(
                                            'field' => 'tipoProducto',
                                            'label' => 'Producto',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'cantidad',
                                            'label' => 'Cantidad',
                                            'rules' => 'required|min_length[1]|max_length[8]|numeric'
                                         )
                                    ),	

				/**
				 * Valido campos del formulario de Producto terminado
				 */
                 'formUptFactura' => array(
                                    array(
                                            'field' => 'cliente',
                                            'label' => 'Cliente',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'noFactura',
                                            'label' => 'Número Factura',
                                            'rules' => 'required|numeric|min_length[1]|max_length[4]'
                                         ),
                                    array(
                                            'field' => 'tipoProducto',
                                            'label' => 'Producto',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'cantidad',
                                            'label' => 'Cantidad',
                                            'rules' => 'required|min_length[1]|max_length[8]|numeric'
                                         )
                                    ),										
									
				/**
				 * Valido campos del formulario de Productos
				 */
                 'formProductos' => array(
                                    array(
                                            'field' => 'tipo',
                                            'label' => 'Tipo',
                                            'rules' => 'required'
                                         ),
									array(
                                            'field' => 'nombre',
                                            'label' => 'Nombre',
                                            'rules' => 'required|min_length[1]|max_length[200]'
                                         ),
									array(
                                            'field' => 'unidad',
                                            'label' => 'Unidad de medida',
                                            'rules' => 'required'
                                         ),
									array(
                                            'field' => 'precio',
                                            'label' => 'Precio',
                                            'rules' => 'trim|required|min_length[2]|max_length[8]|numeric'
                                         )
                                    )									
																		



               );
?>
