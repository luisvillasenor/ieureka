<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Perfil_model extends CI_Model{

	function __construct()
	{
	    // Call the Model constructor
	    parent::__construct();
	        
	}

	public function show($id_perfil = FALSE){
		if ( $id_perfil === FALSE ) {
			# si NO hay valor en el parametro, devuelve todos los registros en forma de array
			$query = $this->db->get('perfil');
			return $query->result_array();
		}
		# devuelve 1 registro tipo array
		$query = $this->db->get_where('perfil',array('id_perfil' => $id_perfil));
		return $query->row_array();
	}

	public function insert()
	{
       $data = array(
            'id_user' => $this->input->post('id_user'),
            'nombreCompleto' => $this->input->post('nombreCompleto'),
            'pais' => $this->input->post('pais'),
            'domicilio1' => $this->input->post('domicilio1'),
            'domicilio2' => $this->input->post('domicilio2'),
            'ciudad' => $this->input->post('ciudad'),
            'estado' => $this->input->post('estado'),
            'cp' => $this->input->post('cp'),
            'telefono' => $this->input->post('telefono')
        );
        $this->db->insert('perfil', $data);
        $id_perfil = $this->db->insert_id();
        return $id_perfil;
    }

	public function activate_id($id_user)
	{
		$data = array(
            'fecha_activacion' => date('Y-m-d H:i:s'),
            'status' => 1
        );
        $this->db->where('id_user',$id_user);
        $this->db->update('users', $data);
        return TRUE;
    }

}