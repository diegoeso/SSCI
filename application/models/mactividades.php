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
		// $this->db->select('idActividad,nombreActividad,descripcion,fechaRegistro,fechaInicio,fechaTermino,idArea');
		$this->db->select('*');
		$this->db->from('actividades');
		$re = $this->db->get();
		return $re->result();
	}

	public function selectActividades($btn){
		$this->db->select('idActividad,nombreActividad,descripcion,fechaRegistro,fechaInicio,fechaTermino,idArea');
		$this->db->from('actividades');
		$this->db->where('idActividad', $bnt);
		$re = $this->db->get();
		return $re->result();
	}

	function mostrar($valor){
		$this->db->select('a.idActividad,a.nombreActividad,a.descripcion,a.fechaRegistro,a.fechaInicio,a.fechaTermino,b.nombreArea');
		$this->db->from('actividades a');
		$this->db->join('area b', 'a.idArea = b.idArea');
		$this->db->like("nombreActividad",$valor);
		$consulta = $this->db->get();

		return $consulta->result();
	}	

	function mostrarA($valor){
		$this->db->select('a.idActividad,a.nombreActividad,a.descripcion,a.fechaRegistro,a.fechaInicio,a.fechaTermino,b.idArea,b.nombreArea');
		$this->db->from('actividades a');
		$this->db->join('area b', 'a.idArea = b.idArea');
		$this->db->where('idActividad',$valor);
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function editar($idsele,$param)
	{
		$campo=array('nombreActividad'=>$param['nombreActividad'],
					'descripcion'=>$param['descripcion'],
					'fechaRegistro'=>$param['fechaRegistro'],
					'fechaInicio'=>$param['fechaInicio'],
					'fechaTermino'=>$param['fechaTermino'],
					'idArea'=>$param['idArea']);
		$this->db->where('idActividad',$idsele);
		$this->db->update('actividades',$campo);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else
		{
			return false;
		}
	}
	function eliminar($id)
	{
		$this->db->where('idActividad',$id);
		$this->db->delete('actividades');
		if ($this->db->affected_rows() > 0) {
			return true;
		}else
		{
			return false;
		}
	}
}

 ?>