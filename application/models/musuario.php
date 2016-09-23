<?php  
/**
* 
*/
class Musuario extends CI_Model
{	
	/*function __construct()
	{
		parent::__construct();
	}*/
	public function guardar($param){
		$campo=array('nombre'=>$param['nombre'],
			'apellidoPaterno'=>$param['apellidoPaterno'],
			'apellidoMaterno'=>$param['apellidoMaterno'],
			'sexo'=>$param['sexo'],
			'matricula'=>$param['matricula'],
			'correo'=>$param['correo'],
			'institucionProcedencia'=>$param['institucion'],
			'semestre'=>$param['semestre'],
			'telefono'=>$param['telefono'],
			'fechaALta'=>$param['fechaAlta'],
			'fechaInicio'=>$param['fechaInicio'],
			'fechaTermino'=>$param['fechaTermino'],
			'tipoUsuario'=>$param['tipoUsuario'],
			'user'=>$param['user'],
			'password'=>$param['password'],
			'passInicial'=>'default',
			'idArea'=>$param['idArea']);
		$res=$this->db->insert('usuarios', $campo);
		if($res==1){
			return 1;
		}
	}

	/*public function leerUsuarios(){
		$query = $this->db->get('usuarios');
		if]($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}*/
	public function leerUsuarios(){
		$this->db->select('nombre,apellidoPaterno,apellidoMaterno,correo,telefono');
		$this->db->from('usuarios');
		$re = $this->db->get();
		return $re->result();
	}

}

?>