<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller {
	function __construct(){/* esta funcion sobre escribe el CI_Controller y toma PHP nativo*/

		parent::__construct();// Se hacer fererencia al "parent" que en este caso el CI_Controller
		$this->load->library('session');
		$this->load->library('encrypt');
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
					echo "CUENTA ACTIVADA !!!";
					echo "<br>";
					$this->index();

					$this->activacion_model->borrar_token($id_activacion);
//header("Location: http://dev.iceberg9.com/ieureka/");
				}
			}else{
				echo "ERROR";
$this->index();
			}
		}
	}

	function nuevo_usuario()
	{
		if(isset($_POST['grabar']) and $_POST['grabar'] == 'si')
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
				echo $id_rol = $this->input->post('rol');
				echo "<br>";
				echo "Password => ";
				echo $password = $this->input->post('password');
				echo "<br>";
				echo $terminos = $this->input->post('terminos');
				echo "<br>";
                //CREA USUARIO Y DEVUELVE EL ID
				$id_user = $this->users_model->new_user($correo,$id_rol,$password);
				//GENERA TOKEN PARA EL NUEVO USUARIO Y SE ALMACENA EN LABD
				$randkey = $this->activacion_model->gen_code($id_user);				
				//ENVIA MAIL CON URL DE ACTIVACION 
				$url = "http://dev.iceberg9.com/ieureka/users/activacion_cuenta/" . $randkey;
				echo "url de validacion => " . $url;
				echo "<br>";				

				$this->notificacion_new_user($correo,$id_rol,$password,$terminos,$url);

			//}
echo anchor($url, $url, 'class="link-class"');

		}
		die;
	}

	public function notificacion_new_user($correo = 'UNO',$id_rol = 'DOS',$password = 'TRES',$terminos = 'CUATRO',$url = 'CINCO'){
		
		$this->load->library('email');

		$config['useragent'] = 'CodeIgniter';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '5';
		$config['wordwrap'] = TRUE;
		$config['wrapchars'] = '76';
		$config['smtp_user'] = 'sectureags@gmail.com';
		$config['smtp_pass'] = 'sECTUREd1';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'text';// or html
		$config['validate'] = TRUE;
		$config['priority'] = '3';
		$config['crlf'] = "\r\n";

		$this->email->initialize($config);

		$this->email->from('no-responder@ejemplo.com','iEureka System');
		$this->email->to($correo);
		$this->email->subject('Activacion de su Cuenta');
		$this->email->message('
			Activacion de Cuenta iEureka
			Correo Registrado.- '.$correo.'
			URL de Activacion.- '.$url.'
			Para activar la cuenta de click en la url de activacion.

		');
		$this->email->send();

		//echo $this->email->print_debugger();
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */