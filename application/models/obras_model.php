<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Obras_model extends CI_Model{

	function __construct()
	{
	    // Call the Model constructor
	    parent::__construct();
	        
	}

    public function show($id_user = FALSE){
        if ( $id_user === FALSE ) {
            # si NO hay valor en el parametro, devuelve todos los registros en forma de array
            $query = $this->db->get('obras');
            return $query->result_array();
        }
        # devuelve 1 registro tipo array
        $query = $this->db->get_where('obras',array('id_user' => $id_user));
        //return $query->row_array();
        return $query->result();
    }

    public function quick_update()
    {
       $data = array(            
            'titulo' => $this->input->post('titulo'),
            'descripcion' => $this->input->post('descripcion'),
            'borrador' => $this->input->post('borrador')
        );
        $this->db->where('id_obra',$this->input->post('id_obra'));
        $this->db->update('obras', $data);
        $id_user = $this->input->post('id_user');
        return $id_user;
    }

    public function update($id_obra)
    {
       $data = array(
            'derechos' => $this->input->post('derechos'),
            'categoria' => $this->input->post('categoria'),
            'subcategoria' => $this->input->post('subcategoria'),
            'palabras' => $this->input->post('palabras'),
            'lanzamiento' => $this->input->post('lanzamiento'),
            'portada' => $this->input->post('portada'),
            'archivo' => $this->input->post('archivo')
        );
        $this->db->where('id_obra',$this->input->post('id_obra'));
        $this->db->update('obras', $data);
        return $id_obra;
    }

	public function create()
	{
       $data = array(
            'id_user' => $this->input->post('id_user'),
            'titulo' => $this->input->post('titulo'),
            'descripcion' => $this->input->post('descripcion'),
            'borrador' => $this->input->post('borrador'),
            'fecha_alta' => date('Y-m-d H:i:s')
        );
        $this->db->insert('obras', $data);
        $id_obra = $this->db->insert_id();
        return $id_obra;
    }

    public function edit($id_obra){
        # devuelve 1 registro tipo array
        $query = $this->db->get_where('obras',array('id_obra' => $id_obra));
        //return $query->row_array();
        return $query->result();
    }

}