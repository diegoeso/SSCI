<?php 
/**
* 
*/
class Mactividades extends CI_Model
{
	
	public function guardar($param){
		$campo=array('nombreActividad'=>$param['nombreActividad'],
					'fechaRegistro'=>$param['fechaRegistro'],
					'fechaInicio'=>$param['fechaInicio'],
					'fechaTermino'=>$param['fechaTermino'],
					'descripcion'=>$param['descripcion'],
					'idArea'=>$param['idArea']);
		$res = $this->db->insert('actividades',$campo);
		if($res == 1){
			return 1;
		}

	}
}

 ?>