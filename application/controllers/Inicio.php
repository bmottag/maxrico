<?php
class Inicio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('clientes_model');
	}
	/**
	 * Index
	 */
	public function index()
	{
			$this->load->view('template/menu');
			$this->load->view('template/bienvenida');
			$this->load->view('template/footer');
	}

	public function cliente($idCliente)
	{
			$data['msj'] = '';
			$data['clase'] = "alert-danger";
			$data['titulo'] = 'CLIENTES';
			$data['boton'] = 'inicio/cliente/x';			

			if($idCliente == 'x'){
				$data['nuevo'] = true;
				$validaciones = 'formCliente';
			}else{
				$data['clientes'] = $this->clientes_model->obtener_clientes($idCliente);
				$data['nuevo'] = false;
				$validaciones = 'formUptCliente';
			}
			
			$this->load->view('template/menu', $data);
			if ($this->form_validation->run($validaciones) === TRUE)
			{
				//adiciono o edito admnistrador dependiendo el caso
				if($this->clientes_model->add_clientes($idCliente))
				{
					if($idCliente == 'x')
						$data['msj'] = "Se adicion&oacute; el nuevo Cliente.";
					else $data['msj'] = "Se actualizaron los datos del Cliente.";
					$data['clase'] = "alert-success";
				}else{
					$data['msj'] = "Problema guardando en la base de datos, solicitar soporte.";
					$data['clase'] = "alert-danger";
				}
				$this->load->view('template/respuesta', $data);//cargo respuesta
			}else{
				$this->load->view('clientes/form_cliente', $data);//cargo formulario
			}
			$this->load->view('template/footer');
	}

	public function listaClientes()
	{			
			$this->load->view('template/menu');
			if($this->input->post()){
				$data['clientes'] = $this->clientes_model->obtener_clientes_by_numero();
			}else {
				$data['clientes'] = $this->clientes_model->obtener_clientes();
			}
			if($data['clientes']){
				$this->load->view('clientes/lista_clientes', $data);
			}
			else
			{				
				$data['titulo'] = 'Listado de Clientes';
				$data['msj'] = 'No hay clientes en este momento.';
				$data['clase'] = 'alert-danger';
				$this->load->view('template/respuesta', $data);
			}
			$this->load->view('template/footer');
	}

	public function reporte($xls)
	{			
			
			if($this->input->post()){
				$data['clientes'] = $this->clientes_model->obtener_clientes_by_numero();
			}else {
				$data['clientes'] = $this->clientes_model->obtener_clientes();
			}
			if($data['clientes']){
				if( $xls == 'x' ){
					$data['xls'] = false;
					$this->load->view('template/menu');
					$this->load->view('clientes/reporte', $data);
					$this->load->view('template/footer');
				}else{
					$data['xls'] = true;
					header('Content-type: application/vnd.ms-excel; charset=UTF-8');
					header("Content-Disposition: attachment; filename=reporte_cliente.xls");
					$this->load->view('clientes/reporte', $data);
				}
			}
			else
			{				
				$data['titulo'] = 'Listado de Clientes';
				$data['msj'] = 'No hay clientes en este momento.';
				$data['clase'] = 'alert-danger';
				$this->load->view('template/menu');
				$this->load->view('template/respuesta', $data);
				$this->load->view('template/footer');
			}
	}
	
	/**
	 * VALIDACIONES
	 * Valido tipo y numero de identificacion
	 * @review 12/11/2015
	 */
	public function validate_documento(){
		if( $this->clientes_model->validar_documento() ){
			return true;
		}else{
			$this->form_validation->set_message('validate_documento', 'Tipo y número de identificación ya estan registrados.');
			return false;
		}
	}
	
	
	
}

