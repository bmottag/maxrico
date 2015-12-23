<?php
class Proveedores_model extends CI_Model{
	/**
	 * Adicionar/Editar Proveedores
	 * @since 8/11/2015
	 */
	public function add_proveedores($id)
	{
		$data = array(
			'PV_tipo_identificacion' => $this->input->post('tipoIdentificacion'),
			'PV_numero_identificacion' => $this->input->post('numero'),
			'PV_dv' => $this->input->post('digito'),
			'PV_razon_social' => $this->input->post('razonsocial'),
			'PV_direccion' => $this->input->post('direccion'),
			'PV_telefonos' => $this->input->post('telefono'),
			'PV_contacto' => $this->input->post('contacto'),
			'PV_email' => $this->input->post('correo'),
			'PV_frecuencia' => $this->input->post('frecuencia'),
			'PV_desc' => $this->input->post('descripcion'),
			'PV_fecha' => date('Y-m-d'),
			'PV_estado' => $this->input->post('estado')
		);
		//revisar si es para adicionar o editar
		if($id == 'x'){
			$query = $this->db->insert('proveedor', $data);
		}else{
			$this->db->where('PV_id_proveedor', $id);
			$query = $this->db->update('proveedor', $data);		
		}
		if($query) return true;
		else return false;		
	}

	/**
	 * Lista de Proveedores
	 * @since 8/11/2015
	 */
	public function obtener_proveedores($id = 'x')
	{
		if($id != 'x'){
			$this->db->where('PV_id_proveedor', $id);
		}		
		$query = $this->db->get('proveedor');
		return $query->result_array();
	}
	
	/**
	 * Lista de Proveedores
	 * @since 8/11/2015
	 */
	public function obtener_proveedores_by_numero()
	{
		if($this->input->post('numero')){
			$this->db->where('PV_numero_identificacion', $this->input->post('numero'));
		}
		if($this->input->post('razonsocial')){
			$this->db->like('PV_razon_social', $this->input->post('razonsocial'));
		}		
		$query = $this->db->get('proveedor');
		return $query->result_array();
	}
	
	/**
	 * Verificar si tipo y numero ya esxisten en la base de datos
	 * @since 12/11/2015
	 */
	function validar_documento()
	{
		$this->db->where('PV_tipo_identificacion', $this->input->post('tipoIdentificacion') );
		$this->db->where('PV_numero_identificacion', $this->input->post('numero'));
		$query = $this->db->get('proveedor');
		if( $query->num_rows() == 1 )
			return false;
		else return true;
	}	












	
	
	
}
?>