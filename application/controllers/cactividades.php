<?php 
/**
* 
*/
class Cactividades extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mactividades');
	}
	public function index(){
		$this->load->view('layout/vcabeceraA');
		$this->load->view('administrador/vactividades2');
		$this->load->view('layout/vpie');
		//echo "<script language='JavaScript'>alert('Si quedo');</script>";
	}
	public function guardar(){
		//echo "<script language='JavaScript'>alert('Si quedo');</script>";
		$param['nombreActividad'] = $this->input->post('txtnombre');
		$param['fechaRegistro'] = $this->input->post('txtdateReg');
		$param['fechaInicio'] = $this->input->post('txtdateIni');
		$param['fechaTermino'] = $this->input->post('txtdateTer');
		$param['descripcion'] = $this->input->post('txtdesc');
		$param['idArea'] = $this->input->post('cmbactividades');
		$r=$this->mactividades->guardar($param);
		if ($r==1) 
		{
			echo "<script language='JavaScript'>alert('Registro exitoso');</script>";
			$this->load->view('layout/vcabeceraA');
			$this->load->view('administrador/vactividades2');
			$this->load->view('layout/vpie');
		}else
			echo "<script language='JavaScript'>alert('Error en el registro');</script>";
	}
	public function leeActividades()
	{
		echo json_encode($this->mactividades->leerActividades());
	}
}
 ?>

	
	
	

	
