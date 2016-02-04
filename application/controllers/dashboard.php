<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){/* esta funcion sobre escribe el CI_Controller y toma PHP nativo*/

		parent::__construct();// Se hacer fererencia al "parent" que en este caso el CI_Controller
		$this->load->library('session');
		$this->load->library('encrypt');
	}

	public function index()
	{
		$user_data = $this->session->userdata('user_data');
		if ( empty($user_data) ){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$data['all_userdata'] = $this->session->all_userdata();
			$this->load->view('header');
			$this->load->view('dashboard_view',$data);
			$this->load->view('footer');
		}
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */