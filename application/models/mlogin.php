<?php 
/**
* 
*/
class Mlogin extends CI_Model
{
	function login($usu, $pass)
	{
	   $this -> db -> select('*');
	   $this -> db -> from('usuarios');
	   $this -> db -> where('user', $usu);
	   $this -> db -> where('password', $pass);
	   //$this -> db -> where('tipoUsuario', $cmb);
	   $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();
	   if($query -> num_rows() > 0)
	   {
	   		$r=$query->row();
	   		$s_usu=array('s_idUsuario'=>$r->idUsuario,
	   		's_tipoUsuario'=>$r->tipoUsuario
	   		);
	   		//$this->session->userdata($s_usu);
	   		$this->session->set_userdata($s_usu);
	     	//return $query->result();
	     	return true;
	   }
	   else
	   {
	     	return false;
	   }
	}
	function validarU()
	{
		$tu=$this->session->userdata('s_idUsuario');
		if ($tu=='1') {
			return 1;
		}else{
			return 0;
		}
	}
}
 ?>