<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){/* esta funcion sobre escribe el CI_Controller y toma PHP nativo*/

		parent::__construct();// Se hacer fererencia al "parent" que en este caso el CI_Controller
		$this->load->library('session');
		$this->load->library('encrypt');
	}
	
	public function login(){
		
		//echo sha1('test01'); die();// Esta funcion te regresa el texto encriptado. Se usa tener un password encriptado*/
		$ci_session = $this->session->userdata('user_data');
		if ( empty($ci_session)===FALSE){
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
				// Actualiza fecha de ultimo acceso
				$this->admin_model->up_date($clean_email_address);

				$rol3 = $this->admin_model->verify_rol($clean_email_address,$clean_password);
				
				foreach ($rol3 as $key3 => $value3) {
					if ($key3 == 'id_user') {
						# code...
						$id_user = $value3;
					}
					if ($key3 == 'id_rol') {
						# code...
						$clean_rol = $value3;
					}
				}	
				
				switch ($clean_rol) {
/*					case 'Superadmin':
						$newdata = array(
		                   'username'  => $clean_email_address,
		                   'rol'       => $clean_rol,
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
		                   'rol'       => $clean_rol,
		                   'status'    => $isActive,
		                   'logged_in' => TRUE
						);
						$this->session->set_userdata($newdata);
						$this->input->set_cookie($newdata);
						redirect(base_url('dashboard/'));
						break;
*/					case '1': // USUARIO
						$newdata = array(
		                   'id_user'   => $id_user,
		                   'username'  => $clean_email_address,
		                   'id_rol'    => $clean_rol,
		                   'status'    => $isActive,
		                   'logged_in' => TRUE
						);
						$this->session->set_userdata($newdata);
						$this->input->set_cookie($newdata);
						redirect(base_url("users/show/".$id_user.""));
						break;
					case '2': // CREADOR
						$newdata = array(
		                   'id_user'   => $id_user,
		                   'username'  => $clean_email_address,
		                   'id_rol'    => $clean_rol,
		                   'status'    => $isActive,
		                   'logged_in' => TRUE
						);
						$this->session->set_userdata($newdata);
						$this->input->set_cookie($newdata);
						redirect(base_url("users/show/".$id_user.""));
						break;
/*					case 'Revisor':
						$newdata = array(
		                   'username'  => $clean_email_address,
		                   'rol'       => $clean_rol,
		                   'status'    => $isActive,
		                   'logged_in' => TRUE
						);
						$this->session->set_userdata($newdata);
						$this->input->set_cookie($newdata);
						redirect(base_url('member/revisor'));
						break;
*/					default:
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
				redirect(base_url('admin/logout'),'refresh');
			} else {
				echo '<div class="alert alert-block alert-error span10">';
				echo '<h4 class="alert-heading">UPSs ! Parece ser que Usted no es Miembro de este Sitio ó alguno de sus Datos de Inicio de Sesion al Sistema no es Incorrecto. !</h4>';
				echo '<p>';
				echo 'Por favor solicite ayuda al administrador del sitio';
				echo '</p>';
				echo '</div>';
				//redirect(base_url('admin/logout'),'refresh');
				//header("Location: http://dev.iceberg9.com/ieureka/");
				}
		}
		//redirect(base_url('admin/logout'));
	}

	public function logout(){
		$this->load->helper('cookie');
		$ci_sessions = $this->session->userdata('session_id');
		
		if (empty($ci_sessions) === FALSE)
		{
			$this->session->sess_destroy($ci_sessions);
			delete_cookie('ci_session');
			
		}
		redirect(base_url());
	}


}
