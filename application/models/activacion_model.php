<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Activacion_model extends CI_Model{

	function __construct()
	{
	    // Call the Model constructor
	    parent::__construct();
	        
	}

	public function verify_token($token)
	{
		$this->db->where('codigo',$token);
        $this->db->limit(1);
        $query = $this->db->get('activacion');
        if( $query->num_rows() > 0 ){
		    return $query->row_array();
		}
		else {
			return FALSE;
		}
    }

	public function gen_code($id_user)
	{
		$key = base64_encode(openssl_random_pseudo_bytes(32));
		$rand = trim($key);
		$randkey = str_replace("/", $id_user, $rand);
		$randkey = str_replace("+", $id_user, $randkey);
		$randkey = str_replace("=", $id_user, $randkey);
		$data = array(
            'codigo' => $randkey,
            'fecha_caduca' => date('Y-m-d', strtotime('+5 day')),
            'id_user' => $id_user
        );
		$this->db->insert('activacion', $data);
        return $randkey;
    }

	public function borrar_token($id_activacion)
	{
		$this->db->where('id_activacion',$id_activacion);
		$this->db->delete('activacion');
    }

}