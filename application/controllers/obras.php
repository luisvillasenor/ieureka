<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Obras extends CI_Controller {

	function __construct(){/* esta funcion sobre escribe el CI_Controller y toma PHP nativo*/

		parent::__construct();// Se hacer fererencia al "parent" que en este caso el CI_Controller
		$this->load->library('session');
		$this->load->library('encrypt');
		$this->load->model('obras_model');
	}

	public function create(){
		$ci_session = $this->input->cookie('ci_session');
		if (empty($ci_session)===TRUE){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$data['all_userdata'] = $this->session->all_userdata();
			$this->load->model('obras_model');			
			$id_obra = $this->obras_model->create();
			$id_user = $this->session->userdata('id_user');
			redirect(base_url("obras/show/".$id_user.""));
		}
	}
	public function show($id_user){
		$ci_session = $this->input->cookie('ci_session');
		if (empty($ci_session)===TRUE){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$data['all_userdata'] = $this->session->all_userdata();
			$this->load->model('obras_model');
			$data['obras_data'] = $this->obras_model->show($id_user);
			$this->load->view('header');
			$this->load->view('navbarautor');
			$this->load->view('obras/show',$data);
			$this->load->view('footer');
		}
	}	

	public function edit($id_obra,$id_user){
		$ci_session = $this->input->cookie('ci_session');
		if (empty($ci_session)===TRUE){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$data['all_userdata'] = $this->session->all_userdata();
			$this->load->model('obras_model');
			$data['obras_data'] = $this->obras_model->show($id_user);
			$data['obra_data'] = $this->obras_model->edit($id_obra);
			$this->load->view('header');
			$this->load->view('navbarautor');
			$this->load->view('obras/edit',$data);
			$this->load->view('footer');
		}
	}	

	public function quick_update(){
		$ci_session = $this->input->cookie('ci_session');
		if (empty($ci_session)===TRUE){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$data['all_userdata'] = $this->session->all_userdata();
			$this->load->model('obras_model');			
			$id_user = $this->obras_model->quick_update();
			redirect(base_url("obras/show/".$id_user.""));
		}
	}
	public function index()
	{
		$ci_session = $this->session->userdata('user_data');
		if (empty($ci_session)===FALSE){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$data['all_userdata'] = $this->session->all_userdata();
			$this->load->view('header');
			$this->load->view('navbarautor');
			$this->load->view('obras_autor_view',$data);
			$this->load->view('footer');
		}
	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */