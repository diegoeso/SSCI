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
		$this->load->view('administrador/vactividades');
		$this->load->view('layout/vpie');
		echo "<script language='JavaScript'>alert('Si quedo');</script>";
	}
	public function guardar(){
		echo "<script language='JavaScript'>alert('Si quedo');</script>";
		$param['nombreActividad'] = $this->input->post('nombreAct');
		$param['fechaRegistro'] = $this->input->post('fechaReg');
		$param['fechaInicio'] = $this->input->post('fechaIni');
		$param['fechaTermino'] = $this->input->post('fechaTer');
		$param['descripcion'] = $this->input->post('descripcion');
		$param['idArea'] = $this->input->post('carea');
		$r=$this->mactividades->guardar($param);
	if ($r==1) {
		echo "<script language='JavaScript'>alert('Si quedo');</script>";
	}else
		echo "<script language='JavaScript'>alert('no quedo');</script>";
	}
}
 ?>

	
	
	

	
