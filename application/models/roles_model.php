<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Roles_model extends CI_Model{

	function __construct()
	{
	    // Call the Model constructor
	    parent::__construct();
	        
	}

	public function get_roles($id_rol = FALSE){
		if ( $id_rol === FALSE ) {
			# si NO hay valor en el parametro, devuelve todos los registros en forma de array
			$query = $this->db->get_where('roles',array('id_rol' => $id_rol));
			return $query->result_array();
		}
		# devuelve 1 registro tipo array
		$query = $this->db->get_where('roles',array('id_rol' => $id_rol));
		return $query->row_array();
	}

	public function new_rol($rol,$nombre_rol,$descrip_rol)
	{
       $data = array(
            'rol' => $rol,
            'nombre_rol' => $nombre_rol,
            'descrip_rol' => $descrip_rol
        );
        return $this->db->insert('roles', $data);	
    }

}