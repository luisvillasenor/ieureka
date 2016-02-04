<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {

	function __construct(){/* esta funcion sobre escribe el CI_Controller y toma PHP nativo*/

		parent::__construct();// Se hacer fererencia al "parent" que en este caso el CI_Controller
		$this->load->library('session');
		$this->load->library('encrypt');
	}

	public function index()
	{
		$ci_session = $this->input->cookie('ci_session');
		if (empty($ci_session)===TRUE){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$data['all_userdata'] = $this->session->all_userdata();
			$this->load->view('header');
			$this->load->view('navbar');
			$this->load->view('welcome',$data);
			$this->load->view('footer');
		}
	}

	public function create(){
		$ci_session = $this->input->cookie('ci_session');
		if (empty($ci_session)===TRUE){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$data['all_userdata'] = $this->session->all_userdata();
			$this->load->model('perfil_model');			
			$id_perfil = $this->perfil_model->insert();
			redirect(base_url("perfil/show/".$id_perfil.""));
		}
	}
	public function show($id_perfil){
		$ci_session = $this->input->cookie('ci_session');
		if (empty($ci_session)===TRUE){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$data['all_userdata'] = $this->session->all_userdata();
			$this->load->model('perfil_model');
			$data['perfil_data'] = $this->perfil_model->show($id_perfil);
			$this->load->view('header');
			$this->load->view('navbarautor');
			$this->load->view('perfil/show',$data);
			$this->load->view('footer');
		}
	}

	//public function new(){}
	//public function edit(){}
	//public function update(){}
	//public function destroy(){}


}

/* End of file member.php */
/* Location: ./application/controllers/perfil.php */