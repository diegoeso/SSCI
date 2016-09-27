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
		
		//validaciones
		$this->form_validation->set_rules('nombreArea','Nombre Area','requiered');
		$this->form_validation->set_rules('descripcion','Descripcion','requiered');
		$this->form_validation->set_rules('responsable','Responsable','requiered');
		if ($this->form_validation->run()===TRUE) {
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
			echo validation_errors('<li>','</li>');
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

}
 ?>