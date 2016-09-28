<?php 
/**
* 
*/
class Mactividades extends CI_Model
{
	
	public function guardar($param)
	{
		$campo=array('nombreActividad'=>$param['nombreActividad'],
					'descripcion'=>$param['descripcion'],
					'fechaRegistro'=>$param['fechaRegistro'],
					'fechaInicio'=>$param['fechaInicio'],
					'fechaTermino'=>$param['fechaTermino'],
					'idArea'=>$param['idArea']);
		$res = $this->db->insert('actividades',$campo);
		if($res == 1)
		{
			return 1;
		}

	}

	public function leerActividades(){
		$this->db->select('idActividad,nombreActividad,descripcion,fechaRegistro,fechaInicio,fechaTermino,idArea');
		$this->db->from('actividades');
		$re = $this->db->get();
		return $re->result();
	}
}

 ?>