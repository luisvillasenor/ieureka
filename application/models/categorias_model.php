<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Categorias_model extends CI_Model{

	function __construct()
	{
	    // Call the Model constructor
	    parent::__construct();
	        
	}

	public function get_all($id = FALSE){
		if ( $id == FALSE ) {
			# si NO hay valor en el parametro, devuelve todos los registros en forma de array
			$query = $this->db->get('categorias');
			return $query->result();
		}
		# devuelve 1 registro tipo array
		$query = $this->db->get_where('categorias',array('id' => $id));
		return $query->row_array();
	}


}