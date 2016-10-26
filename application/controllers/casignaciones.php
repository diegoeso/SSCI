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
			$this->load->view('layout/vcabeceraA');
			$this->load->view('administrador/vasignaciones');
			$this->load->view('layout/vpie');
		}else
		{
			$this->load->view('layout/vcabeceraA');
			$this->load->view('administrador/vasignaciones');
			$this->load->view('layout/vpie');
		}
			
	}
	public function cargaAsignacion(){
		echo json_encode($this->masignaciones->cargaAsignacion());
	}

	function mostrar(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("buscar");
			$datos = $this->masignaciones->mostrar($buscar);
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
			$datos = $this->masignaciones->mostrarA($idsele);
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
		$param['status']=$this->input->post('cmbStatussele');
		// $param['fechaRegistro']=$fecha;
		$param['fechaInicio']=$this->input->post('txtFechaInisele');
		$param['fechaFin']=$this->input->post('txtFechaTersele');
		$param['idUsuario']=$this->input->post('cmbPrestadorsele');
		$param['idActividad']=$this->input->post('cmbActividadsele');
		$res=$this->masignaciones->editar($idsele,$param);
		if ($res==TRUE) {
			echo "<script language='JavaScript'>alert('Registro exitoso');</script>";
			$this->load->view('layout/vcabeceraA');
			$this->load->view('administrador/vasignaciones');
			$this->load->view('layout/vpie');
		}else
		{
			echo "<script language='JavaScript'>alert('No se he realizado el registro');</script>";
			$this->load->view('layout/vcabeceraA');
			$this->load->view('administrador/vasignaciones');
			$this->load->view('layout/vpie');
		}	
	}

	public function eliminar()
	{
		if ($this->input->is_ajax_request()) {
			$idsele = $this->input->post("id");
			if ($this->masignaciones->eliminar($idsele)==TRUE) {
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