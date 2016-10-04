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
			$this->load->view('administrador/vactividades');
			$this->load->view('layout/vpie');
		}else
			echo "<script language='JavaScript'>alert('Error en el registro');</script>";
	}
	public function leeActividades()
	{
		echo json_encode($this->mactividades->leerActividades());
	}

	public function cagaDatos()
	{
		$btn=$this->input->post('');
		echo json_encode($this->mactividades->selectActividades($btn));
	}

	function mostrar(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("buscar");
			$datos = $this->mactividades->mostrar($buscar);
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
			$datos = $this->mactividades->mostrarA($idsele);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	public function editar()
	{
		$idsele = $this->input->post("id");
		$param['nombreActividad'] = $this->input->post('txtnombresele');
		$param['fechaRegistro'] = $this->input->post('txtdateRegsele');
		$param['fechaInicio'] = $this->input->post('txtdateInisele');
		$param['fechaTermino'] = $this->input->post('txtdateTersele');
		$param['descripcion'] = $this->input->post('txtdescripcionsele');
		$param['idArea'] = $this->input->post('cmbactividadessele');
		$res=$this->mactividades->editar($idsele,$param);
		if ($res==TRUE) {
			echo "<script language='JavaScript'>alert('Registro exitoso');</script>";
			$this->load->view('layout/vcabeceraA');
			$this->load->view('administrador/vactividades');
			$this->load->view('layout/vpie');
		}else
		{
			echo "<script language='JavaScript'>alert('No se he realizado el registro');</script>";
			$this->load->view('layout/vcabeceraA');
			$this->load->view('administrador/vactividades');
			$this->load->view('layout/vpie');
		}	
	}

	public function eliminar()
	{
		if ($this->input->is_ajax_request()) {
			$idsele = $this->input->post("id");
			if ($this->mactividades->eliminar($idsele)==TRUE) {
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

}
?>

	
	
	

	
