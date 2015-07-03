<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		//session_start();
		//$msg = 'My secret message';
		//$encrypted_string = $this->encrypt->encode($msg);
	}
	
	public function login(){
		
		//echo sha1('test01'); die();// Esta funcion te regresa el texto encriptado. Se usa tener un password encriptado*/
		$ci_session = $this->input->cookie('ci_session');
		if ( ! empty($ci_session)===TRUE){
			redirect(base_url('admin/logout'),'refresh');
		}

		//$this->load->library('form_validation');
		$this->form_validation->set_rules('email_address', 'Dirección de Email', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');

		if ( $this->form_validation->run() !== false ) {
			// Esta validacion paso OK. Obtenido de la BD

			$this->load->model('admin_model');
			// Security Layer
			// Filtering POST DATA
			$email_address = $this->input->post('email_address');
			$clean_email_address = $this->security->xss_clean($email_address);
			
			$password = $this->input->post('password');
			$clean_password = $this->security->xss_clean($password);	

			$res = $this->admin_model->verify_user($clean_email_address,$clean_password);
			// Verifica Usuario - Regresa TRUE o FALSE
			$isActive = $this->admin_model->verify_active($clean_email_address);
			// Verifica si el Usuario esta Activo - Regresa TRUE o FALSE
			if (($res == TRUE) AND ($isActive == TRUE)){
			// Si hay una cuenta registrada en el sistema y Activa
				
				$rol2['verify_rol2'] = $this->admin_model->verify_rol($clean_email_address,$clean_password);
				foreach ($rol2['verify_rol2'] as $key2 => $value2) {
					# code...
					if ($key2 == 'geo') {
						# code...
						$geo = $value2;
					}
				} 

				// Actualiza fecha de ultimo acceso
				$this->admin_model->up_date($clean_email_address);

				$rol3 = $this->admin_model->verify_rol($clean_email_address,$clean_password);
				
				foreach ($rol3 as $key3 => $value3) {
					if ($key3 == 'rol') {
						# code...
						$clean_rol = $value3;
					}
				}	
				
				switch ($clean_rol) {
					case 'Superadmin':
						$newdata = array(
		                   'username'  => $clean_email_address,
		                   'rol'       => 'Superadmin',
		                   'status'    => $isActive,
		                   'logged_in' => TRUE
						);
						$this->session->set_userdata($newdata);
						$this->input->set_cookie($newdata);
						redirect(base_url('dashboard/'));
						break;
					case 'Administrador':
						$newdata = array(
		                   'username'  => $clean_email_address,
		                   'rol'       => 'Administrador',
		                   'status'    => $isActive,
		                   'logged_in' => TRUE
						);
						$this->session->set_userdata($newdata);
						$this->input->set_cookie($newdata);
						redirect(base_url('dashboard/'));
						break;
					case 'Autor':
						$newdata = array(
		                   'username'  => $clean_email_address,
		                   'rol'       => 'Capturista',
		                   'status'    => $isActive,
		                   'logged_in' => TRUE
						);
						$this->session->set_userdata($newdata);
						$this->input->set_cookie($newdata);
						redirect(base_url('member/'));
						break;
					case 'Revisor':
						$newdata = array(
		                   'username'  => $clean_email_address,
		                   'rol'       => 'Capturista',
		                   'status'    => $isActive,
		                   'logged_in' => TRUE
						);
						$this->session->set_userdata($newdata);
						$this->input->set_cookie($newdata);
						redirect(base_url('member/'));
						break;
					default:
						echo '<div class="alert alert-block alert-error span10">';
						echo '<button type="button" class="close" data-dismiss="alert">x</button>';
						echo '<h4 class="alert-heading">Ups ! Parece ser que Usted no es Miembro de este Sitio !</h4>';
						echo '<p>';
						echo 'Por favor solicite ayuda al administrador del sitio';
						echo '</p>';
						echo '<p>';
						echo '<a class="btn btn-danger" href="'.base_url('admin/logout');'">Cerrar</a>';
						echo '</p>';
						echo '</div>';
						//$this->logout();
						break;
				}
				
			} else {
				echo '<div class="alert alert-block alert-error span10">';
				echo '<h4 class="alert-heading">Ups ! Parece ser que Usted no es Miembro de este Sitio ó alguno de sus Datos de Inicio de Sesion al Sistema no es Incorrecto. !</h4>';
				echo '<p>';
				echo 'Por favor solicite ayuda al administrador del sitio';
				echo '</p>';
				echo '</div>';
				redirect(base_url('admin/logout'));
				}
		}
		//redirect(base_url('admin/logout'));
	}

	public function logout(){
		$ci_session = $this->input->cookie('ci_session');
		if (empty($ci_session)===FALSE)
		{
			$newdata = array(
               'username'  => '',
               'rol'       => '',
               'status'    => '',
               'logged_in' => FALSE
			);
			$this->session->unset_userdata($newdata);
			$this->session->sess_destroy();
		}
		redirect(base_url());
	}





}

/* End of file welcome.php */
/* Location: ./application/controllers/admin.php */