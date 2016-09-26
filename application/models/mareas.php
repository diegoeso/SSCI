<?php 
/**
* 
*/
class Mareas extends CI_Model
{
	
	public function guardar($param){
		$campo=array('nombreArea'=>$param['nombreArea'],
					'descripcion'=>$param['descripcion'],
					'responsable'=>$param['responsable']);
		$r=$this->db->insert('area',$campo);
		if ($r==1) {
			return 1;

		}else
		{
			return 0;
		}
	}
	public function leerAreas(){
		$this->db->select('idArea,nombreArea,descripcion,responsable');
		$this->db->from('area');
		$re = $this->db->get();
		return $re->result();
	}
	public function cargarAreas()
	{
		$this->db->select('idArea,nombreArea');
		$this->db->from('area');
		$ca=$this->db->get();
		return $ca->result();
	}
}

 ?>