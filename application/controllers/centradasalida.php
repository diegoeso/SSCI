<?php 
/**
* 
*/
class Centradasalida extends CI_Controller
{
	
	function __construct()
	{
			parent::__construct();
			$this->load->model('mentradasalida');
	}
	public function index()
	{
		//cargar la pagina login
		$this->load->view('layout/vcabeceraL');
		$this->load->view('vindex');
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
		$res=$this->mentradasalida->login($usu,$pass);
		$val=$this->mentradasalida->validarU();
		// echo "<script language='JavaScript'>alert('$val');</script>";
		// $val=$this->session->userdata('s_tipoUsuario');
		echo "<script language='JavaScript'>alert('$val');</script>";
		date_default_timezone_set("America/Mexico_City");
			        $fecha = date('Y-m-d');
			        $hora= date("h:i");
		if ($res==true) 
		{
			if ($val==1) 
			{
				$this->load->view('layout/vcabeceraP');
				$this->load->view('administrador/vadmin');
				$this->load->view('layout/vpie');
				$tU=$this->session->userdata('s_tipoUsuario');
				$idU=$this->session->userdata('s_idUsuario');
				$reg=$this->mentradasalida->registro($tU,$fecha);
				if ($reg==1) {
					echo "<script language='JavaScript'>alert('tiene datos');</script>";
					$param['idU']=$idUsuario2;
					$param['fecha']=$fecha;
					$param['hora_entrada']=$hora;
					$rES=$this->mentradasalida->insertaR($param);
					if ($rES==1) {
						echo "<script language='JavaScript'>alert('Hora entrada');</script>";
					}
				}else{
					echo "<script language='JavaScript'>alert('no tiene datos');</script>";
					$param['hora_salida']=$hora;
					$rES=$this->mentradasalida->editar($param,$idU);
					if ($rES==true) {
						echo "<script language='JavaScript'>alert('Hora Salida');</script>";
					}
				}



				// if ($reg==1) 
				// {
					
				// 	echo "<script language='JavaScript'>alert('tiene registro la base de datos');</script>";
				// }else
				// {
				// 	$idUsuario2=$this->session->userdata('s_idUsuario');
				// 	//conseguimos la hora de nuestro país, en mi caso españa
					
			 //        echo "<script language='JavaScript'>alert('$fecha, $hora');</script>";
			 //        echo "<script language='JavaScript'>alert('$idUsuario2');</script>";
				// 	echo "<script language='JavaScript'>alert('no tiene registro en la base de datos');</script>";
				// 	$param['idU']=$idUsuario2;
				// 	$param['fecha']=$fecha;
				// 	$param['hora_entrada']=$hora;
				// 	$rES=$this->mentradasalida->insertaR($param);
				// 	if ($rES==1) {
				// 		echo "<script language='JavaScript'>alert('Hora entrada');</script>";
				// 	}
				// }
				 
			}else
			{
				echo "<script language='JavaScript'>alert('Usuario y/o Contraseña incorrecto 1');</script>"; 
				$this->load->view('layout/vcabeceraL');
				$this->load->view('ventradasalida');
				$this->load->view('layout/vpie');
			}	
				
		}else
		{
			echo "<script language='JavaScript'>alert('Usuario y/o Contraseña incorrecto 2');</script>"; 
			$this->load->view('layout/vcabeceraL');
			$this->load->view('ventradasalida');
			$this->load->view('layout/vpie');
		}
	}

	/*public function Rentrada()
	{
		$param['idU1']=$this->session->userdata('s_idUsuario');
		$param['fecha']=$this->input->post('txtfecha');
		$param['horaE']=$this->input->post('txthora');
		$salida=$this->mentradasalida->insertaR($param);
		//$val=$this->mentradasalida->validarU();
		if ($salida==1) {
			echo "<script language='JavaScript'>alert('Entrada');</script>"; 
		}
	}*/
	
}
 ?>