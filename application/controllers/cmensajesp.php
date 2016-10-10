<?php 
/**
* 
*/
class Cmensajesp extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function index() {

		$this->load->view('layout/vcabeceraP');
		$this->load->view('prestador/vmensajesp');
		$this->load->view('layout/vpie');
	} 

	
}

 ?>