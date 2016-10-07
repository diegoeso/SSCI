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

	public function cargaAsignacion()
	{
		$this->db->select('a.idAsignacion,u.nombre,b.nombreActividad,a.status,a.fechaInicio,r.nombreArea');
		$this->db->FROM('asignacion a, usuarios u, actividades b,area r');
		$this->db->where('a.idUsuario=u.idUsuario');
		$this->db->where('a.idActividad=b.idActividad');
		$this->db->group_by('a.idAsignacion');
		$con=$this->db->get('asignacion');
		return $con->result();
		/*SELECT a.idAsignacion,u.nombre,b.nombreActividad,a.status,a.fechaInicio,r.nombreArea FROM asignacion a, usuarios u, actividades b,area r where a.idUsuario=u.idUsuario and a.idActividad=b.idActividad group by a.idAsignacion;*/
	}

	// public function mostrar($valor){
	// 	$this->db->select('u.nombre,b.nombreActividad,a.status,a.fechaInicio');
	// 	$this->db->like("idAsignacion",$valor);
	// 	$this->db->from('asignacion a');
	// 	$this->db->join('usuarios u','a.idUsuario=u.idUsuario');
	// 	$this->db->join('actividades b','a.idActividad=b.idActividad');
	// 	$consulta = $this->db->get();
	// 	return $consulta->result();
	// }	
	public function mostrar($valor){
		$this->db->select('*');
		$this->db->like("idAsignacion",$valor);
		// $this->db->from('asignacion a');
		// $this->db->join('usuarios u','a.idUsuario=u.idUsuario');
		// $this->db->join('actividades b','a.idActividad=b.idActividad');
		$consulta = $this->db->get("asignacion");
		return $consulta->result();
	}	
}
?>