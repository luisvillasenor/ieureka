<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){/* esta funcion sobre escribe el CI_Controller y toma PHP nativo*/

		parent::__construct();// Se hacer fererencia al "parent" que en este caso el CI_Controller
	}

	public function index()
	{
		$data['template'] = 'login'; 
		$this->load->view('dynno-front-master/login',$data);
		
	}

public function indexOld()
	{
		redirect(base_url("admin/login"));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */