<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users_model extends CI_Model{

	function __construct()
	{
	    // Call the Model constructor
	    parent::__construct();
	        
	}

	public function get_users($id_user = FALSE){
		if ( $id_user === FALSE ) {
			# si NO hay valor en el parametro, devuelve todos los registros en forma de array
			$query = $this->db->get('users');
			return $query->result_array();
		}
		# devuelve 1 registro tipo array
		$query = $this->db->get_where('users',array('id_user' => $id_user));
		return $query->row_array();
	}

	public function new_user($correo,$id_rol,$password,$terminos)
	{
		$this->db->limit(1);
		$query = $this->db->get_where('users',array('email_address' => $correo));
		if( $query->num_rows() > 0 ){
		    $id_user = 0;
		    return $id_user;
		}
		else {

			$data = array(
	            'email_address' => $correo,
	            'id_rol' => $id_rol,
	            'password' => sha1($password),
	            'terminos' => $terminos,
	            'fecha_creacion' => date('Y-m-d H:i:s')
	        );
	        $this->db->insert('users', $data);
	        $id_user = $this->db->insert_id();
	        // genera user id random para activacion
	   		return $id_user;
			
		}
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

	public function show($id_user = FALSE){
		if ( $id_user === FALSE ) {
			# si NO hay valor en el parametro, devuelve todos los registros en forma de array
			$query = $this->db->get('user');
			return $query->result_array();
		}
		# devuelve 1 registro tipo array
		$query = $this->db->get_where('users',array('id_user' => $id_user));
		//return $query->row_array();
		return $query->result();
	}

	public function update()
	{
       $data = array(
            'nombreCompleto' => $this->input->post('nombreCompleto'),
            'idpais' => $this->input->post('pais'),
            'domicilio1' => $this->input->post('domicilio1'),
            'domicilio2' => $this->input->post('domicilio2'),
            'idestado' => $this->input->post('estado'),
            'idmunicipio' => $this->input->post('municipio'),
            'cp' => $this->input->post('cp'),
            'telefono' => $this->input->post('telefono'),
            'ocupacion' => $this->input->post('ocupacion'),
            'grado' => $this->input->post('grado'),
            'institucion' => $this->input->post('institucion'),
            'especialidad' => $this->input->post('especialidad'),
            'areaensenanza' => $this->input->post('areaensenanza')
        );
        $this->db->where('id_user',$this->input->post('id_user'));
        $this->db->update('users', $data);
        return $this->input->post('id_user');
    }

	public function updatepwd(){
		if ( $this->input->post('id_user') === FALSE ) {
			# si NO hay valor en el parametro, devuelve todos los registros en forma de array
			die();
			//$query = $this->db->get('user');
			//return $query->result_array();
		}
		# devuelve 1 registro tipo array
			$data = array(
	            'password' => sha1($this->input->post('confirm_password'))
	        );
        $this->db->where('id_user',$this->input->post('id_user'));
        $this->db->update('users', $data);
        return $this->input->post('id_user');
	}


}