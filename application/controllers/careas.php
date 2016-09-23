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
		$res=$this->mareas->guardar($param);
		if ($res==1) 
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

	}
	public function leeAreas()
	{
		echo json_encode($this->mareas->leerAreas());
	}

}
 ?>