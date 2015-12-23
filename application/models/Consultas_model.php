<?php
class Consultas_model extends CI_Model{
	
	/**
	 * Lista tipo productos
	 * @since 8/11/2015
	 */
	public function obtener_tipo_producto($tipo)
	{
		$this->db->where('TP_tipo', $tipo);
		$this->db->order_by('TP_nombre'); 
		$query = $this->db->get('tipoProducto');
		return $query->result_array();
	}
	
	/**
	 * Lista tipo productos
	 * @since 9/11/2015
	 */
	public function obtener_proveedor()
	{
		$this->db->where('PV_estado', 1);
		$this->db->order_by('PV_razon_social'); 
		$query = $this->db->get('proveedor');
		return $query->result_array();
	}
	
	/**
	 * Lista tipo clientes
	 * @since 14/11/2015
	 */
	public function obtener_cliente()
	{
		$this->db->where('CL_estado', 1);
		$this->db->order_by('CL_razon_social'); 
		$query = $this->db->get('cliente');
		return $query->result_array();
	}

	/**
	 * Traer precio
	 * @since 14/11/2015
	 */
	public function traerPrecio($tipoProducto)
	{
		$this->db->where('TP_id_tipo_producto', $tipoProducto);
		$query = $this->db->get('tipoProducto');
		return $query->row_array();
	}









	
	
	
}
?>