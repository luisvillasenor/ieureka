<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Paises_model extends CI_Model{

	function __construct()
	{
	    // Call the Model constructor
	    parent::__construct();
	        
	}

	public function get_all($idpais = FALSE){
		if ( $idpais === FALSE ) {
			# si NO hay valor en el parametro, devuelve todos los registros en forma de array
			$query = $this->db->get('paises');
			return $query->result();
		}
		# devuelve 1 registro tipo array
		$query = $this->db->get_where('paises',array('idpais' => $idpais));
		return $query->row_array();
	}


}