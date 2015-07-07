<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

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
	public function revisor()
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
	public function autor()
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
}

/* End of file member.php */
/* Location: ./application/controllers/member.php */