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
		$param['institucion'] = $this->input->post('txtinstitucion');
		$param['semestre'] = $this->input->post('txtsemestre');
		$param['telefono'] = $this->input->post('txttelefono');
		$param['fechaAlta'] = $this->input->post('txtalta');
		$param['fechaInicio'] = $this->input->post('txtinicio');		
		$param['fechaTermino'] = $this->input->post('txtfin');
		$param['tipoUsuario'] = $this->input->post('ctipousuario');		
		$param['user'] = $this->input->post('txtuser');
		$param['password'] = $this->input->post('txtpassword');
		$param['idArea'] = $this->input->post('cboArea');
		$res2=$this->musuario->guardar($param);
		if($res2==1){
			echo "<script language='JavaScript'>alert('Registro de usuario, fue existoso');</script>";
			$this->load->view('layout/vcabeceraA');
			$this->load->view('administrador/vusuario');
			$this->load->view('layout/vpie');
		}
	}
	function mostrarUsuario(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("buscarU");
			$datos = $this->musuario->leerUsuarios($buscar);
			echo json_encode($datos);			
		}
		else
		{
			show_404();
		}
	}

	function mostrarUsuarioSolo(){
		if ($this->input->is_ajax_request()) {
			$idsele = $this->input->post("idsele");				
			$datos = $this->musuario->leerSolo($idsele);
			echo json_encode($datos);			
		}
		else
		{
			show_404();
		}
	}

	function eliminar()
	{
		if ($this->input->is_ajax_request()) {
			$idsele = $this->input->post("id");			
			if ($this->musuario->eliminar($idsele)==TRUE) {
				echo "Registro eliminado correctamente";
			}else
			{
				echo "No se pudo eliminar el registro";
			}
		}
		else
		{
			show_404();
		}
	}

	function editar(){
		$idsele = $this->input->post("id");
		$param['nombre'] = $this->input->post('txtnombresele');
		$param['apellidoPaterno'] = $this->input->post('txtapsele');
		$param['apellidoMaterno'] = $this->input->post('txtamsele');
		$param['sexo'] = $this->input->post('sexosele');
		$param['matricula'] = $this->input->post('txtmatriculasele');
		$param['correo'] = $this->input->post('txtcorreosele');
		$param['institucion'] = $this->input->post('txtinstitucionsele');
		$param['semestre'] = $this->input->post('txtsemestresele');
		$param['telefono'] = $this->input->post('txttelefonosele');
		$param['fechaAlta'] = $this->input->post('txtaltasele');
		$param['fechaInicio'] = $this->input->post('txtiniciosele');		
		$param['fechaTermino'] = $this->input->post('txtfinsele');
		$param['tipoUsuario'] = $this->input->post('ctipousuariosele');		
		$param['user'] = $this->input->post('txtusersele');
		$param['password'] = $this->input->post('txtpasswordsele');
		$param['idArea'] = $this->input->post('cboAreasele');				
		$res=$this->musuario->editar($idsele,$param);		
		if ($res == TRUE){
			echo "<script language='JavaScript'>alert('Registro existoso');</script>";
					$this->load->view('layout/vcabeceraA');
					$this->load->view('administrador/vusuario');
					$this->load->view('layout/vpie');
		}else
		{			
			echo "<script language='JavaScript'>alert('No se he realizado el registro');</script>";
			$this->load->view('layout/vcabeceraA');
			$this->load->view('administrador/vusuario');
			$this->load->view('layout/vpie');
		}	

	}

	public function leeUsuario(){
		echo json_encode($this->musuario->leeUsuario());
	}

}

?>