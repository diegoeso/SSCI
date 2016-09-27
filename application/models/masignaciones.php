<?php 
/**
* 
*/
class Masignaciones extends CI_Model
{
	public function guardar($param)
	{
		$campo=array('status'=>$param['status'],
			'fechaRegistro'=>$param['fechaRegistro'],
			'fechaInicio'=>$param['fechaInicio'],
			'fechaFin'=>$param['fechaFin'],
			'idUsuario'=>$param['idUsuario'],
			'idActividad'=>$param['idActividad']);
		$res=$this->db->insert('asignacion',$campo);
		if ($res==1) {
			return 1;
		}else
		{
			return 0;
		}
	}
}
?>