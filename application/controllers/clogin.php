<?php 
/**
* 
*/
class Clogin extends CI_Controller
{
	
	function __construct()
	{
			parent::__construct();
			$this->load->model('mlogin');
	}
	public function index()
	{
		//cargar la pagina login
		$this->load->view('layout/vcabeceraL');
		$this->load->view('vindex');
		$this->load->view('layout/vpie');
	}
	public function principal()
	{
		$this->load->view('layout/vcabeceraA');
		$this->load->view('administrador/vadmin');
		$this->load->view('layout/vpie');
	}
	public function entrada()
	{
		$this->load->view('layout/vcabeceraL');
		$this->load->view('ventradasalida');
		$this->load->view('layout/vpie');
	}
	//metodo para realizar el login el cual se mandan los datos mediante $usu,$pass obtenidos del vindex
	public function ingresar()
	{
		$usu=$this->input->post('txtuser');
		$pass=$this->input->post('txtpass');
		$res=$this->mlogin->login($usu,$pass);
		
		$val=$this->mlogin->validarU();
		if ($res==true) 
		{
			if ($val==1) 
			{
				$this->load->view('layout/vcabeceraA');
				$this->load->view('administrador/vadmin');
				$this->load->view('layout/vpie');
				echo "<script language='JavaScript'>alert('administrador');</script>"; 
			}else
			{
				$this->load->view('layout/vcabeceraP');
				$this->load->view('layout/vpie');
				echo "<script language='JavaScript'>alert('prestador');</script>"; 
			}
				
		}else
		{
			echo "<script language='JavaScript'>alert('Usuario y/o Contraseña incorrecto');</script>"; 
			$this->load->view('layout/vcabeceraL');
			$this->load->view('vindex');
			$this->load->view('layout/vpie');
		}
	}
}
 ?>