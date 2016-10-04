<?php 
/**
* 
*/
class Careas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mareas');
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$this->load->view('layout/vcabeceraA');
		$this->load->view('administrador/vareas');
		$this->load->view('layout/vpie');
	}
	public function guardar()
	{
		$param['nombreArea'] = $this->input->post('nombreArea');
		$param['descripcion'] = $this->input->post('descripcion');
		$param['responsable'] = $this->input->post('responsable');
		$this->form_validation->set_rules('nombreArea','Nombre','required');
		// $this->form_validation->set_rules('descripcion','Descripción','required');
		// $this->form_validation->set_rules('responsable','Responsable','required');
		if ($this->form_validation->run()==TRUE) {
			if ($this->mareas->guardar($param)==TRUE) 
			{
				echo "<script language='JavaScript'>alert('Registro existoso');</script>";
					
				$this->load->view('layout/vcabeceraA');
				$this->load->view('administrador/vareas');
				$this->load->view('layout/vpie');
			}else
			{
				echo "<script language='JavaScript'>alert('No se he realizado el registro');</script>";
				$this->load->view('layout/vcabeceraA');
				$this->load->view('administrador/vareas');
				$this->load->view('layout/vpie');
			}
		}else
		{

			
		}
		
		
	}
	public function editar()
	{
			$idsele = $this->input->post("id");
			$param['nombreArea']=$this->input->post('txtNombresele');
			$param['descripcion']=$this->input->post('txtDescripcionsele');
			$param['responsable']=$this->input->post('txtResponsablesele');	
			$res=$this->mareas->editar($idsele,$param);
			if ($res==TRUE) {
					echo "<script language='JavaScript'>alert('Registro existoso');</script>";
					$this->load->view('layout/vcabeceraA');
					$this->load->view('administrador/vareas');
					$this->load->view('layout/vpie');
				}else
				{
					echo "<script language='JavaScript'>alert('No se he realizado el registro');</script>";
					$this->load->view('layout/vcabeceraA');
					$this->load->view('administrador/vareas');
					$this->load->view('layout/vpie');
				}	
	}
	public function eliminar()
	{
		if ($this->input->is_ajax_request()) {
			$idsele = $this->input->post("id");
			if ($this->mareas->eliminar($idsele)==TRUE) {
				echo "Registro eliminado correctamente";
			}else
			{
				echo "No se pudo eliminar el regostro";
			}


		}
		else
		{
			show_404();
		}
	}

	public function leeAreas()
	{
		echo json_encode($this->mareas->leerAreas());
	}

	public function cargarAreas()
	{
		echo json_encode($this->mareas->cargarAreas());
	}

	function mostrar(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("buscar");
			$datos = $this->mareas->mostrar($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function mostrarA(){
		if ($this->input->is_ajax_request()) {
			$idsele = $this->input->post("idsele");
			$datos = $this->mareas->mostrarA($idsele);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

}
 ?>