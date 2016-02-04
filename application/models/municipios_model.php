<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Municipios_model extends CI_Model{

	function __construct()
	{
	    // Call the Model constructor
	    parent::__construct();
	        
	}

	public function get_all($idmunicipio = FALSE){
		if ( $idmunicipio === FALSE ) {
			# si NO hay valor en el parametro, devuelve todos los registros en forma de array
			$query = $this->db->get('municipios');
			return $query->result();
		}
		# devuelve 1 registro tipo array
		$query = $this->db->get_where('municipios',array('idmunicipio' => $idmunicipio));
		return $query->row_array();
	}


}