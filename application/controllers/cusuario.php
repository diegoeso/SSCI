<?php  
/**
* 
*/
class Cusuario extends CI_Controller
{
	
	function __construct(){
		parent::__construct();		
		$this->load->model('musuario');
	}
	public function index(){
		$this->load->view('layout/vcabeceraA');
		$this->load->view('administrador/vusuario');
		$this->load->view('layout/vpie');
		//$data['usuarios'] = $this->model('musuario')->leerUsuarios();
		//$this->load->view('layout/vpie');
	}
	public function guardar(){
		$param['nombre'] = $this->input->post('txtnombre');
		$param['apellidoPaterno'] = $this->input->post('txtap');
		$param['apellidoMaterno'] = $this->input->post('txtam');
		$param['sexo'] = $this->input->post('sexo');
		$param['matricula'] = $this->input->post('txtmatricula');
		$param['correo'] = $this->input->post('txtcorreo');
		$param['institucion'] = $this->input->post('txtnombre');
		$param['semestre'] = $this->input->post('txtsemestre');
		$param['telefono'] = $this->input->post('txttelefono');
		$param['fechaAlta'] = $this->input->post('txtalta');
		$param['fechaInicio'] = $this->input->post('txtinicio');		
		$param['fechaTermino'] = $this->input->post('txtfin');
		$param['tipoUsuario'] = $this->input->post('ctipousuario');		
		$param['user'] = $this->input->post('txtuser');
		$param['password'] = $this->input->post('txtpassword');
		$param['idArea'] = $this->input->post('careas');
		$res2=$this->musuario->guardar($param);
		if($res2==1){
			$this->load->view('layout/vcabeceraA');
			$this->load->view('administrador/vusuario');
			$this->load->view('layout/vpie');
		}

	}
	public function leerUsuarios(){
		echo json_encode($this->musuario->leerUsuarios());
	}
}

?>