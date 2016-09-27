<?php 
/**
* 
*/
class Casignaciones extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('masignaciones');
	}
	public function index()
	{
		$this->load->view('layout/vcabeceraA');
		$this->load->view('administrador/vasignaciones');
		$this->load->view('layout/vpie');
	}

	public function guardar()
	{
		date_default_timezone_set("America/Mexico_City");
			        $fecha = date('Y-m-d');
		$param['status']=$this->input->post('cmbStatus');
		$param['fechaRegistro']=$fecha;
		$param['fechaInicio']=$this->input->post('txtFechaIni');
		$param['fechaFin']=$this->input->post('txtFechaTer');
		$param['idUsuario']=$this->input->post('cmbPrestador');
		$param['idActividad']=$this->input->post('cmbActividad');
		$r=$this->masignaciones->guardar($param);
		if ($r==1) {
			echo "<script language='JavaScript'>alert('Registro exitoso');</script>";
		}
			
	}
}
 ?>