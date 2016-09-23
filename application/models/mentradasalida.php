<?php 
/**
* 
*/
class Mentradasalida extends CI_Model
{
	public function login($usu, $pass)
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
	public function validarU()
	{
		$tu=$this->session->userdata('s_tipoUsuario');
		if ($tu=='1') {
			return 1;
		}else{
			return 0;
		}
	}
	public function registro($tU)
	{
		$this->db->select('*');
		$this->db->from('registro');
		$this->db->where('idUsuario',$tU);
		$re=$this->db->get();
		if($re -> num_rows() > 0)
	   	{
	   		return $re->result();
	   		return 1;
	   	}else
	   	{
	   		return 0;
	   	}
	}

	public function insertaR($param)
	{
		$campo=array('idUsuario'=>$param['idU'],
			'fecha'=>$param['fecha'],
			'hora_entrada'=>$param['hora_entrada']
			);
		$reg=$this->db->insert('registro',$campo);
		if ($reg==1) {
			return 1;
		}else
		{
			return 0;
		}
	}	
}
 ?>