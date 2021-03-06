<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller {
	function __construct(){/* esta funcion sobre escribe el CI_Controller y toma PHP nativo*/

		parent::__construct();// Se hacer fererencia al "parent" que en este caso el CI_Controller
		$this->load->library('session');
		#$this->load->library('encrypt');
		$this->load->model('users_model');
		$this->load->model('activacion_model');
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
			//$this->load->view('navbar');
			$this->load->view('registro_user_view',$data);
			$this->load->view('footer');
		}
	}

	public function login()
	{
		$ci_session = $this->session->userdata('user_data');
		if (empty($ci_session)===FALSE){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$data['all_userdata'] = $this->session->all_userdata();
			$this->load->view('header');
			//$this->load->view('navbar');
			$this->load->view('login_view',$data);
			$this->load->view('footer');
		}
	}

	public function desactiva_cuenta($token)
	{
		if ( empty($token) === '' ){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$data['cuenta_activada'] = $this->activacion_model->verify_token($token);
			if ( $data['cuenta_activada'] != FALSE ) {
				# code...
				$id_activacion = $data['cuenta_activada']['id_activacion'];
				$id_user = $data['cuenta_activada']['id_user'];
				$activacion = $this->users_model->desactivate_id($id_user);
				if ($activacion === TRUE) {
					# code...
					echo "CUENTA DESACTIVADA !!!";
					echo "<br>";
					echo "YA PUEDE HACER LOGIN AL SISTEMA";
					//$this->index();
					echo anchor('http://dev.iceberg9.com/ieureka', 'http://dev.iceberg9.com/ieureka', 'class="link-class"');

					#$this->activacion_model->borrar_token($id_activacion);
					//redirect(base_url('users/login'),'refresh');
					//header("Location: http://dev.iceberg9.com/ieureka/");
				}
			}else{
				echo "ERROR, CONTACTE AL ADMINISTRADOR";
				//$this->index();
				echo '<br>';
				echo anchor('http://dev.iceberg9.com/ieureka', 'http://dev.iceberg9.com/ieureka', 'class="link-class"');
			}
		}
	}


	public function activacion_cuenta($token)
	{
		if ( empty($token) === '' ){
			redirect(base_url('admin/logout'));
		}
			else
			{
				$data['cuenta_activada'] = $this->activacion_model->verify_token($token);
				if ( $data['cuenta_activada'] != FALSE ) {
					# code...
					$id_activacion = $data['cuenta_activada']['id_activacion'];
					$id_user = $data['cuenta_activada']['id_user'];
					$activacion = $this->users_model->activate_id($id_user);
					if ($activacion === TRUE) {
						# code...
						$this->activacion_model->borrar_token($id_activacion);
						$data['template'] = 'login'; 
						$this->load->view('dynno-front-master/success-page');
					}
				}
					else{
						$this->load->view('dynno-front-master/fail-page');
				}
			}
	}

	function nuevo_usuario()
	{
		if(isset($_POST['grabar']) && $_POST['grabar'] == 'si')
		{
			//SI EXISTE EL CAMPO OCULTO LLAMADO GRABAR CREAMOS LAS VALIDACIONES
			//$this->form_validation->set_rules('nom','Nombre','required|trim|xss_clean');
			//$this->form_validation->set_rules('correo','Correo','required|valid_email|trim|xss_clean');
			//$this->form_validation->set_rules('rol','Rol','required|trim|xss_clean');
			//$this->form_validation->set_rules('password','Password','required|trim|xss_clean|md5');
			
			//SI HAY ALGÚNA REGLA DE LAS ANTERIORES QUE NO SE CUMPLE MOSTRAMOS EL MENSAJE
			//EL COMODÍN %s SUSTITUYE LOS NOMBRES QUE LE HEMOS DADO ANTERIORMENTE, EJEMPLO, 
			//SI EL NOMBRE ESTÁ VACÍO NOS DIRÍA, EL NOMBRE ES REQUERIDO, EL COMODÍN %s 
			//SERÁ SUSTITUIDO POR EL NOMBRE DEL CAMPO
			//$this->form_validation->set_message('required', 'El %s es requerido');
	        //$this->form_validation->set_message('valid_email', 'El %s no es válido');
			
			//SI ALGO NO HA IDO BIEN NOS DEVOLVERÁ AL INDEX MOSTRANDO LOS ERRORES
			//if($this->form_validation->run()==FALSE)
			//{
			//	$this->index();
			//}else{
			//EN CASO CONTRARIO PROCESAMOS LOS DATOS
			//echo $nombre = $this->input->post('nom');

			
				echo "Correo => ";
				echo $correo = $this->input->post('correo');
				echo "<br>";
				echo "Rol => ";
				echo $rol = $this->input->post('rol');
				switch ($rol) {
					case 'creador':
						$id_rol = 2;
						break;

					case 'customer':
						$id_rol = 1;
						break;
					
					default:
						$id_rol = null;
						break;
				}
				
				$password = $this->input->post('password');
				echo "<br>";
				echo "TyC => ";
				echo $terminos = $this->input->post('notificacion');
				echo "<br>";


                //VERIFICA QUE NO EXISTA YA EL CORREO SINO CREA USUARIO Y DEVUELVE EL ID
				$id_user = $this->users_model->new_user($correo,$id_rol,$password,$terminos);
				if ($id_user == 0) {
					# code...
					echo "EL CORREO <".$correo."> YA ESTA REGISTRADO EN EL SISTEMA";
					echo '<br>';
					echo 'PUEDE HACER LOGIN EN EL SIGUIENTE ENLACE:  ';
					echo anchor('http://dev.iceberg9.com/ieureka', 'http://dev.iceberg9.com/ieureka', 'class="link-class"');
					//header("Location: http://dev.iceberg9.com/ieureka/");
					die();
					//redirect(base_url('users/login'),'refresh');
				}


				//GENERA TOKEN PARA EL NUEVO USUARIO Y SE ALMACENA EN LABD
				$randkey = $this->activacion_model->gen_code($id_user);				
				//ENVIA MAIL CON URL DE ACTIVACION 
				$url = "http://dev.iceberg9.com/ieureka/users/activacion_cuenta/" . $randkey;
				//$url = "http://localhost/ieureka/users/activacion_cuenta/" . $randkey;
				echo "url de validacion => " . $url;
				echo "<br>";
				echo "Revisa tu Email ó dale Click al siguiente link:";
				echo "<br>";
				$this->notificacion_new_user($correo,$id_rol,$password,$terminos,$url);

			//}
			
			echo anchor($url, $url, 'class="link-class"');

		}
		die;
	}

	public function edit($id_user){
		$ci_session = $this->input->cookie('ci_session');
		if (empty($ci_session)===TRUE){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$data['all_userdata'] = $this->session->all_userdata();
			$this->load->model('users_model');
			$this->load->model('paises_model');
			$this->load->model('estados_model');
			$this->load->model('municipios_model');
			$data['perfil_data'] = $this->users_model->show($id_user);
			$data['paises'] = $this->paises_model->get_all();
			$data['estados'] = $this->estados_model->get_all();
			$data['municipios'] = $this->municipios_model->get_all();
			$this->load->view('header');
			$this->load->view('navbarautor');
			$this->load->view('users/edit',$data);
			$this->load->view('footer');
		}
	}	
	public function update(){
		$ci_session = $this->input->cookie('ci_session');
		if (empty($ci_session)===TRUE){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$data['all_userdata'] = $this->session->all_userdata();
			$this->load->model('users_model');			
			$id_user = $this->users_model->update();
			redirect(base_url("users/show/".$id_user.""));
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
			$this->load->model('users_model');
			$data['perfil_data'] = $this->users_model->show($id_user);
						$this->load->model('obras_model');
			$data['obras_data'] = $this->obras_model->show($id_user);
			#$this->load->view('header');
			#$this->load->view('navbarautor');
			#$this->load->view('users/show',$data);
			$this->load->view('dynno-front-master/admin-account-resumen',$data);
			#$this->load->view('footer');
		}
	}	
	public function changepwd($id_user){
		$ci_session = $this->input->cookie('ci_session');
		if (empty($ci_session)===TRUE){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$data['all_userdata'] = $this->session->all_userdata();
			$this->load->model('users_model');
			$data['perfil_data'] = $this->users_model->show($id_user);
			//$this->load->model('obras_model');
			//$data['obras_data'] = $this->obras_model->show($id_user);
			$this->load->view('header');
			$this->load->view('navbarautor');
			$this->load->view('users/changepwd',$data);
			$this->load->view('footer');
		}
	}
	public function updatepwd(){
		
			//$data['all_userdata'] = $this->session->all_userdata();
			$correo = $this->session->userdata('username');
			$this->load->model('users_model');			
			$id_user = $this->users_model->updatepwd();
			//$this->notificacion_updatepwd($correo);
			redirect(base_url('admin/logout'),'refresh');
		
	}	

	public function notificacion_updatepwd($correo = 'UNO'){
		
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
		$config['mailtype'] = 'text';// or html
		$config['validate'] = TRUE;
		$config['priority'] = '3';
		$config['crlf'] = "\r\n";

		$this->email->initialize($config);

		$this->email->from('no-responder@ieureka.com','iEureka -- Cambio de Password');
		$this->email->to($correo);
		$this->email->subject('Cambio de Password');
		$this->email->message('
			Cambio de Password iEureka EXITOSO!
			
			Ingrese nuevamente a iEureka con la nueva clave de acceso
			
			Nota: Favor de no responder a este correo ya que es un correo no supervisado.
		');
		$this->email->send();
		//echo $this->email->print_debugger();
	}
	public function notificacion_new_user($correo = 'UNO',$id_rol = 'DOS',$password = 'TRES',$terminos = 'CUATRO',$url = 'CINCO'){
		
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
		$config['mailtype'] = 'text';// or html
		$config['validate'] = TRUE;
		$config['priority'] = '3';
		$config['crlf'] = "\r\n";

		$this->email->initialize($config);

		$this->email->from('no-responder@ieureka.com','iEureka -- Activacion de Nueva Cuenta');
		$this->email->to($correo);
		$this->email->subject('Activacion de Cuenta');
		$this->email->message('
			Activacion de Cuenta iEureka
			Correo Registrado.- '.$correo.'
			URL de Activacion.- '.$url.'
			Para activar la cuenta dé click en la url de activacion.
			Despues ya podra hacer Login

			Nota: Favor de no responder a este correo ya que es un correo no supervisado.
		');
		$this->email->send();
		//echo $this->email->print_debugger();
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */