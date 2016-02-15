<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){/* esta funcion sobre escribe el CI_Controller y toma PHP nativo*/

		parent::__construct();// Se hacer fererencia al "parent" que en este caso el CI_Controller
		$this->load->library('session');
		#$this->load->library('encrypt');
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
						$data['template'] = 'login'; 
						$this->load->view('dynno-front-master/fail-page',$data);
						break;
				}
				redirect(base_url('admin/logout'),'refresh');
			}
				else {
					$data['template'] = 'login'; 
					$this->load->view('dynno-front-master/fail-page',$data);
				}
		}
	}

	public function logout(){
		$this->load->helper('cookie');
		$ci_sessions = $this->session->userdata('session_id');
		
		if (empty($ci_sessions) === FALSE)
		{
			$this->session->sess_destroy($ci_sessions);
			delete_cookie('ci_session');
			
		}
		redirect(base_url('welcome/index'));
	}

	public function forgot(){
		$data['template'] = 'forgot'; 
		$this->load->view('dynno-front-master/forgot-password',$data);
	}

	public function validaemailreset(){
	
		$email_address = $this->input->post('email_address');
		$clean_email_address = $this->security->xss_clean($email_address);
		$this->load->model('admin_model');
		$this->load->model('users_model');
		$this->load->model('activacion_model');
		$get_id = $this->admin_model->get_id($clean_email_address);
		
		$id_user = null;

		if ( isset($get_id) ) {

			foreach ($get_id as $key => $value) {
				$id_user = $value;
			}
		}		
		
		if ( isset($id_user) ) {

			$this->users_model->desactivate_id($id_user);
			$randkey = $this->activacion_model->gen_code($id_user);
			$url = base_url('admin/codigoresetpwd');		
			$this->notificacion_updatepwd($clean_email_address,$randkey,$url);		
			
			//$data['template'] = 'login';
			#$data['email_address'] = $clean_email_address;
			#$data['id_user'] = $id_user;
			#$data['randkey'] = $randkey;
			#$url = "http://ieureka.localhost/ieureka/users/activacion_cuenta/" . $randkey;
			
			#$data['url'] = $url;
			$this->load->view('dynno-front-master/success-page');			
		}
			else {
				$data['template'] = 'login';
				$this->load->view('dynno-front-master/fail-page',$data);			
		}
	}	

	public function codigoresetpwd(){
		$data['template'] = 'login'; 
		$this->load->view('dynno-front-master/codigoresetpwd',$data);
	}

	public function resetpassword(){
		$confirmpassword = $this->input->post('confirmpassword');
		$codigo = $this->input->post('codigo');
		$clean_confirmpassword = $this->security->xss_clean($confirmpassword);
		$clean_codigo = $this->security->xss_clean($codigo);
		$this->load->model('admin_model');
		$this->load->model('users_model');
		$this->load->model('activacion_model');
		$data['cuenta_activada'] = $this->activacion_model->verify_token($clean_codigo);
		if ( $data['cuenta_activada'] != FALSE ) {
			$id_activacion = $data['cuenta_activada']['id_activacion'];
			$id_user = $data['cuenta_activada']['id_user'];
			$this->users_model->changepwd($id_user,$confirmpassword);
			$activacion = $this->users_model->activate_id($id_user);
			#$get_user['get_user'] = $this->users_model->get_users($id_user);
			#$email_address = $get_user['get_user']['email_address'];
			if ($activacion === TRUE) {
				$this->activacion_model->borrar_token($id_activacion);
				$data['template'] = 'login'; 
				$this->load->view('dynno-front-master/success-page');
			}
		}
			else{
				$this->load->view('dynno-front-master/fail-page',$data);
			}
	}


	public function notificacion_updatepwd($correo = null, $codigo = null,$url = null){
		
		$this->load->library('email');

		$config['useragent'] = 'CodeIgniter';
		$config['protocol'] = 'smtp';
		//$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_host'] = 'ssl://xclf-hbvx.accessdomain.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '5';
		$config['wordwrap'] = TRUE;
		$config['wrapchars'] = '76';
		$config['smtp_user'] = 'luis@iceberg9.com';
		$config['smtp_pass'] = 'LGVa6773@01';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html';// text or html
		$config['validate'] = TRUE;
		$config['priority'] = '3';
		$config['crlf'] = "\r\n";

		$this->email->initialize($config);

		$this->email->from('no-responder@ieureka.com','Dynno.education System');
		$this->email->to($correo);
		$this->email->subject('Código para Cambio de Password');
		$this->email->message('
			<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
			<html>
			<head><title></title></head>
			<body>
			<style type="text/css">
			@font-face {
			font-family: "Lato"; font-style: normal; font-weight: 100; src: local("Lato Hairline"), local("Lato-Hairline"), url("https://fonts.gstatic.com/s/lato/v11/zJY4gsxBiSo5L7tNutxFNg.ttf") format("truetype");
			}
			@font-face {
			font-family: "Lato"; font-style: normal; font-weight: 300; src: local("Lato Light"), local("Lato-Light"), url("https://fonts.gstatic.com/s/lato/v11/nj47mAZe0mYUIySgfn0wpQ.ttf") format("truetype");
			}
			@font-face {
			font-family: "Lato"; font-style: normal; font-weight: 400; src: local("Lato Regular"), local("Lato-Regular"), url("https://fonts.gstatic.com/s/lato/v11/v0SdcGFAl2aezM9Vq_aFTQ.ttf") format("truetype");
			}
			@font-face {
			font-family: "Lato"; font-style: normal; font-weight: 700; src: local("Lato Bold"), local("Lato-Bold"), url("https://fonts.gstatic.com/s/lato/v11/DvlFBScY1r-FMtZSYIYoYw.ttf") format("truetype");
			}
			@font-face {
			font-family: "Lato"; font-style: normal; font-weight: 900; src: local("Lato Black"), local("Lato-Black"), url("https://fonts.gstatic.com/s/lato/v11/4cKlrioa77J2iqTqBgkRWg.ttf") format("truetype");
			}
			@font-face {
			font-family: "Lato"; font-style: italic; font-weight: 700; src: local("Lato Bold Italic"), local("Lato-BoldItalic"), url("https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYEKCWcynf_cDxXwCLxiixG1c.ttf") format("truetype");
			}
			a:hover {
			color: #ff6356;
			}
			</style>

			<div id="wrapper" style="font-family: "Lato", sans-serif; width: 100%;">
				<div id="header" style="-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; width: 100%; background: #252525; padding: 20px;">
					<img src="http://dev.iceberg9.com/ieureka/assets/images/logo-final@2x.png" style="height: auto; max-width: 145px;">
				</div>
				<div id="content" style="-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; padding: 30px 20px;">
					<h1 style="color: #788698; font-weight: 300;">Cambio de Contraseña</h1>
					<p><strong>Correo registrado:</strong> '.$correo.' </p>
					<p><strong>Codigo para cambiar reset el password:</strong> '.$codigo.' </p>
					<p><strong>URL de activaci&oacute;n:</strong> <a href="'.$url.'" target="_blank" style="color: #14d593; text-decoration: none;">'.$url.'</a></p>
					<p>Para cambiar la clave de acceso de su cuenta de click en la url de activaci&oacute;n. Despues ya podr&aacute;s iniciar sesi&oacute;n.</p>
					<p class="note">Favor de no responder este email ya que es un correo no supervisado.</p>
				</div>
				<div id="footer" style="-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; text-align: center; width: 100%; background: #252525; padding: 30px 0;" align="center">
					<a href="#" style="color: #14d593; text-decoration: none;">Dynno.education</a>
				</div>
			</div>

			</body>
			</html>
		
			
		');
		$this->email->send();
		#echo $this->email->print_debugger();
	}

	function register()
	{
		
		$this->load->model('users_model');
		$this->load->model('activacion_model');

		if(isset($_POST['register']) and $_POST['register'] == 'si')
		{
			
				$correo = $this->input->post('correo');
				$rol = $this->input->post('rol');
				$password = $this->input->post('password');
				$terminosycondiciones = $this->input->post('terminosycondiciones');

                //VERIFICA QUE NO EXISTA YA EL CORREO SINO CREA USUARIO Y DEVUELVE EL ID
				$id_user = $this->users_model->new_user($correo,$rol,$password,$terminosycondiciones);
				if ($id_user == 0) {
					# code...
					echo "EL CORREO <".$correo."> YA ESTA REGISTRADO EN EL SISTEMA";
					echo '<br>';
					echo 'PUEDE HACER LOGIN EN EL SIGUIENTE ENLACE:  ';
					echo anchor(base_url(), base_url(), 'class="link-class"');
					#header("Location: http://ieureka.localhost");
					#die();
					redirect(base_url('admin/login'),'refresh');
				}

				//GENERA TOKEN PARA EL NUEVO USUARIO Y SE ALMACENA EN LABD
				$randkey = $this->activacion_model->gen_code($id_user);				
				//ENVIA MAIL CON URL DE ACTIVACION 
				$url = base_url('users/activacion_cuenta')."/".$randkey;
				#$url = "http://ieureka.localhost/ieureka/users/activacion_cuenta/" . $randkey;
				$this->notificacion_new_user($correo,$url);
				$data['template'] = 'login'; 
				$this->load->view('dynno-front-master/success-page');

		}
	}

		public function notificacion_new_user($correo = null,$url = null){
		
		$this->load->library('email');

		$config['useragent'] = 'CodeIgniter';
		$config['protocol'] = 'smtp';
		//$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_host'] = 'ssl://xclf-hbvx.accessdomain.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '5';
		$config['wordwrap'] = TRUE;
		$config['wrapchars'] = '76';
		$config['smtp_user'] = 'luis@iceberg9.com';
		$config['smtp_pass'] = 'LGVa6773@01';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html';// text or html
		$config['validate'] = TRUE;
		$config['priority'] = '3';
		$config['crlf'] = "\r\n";

		$this->email->initialize($config);

		$this->email->from('no-responder@ieureka.com','Dynno.education -- Activacion de Nueva Cuenta');
		$this->email->to($correo);
		$this->email->subject('Activacion de Cuenta');
		$this->email->message('
			<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
			<html>
			<head><title></title></head>
			<body>
			<style type="text/css">
			@font-face {
			font-family: "Lato"; font-style: normal; font-weight: 100; src: local("Lato Hairline"), local("Lato-Hairline"), url("https://fonts.gstatic.com/s/lato/v11/zJY4gsxBiSo5L7tNutxFNg.ttf") format("truetype");
			}
			@font-face {
			font-family: "Lato"; font-style: normal; font-weight: 300; src: local("Lato Light"), local("Lato-Light"), url("https://fonts.gstatic.com/s/lato/v11/nj47mAZe0mYUIySgfn0wpQ.ttf") format("truetype");
			}
			@font-face {
			font-family: "Lato"; font-style: normal; font-weight: 400; src: local("Lato Regular"), local("Lato-Regular"), url("https://fonts.gstatic.com/s/lato/v11/v0SdcGFAl2aezM9Vq_aFTQ.ttf") format("truetype");
			}
			@font-face {
			font-family: "Lato"; font-style: normal; font-weight: 700; src: local("Lato Bold"), local("Lato-Bold"), url("https://fonts.gstatic.com/s/lato/v11/DvlFBScY1r-FMtZSYIYoYw.ttf") format("truetype");
			}
			@font-face {
			font-family: "Lato"; font-style: normal; font-weight: 900; src: local("Lato Black"), local("Lato-Black"), url("https://fonts.gstatic.com/s/lato/v11/4cKlrioa77J2iqTqBgkRWg.ttf") format("truetype");
			}
			@font-face {
			font-family: "Lato"; font-style: italic; font-weight: 700; src: local("Lato Bold Italic"), local("Lato-BoldItalic"), url("https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYEKCWcynf_cDxXwCLxiixG1c.ttf") format("truetype");
			}
			a:hover {
			color: #ff6356;
			}
			</style>

			<div id="wrapper" style="font-family: "Lato", sans-serif; width: 100%;">
				<div id="header" style="-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; width: 100%; background: #252525; padding: 20px;">
					<img src="http://dev.iceberg9.com/ieureka/assets/images/logo-final@2x.png" style="height: auto; max-width: 145px;">
				</div>
				<div id="content" style="-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; padding: 30px 20px;">
					<h1 style="color: #788698; font-weight: 300;">Activaci&oacute;n de cuenta</h1>
					<p><strong>Correo registrado:</strong> '.$correo.' </p>
					<p><strong>URL de activaci&oacute;n:</strong> <a href="'.$url.'" target="_blank" style="color: #14d593; text-decoration: none;">'.$url.'</a></p>
					<p>Para activar la cuenta de click en la url de activaci&oacute;n. Despues ya podr&aacute;s iniciar sesi&oacute;n.</p>
					<p class="note">Favor de no responder este email ya que es un correo no supervisado.</p>
				</div>
				<div id="footer" style="-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; text-align: center; width: 100%; background: #252525; padding: 30px 0;" align="center">
					<a href="#" style="color: #14d593; text-decoration: none;">Dynno.education</a>
				</div>
			</div>

			</body>
			</html>
		
			
		');
		$this->email->send();
		//echo $this->email->print_debugger();
	}


}
