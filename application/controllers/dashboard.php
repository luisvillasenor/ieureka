<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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
			$this->load->view('dashboard_view',$data);
			$this->load->view('footer');
		}
	}

/*
	public function top10_dependencia()
	{
		//$recurso = $this->uri->segment(2);
		// obtiene el controler y metodo del segmento URL
		$acceso = $this->permisos_model->verify_componente(ROL,COMPONENTE);
		$resource = $this->permisos_model->verify_recursos(ROL,COMPONENTE,$recurso);
		if ($acceso == true AND $resource == true) {
 		  	$data['componentes'] = $this->permisos_model->componentes(ROL);
 		  	$this->load->model('solicitudes_model');
			$this->load->model('dependencias_model');
 		  	$data['get_dependencias'] = $this->dependencias_model->get_dependencias();
 		  	$data['top10_dependencia'] = $this->solicitudes_model->top10_dependencia();
 		  	$this->load->view('header');
			$this->load->view('dashboard_top10_dependencia',$data);
			$this->load->view('footer');				
		} else { die("You do not have permissions to read this resource"); }
	}
*/	



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */