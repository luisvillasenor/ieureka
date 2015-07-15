<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Obras_model extends CI_Model{

	function __construct()
	{
	    // Call the Model constructor
	    parent::__construct();
	        
	}

	function new_title($nombre,$correo,$rol,$password)
	{
       $data = array(
            'nombreCompleto' => $nombre,
            'email_address' => $correo,
            'rol' => $rol,
            'password' => $password,
            'status' => 1
        );
        return $this->db->insert('obras', $data);	
    }

}