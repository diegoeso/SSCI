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
	function mostrar($valor){
		$this->db->like("nombreArea",$valor);
		$consulta = $this->db->get("area");
		return $consulta->result();
	}

	function mostrarA($valor){
		$this->db->select('idArea,nombreArea,descripcion,responsable');
		$this->db->from('area');
		$this->db->where('idArea',$valor);
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function editar($idsele,$param)
	{
		$campo=array('nombreArea'=>$param['nombreArea'],
					'descripcion'=>$param['descripcion'],
					'responsable'=>$param['responsable']);
		$this->db->where('idArea',$idsele);
		$this->db->update('area',$campo);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else
		{
			return false;
		}

	}

	function eliminar($id)
	{
		$this->db->where('idArea',$id);
		$this->db->delete('area');
		if ($this->db->affected_rows() > 0) {
			return true;
		}else
		{
			return false;
		}
	}

}

 ?>