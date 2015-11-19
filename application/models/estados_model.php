<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Estados_model extends CI_Model{

	function __construct()
	{
	    // Call the Model constructor
	    parent::__construct();
	        
	}

	public function get_all($idestado = FALSE){
		if ( $idestado === FALSE ) {
			# si NO hay valor en el parametro, devuelve todos los registros en forma de array
			$query = $this->db->get('estados');
			return $query->result();
		}
		# devuelve 1 registro tipo array
		$query = $this->db->get_where('estados',array('idestado' => $idestado));
		return $query->row_array();
	}


}