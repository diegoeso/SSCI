<?php

class Cmensajes extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();		
		$this->load->model('mmensajes');
	}
		public function index(){
		$this->load->view('layout/vcabeceraA');
		$this->load->view('administrador/vmensajes');
		$this->load->view('layout/vpie');
		//$data['usuarios'] = $this->model('musuario')->leerUsuarios();
		//$this->load->view('layout/vpie');
	}
}

?>