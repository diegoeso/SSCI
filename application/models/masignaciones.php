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
	}

	public function mostrar($valor){
		$this->db->select('a.idAsignacion,u.nombre,b.nombreActividad,a.status,a.fechaInicio,c.nombreArea');
		$this->db->like("u.nombre",$valor);
		$this->db->from('asignacion a');
		$this->db->join('usuarios u','a.idUsuario=u.idUsuario');
		$this->db->join('actividades b','a.idActividad=b.idActividad');
		$this->db->join('area c','b.idArea=c.idArea');
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function mostrarA($valor){
		$this->db->select('idAsignacion,idUsuario,idActividad,fechaRegistro,fechaInicio,fechaFin,status');
		// $this->db->select('*');
		$this->db->from('asignacion');
		$this->db->where('idAsignacion',$valor);
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function eliminar($id)
	{
		$this->db->where('idAsignacion',$id);
		$this->db->delete('asignacion');
		if ($this->db->affected_rows() > 0) {
			return true;
		}else
		{
			return false;
		}
	}
	function editar($idsele,$param)
	{
		$campo=array('status'=>$param['status'],
			// 'fechaRegistro'=>$param['fechaRegistro'],
			'fechaInicio'=>$param['fechaInicio'],
			'fechaFin'=>$param['fechaFin'],
			'idUsuario'=>$param['idUsuario'],
			'idActividad'=>$param['idActividad']);
		$this->db->where('idAsignacion',$idsele);
		$this->db->update('asignacion',$campo);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else
		{
			return false;
		}
	}

}
?>