<?php
class Proveedores extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('proveedores_model');
	}
	/**
	 * Index
	 */
	public function index($idProveedores)
	{
			$data['msj'] = '';
			$data['clase'] = "alert-danger";
			$data['titulo'] = 'PROVEEDORES';
			$data['boton'] = 'proveedores/index/x';	

			if($idProveedores == 'x'){
				$data['nuevo'] = true;
				$validaciones = 'formProveedor';
			}else{
				$data['proveedores'] = $this->proveedores_model->obtener_proveedores($idProveedores);
				$data['nuevo'] = false;
				$validaciones = 'formUptProveedor';
			}
			
			$this->load->view('template/menu', $data);
			if ($this->form_validation->run($validaciones) === TRUE)
			{
				//adiciono o edito admnistrador dependiendo el caso
				if($this->proveedores_model->add_proveedores($idProveedores))
				{
					if($idProveedores == 'x')
						$data['msj'] = "Se adicion&oacute; el nuevo Proveedor.";
					else $data['msj'] = "Se actualizaron los datos del Proveedor.";
					$data['clase'] = "alert-success";
				}else{
					$data['msj'] = "Problema guardando en la base de datos, solicitar soporte.";
					$data['clase'] = "alert-danger";
				}
				$this->load->view('template/respuesta', $data);//cargo respuesta
			}else{
				$this->load->view('proveedores/form_proveedores', $data);//cargo formulario
			}
			$this->load->view('template/footer');
	}

	public function listaProveedores()
	{			
			$this->load->view('template/menu');
			if($this->input->post()){
				$data['proveedores'] = $this->proveedores_model->obtener_proveedores_by_numero();
			}else {
				$data['proveedores'] = $this->proveedores_model->obtener_proveedores();
			}

			if($data['proveedores']){
				$this->load->view('proveedores/lista_proveedores', $data);
			}
			else
			{				
				$data['titulo'] = 'Listado de Proveedores';
				$data['msj'] = 'No hay proveedores en este momento.';
				$data['clase'] = 'alert-danger';
				$this->load->view('template/respuesta', $data);
			}
			$this->load->view('template/footer');

	}	
	
	
	/**
	 * VALIDACIONES
	 * Valido tipo y numero de identificacion
	 * @review 12/11/2015
	 */
	public function validate_documento(){
		if( $this->proveedores_model->validar_documento() ){
			return true;
		}else{
			$this->form_validation->set_message('validate_documento', 'Tipo y número de identificación ya estan registrados.');
			return false;
		}
	}
	
	
	
}

