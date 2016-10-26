<?php

/**
 * 
 */
class Musuario extends CI_Model {
    /* function __construct()
      {
      parent::__construct();
      } */

    public function guardar($param) {
        $campo = array('nombre' => $param['nombre'],
            'apellidoPaterno' => $param['apellidoPaterno'],
            'apellidoMaterno' => $param['apellidoMaterno'],
            'sexo' => $param['sexo'],
            'matricula' => $param['matricula'],
            'correo' => $param['correo'],
            'institucionProcedencia' => $param['institucion'],
            'semestre' => $param['semestre'],
            'telefono' => $param['telefono'],
            'fechaALta' => $param['fechaAlta'],
            'fechaInicio' => $param['fechaInicio'],
            'fechaTermino' => $param['fechaTermino'],
            'tipoUsuario' => $param['tipoUsuario'],
            'user' => $param['user'],
            'password' => $param['password'],
            'passInicial' => 'default',
            'idArea' => $param['idArea']);
        $res = $this->db->insert('usuarios', $campo);
        if ($res == 1) {
            return 1;
        }
    }

    public function leerUsuarios($valor) {
        $this->db->select('u.idUsuario,u.nombre,u.apellidoPaterno,u.apellidoMaterno,u.correo,u.telefono, a.nombreArea');
        $this->db->from('usuarios as u, area as a');
        $this->db->where('u.idArea = a.idArea');
        $this->db->where('tipoUsuario', 1);
        $this->db->like("nombre", $valor);
        $re = $this->db->get();
        return $re->result();
    }

    function leerSolo($valor) {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where("idUsuario", $valor);
        $resultado = $this->db->get();
        return $resultado->result();
    }

    function eliminar($id) {
        $this->db->where('idUsuario', $id);
        $this->db->delete('usuarios');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function editar($idsele, $param) {
        $campo = array('nombre' => $param['nombre'],
            'apellidoPaterno' => $param['apellidoPaterno'],
            'apellidoMaterno' => $param['apellidoMaterno'],
            'sexo' => $param['sexo'],
            'matricula' => $param['matricula'],
            'correo' => $param['correo'],
            'institucionProcedencia' => $param['institucion'],
            'semestre' => $param['semestre'],
            'telefono' => $param['telefono'],
            'fechaALta' => $param['fechaAlta'],
            'fechaInicio' => $param['fechaInicio'],
            'fechaTermino' => $param['fechaTermino'],
            'tipoUsuario' => $param['tipoUsuario'],
            'user' => $param['user'],
            'password' => $param['password'],
            'passInicial' => 'default',
            'idArea' => $param['idArea']);
        $this->db->where('idUsuario', $idsele);
        $this->db->update('usuarios', $campo);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function leeUsuario() {
        $this->db->select('idUsuario,nombre,apellidoPaterno,apellidoMaterno,correo,telefono');
        $this->db->from('usuarios');
        $this->db->where('tipoUsuario', 1);
        $re = $this->db->get();
        return $re->result();
    }

}
?>

